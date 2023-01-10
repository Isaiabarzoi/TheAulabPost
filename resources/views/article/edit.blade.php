<x-layout>

    <div class="container  mt-5">
      <div class="row border rounded p-2 shadow">
        <div class="col-12">
          <h1 class="display-1 text-center">Modifica articolo</h1>

          <form method="POST" action="{{route('article.update',compact('article') )}}" enctype="multipart/form-data">
            
            @csrf
            @method('PUT')
            <div class="mb-3">
              <label for="title" class="form-label">Titolo</label>
              <input name="title" type="text" class="form-control" @error('title') is-invalid @enderror id="title" value="{{$article->title}}">
    
              @error('title')
                 <div class="alert alert-danger">{{$message}}</div>
              @enderror
    
            </div>
            <div>
                <label for="subtitle" class="form-label">Sottotitolo</label>
                <input name="subtitle" type="text" class="form-control" @error('subtitle') is-invalid @enderror id="subtitle" value="{{$article->subtitle}}">
              </div>
    
              @error('subtitle')
                <h6 class="text-danger">{{$message}}</h6>
              @enderror
    
            <div class="mb-3">
              <label for="image" class="form-label">Immagine</label>
              <input name="image" type="file" class="form-control" @error('image') is-invalid @enderror id="image">
            </div>
    
              @error('image')
                <div class="alert alert-danger">{{$message}}</div>
              @enderror
    
            <div class="mb-3">
                <label for="category" class="form-label">Categoria:</label>
                <select name="category" class="form-control text-capitalize" @error('category') is-invalid @enderror id="category">
                    @foreach ($categories as $category)
                        <option value="{{$category->id}}" @if($article->category && $category->id == $article->category->id) selected @endif>{{$category->name}}</option>
                    @endforeach
                </select>
            </div>
    
              @error('category')
                <div class="alert alert-danger">{{$message}}</div>
              @enderror
    
            <div class="mb-3">
                <label for="body" class="form-lable">Corpo del testo</label>
                <textarea name="body" id="body" cols="30" rows="7" class="form-control" @error('body') is-invalid @enderror>{{$article->body}}</textarea>
            </div>

            @error('body')
            <div class="alert alert-danger">{{$message}}</div>
            @enderror

            <div class="mb-3">
              <label for="tags" class="form-label">Tags</label>
              <input name="tags" id="tags" class="form-control" placeholder="Dividi ogni tag con una virgola" value="{{$article->tags->implode('name', ', ')}}" @error('tags') is-invalid @enderror>
            </div>

            @error('tags')
            <div class="alert alert-danger">{{$message}}</div>
            @enderror
            
            <div class="mt-2">
                <button class="btn btn-dark text-white">Modifica articolo</button>
                <a class="btn btn-outline-dark" href="{{route('home')}}">Torna alla home</a>
            </div>
          </form>
        </div>
      </div>
    </div>
  
  </x-layout>