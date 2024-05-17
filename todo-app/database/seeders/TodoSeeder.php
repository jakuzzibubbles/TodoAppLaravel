<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class TodoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i=0; $i<=10; $i++){
            DB::table('todos')->insert([
                'title'=>Str::random(50),
                'description'=>Str::random(100),
                'status'=>$this->status()

            ]);
        }
    }

    private function randomDate(){

        $day = rand(1,25);

        $month = rand(1, 12);

        $year = 2024;

        $date = $year.'-'.$month.'-'.$day;

        return $date;
    }

    private function status(){

        $status_array = array('task', 'in progress', 'done');

        $status_key = array_rand($status_array, 1);

        return $status_array[$status_key];
    }
}
