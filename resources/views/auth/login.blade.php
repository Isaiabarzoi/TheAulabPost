<x-layout>

    <div class="container my-5">
      <div class="row border rounded p-2 shadow">
        <div class="col-12">
            <h1 class="display-1 text-center">Login</h1>
    
          <form method="POST" action="{{route('login')}}">
            
            @csrf

            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input name="email" type="email" class="form-control @error('email') is-invalid @enderror" id="email" value="{{old('email')}}" aria-describedby="emailHelp">
              </div>
    
              @error('email')
                <div class="alert alert-danger">{{ $message }}</div>
              @enderror
    
            <div class="mb-3">
              <label for="password" class="form-label">Password</label>
              <input name="password" type="password" class="form-control @error('password') is-invalid @enderror" id="password">
            </div>
    
              @error('password')
                <div class="alert alert-danger">{{ $message }}</div>
              @enderror
    
            <button type="submit" class="btn btn-outline-dark">Accedi</button>

            <p class="small mt-2">Non sei ancora registrato? <a href="{{route('register')}}" class="text-dark fw-bold">Clicca qui</a> </p>
          </form>
        </div>
      </div>
    </div>

</x-layout>