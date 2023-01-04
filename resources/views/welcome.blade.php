<x-layout>

   @if (session('message'))
        <div class="alert alert-success text-center">
            {{session('message')}}
        </div>
   @endif
   <div class="container-fluid p-5 text-center text-dark" >    
    <div class= "row justify-content-center"> 
        <h1 class="display-1">
            Ultime Notizie
        </h1>
    </div>
</div>
    

    <div class="container-fluid mt-5 px-5">
        <div class="row">
            <div class="col-12">
                <div id="carouselExampleCaptions" class="carousel slide">
                    <div class="carousel-indicators">
                      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
                    </div>
                    <div class="carousel-inner">
                        @foreach ($articles as $article)
                      <div class="carousel-item {{$loop->first ? 'active': ''}}">
                        <a href="{{route('article.show', compact('article'))}}">
                          <img src="{{Storage::url($article->image)}}" class="d-block w-100 height-image" alt="...">
                        </a> 
                        <div class="carousel-caption d-none d-md-block">
                          <h5 class="text-dark">{{$article->title}}</h5>
                          <a href="{{route('article.byCategory', ['category' => $article->category->id])}}" class="small text-muted text-capitalize">{{$article->category->name}}</a>
                        </div>
                      </div>
                        @endforeach
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>                   
                    </button>
                  </div>  
            </div>
        </div>
    </div>
    
      
    
</x-layout>