@extends('layouts.app')

@section('content')

<div class="container-fluid">
  <div class="row">
    <div class="img-styles col-xs-12 col-sm-12 col-md-12 col-lg-12 ">
      <a href="http://auksciausiapavara.lt/" >
      <img src="../images/Baneris CL_1442x98px.jpg" class="img-fluid img-styles" style="width:100%" >
      </a>
    </div>

  </div>
</div>
    <div class="container-fluid login-position">
        <div class="row">


            <div class="col-xs-4 col-xs-offset-4 col-sm-4 col-sm-offset-4 col-md-4 col-md-offset-4 col-lg-4 col-lg-offset-4">
                <form class="form-horizontal" action="{{ route('registracija') }}" method="get" >
                  
                  <div class="thumbnail">
        <!-- <a href="../images/Auksciausia pavara baneris 920x1320.jpg" > -->
          <!-- <img src="/w3images/lights.jpg" alt="Lights" style="width:100%"> -->
          <!-- <img src="../images/Auksciausia pavara baneris 920x1320.jpg" class="img-fluid  form-control img-styles" style="width:100%" > -->
        <!-- </a> -->
      </div>


                  <div class="">
                      <input class="form-control inp-space" type="text" name="login" placeholder="Įvesk prisijungimo vardą">
                  </div>
                    <div class="">
                        <input class="form-control inp-space" type="password" name="password" placeholder="Įvesk slaptažodį">
                    </div>
                    <div class="">
                        <input class="form-control btn btn-primary" type="submit" value="Prisijungti" role="button">
                        <input type="checkbox" value="prisiminti">
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
