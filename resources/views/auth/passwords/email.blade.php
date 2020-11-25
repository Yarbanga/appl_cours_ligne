@extends('layouts.template')

@section('contenu')

@include('partials.header')
</div>


<div  class="col-lg-8" >
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    @if (session('success'))    
                        <div class="container">
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        </div>
                    @endif
                    @if (session('error'))    
                        <div class="container">
                            <div class="alert alert-danger">
                                {{ session('error') }}
                            </div>
                        </div>
                    @endif

                    <form class="mt-5 m-2" method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <p class="h1 text-center mb-5">Récuperation du mot de passe</p>                        
                        <div class="form-group">
                        
                                <input id="email" type="email" aria-describedby="emailHelp" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
    
                        </div><br><br>

                        <div class="text-center">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Initialiser son mot de passe') }}
                                </button>
                        </div>

                    </form>

                    @include('partials.basecontact')
                    @include('partials.jumbotron')
                    @include('partials.footer')

@endsection
