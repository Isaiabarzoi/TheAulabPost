<x-layout>

    <div class="container">
      <div class="row">
        <div class="col-12">
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
    
            <button type="submit" class="btn btn-primary">Accedi</button>
          </form>
        </div>
      </div>
    </div>

</x-layout>