<x-layout>
    
    <div class="container-fluid p-5 text-center text-dark" >    
        <div class= "row justify-content-center"> 
            <h1 class="display-1">
                Gestione utenti
            </h1>
            <hr>
        </div>
    </div>

    @if (session ('message'))
        <div class="alert alert-warning text-center">
            {{session ('message')}}
        </div>
    @endif

    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2>Richieste per ruolo amministratore </h2>
                <x-requests-table :roleRequests="$adminRequests" role="amministratore"/>
            </div>
        </div>
    </div>
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2>Richieste per ruolo revisore </h2>
                <x-requests-table :roleRequests="$revisorRequests" role="revisore"/>
            </div>
        </div>
    </div>
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2>Richieste per ruolo redattore </h2>
                <x-requests-table :roleRequests="$writerRequests" role="redattore"/>
            </div>
        </div>
    </div>

    
    <div class="container-fluid p-5 text-center text-dark" >    
        <div class= "row justify-content-center"> 
            <h1 class="display-1">
                Gestione tags e categorie
            </h1>
            <hr>
        </div>
    </div>
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2>I tags della piattaforma</h2>
                <x-metainfo-table :metaInfos="$tags" metaType="tags"/>
            </div>
        </div>
    </div>

    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2>Le categorie della piattaforma</h2>
                <x-metainfo-table :metaInfos="$categories" metaType="categorie"/>
                <form class="d-flex" action="{{route('admin.storeCategory')}}" method="POST">
                    @csrf
                    <input type="text" name="name" class="form-control me-2" placeholder="Inserisci una nuova categoria">
                    <button type="submit" class="btn btn-success text-white">Aggiungi</button>
                </form>
            </div>
        </div>
    </div>

 <button type="button" class="btn btn-floating btn-lg btn_color mx-3" id="btn-back-to-top">
        <i class="fas fa-arrow-up"></i>
      </button>
      
</x-layout>