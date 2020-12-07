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
                                    <h2 class="title-3">Ajouter une leçon</h2>
                                    
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
                                    <label for="inputPassword6" class="col-4">Classe</label>
                                    <select name="classe" class="form-control col-5" id="exampleFormControlSelect1" value="{{ old('email') }}" required>    
                                    <option selected="selected">Choisir classe</option> 
                                    @foreach( $classes as $classe )
                                    <option value="{{ $classe -> id }}" >{{ $classe -> classe }}</option>
                                    @endforeach                   
                                    </select>                                    
                                </div>
                                
                                <div class="row form-group">
                                        <label for="inputPassword6" class="col-4">Chapitre </label>
                                        <input type="text" name="chapitre" id="inputPassword6" class="form-control  col-5" aria-describedby="passwordHelpInline" placeholder="">
                                        <small id="passwordHelpInline" class="">
                                        </small>
                                </div>

                                <div class="row form-group">
                                    <label for="exampleFormControlInput1" class="col-4">leçon titre </label>
                                    <input type="text" name="titre" class="form-control col-5 @error('titre') is-invalid @enderror" id="exampleFormControlInput1" placeholder="titre">
                                    @error('titre')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="row form-group">
                                    <label for="exampleFormControlTextarea1" class="col-4">Introduction </label>
                                    <textarea type="text" name="introduction"  class="form-control col-5 @error('introduction') is-invalid @enderror" id="exampleFormControlTextarea1">Introduction</textarea>
                                    @error('introduction')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                
                                <div class="row form-group">
                                    <label for="exampleFormControlInput1" class="col-4">I. </label>
                                    <input type="text" name="grandUn" class="form-control col-5 @error('grandUn') is-invalid @enderror" id="exampleFormControlInput1" placeholder="II">
                                    @error('grandUn')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="row form-group">
                                    <label for="exampleFormControlInput1" class="col-4">1) </label>
                                    <input type="text" name="grandUnpetitUn" class="form-control col-5 @error('grandUnpetitUn') is-invalid @enderror" id="exampleFormControlInput1" placeholder="">
                                    @error('grandUnpetitUn')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="row form-group">
                                    <label for="exampleFormControlTextarea1" class="col-4">Texte 1</label>
                                    <textarea type="text" name="grandUnPetitUnTexteUn"  class="form-control col-5 @error('grandUnPetitUnTexteUn') is-invalid @enderror" id="exampleFormControlTextarea1">Texte 1</textarea>
                                    @error('grandUnPetitUnTexteUn')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="row form-group">
                                    <label for="exampleFormControlInput1" class="col-4">2) </label>
                                    <input type="text" name="grandUnPetitDeux" class="form-control col-5 @error('grandUnPetitDeux') is-invalid @enderror" id="exampleFormControlInput1" placeholder="">
                                    @error('grandUnPetitDeux')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="row form-group">
                                    <label for="exampleFormControlTextarea1" class="col-4">Texte 2 </label>
                                    <textarea type="text" name="grandUnPetitDeuxtexteDeux"  class="form-control col-5 @error('grandUnPetitDeuxtexteDeux') is-invalid @enderror" id="exampleFormControlTextarea1">Texte 2</textarea>
                                    @error('grandUnPetitDeuxtexteDeux')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="row form-group">
                                    <label for="exampleFormControlInput1" class="col-4">3) </label>
                                    <input type="text" name="grandUnPetitTrois" class="form-control col-5 @error('grandUnPetitTrois') is-invalid @enderror" id="exampleFormControlInput1" placeholder="">
                                    @error('grandUnPetitTrois')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>    
                                <div class="row form-group">
                                    <label for="exampleFormControlTextarea1" class="col-4">Texte 3 </label>
                                    <textarea type="text" name="grandUnPetitTroisTexteTrois"  class="form-control col-5 @error('grandUnPetitTroisTexteTrois') is-invalid @enderror" id="exampleFormControlTextarea1">Texte 3</textarea>
                                    @error('grandUnPetitTroisTexteTrois')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>                           

                                <div class="row form-group">
                                    <label for="exampleFormControlInput1" class="col-4">II. </label>
                                    <input type="text" name="grandDeux" class="form-control col-5 @error('grandDeux') is-invalid @enderror" id="exampleFormControlInput1" placeholder="">
                                    @error('grandDeux')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="row form-group">
                                    <label for="exampleFormControlInput1" class="col-4">1) </label>
                                    <input type="text" name="grandDeuxPetitUn" class="form-control col-5 @error('grandDeuxPetitUn') is-invalid @enderror" id="exampleFormControlInput1" placeholder="">
                                    @error('grandDeuxPetitUn')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="row form-group">
                                    <label for="exampleFormControlTextarea1" class="col-4">Texte 1 </label>
                                    <textarea type="text" name="grandDeuxPetitUnTexteUn"  class="form-control col-5 @error('grandDeuxPetitUnTexteUn') is-invalid @enderror" id="exampleFormControlTextarea1">Texte 1</textarea>
                                    @error('grandDeuxPetitUnTexteUn')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="row form-group">
                                    <label for="exampleFormControlInput1" class="col-4">2) </label>
                                    <input type="text" name="grandDeuxPetitDeux" class="form-control col-5 @error('grandDeuxPetitDeux') is-invalid @enderror" id="exampleFormControlInput1" placeholder="">
                                    @error('grandDeuxPetitDeux')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="row form-group">
                                    <label for="exampleFormControlTextarea1" class="col-4">Texte 2 </label>
                                    <textarea type="text" name="grandDeuxPetitDeuxTexteDeux"  class="form-control col-5 @error('grandDeuxPetitDeuxTexteDeux') is-invalid @enderror" id="exampleFormControlTextarea1">Texte 2</textarea>
                                    @error('grandDeuxPetitDeuxTexteDeux')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="row form-group">
                                    <label for="exampleFormControlInput1" class="col-4">3) </label>
                                    <input type="text" name="grandDeuxPetitTrois" class="form-control col-5 @error('grandDeuxPetitTrois') is-invalid @enderror" id="exampleFormControlInput1" placeholder="">
                                    @error('grandDeuxPetitTrois')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="row form-group">
                                    <label for="exampleFormControlTextarea1" class="col-4">Texte 3 </label>
                                    <textarea type="text" name="grandDeuxPetitTroisTexteTrois"  class="form-control col-5 @error('grandDeuxPetitTroisTexteTrois') is-invalid @enderror" id="exampleFormControlTextarea1">Texte 3</textarea>
                                    @error('grandDeuxPetitTroisTexteTrois')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="row form-group">
                                    <label for="exampleFormControlInput1" class="col-4">III. </label>
                                    <input type="text" name="grandTrois" class="form-control col-5 @error('grandTrois') is-invalid @enderror" id="exampleFormControlInput1" placeholder="">
                                    @error('grandTrois')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="row form-group">
                                    <label for="exampleFormControlInput1" class="col-4">1) </label>
                                    <input type="text" name="grandTroisPetitUn" class="form-control col-5 @error('grandTroisPetitUn') is-invalid @enderror" id="exampleFormControlInput1" placeholder="">
                                    @error('grandTroisPetitUn')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="row form-group">
                                    <label for="exampleFormControlTextarea1" class="col-4">texte 1 </label>
                                    <textarea type="text" name="grandTroisPetitUnTexteUn"  class="form-control col-5 @error('grandTroisPetitUnTexteUn') is-invalid @enderror" id="exampleFormControlTextarea1">Texte 1</textarea>
                                    @error('grandTroisPetitUnTexteUn')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="row form-group">
                                    <label for="exampleFormControlInput1" class="col-4">2) </label>
                                    <input type="text" name="grandTroisPetitDeux" class="form-control col-5 @error('grandTroisPetitDeux') is-invalid @enderror" id="exampleFormControlInput1" placeholder="">
                                    @error('grandTroisPetitDeux')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="row form-group">
                                    <label for="exampleFormControlTextarea1" class="col-4">Texte 2 </label>
                                    <textarea type="text" name="grandTroisPetitDeuxTexteDeux"  class="form-control col-5 @error('grandTroisPetitDeuxTexteDeux') is-invalid @enderror" id="exampleFormControlTextarea1">Texte 2</textarea>
                                    @error('grandTroisPetitDeuxTexteDeux')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="row form-group">
                                    <label for="exampleFormControlInput1" class="col-4">3) </label>
                                    <input type="text" name="grandTroisPetitTrois" class="form-control col-5 @error('grandTroisPetitTrois') is-invalid @enderror" id="exampleFormControlInput1" placeholder="">
                                    @error('grandTroisPetitTrois')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="row form-group">
                                    <label for="exampleFormControlTextarea1" class="col-4">Texte 3 </label>
                                    <textarea type="text" name="grandTroisPetitTroisTexteTrois"  class="form-control col-5 @error('grandTroisPetitTroisTexteTrois') is-invalid @enderror" id="exampleFormControlTextarea1">Texte 3</textarea>
                                    @error('grandTroisPetitTroisTexteTrois')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="text-center mt-5">
                                    <button type="submit" class="btn btn-primary ">Enregistrer la leçon</button>
                                </div>
                        </form>
                    </div>
                </div>
        </div>
        <!-- END MAIN CONTENT-->
        
        <!-- END PAGE CONTAINER-->
        <br><br>@include('admin.partials.footer')
    </div>


</div>

@endsection