@extends('layouts.app')
@section('main')
<div class="pagetitle">
    <h1>Form Layouts</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item">Forms</li>
        <li class="breadcrumb-item active">Layouts</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->
  <section class="section">
    <div class="row">
      <div class="col-lg-12">

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Creación de Usuario</h5>
            @if($errors->any())
                @foreach ($errors->all() as $err)
                    <div class="alert alert-danger">{{$err}}</div>  
                @endforeach
            @endif
            <!-- Horizontal Form -->
            <form method="post" action={{Route('save')}}>
                @csrf
              <div class="row mb-3">
                <label for="nameuser" class="col-sm-2 col-form-label">Nombre Completo</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="nameuser" name="nameuser">
                </div>
              </div>
              <div class="row mb-3">
                <label for="email" class="col-sm-2 col-form-label">Correo</label>
                <div class="col-sm-10">
                  <input type="email" class="form-control" id="email" name="email">
                </div>
              </div>
              <div class="row mb-3">
                <label for="password" class="col-sm-2 col-form-label">Password</label>
                <div class="col-sm-10">
                  <input type="password" class="form-control" id="password" name="password">
                </div>
              </div>
              
             
              <div class="text-center">
                <button type="submit" class="btn btn-primary">Guardar</button>
                <button type="reset" class="btn btn-secondary">Resetear</button>
              </div>
            </form><!-- End Horizontal Form -->

          </div>
        </div>

        

          </div>
        </div>

      </div>

      
    </div>
  </section>

@endsection