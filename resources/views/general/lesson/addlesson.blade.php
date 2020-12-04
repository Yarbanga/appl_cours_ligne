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
                        <form method="POST" action="{{ url('lesson') }}" class="form-inline">
                                @csrf
                                <div class="form-group">
                                    
                                    <select name="matiere" class="form-control" id="exampleFormControlSelect1" value="{{ old('email') }}" required>
                                    @foreach( $matieres as $matiere )
                                    <option value="matiere" selected="selected">Choisir matiere</option> 
                                    @endforeach                   
                                    </select>
                                    
                                </div>
                                    <div class="form-group">
                                        <label for="inputPassword6">Chapitre :</label>
                                        <input type="text" id="inputPassword6" class="form-control mx-sm-3" aria-describedby="passwordHelpInline">
                                        <small id="passwordHelpInline" class="">
                                        </small>
                                    </div>

                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Non de la matière :</label>
                                    <input type="text" name="nom" class="form-control @error('nom') is-invalid @enderror" id="exampleFormControlInput1" placeholder="exemple = Histoire">
                                    @error('nom')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
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