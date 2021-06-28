<?php

use Illuminate\Database\Seeder;

//use database\seeds\NewsTableSeeder;

class DatabaseSeeder extends Seeder
//popolo il database
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('news')->insert([
            'testo' => 'La campagna vaccinale è aperta. L’obiettivo della campagna di vaccinazione della popolazione è prevenire le morti da Covid-19 e raggiungere al più presto l’immunità di gregge per il SARS-CoV2. La campagna di vaccinazione, iniziata il 27 dicembre in seguito all’approvazione da parte dell’EMA (European Medicines Agency) del primo vaccino anti Covid-19, prosegue per fasi che dipenderanno dalla quantità di vaccini disponibili e dalle autorizzazioni rilasciate da EMA per ogni nuovo vaccino. I vaccini vengono offerti gratuitamente a tutta la popolazione secondo un ordine di priorità che tiene conto della disponibilità di vaccini e del rischio di malattia.',
            'link'  => 'prenota.html', 
            'testolink'  => 'PRENOTA ADESSO',
            'immagine'  => 'Vaccinazione.jpg',
            'ordine'  => 1,
            ]);

        DB::table('news')->insert([
            'testo' => 'MINISTERO DELLA SALUTE: Covid-19 - Situazione in Italia',
            'link'  => 'https://www.salute.gov.it/portale/nuovocoronavirus/dettaglioContenutiNuovoCoronavirus.jsp?area=nuovoCoronavirus&id=5351&lingua=italiano&menu=vuoto', 
            'testolink'  => 'VAI AL SITO',
            'immagine'  => 'SituazioneItalia.jpg',
            'ordine'  => 2,
            ]);

        DB::table('news')->insert([
            'testo' => 'GOVERNO ITALIANO: COVID-19 – Domande frequenti sulle misure adottate dal Governo',
            'link'  => 'https://www.governo.it/it/articolo/domande-frequenti-sulle-misure-adottate-dal-governo/15638', 
            'testolink'  => 'VAI AL SITO',
            'immagine'  => 'chigi.png',
            'ordine'  => 3,
            ]);

        DB::table('ospedali')->insert(['citta' => 'AGRIGENTO',       'nome' => 'AGRIGENTO',          'lat' => NULL,               'lon' => NULL,                 'zoom' => NULL,   'titolo' => NULL,                       'immagine' => NULL,               'desc' => NULL]);
        DB::table('ospedali')->insert(['citta' => 'BARI',            'nome' => 'POLICLINICO',        'lat' => 41.113038492701350, 'lon' => 16.861941205003030,   'zoom' => 17,     'titolo' => 'Policlinico di Bari',      'immagine' => 'Bari.jpg',         'desc' => 'Azienda Ospedaliero-Universitaria polispecialistica, una delle piu complete del meridione costituita da numerose unità operative di area medica e chirurgica.']);
        DB::table('ospedali')->insert(['citta' => 'CALTANISSETTA',   'nome' => 'SANT\'ELENA',        'lat' => NULL,               'lon' => NULL,                 'zoom' => NULL,   'titolo' => NULL,                       'immagine' => NULL,               'desc' => NULL]);
        DB::table('ospedali')->insert(['citta' => 'CATANIA',         'nome' => 'GARIBALDI',          'lat' => 37.543588844697716, 'lon' => 15.118432699966904,   'zoom' => 17,     'titolo' => 'Cannizzaro Catania',       'immagine' => 'Cannizzaro.jpg',   'desc' => 'Azienda di Riferimento regionale per l’emergenza-urgenza. Sede di strutture di alta specializzazione, dotata di tecnologie diagnostico-terapeutiche avanzate ed innovative. ']);
        DB::table('ospedali')->insert(['citta' => 'CATANIA',         'nome' => 'VITTORIO EMANUELE',  'lat' => NULL,               'lon' => NULL,                 'zoom' => NULL,   'titolo' => NULL,                       'immagine' => NULL,               'desc' => NULL]);
        DB::table('ospedali')->insert(['citta' => 'ENNA',            'nome' => 'UMBERTO I',          'lat' => NULL,               'lon' => NULL,                 'zoom' => NULL,   'titolo' => NULL,                       'immagine' => NULL,               'desc' => NULL]);
        DB::table('ospedali')->insert(['citta' => 'FIRENZE',         'nome' => 'CAREGGI',            'lat' => 43.807365774080410, 'lon' => 11.247912337566119,   'zoom' => 16,     'titolo' => 'Careggi Firenze',          'immagine' => 'Firenze.jpg',      'desc' => 'Azienda ospedaliera multidisciplinare che ha della salute fisica, psichica e sociale il suo target principale attraverso un processo che includa in modo inscindibile la didattica, come strumento di costruzione e miglioramento delle competenze degli operatori e dei soggetti in formazione e la ricerca, volta al continuo progresso delle conoscenze cliniche e biomediche.']);
        DB::table('ospedali')->insert(['citta' => 'GENOVA',          'nome' => 'SAN MARTINO',        'lat' => 43.807365774080410, 'lon' => 8.974863559756404,    'zoom' => 17,     'titolo' => 'San Martino di Genova',    'immagine' => 'Genova.jpg',       'desc' => 'Ha cinque secoli di storia e ha raggiunto un alto livello qualitativo delle prestazioni. Si tratta di un importante centro di riferimento con tipologia organizzativa degli Istituti di Ricovero e cura a carattere scientifico IRCCS. Grande prestigio è attriribuito alla area oncologica che è caratterizzata dalla capacità di integrazione sia della assistenza e della cura, sia della formazione e ricerca, prevalentemente traslazionale.']);
        DB::table('ospedali')->insert(['citta' => 'MESSINA ',        'nome' => 'CACOPARDO',          'lat' => NULL,               'lon' => NULL,                 'zoom' => NULL,   'titolo' => NULL,                       'immagine' => NULL,               'desc' => NULL]);
        DB::table('ospedali')->insert(['citta' => 'NAPOLI',          'nome' => 'CARDARELLI',         'lat' => 40.866457683911780, 'lon' => 14.225895330918260,   'zoom' => 16,     'titolo' => 'Cardarelli di Napoli',     'immagine' => 'Napoli.jpg',       'desc' => 'Azienda Ospedaliero-Universitaria di alta specializzazione, che opera a beneficio di utenti di un ampio territorio, che interessa, oltre alla città, anche la provincia ed la regione Campania intera e rappresenta un punto di riferimento per altre regioni meridionali']);
        DB::table('ospedali')->insert(['citta' => 'PALERMO',         'nome' => 'INGRASSIA',          'lat' => NULL,               'lon' => NULL,                 'zoom' => NULL,   'titolo' => NULL,                       'immagine' => NULL,               'desc' => NULL]);
        DB::table('ospedali')->insert(['citta' => 'PALERMO',         'nome' => 'CERVELLO',           'lat' => NULL,               'lon' => NULL,                 'zoom' => NULL,   'titolo' => NULL,                       'immagine' => NULL,               'desc' => NULL]);
        DB::table('ospedali')->insert(['citta' => 'RAGUSA',          'nome' => 'GIOVANNI PAOLO I',   'lat' => NULL,               'lon' => NULL,                 'zoom' => NULL,   'titolo' => NULL,                       'immagine' => NULL,               'desc' => NULL]);
        DB::table('ospedali')->insert(['citta' => 'ROMA',            'nome' => 'GEMELLI',            'lat' => 41.932586535991100, 'lon' => 12.429164210852655,   'zoom' => 16,     'titolo' => 'Policlinico Gemelli Roma', 'immagine' => 'Roma.jpg',         'desc' => 'Azienda di rilievo a livello nazionale e internazionale costituita dalla Fondazione Policlinico Universitario Agostino Gemelli IRCCS, nata nel 2015, è articolata tra Consiglio di Amministrazione, Direzione Generale, Comitato Scientifico IRCCS, Collegio dei Revisori dei Conti, Organismo di Vigilanza, Comitato Etico e Comitato di Consulenza clinica, didattica e scientifica']);
        DB::table('ospedali')->insert(['citta' => 'SIRACUSA',        'nome' => 'UMBERTO I',          'lat' => NULL,               'lon' => NULL,                 'zoom' => NULL,   'titolo' => NULL,                       'immagine' => NULL,               'desc' => NULL]);
        DB::table('ospedali')->insert(['citta' => 'TRAPANI',         'nome' => 'MARSALA',            'lat' => NULL,               'lon' => NULL,                 'zoom' => NULL,   'titolo' => NULL,                       'immagine' => NULL,               'desc' => NULL]);
    
    }
}
