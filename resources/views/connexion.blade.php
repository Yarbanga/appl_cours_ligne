
@extends('layouts.template')

@section('contenu')

@include('partials.header')
</div>
<div  class="col-lg-8" >
      
       <form class="form mt-5" action="{{ route('login') }}" method="POST">
        @csrf
         <p class="h1 text-center mb-5">Connexion</p>
          <div class="form-group">
            <!-- <label for="InputEmail"></label> -->
            <input type="text" class="form-control" name="name" id="InputEmail" aria-describedby="emailHelp" placeholder="nom ou Email address">
            <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
          </div>
          <div class="form-group">

            <input type="password" class="form-control" id="InputPassword" name="mdp" placeholder="mot de passe">
            <label for="InputPassword"><a href="">(j'ai oublie mon mot de passe)</a></label>
          </div>

          <div class="text-center">
            <a href="inscription.php" class="btn btn-primary" style="color:#fff;">S'inscrire</a>
            <button type="submit" class="btn btn-primary">Entrez en classe</button>
          </div>

      </form>

      @include('partials.basecontact')

      @endsection

     