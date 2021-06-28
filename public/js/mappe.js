
//var pathphp="./srcphp/";

/**
* Moves the map to display over Berlin
*
* @param  {H.Map} map      A HERE Map instance within the application
*/
var lati_ospedale,latit;
var long_ospedale,longi;
var zom;
var token_data;

function moveMapTo(map,dettaglio){

if (token_data!= null) {
    latit= token_data.coord.lat;
    longi= token_data.coord.lon;
}
else {
  latit=lati_ospedale;
  longi=long_ospedale;
}

if(dettaglio!=0){
  map.setCenter({lat:latit, lng:longi});
  map.setZoom(13);
}
else
{
  map.setCenter({lat:lati_ospedale, lng:long_ospedale});
  map.setZoom(zom);
}
}


function addMarkersToMap(map) {
    var parisMarker = new H.map.Marker({lat:lati_ospedale, lng:long_ospedale});
    map.addObject(parisMarker);
  }


//Step 1: inizia la comunicazione con la piattaforma
var platform = new H.service.Platform({apikey:'Cse4VOawweRP_naOyt830Cxf_-vryVtuuyKeAYA91Rk'});
var defaultLayers = platform.createDefaultLayers();

//Step 2: inizializza una mappa:  - questa mappa è centrata in Europa
var map = new H.Map(document.getElementById('map'),
defaultLayers.raster.satellite.map,{
center: {lat:50, lng:5},
zoom: 4,
pixelRatio: window.devicePixelRatio || 1
});

trova_coordinate(citta,'Italy');
let list = document.querySelector(".dettaglio");
 list.addEventListener("click", mostraOspedale);


//Step 3: rendo la mappa interattiva
// MapEvents permette il sistema di eventi
// il comportamento implementa le interazioni predefinite per lo zoom
var behavior = new H.mapevents.Behavior(new H.mapevents.MapEvents(map));

// Creo le componenti UI di default
var ui = H.ui.UI.createDefault(map, defaultLayers);
var indice = 0;

// Ora uso la mappa come richiesto
//window.onload = function () {
//  var urlParams = new URLSearchParams(window.location.search);
//  indice = urlParams.get("index");
//  getOspedali();
//
//}

//function getOspedali(){
//const url_request=pathphp+'getOspedali.php';
//
//fetch(url_request,
//{
//  method: 'POST',
//  body: url_request,
//  headers:
//  {
//    'Content-Type': 'application/json_encode'
//  }
//}
//).then(onDBResponse).then(leggiOspedali);
//return 0;
//}

/*
function onDBResponse(response) {
  return response.json();
}
*/

/*
function leggiOspedali(json){

var i;
result= json;
if(result.risultato=='OK'){
for(i=0;i<objectLength(result.data);i++)
{
  titoli[i]=result.data[i].TITOLO;
  descrizioni[i]=result.data[i].DESCRIZIONE;
  citta[i]=result.data[i].CITTA;
  latitudine[i]=result.data[i].LATITUDINE;
  longitudine[i]=result.data[i].LONGITUDINE;
  zoom[i]=result.data[i].ZOOM;
  immagini[i]=result.data[i].IMMAGINE;
 }

 i=indice;
 if (latitudine[i]==null)i=0;
 lati_ospedale=latitudine[i];
 long_ospedale=longitudine[i];
 zom=zoom[i];
 const tit=document.querySelector('#titolo');
 tit.innerHTML= "<h2>Ospedale "+titoli[i]+"</h2>";
 trova_coordinate(citta[i],'Italy');
 let list = document.querySelector(".dettaglio");
 list.addEventListener("click", mostraOspedale);

}
}
*/

/*
function objectLength(obj)
{
    let l = 0;
    for(let key in obj)
    {
        l++;
    }
    return l;
}
*/



function mostraOspedale()
{
  moveMapTo(map,0);
  addMarkersToMap(map);
}

function onResponse(response) {
  console.log('Risposta ricevuta');
  return response.json();
}

function getToken(json)
{
	token_data = json;
	console.log(json);
  moveMapTo(map,1);
}

function onTokenResponse(response) {
  return response.json();
}



function trova_coordinate(locality,nation){

const app_key='b3ec56efefe447ab0413412d8183b8c6';
const api_endpoint_token='https://api.openweathermap.org/data/2.5/weather';

let url_request=api_endpoint_token+'?appid='+app_key+'&q='+locality+','+nation;
console.log(url_request);

// All'apertura della pagina, richiediamo il json
let token_data;
fetch(url_request,
{
//  credentials: 'include',
	method: 'POST',
//  mode: 'no-cors',
  body: url_request,
  headers:
	{
    'Content-Type': 'application/x-www-form-urlencoded'
  }
}
).then(onTokenResponse).then(getToken);
 return 0;
}
