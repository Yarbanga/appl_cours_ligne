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
                                    <h2 class="title-3">Ajouter une matière</h2>
                                    
                                </div>

                            </div>
                            
                        </div> <br><br>
                        <!-- ajouter la classe -->
                        <form method="POST" action="{{ url('matiere') }}">
                                @csrf
                                <div class=" form-group">
                                    <label for="inputPassword6" >Classe</label>
                                    <select name="classe_id" class="form-control  @error('classe_id') is-invalid @enderror"  id="exampleFormControlSelect1" >    
                                    <option selected="selected">Choisir classe</option> 
                                    @foreach( $classes as $classe )
                                    <option value="{{ $classe->id }}" >{{ $classe->classe }}</option>
                                    @endforeach                  
                                    </select> 
                                    @error('classe_id')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror                                    
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Non de la matière :</label>
                                    <input type="text" name="matiere" class="form-control @error('matiere') is-invalid @enderror" id="exampleFormControlInput1" placeholder="exemple = Histoire">
                                    @error('matiere')
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