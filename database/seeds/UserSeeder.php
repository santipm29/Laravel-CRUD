<?php

use Illuminate\Database\Seeder;
//use Illuminate\Support\Facades\DB;
use App\User;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        //$profesion = DB::select('SELECT profesion_id FROM profesion WHERE name = ?',['Desarrollador ASP']);
        
       $resultado = profesion::where('name','Desarrollador grafico')->value('profesion_id');
       
       factory(User::class)->create([
        'profesion_id' => $resultado
        ]);

        //factory(User::class, 40)->create();

     
    }
}
