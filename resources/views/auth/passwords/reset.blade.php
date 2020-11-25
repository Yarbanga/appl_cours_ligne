@extends('layouts.template')

@section('contenu')

@include('partials.header')
</div>


<div  class="col-lg-8" >
                
                    <form class="mt-5 m-2" method="POST" action="{{ route('password.update') }}">
                        @csrf
                        <p class="h1 text-center mb-5">Changer le mot de passe</p>
                        <input type="hidden" name="token" value="{{ $token }}">

                        <div class="form-group">
                            
                                <input id="email" type="email" aria-describedby="emailHelp" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            
                        </div>

                        <div class="form-group">
                          
                                <input id="password" placeholder="Nouveau mot de passe" aria-describedby="emailHelp" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
            
                        </div>

                        <div class="form-group">
                                <input id="password-confirm" placeholder="Entrer encore le mot de passe" aria-describedby="emailHelp" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">                            
                        </div> <br>

                        <div class="text-center">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Changer le mot de passe') }}
                                </button>
                        </div>
                    </form>
                    
                    @include('partials.basecontact')
                    @include('partials.jumbotron')
                    @include('partials.footer')
@endsection
