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
                        
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="overview-wrap">
                                    <h4 class="title-3">Listes les classes</h4>
                                    
                                </div>
                                

                            </div>
                            
                        </div> <br><br>
                        <!-- ajouter -->
                        <div class="row m-t-5">
                            @foreach ( $classes as $classe )
                                <div class="col-sm-6 col-lg-3">
                                    <div class="overview-item overview-item--c1">
                                        <div class="overview__inner">
                                            <div class="overview-box clearfix">
                                                <div class="icon">                                                    
                                                </div>
                                               
                                                <div class="text">
                                                <a href=""><h2>{{ $classe->classe }} </h2></a>                                                                          
                                                </div>              
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                            @endforeach
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