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
										<a href="{{ route('study.show', Auth::user()->id) }}"><li>Ma carte scolaire</li></a>
										<a href="{{ route('performance') }}" ><li>Mes performances</li></a>
										<a href="{{ route('programme') }}" class="active"><li>Programmes</li</a>
										<a href="{{ route('temps') }}" ><li>Mon emploi du temps</li></a>
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
                    <br><div class="d-flex"> 
                                <div class="p-1" style="background:#e8e8e8";>Classe de : {{ Auth::user()->classe }}</div>
                                <div class="ml-5 center-text h4">Liste des matières</div>
                            </div>
                            <div class="mt-3 p-1" style="background:#e8e8e8"; >
                            <div  class="col-lg-12" style="background: #99d1e9";>
                                
                                <!-- <p style="color:#28a745";>classe de : </p>
                                <h1 class="text-center h2" style="font-weight:bold";>Mes performances</h1> -->

                                <div  class="col-lg-12" style="background: #99d1e9";>
                                                                                 
                                        <ul class="usrperform1">
                                            <li class="active pt-3">
                                            <a href="" btn btn-success style="font-size: 20px; padding-left: 25px;color:green;">Mathématiques</a>
                                            <br/>
                                            </li>
                                            <br/>
                                            <li>
                                            <a href="" btn btn-success style="font-size: 20px; padding-left: 25px;color:green;">Histoire-Geographie</a>
                                            <br/>
                                            </li>
                                            <br/>
                                            <li>
                                            <a href="" btn btn-success style="font-size: 20px; padding-left: 25px; color:green;">Français</a>
                                            <br/>
                                            </li>
                                        </ul>

                                    </div>
                                <br>

                            </div>
                            

            </div>

@endsection