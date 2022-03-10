@extends('layouts.app')
@section('main')
<div class="pagetitle">
    <h1>Data Tables</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item">Tables</li>
        <li class="breadcrumb-item active">Data</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section">
    <div class="row">
      <div class="col-lg-12">

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Datatables</h5>
            <div>
                <a href="{{Route('formUser')}}" class="btn btn-primary">Crear Usuario</a>
            </div>

            <!-- Table with stripped rows -->
            <table class="table datatable">
              <thead>
                <tr>
                  <th scope="col">Id</th>
                  <th scope="col">Nombre</th>
                  <th scope="col">Correo Electrónico</th>
                  <th scope="col">Código de Verificación</th>
                  <th scope="col">Fecha</th>
                </tr>
              </thead>
              <tbody>
                  @foreach ($users as $user)
                  <tr>
                    <th scope="row">{{$user->id}}</th>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->verify_code}}</td>
                    <td>{{$user->created_at->format('Y-m-d')}}</td>
                  </tr>
                  @endforeach
              </tbody>
            </table>
            <!-- End Table with stripped rows -->

          </div>
        </div>

      </div>
    </div>
  </section>
@endsection