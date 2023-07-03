<h1 class="text-center text-primary mt-3">
    Create Post
</h1>
<x-layouts.app title="Create Post">
    <div class="container w-50">
        <div class="row border border-0 p-4 rounded-5 shadow">
            <div class="col-md-6 mx-auto w-75">
                <form action="{{route ('posts.store')}}" method="POST">
                  @csrf
                    <div class="form-group mb-3">
                        <label class="fw-bold text-secondary" for="title">Title:</label>
                        <input name="title" type="text" class="form-control" placeholder="Escribe el Titulo..." value="{{old('title')}}">
                        @error('title')
                            <small class="text-danger">{{$message}}</small>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label class="fw-bold text-secondary" for="title">Body:</label>
                        <textarea name="body" type="text" class="form-control" placeholder="Escribe la descripcion..." >{{old('body')}}</textarea>
                        @error('body')
                            <small class="text-danger">{{$message}}</small>
                        @enderror
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-success mt-3">
                            Enviar Data
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</x-layouts.app>
