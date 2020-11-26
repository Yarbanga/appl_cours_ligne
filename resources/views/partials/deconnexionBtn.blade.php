<div class="row container-fluid">
 <div class="col-lg-12">
  <div class="text-center txt1 mt-3">
        <br>
    <p> <a href="{{ route('logout') }}" style="color:green;"
            onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">
            Déconnexion</a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
            </form>
    </p>

  </div>
 </div>
</div>