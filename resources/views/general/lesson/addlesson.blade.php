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
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="overview-wrap">
                                    <h2 class="title-1">Ajouter une leçon</h2>
                                    
                                </div>

                            </div>
                            
                        </div> <br><br>
                        <!-- ajouter la classe -->
                        <form method="POST" action="{{ url('lesson') }}" class="">
                                @csrf
                                <div class="row form-group">
                                    <label for="inputPassword6" class="col-4">Matière</label>
                                    <select name="matiere" class="form-control col-5" id="exampleFormControlSelect1" value="{{ old('email') }}" required>    
                                    <option selected="selected">Choisir matiere</option> 
                                    @foreach( $matieres as $matiere )
                                    <option value="{{ $matiere -> id }}" >{{ $matiere -> matiere }}</option>
                                    @endforeach                   
                                    </select>                                    
                                </div>
                                    <div class="row form-group">
                                        <label for="inputPassword6" class="col-4">Chapitre </label>
                                        <input type="text" id="inputPassword6" class="form-control  col-5" aria-describedby="passwordHelpInline" placeholder="">
                                        <small id="passwordHelpInline" class="">
                                        </small>
                                    </div>

                                <div class="row form-group">
                                    <label for="exampleFormControlInput1" class="col-4">leçon titre </label>
                                    <input type="text" name="nom" class="form-control col-5 @error('nom') is-invalid @enderror" id="exampleFormControlInput1" placeholder="">
                                    @error('nom')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="row form-group">
                                    <label for="inputPassword6" class="col-4">Matière</label>
                                    <select name="classe" class="form-control col-5" id="exampleFormControlSelect1" value="{{ old('email') }}" required>    
                                    <option selected="selected">Choisir classe</option> 
                                    @foreach( $classes as $classe )
                                    <option value="{{ $classe -> id }}" >{{ $classe -> classe }}</option>
                                    @endforeach                   
                                    </select>                                    
                                </div>

                                <div class="text-center mt-5">
                                    <button type="submit" class="btn btn-primary ">Enregister</button>
                                </div>
                        </form>
                    </div>
                </div>
        </div>
        <!-- END MAIN CONTENT-->
        
        <!-- END PAGE CONTAINER-->
        @include('admin.partials.footer')
    </div>


</div>

@endsection