@extends('layouts.app')

@section('content')

<div class="container">
  <div class="row">
    <div class="col-sm dettaglio">
      <a href="#">Mostra Ospedale</a>
    </div>
    <div class="col-sm">
      <a href="{{ route('api_oauth') }}">Contagiati da CORONAVIRUS</a> <!--richiesta alla route api_oauth--> 
    </div>
    <div class="col-sm">
      <a href="{{ url('/') }}">Torna alla ricerca</a>
    </div>
  </div>
</div>

  <div class="page-header">
    <h4 id="titolo">Ospedale {{ $osp->titolo }}</h4><!-- dal controller arrivano le info relative all'ospedale e le visualizzo-->
    <div style="height: 480px" id="map"></div>
  </div>

  <link rel="stylesheet" type="text/css" href="https://js.api.here.com/v3/3.1/mapsjs-ui.css" />
  <script type="text/javascript" src="https://js.api.here.com/v3/3.1/mapsjs-core.js"></script>
  <script type="text/javascript" src="https://js.api.here.com/v3/3.1/mapsjs-service.js"></script>
  <script type="text/javascript" src="https://js.api.here.com/v3/3.1/mapsjs-ui.js"></script>
  <script type="text/javascript" src="https://js.api.here.com/v3/3.1/mapsjs-mapevents.js"></script>

  <script>
    var lati_ospedale = {{ $osp->lat }}//variabile js = variabile php(colonna lat della tabella ospedali su DB)
    var long_ospedale = {{ $osp->lon }}
    var zom = {{ $osp->zoom }}
    var citta = "{{ $osp->citta }}"
  </script>
<script src="{{ asset('js/mappe.js') }}" defer></script>

@endsection