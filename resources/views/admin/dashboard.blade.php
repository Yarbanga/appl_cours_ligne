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
        @include('admin.partials.content')
        <!-- END MAIN CONTENT-->
        
        <!-- END PAGE CONTAINER-->
        @include('admin.partials.footer')
    </div>


</div>

@endsection