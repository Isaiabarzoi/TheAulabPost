<x-layout>

<div class="container-fluid p-5 bg-info text-center text-white">
    <div class="row justify-content-center">
        <h1 class="display-1">
            Tutti gli articoli:
        </h1>
    </div>
</div>

<div class="container my-5">
    <div class="row justify-content-around">
        @foreach ($articles as $article)
            <div class="col-12 col-md-3 my-2">
                <div class="card">
                    <img src="{{Storage::url($article->image)}}" class="card-img-top" alt="">
                    <div class="card-body">
                        <h5 class="card-title">{{$article->title}}</h5>
                        <p class="small text-muted fst-italic text-capitalize">{{$article->category->name}}</p>
                        <p class="card-text">{{$article->subtitle}}</p>
                        <div class="card-footer text-muted d-flex justify-contentbetween align-items-center">
                            Redatto il {{$article->created_at->format('d/m/Y')}} da {{$article->user->name}}
                        </div>
                    </div>
                    <a href="{{route('article.show', compact('article'))}}" class="btn btn-info text-white">Leggi</a>
                </div>
            </div>
        @endforeach
    </div>
</div>

</x-layout>



