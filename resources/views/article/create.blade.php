<x-layout>

    <div class="container">
      <div class="row">
        <div class="col-12">
          <form method="POST" action="{{route('article.store')}}" enctype="multipart/form-data">
  
            @csrf
  
            <div class="mb-3">
              <label for="title" class="form-label">Titolo</label>
              <input name="title" type="text" class="form-control @error('title') is-invalid @enderror" id="title" value="{{old('title')}}">
    
              @error('title')
                 <div class="alert alert-danger">{{ $message }}</div>
              @enderror
    
            </div>
            <div class="mb-3">
                <label for="subtitle" class="form-label">Sottotitolo</label>
                <input name="subtitle" type="text" class="form-control @error('subtitle') is-invalid @enderror" id="subtitle" value="{{old('subtitle')}}">
              </div>
    
              @error('subtitle')
                <div class="alert alert-danger">{{ $message }}</div>
              @enderror
    
            <div class="mb-3">
              <label for="image" class="form-label">Immagine</label>
              <input name="image" type="file" class="form-control @error('image') is-invalid @enderror" id="image">
            </div>
    
              @error('image')
                <div class="alert alert-danger">{{ $message }}</div>
              @enderror
    
            <div class="mb-3">
                <label for="category" class="form-label">Categoria</label>
                <select name="category" class="form-control text-capitalize @error('category') is-invalid @enderror" id="category">
                    @foreach ($categories as $category)
                        <option value="{{$category->id}}">{{$category->name}}</option>
                    @endforeach
                </select>
            </div>
    
              @error('category')
                <div class="alert alert-danger">{{ $message }}</div>
              @enderror
    
            <div class="mb-3">
                <label for="body" class="form-lable">Corpo del testo</label>
                <textarea name="body" id="body" cols="30" rows="7" class="form-control" @error('body') is-invalid @enderror>{{old('body')}}</textarea>
            </div>

            @error('body')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            <div class="mb-3">
              <label for="tags" class="form-label">Tags:</label>
              <input name="tags" id="tags" class="form-control" value="{{old('tags')}}" @error('tags') is-invalid @enderror>
              <span class="small fst-italic">Dividi ogni tag con una virgola</span>
            </div>

            @error('tags')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            
            <div class="mt-2">
                <button class="btn btn-info text-white">Inserisci articolo</button>
                <a class="btn btn-outline-info" href="{{route('home')}}">Torna alla home</a>
            </div>
          </form>
        </div>
      </div>
    </div>
  
  </x-layout>