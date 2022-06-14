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
                'type' => 'Hotels',
                'square_meters' => 250,
                'rooms'=> 6,
                'bathrooms' => 2,
                'image' => 'https://media.smartbox.com/pim/10000022663081314960980.jpg?thumbor=800x0/filters:quality(90)',
                'description' => 'Regalati un soggiorno da sogno con chi ami nel cuore di Parigi: il First Hôtel ti aspetta a soli 5 minuti a piedi dal Campo di Marte e a 15 minuti dalla Torre Eiffel per 1 notte di magia per 2 persone. Dalla finestra della tua camera Deluxe, goditi la spettacolare vista sulla Torre Eiffel. In camera, petali di rosa, una bottiglia di Champagne e un’esclusiva Love Box completeranno l’atmosfera romantica. Al mattino, ti aspetta una colazione gourmet, dopodiché parti alla scoperta della Ville Lumière con i suoi eleganti viali alberati, i caffè dove il tempo sembra essersi fermato e il suo incredibile patrimonio storico e artistico.',
                'breakfast' => 'Colazione inclusa',
                'lunch_dinner' => 'Pranzo e Cena inclusa',
                'airplane_flight' => 'Si',
                'check_in' => '2022-06-25 15:00:00',
                'check_out' => '2022-06-28 10:00:00',
                'is_available' => true
            ],

            [
                'name_offerta' =>  '2 notti e 2 cene in Trentino con escursione panoramica e degustazione in acetaia',
                'price' => 589.90,
                'validity' => '12 mesi',
                'person' => 2,
                'child' => 1,
                'location' => 'Trentino Alto Adige - Trento (IT-TN)',
                'type' => 'Appartamento',
                'square_meters' => 300,
                'rooms'=> 5,
                'bathrooms' => 3,
                'image' => 'https://media.smartbox.com/pim/100000232477786337013.jpg?thumbor=800x0/filters:quality(90)',
                'description' => 'Quella del Trentino è una terra che ruba il cuore: qui il paesaggio si fonde all’uomo senza strappi e tradizioni antichissime si raccontano attraverso la sua ricchezza enogastronomica. Smartbox e il team di Welcome to Italy ti invitano per 2 notti con colazione e 2 cene per 2 persone, presso l’Hotel Rosa Alpina di Fiavè, immerso tra le Valli Giudicarie. Con i suoi laghi circondati da boschi, le montagne e i suggestivi borghi medievali, il territorio è un paradiso per gli escursionisti e gli amanti del turismo lento. Durante il tuo soggiorno, potrai goderti una passeggiata attorno al turchese Lago di Tenno, per raggiungere poi i borghi medievali di Canale, Rango, Balbido e salire a Passo Duron. Inoltre, un’escursione panoramica ti porterà lungo il sentiero Busatte-Tempesta, per poi salire in ascensore con vista a 360 gradi fino a Bastione Veneziano a Riva del Garda. Ma non finisce qui! L’esperienza include anche un’escursione alle Cascate del Varone e una visita guidata all’Acetaia di Cologna di Tenno con degustazione finale di prodotti a chilometro zero. Per 3 giorni tra natura e sapori del Trentino da vivere con una persona speciale.',
                'breakfast' => 'Colazione inclusa',
                'lunch_dinner' => 'Pranzo e Cena inclusa',
                'airplane_flight' => 'No',
                'check-in' => '2022-07-13 15:00:00',
                'check-out' => '2022-06-15 10:00:00',
                'is_available' => true
            ]
        ];

        foreach($travel_packges as $travel_pack){
            $new_travel_packges = new travel_pack();
            $new_travel_packges-> name_offerta = $travel_pack['name_offerta'];
            $new_travel_packges-> price = $travel_pack['price'];
            $new_travel_packges-> validity = $travel_pack['validity'];
            $new_travel_packges-> person = $travel_pack['person'];
            $new_travel_packges-> child = $travel_pack['child'];
            $new_travel_packges-> location = $travel_pack['location'];
            $new_travel_packges-> type = $travel_pack['type'];
            $new_travel_packges-> square_meters = $travel_pack['square_meters'];
            $new_travel_packges-> rooms = $travel_pack['rooms'];
            $new_travel_packges-> bathrooms = $travel_pack['bathrooms'];
            $new_travel_packges-> image = $travel_pack['image'];
            $new_travel_packges-> description = $travel_pack['description'];
            $new_travel_packges-> breakfast = $travel_pack['breakfast'];
            $new_travel_packges-> lunch_dinner = $travel_pack['lunch_dinner'];
            $new_travel_packges-> airplane_flight = $travel_pack['airplane_flight'];
            $new_travel_packges-> check_in = $travel_pack['check_in'];
            $new_travel_packges-> check_out = $travel_pack['check_out'];
            $new_travel_packges-> is_available = $travel_pack['is_available'];
            $new_travel_packges-> save();


        }
    }
    
}
