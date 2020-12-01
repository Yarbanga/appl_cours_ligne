@extends('layouts.studytemplate')

@section('contenu')
            
<div class="col-4">
                            <div class="row container center">
								<div class="col-lg-12">
                  				<p class="text-center mt-4"> Bienvenu(e) </p>
                				</div>

								<img src="{{asset('storage').'/'.Auth::user() -> photo}}" class="img-fluid img-responsive rounded-circle mx-auto d-block  p-1" alt="profile" width="150px" style="height:150px;"/>
                				<div class="col-lg-12">
                  				<h2 class="h4 text-center mt-3">{{ Auth::user()->nom }} {{ Auth::user()->prenom }}</h2>
                				</div>
							</div>

							<div class="row container-fluid ">
							    <div class="col-lg-12 mt-3">
							    	<ul class="usrperform" >
										<a href="{{ route('study.show', Auth::user()->id) }}"><li>Ma carte scolaire</li></a>
										<a href="{{ route('performance') }}" ><li>Mes performances</li></a>
										<a href="{{ route('programme') }}"><li>Programmes</li</a>
										<a href="{{ route('temps') }}" class="active"><li>Mon emploi du temps</li></a>
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
                                
                            </div>
                            <div class="mt-3 p-1" style="background:#e8e8e8"; >
                            <div  class="col-lg-12" style="background: #99d1e9";>
                                
                                <!-- <p style="color:#28a745";>classe de : </p>
                                <h1 class="text-center h2" style="font-weight:bold";>Mes performances</h1> -->

                                <div  class="col-lg-12" style="background: #99d1e9";>
                                         
                                        <h4 class="text-center h4 p-2" style="font-weight:bold; color:blue;">Mon emploi du temps <span style="color:grey"> > </span> Semaine1 > Jour1</h4>
                                        <span>
                                            <a href="" style="margin-left: 300px"; class="btn btn-primary">Démarrons cette mission</a>
                                        </span>

                                        <ul class="usrperform1 mt-1">
                                            <li class="active">
                                            <a href="" btn btn-success style="font-size: 20px; padding-left: 25px;color:green;">Mathématique</a>
                                            <br/><br/>
                                            <span style="padding-left: 25px">Cours    <span style="color: red; font-weight:bold;">X</span></span><br/>
                                            <span style="padding-left: 25px">Exercices    <span style="color: red; font-weight:bold;">X</span></span>
                                            </li>
                                            <br/>
                                            <li>
                                            <a href="" btn btn-success style="font-size: 20px; padding-left: 25px;color:green;">Histoire-Geographie</a>
                                            <br/><br/>
                                            <span style="padding-left: 25px">Cours    <span style="color: red; font-weight:bold;">X</span></span><br/>
                                            <span style="padding-left: 25px">Exercices    <span style="color: red; font-weight:bold;">X</span></span>
                                            </li>
                                            <br/>
                                            <li>
                                            <a href="" btn btn-success style="font-size: 20px; padding-left: 25px; color:green;">Français</a>
                                            <br/><br/>
                                            <span style="padding-left: 25px">Cours    <span style="color: red; font-weight:bold;">X</span></span><br/>
                                            <span style="padding-left: 25px">Exercices    <span style="color: red; font-weight:bold;">X</span></span>
                                            </li>
                                        </ul>

                                    </div>
                        
                                {{-- <a href="" style="padding-left: 150px"; btn btn-primary class="h2";>Boostes tes performances <span style="color:#333;"> > </span> </a>
                                <br/><br/>
                                <div class="row container-fluid">
                                    <div class="col-lg-12">
                                        <form action="" method="post">
                                        <div class="form-group">
                                            <a href="" class="btnusr btn btn-primary">Modifier</a>
                                        </div>
                                        </form>
                                    </div>
                                </div> 
                                    
                                <div class="text-center">
                                <!-- <button type="submit" class="btn btn-primary ">inscription</button> -->
                                <a href="{{ route('study.edit', Auth::user()->id) }}" class="btn btn-primary" style="color:#fff;">Modifier</a>
                                </div> --}} <br>

                            </div>
                            

            </div>

@endsection