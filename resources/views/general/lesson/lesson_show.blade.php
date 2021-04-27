
@extends('layouts.admintemple')

@section('contenu')
    
<div class="page-wrapper">

    <!-- HEADER MOBILE-->
    <!-- END HEADER MOBILE-->

    <!-- MENU SIDEBAR-->
    @include('admin.partials.sidebar')
    <!-- END MENU SIDEBAR-->

    <!-- PAGE CONTAINER-->
    <div class="page-container">
        <!-- HEADER DESKTOP-->
        @include('admin.partials.headerdesktop')
        <!-- HEADER DESKTOP-->

        <!-- MAIN CONTENT-->
        <div class="main-content">
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
                                @if (session('supprimer'))    
                                <div class="container">
                                    <div class="alert alert-danger">
                                        {{ session('supprimer') }}
                                    </div>
                                </div>
                                @endif
                        
                                <div class="container">
                                    <div class="row justify-content-center">
                                        <div class="col-md-12">
                                            <div class="card">
                                                <div class="text-center">
                                                    <h2>Titre: {{$lesson->titre}}</h2>
                                                  </div>
                                                <div class="card-body ">
                                                    <div class="row">
                                                        <div class="col ">
                                                            <div class="list-group mt-1">  
                                                                <div class="list-item text-bold row"><span class="font-weight-bold col-6" >Chapitre : </span><span > {{$lesson->chapitre}} </div><br>
                                                                <div class="list-item text-bold row"><span class="font-weight-bold col-6">Introduction:</span> {{$lesson->intro}}   </div><br>
                                                                <div class="list-item text-bold row"><span class="font-weight-bold col-6">Montant:</span>   </div><br>
                                                                <div class="list-item text-bold row"><span class="font-weight-bold col-6">Fourniseur: </span>   </div><br>
                                                                <div class="list-item text-bold row"><span class="font-weight-bold col-6">Commentaire: </span>    </div><br>
                                                                <div class="list-item text-bold row"><span class="font-weight-bold col-6">Enregistré le: </span>   </div><br>
                                                                <div class="list-item text-bold row"><span class="font-weight-bold col-6">Par </span>   </div><br>
                                                                <div class="form-group d-flex float-right col-auto">
                                                                    <a  class="btn btn-warning ml-2 " href=" ">{{ __('imprimer') }}</a> 
                                                                </div> 
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                   
        </div>
        <!-- END MAIN CONTENT-->
        
        <!-- END PAGE CONTAINER-->
        @include('admin.partials.footer')
    </div>


</div>

@endsection