@extends('layouts.template')

@section('contenu')

@include('partials.header')
</div>

<div  class="col-lg-8" >

                    <form class="mt-5 m-2" method="POST" action="{{ route('admin.login') }}">
                        @csrf
                        <p class="h1 text-center mb-5">Administrateur</p>

                        <div class="form-group">
                            {{-- <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label> --}}

                            
                                <input id="email" type="email" placeholder="Adresse Email" class="form-control @error('email') is-invalid @enderror" aria-describedby="emailHelp" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            
                        </div>

                        <div class="form-group">
                            {{-- <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label> --}}

                            <div>
                                <input id="password" type="password" placeholder="Mot de passe" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        ( mot de passe oublié ? )
                                    </a>
                                @endif
                        </div>

                        {{-- <div class="form-group">
                            <div >
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 offset-md-4">
                                {{-- <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button> 

                                
                            </div>
                        </div>--}}

                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">Connexion</button>
                        <a href="{{ route ('register') }}" class="btn btn-primary" style="color:#fff;">S'inscrire</a>
                            
                        </div>

                    </form>

                    @include('partials.basecontact')
                    @include('partials.jumbotron')
                    @include('partials.footer')

@endsection

