<?php

use App\travel_pack;
use Illuminate\Database\Seeder;

class travel_packgesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $travel_packges= [
            [
                'name_offerta' =>  'Soggiorno di lusso a Parigi con vista mozzafiato sulla Torre Eiffel',
                'price' => 259.90,
                'validity' => '20 mesi',
                'person' => 2,
                'child' => 0,
                'location' => 'Isola di Francia - Parigi (FR-75)',
                'parking_area' => true,
                'type' => 'Hotels',
                'square_meters' => 250,
                'rooms'=> 6,
                'bathrooms' => 2,
                'image' => 'https://media.smartbox.com/pim/10000022663081314960980.jpg?thumbor=800x0/filters:quality(90)',
                'description' => 'Regalati un soggiorno da sogno con chi ami nel cuore di Parigi: il First Hôtel ti aspetta a soli 5 minuti a piedi dal Campo di Marte e a 15 minuti dalla Torre Eiffel per 1 notte di magia per 2 persone. Dalla finestra della tua camera Deluxe, goditi la spettacolare vista sulla Torre Eiffel. In camera, petali di rosa, una bottiglia di Champagne e un’esclusiva Love Box completeranno l’atmosfera romantica. Al mattino, ti aspetta una colazione gourmet, dopodiché parti alla scoperta della Ville Lumière con i suoi eleganti viali alberati, i caffè dove il tempo sembra essersi fermato e il suo incredibile patrimonio storico e artistico.',
                'breakfast' => 'Colazione inclusa',
                'lunch_dinner' => 'Pranzo e Cena inclusa',
                'airplane_flight' => 'Si',
                'is_available' => true
            ],

            [
                'name_offerta' =>  '2 notti e 2 cene in Trentino con escursione panoramica e degustazione in acetaia',
                'price' => 589.90,
                'validity' => '12 mesi',
                'person' => 2,
                'child' => 1,
                'location' => 'Trentino Alto Adige - Trento (IT-TN)',
                'parking_area' => true,
                'type' => 'Appartamento',
                'square_meters' => 300,
                'rooms'=> 5,
                'bathrooms' => 3,
                'image' => 'https://media.smartbox.com/pim/100000232477786337013.jpg?thumbor=800x0/filters:quality(90)',
                'description' => 'Quella del Trentino è una terra che ruba il cuore: qui il paesaggio si fonde all’uomo senza strappi e tradizioni antichissime si raccontano attraverso la sua ricchezza enogastronomica. Smartbox e il team di Welcome to Italy ti invitano per 2 notti con colazione e 2 cene per 2 persone, presso l’Hotel Rosa Alpina di Fiavè, immerso tra le Valli Giudicarie. Con i suoi laghi circondati da boschi, le montagne e i suggestivi borghi medievali, il territorio è un paradiso per gli escursionisti e gli amanti del turismo lento. Durante il tuo soggiorno, potrai goderti una passeggiata attorno al turchese Lago di Tenno, per raggiungere poi i borghi medievali di Canale, Rango, Balbido e salire a Passo Duron. Inoltre, un’escursione panoramica ti porterà lungo il sentiero Busatte-Tempesta, per poi salire in ascensore con vista a 360 gradi fino a Bastione Veneziano a Riva del Garda. Ma non finisce qui! L’esperienza include anche un’escursione alle Cascate del Varone e una visita guidata all’Acetaia di Cologna di Tenno con degustazione finale di prodotti a chilometro zero. Per 3 giorni tra natura e sapori del Trentino da vivere con una persona speciale.',
                'breakfast' => 'Colazione inclusa',
                'lunch_dinner' => 'Pranzo e Cena inclusa',
                'airplane_flight' => 'No',
                'is_available' => true
            ]
        ];

        foreach($travel_packges as $travel_pack){
            $new_travel_pack = new travel_pack();
            $new_travel_pack-> name_offerta = $travel_pack['name_offerta'];
            $new_travel_pack-> price = $travel_pack['price'];
            $new_travel_pack-> validity = $travel_pack['validity'];
            $new_travel_pack-> person = $travel_pack['person'];
            $new_travel_pack-> child = $travel_pack['child'];
            $new_travel_pack-> location = $travel_pack['location'];
            $new_travel_pack-> parking_area = $travel_pack['parking_area'];
            $new_travel_pack-> type = $travel_pack['type'];
            $new_travel_pack-> square_meters = $travel_pack['square_meters'];
            $new_travel_pack-> rooms = $travel_pack['rooms'];
            $new_travel_pack-> bathrooms = $travel_pack['bathrooms'];
            $new_travel_pack-> image = $travel_pack['image'];
            $new_travel_pack-> description = $travel_pack['description'];
            $new_travel_pack-> breakfast = $travel_pack['breakfast'];
            $new_travel_pack-> lunch_dinner = $travel_pack['lunch_dinner'];
            $new_travel_pack-> airplane_flight = $travel_pack['airplane_flight'];
            $new_travel_pack-> is_available = $travel_pack['is_available'];
            $new_travel_pack-> save();


        }
    }
    
}
