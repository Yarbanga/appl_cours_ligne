@extends('layouts.admintemple')
@section('contenu')
<div class="page-wrapper">
    @include('admin.partials.sidebar')
    <div class="page-container">
        @include('admin.partials.headerdesktop')
        <div class="main-content">
            @if (session('success'))    
                <div class="container">
                    <div class="alert alert-success">{{ session('success') }}</div>
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
                        <form method="POST" action="{{ url('lesson') }}" class="">
                            @csrf
                            <div class="row form-group">
                                <label for="inputPassword6" class="col-2 ">Classe</label>
                                <select name="classe_id" class="form-control col-10" id='sel_depart' >    
                                    <option  value='0'>Choisir classe</option> 
                                 @foreach( $classes as $classe )
                                    <option value="{{ $classe->id }}" >{{ $classe->classe }}</option>
                                 @endforeach                   
                                </select>                                    
                            </div>
                                <div class="row form-group">
                                    <label for="inputPassword6" class="col-2  ">Matière</label>
                                    <select name="matiere_id" class="form-control col-10"  id='sel_emp' >    
                                        <option  value='0'>Choisir matiere</option> 
                                    </select>
                                </div>
                                <div class="row form-group">
                                        <label for="inputPassword6" class="col-2">Chapitre </label>
                                        <input type="text" name="chapitre" id="inputPassword6" class="form-control  col-10" aria-describedby="passwordHelpInline" placeholder="" >
                                        <small id="passwordHelpInline" class="">
                                        </small>
                                </div>
                                <div class="row form-group">
                                    <label for="exampleFormControlInput1" class="col-2">leçon titre </label>
                                    <input type="text" name="titre" class="form-control col-10 @error('titre') is-invalid @enderror" id="exampleFormControlInput1" placeholder="titre de leçon" >
                                    @error('titre')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="row form-group">
                                    <label for="exampleFormControlTextarea1" class="col-2">Introduction </label>
                                    <textarea name="intro"  class="form-control col-10 @error('introduction') is-invalid @enderror" id="exampleFormControlTextarea1"></textarea>
                                    @error('introduction')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                
                                <div class="row form-group">
                                    <label for="exampleFormControlInput1" class="col-2">I. </label>
                                    <input type="text" name="grandUn" class="form-control col-10 @error('grandUn') is-invalid @enderror" id="exampleFormControlInput1" placeholder="Grand I">
                                    @error('grandUn')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="row form-group">
                                    <label for="exampleFormControlInput1" class="col-2">1) </label>
                                    <input type="text" name="grandUnPetitUn" class="form-control col-10 @error('grandUnPetitUn') is-invalid @enderror" id="exampleFormControlInput1" placeholder="petit 1">
                                    @error('grandUnPetitUn')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="row form-group">
                                    <label for="exampleFormControlTextarea1" class="col-2">Texte 1</label>
                                    <textarea name="grandUnPetitUnTexteUn"  class="form-control col-10 @error('grandUnPetitUnTexteUn') is-invalid @enderror" id="exampleFormControlTextarea1"></textarea>
                                    @error('grandUnPetitUnTexteUn')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="row form-group">
                                    <label for="exampleFormControlInput1" class="col-2">2) </label>
                                    <input type="text" name="grandUnPetitDeux" class="form-control col-10 @error('grandUnPetitDeux') is-invalid @enderror" id="exampleFormControlInput1" placeholder="Petit 2">
                                    @error('grandUnPetitDeux')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="row form-group">
                                    <label for="exampleFormControlTextarea1" class="col-2">Texte 2 </label>
                                    <textarea name="grandUnPetitDeuxTexteDeux"  class="form-control col-10 @error('grandUnPetitDeuxTexteDeux') is-invalid @enderror" id="exampleFormControlTextarea1"></textarea>
                                    @error('grandUnPetitDeuxTexteDeux')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="row form-group">
                                    <label for="exampleFormControlInput1" class="col-2">3) </label>
                                    <input type="text" name="grandUnPetitTrois" class="form-control col-10 @error('grandUnPetitTrois') is-invalid @enderror" id="exampleFormControlInput1" placeholder="petit 3">
                                    @error('grandUnPetitTrois')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>    
                                <div class="row form-group">
                                    <label for="exampleFormControlTextarea1" class="col-2">Texte 3 </label>
                                    <textarea name="grandUnPetitTroisTexteTrois"  class="form-control col-10 @error('grandUnPetitTroisTexteTrois') is-invalid @enderror" id="exampleFormControlTextarea1"></textarea>
                                    @error('grandUnPetitTroisTexteTrois')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>                           

                                <div class="row form-group">
                                    <label for="exampleFormControlInput1" class="col-2">II. </label>
                                    <input type="text" name="grandDeux" class="form-control col-10 @error('grandDeux') is-invalid @enderror" id="exampleFormControlInput1" placeholder="Grand II">
                                    @error('grandDeux')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="row form-group">
                                    <label for="exampleFormControlInput1" class="col-2">1) </label>
                                    <input type="text" name="grandDeuxPetitUn" class="form-control col-10 @error('grandDeuxPetitUn') is-invalid @enderror" id="exampleFormControlInput1" placeholder="petit 1">
                                    @error('grandDeuxPetitUn')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="row form-group">
                                    <label for="exampleFormControlTextarea1" class="col-2">Texte 1 </label>
                                    <textarea name="grandDeuxPetitUnTexteUn"  class="form-control col-10 @error('grandDeuxPetitUnTexteUn') is-invalid @enderror" id="exampleFormControlTextarea1"></textarea>
                                    @error('grandDeuxPetitUnTexteUn')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="row form-group">
                                    <label for="exampleFormControlInput1" class="col-2">2) </label>
                                    <input type="text" name="grandDeuxPetitDeux" class="form-control col-10 @error('grandDeuxPetitDeux') is-invalid @enderror" id="exampleFormControlInput1" placeholder="petit 2">
                                    @error('grandDeuxPetitDeux')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="row form-group">
                                    <label for="exampleFormControlTextarea1" class="col-2">Texte 2 </label>
                                    <textarea name="grandDeuxPetitDeuxTexteDeux"  class="form-control col-10 @error('grandDeuxPetitDeuxTexteDeux') is-invalid @enderror" id="exampleFormControlTextarea1"></textarea>
                                    @error('grandDeuxPetitDeuxTexteDeux')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="row form-group">
                                    <label for="exampleFormControlInput1" class="col-2">3) </label>
                                    <input type="text" name="grandDeuxPetitTrois" class="form-control col-10 @error('grandDeuxPetitTrois') is-invalid @enderror" id="exampleFormControlInput1" placeholder="petit 3">
                                    @error('grandDeuxPetitTrois')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="row form-group">
                                    <label for="exampleFormControlTextarea1" class="col-2">Texte 3 </label>
                                    <textarea name="grandDeuxPetitTroisTexteTrois"  class="form-control col-10 @error('grandDeuxPetitTroisTexteTrois') is-invalid @enderror" id="exampleFormControlTextarea1"></textarea>
                                    @error('grandDeuxPetitTroisTexteTrois')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="row form-group">
                                    <label for="exampleFormControlInput1" class="col-2">III. </label>
                                    <input type="text" name="grandTrois" class="form-control col-10 @error('grandTrois') is-invalid @enderror" id="exampleFormControlInput1" placeholder="Grand III">
                                    @error('grandTrois')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="row form-group">
                                    <label for="exampleFormControlInput1" class="col-2">1) </label>
                                    <input type="text" name="grandTroisPetitUn" class="form-control col-10 @error('grandTroisPetitUn') is-invalid @enderror" id="exampleFormControlInput1" placeholder="petit 1">
                                    @error('grandTroisPetitUn')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="row form-group">
                                    <label for="exampleFormControlTextarea1" class="col-2">texte 1 </label>
                                    <textarea name="grandTroisPetitUnTexteUn"  class="form-control col-10 @error('grandTroisPetitUnTexteUn') is-invalid @enderror" id="exampleFormControlTextarea1"></textarea>
                                    @error('grandTroisPetitUnTexteUn')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="row form-group">
                                    <label for="exampleFormControlInput1" class="col-2">2) </label>
                                    <input type="text" name="grandTroisPetitDeux" class="form-control col-10 @error('grandTroisPetitDeux') is-invalid @enderror" id="exampleFormControlInput1" placeholder="petit 2">
                                    @error('grandTroisPetitDeux')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="row form-group">
                                    <label for="exampleFormControlTextarea1" class="col-2">Texte 2 </label>
                                    <textarea name="grandTroisPetitDeuxTexteDeux"  class="form-control col-10 @error('grandTroisPetitDeuxTexteDeux') is-invalid @enderror" id="exampleFormControlTextarea1"></textarea>
                                    @error('grandTroisPetitDeuxTexteDeux')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="row form-group">
                                    <label for="exampleFormControlInput1" class="col-2">3) </label>
                                    <input type="text" name="grandTroisPetitTrois" class="form-control col-10 @error('grandTroisPetitTrois') is-invalid @enderror" id="exampleFormControlInput1" placeholder="petit 3">
                                    @error('grandTroisPetitTrois')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="row form-group">
                                    <label for="exampleFormControlTextarea1" class="col-2">Texte 3 </label>
                                    <textarea name="grandTroisPetitTroisTexteTrois"  class="form-control col-10 @error('grandTroisPetitTroisTexteTrois') is-invalid @enderror" id="exampleFormControlTextarea1"></textarea>
                                    @error('grandTroisPetitTroisTexteTrois')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="text-center mt-5">
                                    <button type="submit" class="btn btn-primary ">Ajouter</button>
                                </div>
                        </form>
                    </div>
                </div>
        </div>
        <br><br>@include('admin.partials.footer')
    </div>
</div>
@endsection
@section('script')
<script type='text/javascript'>
    $(document).ready(function(){
      // Department Change
      $('#sel_depart').change(function(){
         // Department id
         var id = $(this).val();
         // Empty the dropdown
         $('#sel_emp').find('option').not(':first').remove();
         // AJAX request 
         $.ajax({
           url: 'getMatieres/'+id,
           type: 'get',
           dataType: 'json',
           success: function(response){
             var len = 0;
             if(response['data'] != null){
               len = response['data'].length;
             }
             if(len > 0){
               // Read data and create <option >
               for(var i=0; i<len; i++){
                 var id = response['data'][i].id;
                 var matiere = response['data'][i].matiere;
                 var option = "<option value='"+id+"'>"+matiere+"</option>"; 
                 $("#sel_emp").append(option); 
               }
             }
           }
        });
      });
    });
    </script>
@endsection