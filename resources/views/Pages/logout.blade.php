@extends('welcome')
@section('section')
<nav class="navbar d-flex justify-content-between navbar-expand-lg bg-dark ">
    <div class="container-fluid">
      <a class="navbar-brand" href="#"><img src="{{ asset('assets/logo3.png') }}" width="50px" alt=""></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link  text-white" aria-current="page" href="/Polri">Profile</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active text-white" href="#">Tambah Data Baru</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active text-white" href="#">Lihat Data</a>
           </li>
          <li class="nav-item">
            <a class="nav-link active text-white" aria-disabled="#">Edit Data</a>
          </li>
        </ul>
      </div>
    </div>
    <div class="m-3">
        <h5 class="  btn fw-bold text-white">Logout</h3>
    </div>
  </nav>
@endsection