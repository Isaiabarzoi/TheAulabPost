<x-layout>
    
    <div class="container-fluid p-5 text-center text-dark" >    
        <div class= "row justify-content-center"> 
            <h1 class="display-1">
                Gestione utenti
            </h1>
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

</x-layout>