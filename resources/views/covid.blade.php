@extends('layouts.app')

@section('content')

<div class="container">
  <div class="row">
    <div class="col-sm">

	<h1>Totali malati di covid-19 In Italia per mese e anno</h1>
	<span id="mese"></span>
	<span id="anno"></span>
	<div class="elenco">
		<button type='button' id='Italia'>Estrai</button>
		<div id="risultato"></div>
	</div>


    </div>
  </div>
</div>

	<script src="{{ asset('js/api_oauth_js.js') }}" defer></script>
@endsection