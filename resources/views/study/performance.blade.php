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
										<a href="{{ route('performance') }}" class="active"><li>Mes performances</li></a>
										<a href=""><li>Programmes</li</a>
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
                                <div class="ml-5 center-text h4">Mes performances</div>
                            </div>
                            <div class="mt-5 p-1" style="background:#e8e8e8"; >
                            <div  class="col-lg-12" style="background: #99d1e9";>
                                
                                <!-- <p style="color:#28a745";>classe de : </p>
                                <h1 class="text-center h2" style="font-weight:bold";>Mes performances</h1> -->

                                <ul class="usrperform1 p-3">
                                    <li class="col-12 col-md-8">Anglais    : <div class="progress ">
                                    <div class="progress-bar " role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax"100" style="width:60%">60%
                                    </div>
                                    </div></li>
                                    <li class="col-12 col-md-8">Français    : <div class="progress ">
                                    <div class="progress-bar " role="progressbar" aria-valuenow="73" aria-valuemin="0" aria-valuemax"100" style="width:73%">73%
                                    </div>
                                    </div></li>
                                    <li class="col-12 col-md-8">Mathématique    : <div class="progress ">
                                    <div class="progress-bar " role="progressbar" aria-valuenow="67" aria-valuemin="0" aria-valuemax"100" style="width:67%">67%
                                    </div>
                                    </div></li>
                                    <li class="col-12 col-md-8">Physique-Chimie    : <div class="progress ">
                                    <div class="progress-bar " role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax"100" style="width:80%">80%
                                    </div>
                                    </div></li>
                                    <li class="col-12 col-md-8">Histoire-Géographie    : <div class="progress ">
                                    <div class="progress-bar " role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax"100" style="width:75%">75%
                                    </div>
                                    </div></li>
                                    <li class="col-12 col-md-8">Science de la vie et de la Terre    : <div class="progress ">
                                    <div class="progress-bar " role="progressbar" aria-valuenow="63" aria-valuemin="0" aria-valuemax"100" style="width:63%">63%
                                    </div>
                                    </div></li>
                                    <li class="col-12 col-md-8">Education Physique et Sportive    : <div class="progress ">
                                    <div class="progress-bar " role="progressbar" aria-valuenow="93" aria-valuemin="0" aria-valuemax"100" style="width:93%">93%
                                    </div>
                                    </div></li>
                                </ul>
                        
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