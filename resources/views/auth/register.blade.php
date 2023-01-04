<x-layout>

  <div class="container-fluid p-5 text-center text-dark">
    <div class="row justify-content-center">
        <h1 class="display-1">Registrati</h1>
    </div>
  </div>

  <div class="container my-5">
    <div class="row">
      <div class="col-12">
        <form method="POST" action="{{route('register')}}">

          @csrf

          <div class="mb-3">
            <label for="username" class="form-label">Username</label>
            <input name="name" type="text" class="form-control @error('name') is-invalid @enderror" id="username" value="{{old('name')}}" aria-describedby="emailHelp">
  
            @error('name')
               <div class="alert alert-danger">{{ $message }}</div>
            @enderror
  
          </div>
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
  
          <div class="mb-3">
              <label for="password_confirmation" class="form-label">Conferma password</label>
              <input name="password_confirmation" type="password" class="form-control @error('password') is-invalid @enderror" id="password_confirmation">
          </div>
  
            @error('password')
              <div class="alert alert-danger">{{ $message }}</div>
            @enderror
  
          <button type="submit" class="btn btn-primary">Submit</button>
          <p class="small mt-2">Già registrato? <a href="{{route('login')}}">Clicca qui</a> </p>
        </form>
      </div>
    </div>
  </div>

</x-layout>