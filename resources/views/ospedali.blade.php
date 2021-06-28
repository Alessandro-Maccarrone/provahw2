@extends('layouts.app')

@section('content')

<div class="container">

<div class="row pb-4">
<h4>NETWORK SANITARIO COVID-19</h4>
</div>

<div class="row pb-4">
    <div class="col-12">
        <input type="text" name="searchbox" id="searchbox" class="filterinput form-control" placeholder="Cerca...">
    </div>
</div>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
<div class="row">
    @foreach ($ospedali as $osp)<!-- foreach che cicla gli ospedali mostra in maniera univoca nome ,immagine e dettaglio dell'ospedale  -->
    <div class="col-lg-4 pb-4" data-role="osp">
        <div class="card h-100" data-id="{{ $osp->id }}">
            <div class="card-body">
                <h5 class="card-title">
                
                    <a href="{{ route('ospedale', $osp->id) }}">{{ $osp->titolo }} </a> <!--richiama la route ospedale passando l'id come parametro e visualizza il titolo dell'ospedale preso da DB -->

                    @auth
                      @csrf
                      <a href="#">  <!--Richiama la funzione favorited definita nel model ospedale, ritorna un booleano che utilizza per mostrare o meno la stellina -->
                          <i id="like-{{ $osp->id }}" class="fa {{ $osp->favorited()  ? 'fa-star' : 'fa-star-o' }}"></i>
                      </a>
                    @endauth	
                    </h5>

            </div>  <!--richiama la route ospedale passando l'id ,se clicco l'immagine mi porta in un link il contenuto del tag a è un immagine-->
	    <a href="{{ route('ospedale', $osp->id) }}"><img class="card-img-top " src="{{ 'images/'.$osp->immagine }}" ></a>
            <div class="card-footer text-muted text-truncate">
		      <!-- Genero il pulsante per i dettagli , btn è una classe bootstrap. A seguito del pulsante mostro i dettagli relativi all'ospedale selezionato.Tramite id rendo univoco il link-->
			  <a class="btn btn-primary" data-toggle="collapse" href="#collapseExample{{ $osp->id }}" role="button" aria-expanded="false" aria-controls="collapseExample{{ $osp->id }}">
			    Dettagli
			  </a>
			  <div class="details collapse" id="collapseExample{{ $osp->id }}"> <!-- sezione che viene mostrata o nascosta in base al pulsante dettagli-->
			  	<div class="card card-body">
			  	    {{ $osp -> desc }}
			  	</div>
			  </div>

            </div>
        </div>
    </div>

    @endforeach

</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<script>
$(document).ready(function() { //funzione js eseguita quando la pagina viene caricata, quando il document è pronto

    $("#searchbox").on("keyup", function() {//funzione appicata all'id searchbox che viene ativata quando si verifica l'evento keyup(quando rilascio un pusante della tastiera)
        var value = $(this).val().toLowerCase();//$this è l'oggetto searchbox, tramite val recupero il contenuto

        $('div[data-role="osp"]').filter(function() {//applica un filtro all'oggetto div[data...] contenuto nella pagina html

            $(this).toggle($(this).find('h5').text().toLowerCase().indexOf(value) > -1)//cerco all'interno della pagina tutti i nodi h5 il cui contenuto (in lowercase)
            //contiene ciò che è stato scritto nel box di ricerca e gli fa il toggle(lo nasconde o lo mostra)

        });
    });                    


    $('i.fa-star, i.fa-star-o').click(function(){    //applica questa funzione a tutti gli oggetti con classe i.fa-star e i.fa-star-o
            var id = $(this).parents(".card").data('id');// prende l'oggetto,prende il genitore con id .card e prende l'attributo data-id e recupera l'id dell'ospedale
            
            var cObj = $(this);//conserva in cObj l'oggetto che l'utente ha cliccato e lo usa nella funzione success

            $.ajax({//fetch per eliminare/aggiungere il preferito , passo id dell'ospedale alla route /request
               type:'POST',
               url:'/Request',
               data:{id:id},
               headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                     },

               success:function(data){//aggiunge o elimina le classi fa-star e fa-star-o
                    $(cObj).toggleClass("fa-star fa-star-o");
               }
            });
        });      

});

</script>

@endsection