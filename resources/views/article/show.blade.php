<x-layout>

    <x-slot name="meta">
        <meta name="keywords" content="{{$article->getTags()}}">
        <meta name="author" content="{{$article->user->name}}">
    </x-slot>

    <div class="container-fluid p-5 text-center text-dark">
        <div class="row justify-content-center">
            <h1 class="display-2">
                {{$article->title}}
            </h1>
            <hr>
        </div>
    </div>

    <div class="container my-5">
        <div class="row justify-content-around">
            <div class="col-12 col-md-8">
                <img src="{{Storage::url($article->image)}}" class="img-fluid w-100 my-3" alt="">
            </div>
            <div class="text-center">
                <h2>{{$article->subtitle}}</h2>
                <div class="my-3 text-muted fst-italic">
                    <p>Redatto da {{$article->user->name}} il {{$article->created_at->format('d/m/Y')}}</p>
                </div>
            </div>
            <hr>
            <p class="mt-3 px-5">{{$article->body}}</p>
            <div class="text-center">
                    <input action="action" type="button" value="Torna indietro" class="btn btn-outline-dark my-5" onclick="window.history.go(-1); return false;" />
            </div>
        </div>
    </div>
    <div class="text-center">
            @if (Auth::user() && Auth::user()->is_revisor)
                <a href="{{route('revisor.acceptArticle', compact ('article'))}}" class="btn btn-success text-white my-5 ">Accetta articolo</a>
                <a href="{{route('revisor.rejectArticle', compact ('article'))}}" class="btn btn-danger text-white my-5 ">Rifiuta articolo</a>
            @endif
    </div>
    
     <!-- Back to top button -->
    <button type="button" class="btn btn-floating btn-lg btn_color mx-3" id="btn-back-to-top">
        <i class="fas fa-arrow-up"></i>
    </button>
  
</x-layout>