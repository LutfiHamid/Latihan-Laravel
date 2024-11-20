@extends('welcome')
@section('section')
<div class="d-flex justify-content-center p-5 " style="height: 100vh; background: linear-gradient(135deg, #f0c75e, #000000, #1c3b78);">
    <div class=" w-25">
    <h1 class="text-white text-center">Register</h1>
    <div class="input-group mb-3 ">
        <div class="form-floating">
            <input type="text" class="form-control" id="floatingInputGroup1" placeholder="Username">
            
        <label for="floatingInputGroup1">name</label>
      </div>
    </div> 
    <div class="input-group mb-3 ">
        <div class="form-floating">
            <input type="text" class="form-control" id="floatingInputGroup1" placeholder="Username">
            
        <label for="floatingInputGroup1">Username</label>
      </div>
    </div> 
    <div class="input-group mb-3 ">
        <div class="form-floating">
            <input type="text" class="form-control" id="floatingInputGroup1" placeholder="Username">
            
        <label for="floatingInputGroup1">password</label>
      </div>
    </div> 
    <div class="form-floating mb-3">
        <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
          <option selected>Gender</option>
          <option value="laki laki">laki laki</option>
          <option value="prempuan">prempuan</option>
        </select>
        <label for="floatingSelect">Works with selects</label>
      </div>
            <a class="btn btn-primary w-100 py-2" href="#" role="button">sign in</a>
</div> 
</div>
@endsection