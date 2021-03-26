<?php

use Illuminate\Database\Seeder;

class CarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 1; $i <= 10; $i++){
            DB::table('cars')->insert([
                'user_id' => 1,
                'identificador' => Str::random(10),
                'brand' => Str::random(10),
                'model' => Str::random(10),
                'year' => Str::random(4),
            ]);
        }

    }
}
