@extends('layouts.app')

@section('page')
<section id="section-homepage">
  <div class="container">
    <div class="row">
      <div class="col-md-12 white" align="center">
        <h1 class="light">DISEÑA TU PLAN DE VIDA 2019 Y AFRONTA NUEVOS RETOS</h1>
      </div>
      <div class="offset-md-3 col-md-6 white" align="center">
        <br><br><br>
        <h2>
          Tener metas que le den un objetivo a tu vida sin lugar a dudas es una
          excelente manera de enfrentar la vida de una forma más significativa y efectiva.
        </h2>
        <br><br><br>
        <img src="{{ asset('img/ios.png') }}" class="img-fluid" alt="12 retos" style="width:250px;height:80px">
        <img src="{{ asset('img/googleplay.png') }}" class="img-fluid" alt="12 retos" style="width:250px;height:120px">
      </div>
    </div>
  </div>
</section>
<section class="padding-section">
  <div class="container">
    <div class="row">
      <div class="col-md-12" align="center">
        <h2>¿Cómo funciona?</h2>
        <br><br>
      </div>
      <div class="col-md-4" align="center">
        <span class="dot align-middle" align="center">1</span>
        <br><br>
        <div class="card">
          <div class="card-body">
            Crea tu cuenta con tu correo o con Facebook
          </div>
        </div>
        <br class="d-block d-sm-block d-md-none d-lg-none d-xl-none"><br class="d-block d-sm-block d-md-none d-lg-none d-xl-none">
      </div>
      <div class="col-md-4" align="center">
        <span class="dot align-middle" align="center">2</span>
        <br><br>
        <div class="card">
          <div class="card-body">
            Establece todos los objetivos que deseas alcanzar en la vida
          </div>
        </div>
        <br class="d-block d-sm-block d-md-none d-lg-none d-xl-none"><br class="d-block d-sm-block d-md-none d-lg-none d-xl-none">
      </div>
      <div class="col-md-4" align="center">
        <span class="dot align-middle" align="center">3</span>
        <br><br>
        <div class="card">
          <div class="card-body">
            Da seguimiento a tus objetivos admistrando todas tus actividades
          </div>
        </div>
      </div>
    </div>

  </div>
</section>
<section class="padding-section">
  <div class="container">
    <div class="row">
      <div class="col-md-12" align="center">
        <h2>Descarga la app</h2>
        <br><br>
      </div>
      <div class="col-md-6" align="center">
        <img src="{{ asset('img/app.png') }}" class="img-fluid" alt="12 retos">
      </div>
      <div class="col-md-6" align="center">
        <br><br><br><br><br><br>
        <img src="{{ asset('img/ios.png') }}" class="img-fluid" alt="12 retos" style="width:250px;height:80px">
        <br><br>
        <img src="{{ asset('img/googleplay.png') }}" class="img-fluid" alt="12 retos" style="width:250px;height:120px">
      </div>
    </div>
  </div>
</section>
@endsection
