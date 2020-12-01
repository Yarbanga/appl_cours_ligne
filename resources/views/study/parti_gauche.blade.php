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
										<a href="{{ route('study.show', Auth::user()->id) }}" class="active"><li>Ma carte scolaire</li></a>
										<a href="{{ route('performance') }}"><li>Mes performances</li></a>
										<a href=""><li>Programmes</li</a>
										<a href="emploiDuTemps.html"><li>Mon emploi du temps</li></a>
										<a href=""><li>Notifications</li></a>
										<a href=""><li>Exercices</li></a>
									</ul>
               					</div>
							</div>

							<div class="row container-fluid">
                				@include('partials.deconnexionBtn')
							</div>

            </div>