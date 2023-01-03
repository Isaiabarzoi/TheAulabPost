<x-layout>

   @if (session('message'))
        <div class="alert alert-success text-center">
            {{session('message')}}
        </div>
   @endif
    
    {{-- <div class="container my-5">
        <div class="row justify-content-around">
            @foreach ($articles as $article)
                <div class="col-12 col-md-3">
                    <div class="card">
                        <img src="{{Storage::url($article->image)}}" class="card-img-top" alt="">
                        <div class="card-body">
                            <h5 class="card-title">{{$article->title}}</h5>
                            <a href="{{route('article.byCategory', ['category' => $article->category->id])}}" class="small text-muted fst-italic text-capitalize">{{$article->category->name}}</a>
                            <p class="card-text">{{$article->subtitle}}</p>
                            <div class="card-footer text-muted d-flex justify-contentbetween align-items-center">
                                Redatto il {{$article->created_at->format('d/m/Y')}} da &nbsp; <a class="text-muted" href="{{route('article.byCategory', ['category' => $article->category->id])}}">{{$article->user->name}}</a>
                            </div>
                        </div>
                        <a href="{{route('article.show', compact('article'))}}" class="btn btn-info text-white">Leggi</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div> --}}
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div id="carouselExampleCaptions" class="carousel slide">
                    <div class="carousel-indicators">
                      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        @foreach ($articles as $article)
                      <div class="carousel-item {{$loop->first ? 'active': ''}}">
                       
                        <img src="{{Storage::url($article->image)}}" class="d-block w-100 height-image" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                          <h5>{{$article->title}}</h5>
                          <p>Some representative placeholder content for the first slide.</p>
                        </div>
                        
                      </div>
                      @endforeach
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </button>
                  </div>  
            </div>
        </div>
    </div>
    
      
    
</x-layout>