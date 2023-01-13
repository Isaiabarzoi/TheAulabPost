<x-layout>
  
  <div class="container  w-50 my-5">
    <div class="row border rounded p-2 shadow">
      <div class="col-12">
        <h1 class="display-2 text-center"> Benvenuto, Registrati </h1>

        <form method="POST" action="{{route('register')}}">

          @csrf

          <div class="mb-3">
            <label for="username" class="form-label fw-bold">Username</label>
            <input name="name" type="text" class="rounded-pill form-control @error('name') is-invalid @enderror" id="username" value="{{old('name')}}" aria-describedby="emailHelp">
  
            @error('name')
               <div class="alert alert-danger">{{ $message }}</div>
            @enderror
  
          </div>
          <div class="mb-3">
              <label for="email" class="form-label fw-bold">Email</label>
              <input name="email" type="email" class="rounded-pill form-control @error('email') is-invalid @enderror" id="email" value="{{old('email')}}" aria-describedby="emailHelp">
            </div>
  
            @error('email')
              <div class="alert alert-danger">{{ $message }}</div>
            @enderror
  
          <div class="mb-3">
            <label for="password" class="form-label fw-bold">Password</label>
            <input name="password" type="password" class="rounded-pill form-control @error('password') is-invalid @enderror" id="password">
          </div>
  
            @error('password')
              <div class="alert alert-danger">{{ $message }}</div>
            @enderror
  
          <div class="mb-3">
              <label for="password_confirmation" class="form-label fw-bold">Conferma password</label>
              <input name="password_confirmation" type="password" class="rounded-pill form-control @error('password') is-invalid @enderror" id="password_confirmation">
          </div>
  
            @error('password')
              <div class="alert alert-danger">{{ $message }}</div>
            @enderror
  
          <button type="submit" class="btn btn-outline-dark rounded-pill">Submit</button>
          <p class="small mt-2">Già registrato? <a href="{{route('login')}}" class="text-dark fw-bold">Clicca qui</a> </p>
        </form>
      </div>
    </div>
  </div>

</x-layout>