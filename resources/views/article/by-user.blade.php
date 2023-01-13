<x-layout>

    <div class="container-fluid p-5 text-center text-dark">
        <div class="row justify-content-center">
            <h1 class="display-2">
                Redattore {{$user->name}}
            </h1>
            <hr>
        </div>
    </div>
    
    <div class="container my-5">
        <div class="row justify-content-around">
            @foreach ($articles as $article)
                <div class="col-12 col-md-3 my-2">
                    <div class="card zoom">
                        <img src="{{Storage::url($article->image)}}" class="card-img-top img-cover" alt="" height="200">
                        <div class="card-body">
                            <h5 class="card-title">{{$article->title}}</h5>
                            @if($article->category)
                                <a href="{{route('article.byCategory', ['category' => $article->category->id])}}" class="small text-muted fst-italic text-capitalize">{{$article->category->name}}</a>                            
                            @else
                                <p class="small text-muted fst-capitalize">Non categorizzato</p>
                            @endif
                            <span class="text-muted small fst-italic">- tempo di lettura {{$article->readDuration()}} min</span>
                            <p class="card-text">{{$article->subtitle}}</p>
                            <div class="card-footer text-muted d-flex justify-contentbetween align-items-center">
                                Redatto il {{$article->created_at->format('d/m/Y')}} da {{$article->user->name}}
                            </div>
                        </div>
                        <a href="{{route('article.show', compact('article'))}}" class="btn btn-outline-dark">Leggi</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

     <!-- Back to top button -->
<button type="button" class="btn btn-floating btn-lg btn_color mx-3" id="btn-back-to-top">
    <i class="fas fa-arrow-up"></i>
  </button>
    
    </x-layout>