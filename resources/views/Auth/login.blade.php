@extends('welcome')
@section('section')
<div class="d-flex justify-content-center p-5 " style="height: 100vh; background: linear-gradient(135deg, #f0c75e, #000000, #1c3b78);">


        
    
    <div style="width: 30%" class="  p-3 rounded-3">
        <img src="{{ asset('assets/logo1.png') }}" alt="ini gambar" width="80%">   
        <div class="input-group mb-3">
            <div class="form-floating">
              <input type="text" class="form-control" id="floatingInputGroup1" placeholder="Username">
              <label for="floatingInputGroup1">Username</label>
            </div>
          </div>    
          <div class="input-group mb-3">
            <div class="form-floating">
              <input type="password" class="form-control" id="floatingInputGroup1" placeholder="Username">
              <label for="floatingInputGroup1">Password</label>
            </div>
          </div>   
          
          <a class="btn btn-primary w-100 py-2" href="#" role="button">sign in</a>
          <a href="/register" class="btn btn-warning"> buat akun </a>
</div>

@endsection