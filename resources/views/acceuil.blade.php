@extends('layouts.template')

@section('contenu')

@include('partials.header')

 {{-- button de connection --}}

 <div class="row container-fluid">
    <div class="col-lg-12">
     <div class="text-center txt1 mt-3">
       
     <p>Non connecte (<a href="{{ route('login') }}">connexion</a>)</p>
    
     </div>
    </div>
   </div>


{{-- reste du body --}}

</div>

<div  class="col-lg-8" >

<div class="embed-responsive embed-responsive-16by9">
    <iframe  src="https://www.youtube.com/embed/kDw_j07hnH0?rel=0&autoplay=1&mute=1&loop=1" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</div>

</div>

{{-- partie junbotron --}}

</div>
</div>
</div>    <!--	End jumbotron			-->

{{-- partie du footer --}}

@include('partials.footer')
    
@endsection