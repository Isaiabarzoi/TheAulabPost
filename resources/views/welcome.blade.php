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

    <div
      style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff"
      class="swiper mySwiper"
    >
    @foreach($articles as $article)
      <div
        class="parallax-bg"
        data-swiper-parallax="-23%"
      ><img src="{{Storage::url($article->image)}}" class="img-fluid" alt=""></div>
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <div class="title" data-swiper-parallax="-300">{{$article->title}}</div>
          <div class="subtitle" data-swiper-parallax="-200">{{$article->subtitle}}</div>
          <a href="{{route('article.byCategory', ['category' => $article->category->id])}}" class="small text-muted fst-italic text-capitalize">{{$article->category->name}}</a>
          <div class="card-footer text-muted d-flex justify-contentbetween align-items-center">
            Redatto il {{$article->created_at->format('d/m/Y')}} da &nbsp; <a class="text-muted" href="{{route('article.byCategory', ['category' => $article->category->id])}}">{{$article->user->name}}</a>
          </div>
          <a href="{{route('article.show', compact('article'))}}" class="btn btn-info text-white">Leggi</a>
        </div>
    @endforeach
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
      <div class="swiper-pagination"></div>
    </div>

</x-layout>