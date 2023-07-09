<h1 class="text-center text-light mt-3">Login</h1>
<x-layouts.app title="Register" />

<div class="container w-25">
  <div class="row border border-0 p-4 rounded-5 shadow">
      <div class="col-md-6 mx-auto w-75">
          <form action="{{route ('login')}}" method="POST">
            @csrf
              {{-- <div class="form-group mb-3">
                  <label class="fw-bold text-secondary" for="">Nombre de Usuario:</label>
                  <input name="name" 
                         type="text" 
                         class="form-control" 
                         placeholder="Escribe tu nombre" 
                         autofocus="autofocus"
                         value="{{old('title')}}">
                  @error('name')
                      <small class="text-danger">{{$message}}</small>
                  @enderror
              </div> --}}
              <div class="form-group mb-3">
                  <label class="fw-bold text-secondary" for="">Email:</label>
                  <input name="email" type="email" class="form-control" placeholder="Escribe tu email" value="{{old('body')}}">
                  @error('email')
                      <small class="text-danger">{{$message}}</small>
                  @enderror
              </div>
              <div class="form-group mb-3">
                <label class="fw-bold text-secondary" for="">Password:</label>
                <input name="password" type="password" class="form-control" placeholder="Escribe tu email">
                @error('password')
                    <small class="text-danger">{{$message}}</small>
                @enderror
              </div>
              <div class="form-group mb-3">
                <input name="remember" type="checkbox" class="form-check-input ">
                <label class="fw-bold text-secondary form-check-label" for="">Recuerdame:</label>
                @error('password_confirmation')
                    <small class="text-danger">{{$message}}</small>
                @enderror
              </div>
              <div class="text-center">
                  <button type="submit" class="btn btn-warning text-secondary mt-3 fw-bold shadow p-2">
                      Login
                  </button>
              </div>
          </form>
      </div>
  </div>
</div>