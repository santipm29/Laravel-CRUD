<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        $this->truncateTables([
            'users',
            'profesion'
        ]);
        /* Siempre se coloca esto dependiendo los seeders que se crean*/
        $this->call(profesionSeeder::class);
        $this->call(UserSeeder::class);
    }

    protected function truncateTables(array $tables){
        DB::statement('SET FOREIGN_KEY_CHECKS = 0;');

        foreach($tables as $table){
            DB::table($table)->truncate();
        }
    }
}
