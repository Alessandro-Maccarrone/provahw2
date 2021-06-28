@extends('layouts.app',['show_footer'=>'true'])

@section('content')

<div class="container">
  <div class="row">
    <div class="col-4">


		<section>
		<div class="card mb-3">
		  <div class="card-body">
		    <p class="card-text">La salute è un bene prezioso e va tutelato, spesso occorre agire in tempi rapidi e gli ostacoli della burocrazia vanno superati con la tecnologia.
							Ti offriamo visite specialistiche ambulatoriali multidisciplinari, diagnostica per immagini, diagnostica di laboratorio e molecolare, test rapidi e tamponi molecolari multitarget per Sars-Cov2.</br>
							Abbiamo sviluppato un efficiente servizio di telemedicina, che ti dà la possibilità di fare, senza muoverti da casa e senza alcun contatto diretto, visite online con professionisti di elevato livello.
			</p>
		    <p class="card-text"><a class="btn btn-outline-secondary">RICEVI ASSISTENZA</a></p>
		  </div>
		</div>

		</section>


    </div>
    <div class="col-8">
    
    
    <section>
			  <div class="container">
				@foreach ($news as $n)<!-- ciclo per ogni news arrivata dal controller(che legge dal DB): crea la classe,box,immagine DINAMICAMENTE -->
				  <div class="row">
				    <div class="col-sm boxbox">

					  <img src="/images/{{ $n -> immagine }}" class="card-img-top"><!-- recupero da DB il campo immagine-->
					  <div class="card-body">
					    <p class="card-text">{{ $n -> testo }}</p><!-- recupero da DB il campo testo della news-->
					    <p class="card-text">
					      <small class="text-muted"><!-- recupero da Db il campo link e lo uso come href-->
					        <a href="{{ $n -> link }}" class="btn btn-outline-secondary" role="button" aria-pressed="true">{{ $n -> testolink }}</a>
					      </small>
					    </p>
					  </div>

				    </div>
				  </div>
				@endforeach
			  </div>
    </div>
  </div>
</div>

@endsection