<x-layout>

   @if (session('message'))
        <div class="alert alert-success text-center">
            {{session('message')}}
        </div>
   @endif

<div class="container-fluid p-5 text-center text-dark">
    <div class="row justify-content-center position-relative">
        <div class="col-6 d-flex">
          <div class="bg-dark line"></div>
          <div class="title-div">
            <h1 class="display-3">
              Ultimi articoli</h1>
          </div>
          <div class="bg-dark line"></div>     
    </div>
  </div>
   </div> 






   {{-- <div class="container-fluid p-5 text-center text-dark" >    
    <div class= "row justify-content-center position-relative"> 
        <h1 class="display-3">
            Ultimi articoli
        </h1>
    </div>
  </div> --}}
    
    <div class="container-fluid px-5">
        <div class="row">
            <div class="col-12">
                <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
                    </div>
                    <div class="carousel-inner bg-carousel">
                        @foreach ($articles as $article)
                      <div class="carousel-item {{$loop->first ? 'active': ''}}" data-bs-interval="5000">
                        <a href="{{route('article.show', compact('article'))}}">
                          <img src="{{Storage::url($article->image)}}" class="d-block w-50 height-image" alt="...">
                        </a> 
                        <div class="carousel-caption-custom d-none d-md-block">
                          <h5 class="display-5 text-dark txt">{{$article->title}}</h5>
                          <p class="small fst-italic text-capitalize text-dark">
                            @foreach ($article->tags as $tag)
                              #{{$tag->name}}                                
                            @endforeach
                          </p>
                          <a href="{{route('article.byCategory', ['category' => $article->category->id])}}" class="small text-dark text-capitalize">{{$article->category->name}}</a>
                          <span class=" fs-6 text-dark small fst-italic">- tempo di lettura {{$article->readDuration()}} min</span>
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

    <div class="container-fluid px-5 mt-5">
      <div class="row">
        <div class="text-center">
          <h2 class="txt">Categorie in evidenza</h2>
        </div>
              <div class="col icon-home m-1 mt-4">
                <a href="{{route('article.byCategory', \app\Models\Category::where('name', 'sport')->first())}}" class="icon-color">
                  <i class="fa-solid fa-football fa-7x"></i>
                  <h4 class="mt-1">Sport</h4>
                </a>
              </div>
              <div class="col icon-home m-2 mt-4">
                <a href="{{route('article.byCategory', \app\Models\Category::where('name', 'gastronomia')->first())}}" class="icon-color">
                  <i class="fa-solid fa-utensils fa-7x"></i>
                  <h4 class="mt-1">Gastronomia</h4>
                </a>
              </div>
              <div class="col text-center icon-home m-2 mt-4">
                <a href="{{route('article.byCategory', \app\Models\Category::where('name', 'politica')->first())}}" class="icon-color">
                  <i class="fa-sharp fa-solid fa-landmark-dome fa-7x"></i>
                  <h4 class="mt-1">Politica</h4>
                </a>
              </div>
              <div class="col icon-home m-2 mt-4">
                <a href="{{route('article.byCategory', \app\Models\Category::where('name', 'tech')->first())}}" class="icon-color">
                  <i class="fa-solid fa-microchip fa-7x"></i>
                  <h4 class="mt-1">Tech</h4>
                </a>
              </div>
              <div class="col icon-home m-2 mt-4">
                <a href="{{route('article.byCategory', \app\Models\Category::where('name', 'cinema')->first())}}" class="icon-color">
                  <i class="fa-solid fa-film fa-7x"></i>
                  <h4 class="mt-1">Cinema</h4>
                </a>
              </div>
              <div class="col icon-home m-2 mt-4">
                <a href="{{route('article.byCategory', \app\Models\Category::where('name', 'economia')->first())}}" class="icon-color">
                  <i class="fa-solid fa-chart-line fa-7x"></i>
                  <h4 class="mt-1">Economia</h4>
                </a>
              </div>         
      </div>
    </div>

    <div class="container-fluid mt-5">
      <div class="row div-size" id="bg-image">
        <div class="d-flex" >
          <div class="col-10 mt-4">
            <h2 class="txt text-white">Sostenibilità e ambiente</h2>
          </div>
          <div class="col-2 mt-4">
            <a href="{{route('article.byCategory', \app\Models\Category::where('name', 'sostenibilità e ambiente')->first())}}">
              <button class="btn btn-trasparent text-white fw-bold border border-white border-4 rounded-pill">Salviamo l'ambiente</button>
            </a>
          </div>
          <div class="d-flex justify-content-center">
            {{-- <div class="bg-warning">
              <img src="/homeImage/pexels-lucien-wanda-2827735.jpg" class="img-size" alt="">
            </div>
            <div>
              <img src="/homeImage/pexels-pixabay-51951.jpg" class="img-size" alt="">
            </div>
            <div>
              <img src="/homeImage/pexels-ron-lach-9543414.jpg" class="img-size" alt="">
            </div> --}}
          </div>
        </div>
      </div>
    </div>

    <div class="text-center">
      <h3 class="mt-5">Il nostro team</h3>
    </div>  

    <div class="row row-cols-1 row-cols-md-3 g-4 mt-5 text-center">
      <div class="col">
        <a href="https://www.linkedin.com/in/stefano-valcarossa/" class="team-link text-dark">
          <img class="rounded-circle shadow zoom" alt="avatar1" src="/homeImage/stefano-valcarossa.jpg"/>
          <h4 class="mt-2">Stefano</h4>
        </a>
      </div>
      <div class="col">
        <a href="https://www.linkedin.com/in/giorgio-di-giambattista-full-stack-developer-junior-fpv-drone-pilot/" class="team-link text-dark">
          <img class="rounded-circle shadow zoom" alt="avatar2" src="/homeImage/giorgio.jpg"/>
          <h4 class="mt-2">Giorgio</h4>
        </a>
      </div>
      <div class="col">
        <a href="https://www.linkedin.com/in/isaia-barzoi-13469a25a/" class="team-link text-dark">
          <img class="rounded-circle shadow zoom" alt="avatar3" src="/homeImage/isaia.jpeg"/>
          <h4 class="mt-2">Isaia</h4>
        </a>
      </div>
    </div>
    
</x-layout>