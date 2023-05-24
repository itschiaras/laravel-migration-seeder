<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;

class TrainTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $trains = [
            [
                'company' => 'Italo',
                'departure_station' => 'Milano Centrale',
                'arrival_station' => 'Torino Porta nuova',
                'departure_time' => '7:00:00',
                'arrival_time' => '8:00:00',
                'on_time' => 1,
                'canceled' => 0
            ],
            [
                'company' => 'Italo',
                'departure_station' => 'Torino Porta nuova',
                'arrival_station' => 'Milano Centrale',
                'departure_time' => '8:00:00',
                'arrival_time' => '9:00:00',
                'on_time' => 0,
                'canceled' => 0
            ],
            [
                'company' => 'Trenitalia',
                'departure_station' => 'Roma Termini',
                'arrival_station' => 'Milano Centrale',
                'departure_time' => '10:00:00',
                'arrival_time' => '12:00:00',
                'on_time' => 1,
                'canceled' => 0
            ],
            [
                'company' => 'Trenitalia',
                'departure_station' => 'Milano Centrale',
                'arrival_station' => 'Roma Termini',
                'departure_time' => '12:00:00',
                'arrival_time' => '14:00:00',
                'on_time' => 0,
                'canceled' => 0
            ],
            [
                'company' => 'Italo',
                'departure_station' => 'Bologna Centrale',
                'arrival_station' => 'Firenze S.M.Novella',
                'departure_time' => '7:00:00',
                'arrival_time' => '8:00:00',
                'on_time' => 1,
                'canceled' => 1
            ]

            ];

            foreach ($trains as $train) {
                $train['code'] = rand(1000, 9999);
                $train['coaches'] = rand(1, 10);
                $newTrain = new Train();
                $newTrain->company = $train['company'];
                $newTrain->departure_station = $train['departure_station'];
                $newTrain->arrival_station = $train['arrival_station'];
                $newTrain->departure_time = $train['departure_time'];
                $newTrain->arrival_time = $train['arrival_time'];
                $newTrain->code = $train['code'];
                $newTrain->coaches = $train['coaches'];
                $newTrain->on_time = $train['on_time'];
                $newTrain->canceled = $train['canceled'];
                $newTrain->save();
            }
    }
}
