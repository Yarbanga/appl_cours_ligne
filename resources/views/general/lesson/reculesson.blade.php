@extends('layouts.admintemple')
@section('contenu')
<div class="page-wrapper">
    @include('admin.partials.sidebar')
    <div class="page-container">
        @include('admin.partials.headerdesktop')
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
                                    <h4 class="title-3">Leçon </h4>
                                </div>
                            </div>
                        </div> <br><br>
                        <div class="row m-t-5">
                            @foreach($mats as $mat)
                                <div class="col-sm-6 col-lg-3">
                                    <div class="overview-item overview-item--c2">
                                        <div class="overview__inner">
                                            <div class="overview-box clearfix">
                                                <div class="text">
                                                <a href=""><h2>{{ $mat->titre }}</h2></a>                                                                          
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
        @include('admin.partials.footer')
    </div>
</div>
@endsection