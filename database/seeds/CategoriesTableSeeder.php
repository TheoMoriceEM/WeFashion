<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class CategoriesTableSeeder extends Seeder
{
    private $table = 'categories';

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table($this->table)->insert([
            'name' => 'Homme',
            'slug' => 'homme',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table($this->table)->insert([
            'name' => 'Femme',
            'slug' => 'femme',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }
}
