<?php

use Illuminate\Database\Seeder;
//use Illuminate\Support\Facades\DB;
use App\profesion;

class profesionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()

    {
        profesion::create([
            'name' => 'Diseñador grafico'
        ]);
        
        factory(profesion::class, 15)->create();

      // DB::insert('INSERT INTO profesion (name) VALUES (:title)',['title'=>'Desarrollador ASP']);
/*
       DB::table('profesion')->insert([
           'name' => 'Desarrollador back-end'
       ]) ;
       */
    }
}
