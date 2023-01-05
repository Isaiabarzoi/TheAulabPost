<x-layout>
    <div class="container-fluid p-5 text-center text-dark" >    
        <div class= "row justify-content-center"> 
            <h1 class="display-1">
                Lavora con noi
            </h1>
        </div>
    </div>
    
    <div class="container my-5">
        <div class="row justify-content-center align-content-center border rounded p-2 shadow">
            <div class="col-12 col-md-6">
                <h2> Amministratore</h2>
                <p> Cosa farai: Gestione completa delle richieste di lavoro e di amministrazione, revisione ed accettazione degli articoli, modifica e cancellazione dei tags e delle categorie</p>
                <h2> Revisore </h2>
                <p> Cosa farai: Revisione dei nuovi articoli inseriti in attesa di approvazione </p>
                <h2> Redattore </h2>
                <p> Cosa farai: Scrittura degli articoli ed inserimento categoria </p>
            </div>
            <div class="col-12 col-md-6">
                @if ($errors -> any ())
                    <div class= "alert alert-danger">
                        <ul>
                            @foreach ($errors-> all () as $error)
                                <li>
                                    {{$error}}
                                </li>
                            @endforeach
                        </ul>
                    </div>
                @endif 

                <form class="p-5" action="{{route('careers.submit')}}" method="POST">
                    @csrf 

                    <div class="mb-3">
                        <label class= "form-label" for="role">Per quale ruolo ti stai candidando? </label>
                        <select class="form-controller" name="role" id="role">
                            <option value="">Scegli qui</option>
                            <option value="admin">Amministratore</option>
                            <option value="revisor"> Revisore</option>
                            <option value="writer"> Redattore</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="email"> Email</label>
                        <input name="email" type="email" class="form-control" id="email" value="{{old('email') ?? Auth::user()->email}}"> 
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="message"> Parlaci di te</label>
                        <textarea name="message" class="form-control" id="message" cols="30" rows="7"> {{old('message')}} </textarea> 
                    </div>
                    <div class="mt-2">
                        <button class="btn btn-white text-dark border">
                            Invia la candidatura
                        </button>
                    </div>
                </form>
                
            </div>
        </div>
    </div>


</x-layout>