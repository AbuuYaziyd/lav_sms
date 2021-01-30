<?php
namespace Database\Seeders;

use App\Models\State;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StatesTableSeeder extends Seeder
{

    public function run()
    {
        DB::table('states')->delete();

        $states = [
            'Arusha', 'Dar es Salaam', 'Dodoma', 'Geita','Iringa' ,'Kagera','Katavi' ,'Kigoma', 'Kilimanjaro', 'Lindi',  'Manyara', 'Mara', 'Mbeya', 'Morogoro', 'Mtwara', 'Mwanza', 'Njombe', 'Pemba Kaskazini', 'Pemba Kusini', 'Pwani','Rukwa', 'Ruvuma', 'Shinyanga', 'Simiyu', 'Singida', 'Tabora', 'Tanga', 'Unguja Kusini' , 'Unguja Kaskazini', 'Unguja Magharibi',
        ];

        foreach ($states as $state) {
            State::create(['name' => $state]);
        }
    }

}
