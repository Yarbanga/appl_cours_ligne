@extends('layouts.studytemplate')

@section('contenu')
            
<div class="col-4">
                            <div class="row container center">
								<div class="col-lg-12">
                  				<p class="text-center mt-4"> Bienvenu(e) </p>
                				</div>

								<img src="{{asset('storage').'/'.Auth::user()->photo}}" class="img-fluid img-responsive rounded-circle mx-auto d-block  p-1" alt="profile" width="150px" style="height:150px;"/>
                				<div class="col-lg-12">
                  				<h2 class="h4 text-center mt-3">{{ Auth::user()->nom }} {{ Auth::user()->prenom }}</h2>
                				</div>
							</div>

							<div class="row container-fluid ">
							    <div class="col-lg-12 mt-3">
							    	<ul class="usrperform" >
										<a href="{{ route('study.show', Auth::user()->id) }}" class="active"><li>Ma carte scolaire</li></a>
										<a href="{{ route('performance') }}"><li>Mes performances</li></a>
										<a href="{{ route('programme') }}"><li>Programmes</li</a>
										<a href="{{ route('temps') }}"><li>Mon emploi du temps</li></a>
										<a href=""><li>Notifications</li></a>
										<a href=""><li>Exercices</li></a>
									</ul>
               					</div>
							</div>

							<div class="row container-fluid">
                				@include('partials.deconnexionBtn')
							</div>

            </div>

            <div class="col-8 container bg-info ">
                    <br><br><div class="d-flex"> 
                                <div class="p-1" style="background:#e8e8e8";>Classe de : {{ Auth::user()->classe }}</div>
                                <div class="ml-5 center-text h4">Ma carte scolaire</div>
                            </div>
                            <div class="m-5 p-5" style="background:#e8e8e8"; >
                                    <div>Nom : {{ Auth::user()->nom }}</div>
                                    <div>Prénom : {{ Auth::user()->prenom }}</div>
                                    <div>date de niassance : {{ Auth::user()->date_naiss }}</div>
                                    <div>Email : {{ Auth::user()->email }}</div>
                                    <div>Ville : {{ Auth::user()->ville }}</div>
                                    <div>Ecole : {{ Auth::user()->ecole }}</div>
                                    <div>Genre : {{ Auth::user()->genre }}</div>
                                    <div>Téléphone : {{ Auth::user()->tel }}</div>
                                    <div>Pays : {{ Auth::user()->pays }}</div>
                                    
                            </div>
                            <div class="text-center mt-5">
                            <!-- <button type="submit" class="btn btn-primary ">inscription</button> -->
                            <a href="{{ route('study.edit', Auth::user()->id) }}" class="btn btn-primary" style="color:#fff;">Modifier</a>

                            </div>

            </div>

@endsection