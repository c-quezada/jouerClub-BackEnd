<?php

use App\User;
use App\Court;
use App\Facility;
use App\Workshop;
use App\SportField;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class DatabaseSeeder extends Seeder
{

    public function run()
    {
        /*$this->truncateDB([
            'users',
            'sportsFields',
            'courts'
        ]);*/

        $users = 200; $sportfields = 100; $courts = 400; $facilities = 600; $workshops = 100;

        factory(User::class, $users)->create();
        factory(SportField::class, $sportfields)->create();
        factory(Court::class, $courts)->create();
        factory(Facility::class, $facilities)->create();
        factory(Workshop::class, $workshops)->create();
        $this->call(RegionSeeder::class);
    }

    protected function truncateDB (array $tables){

        foreach ($tables as $table) {
            DB::statement("ALTER TABLE {$table} DISABLE TRIGGER ALL;"); // Desactivamos la revisión de claves foráneas        
        }

        foreach ($tables as $table) {
            DB::table($table)->truncate();
        }

        foreach ($tables as $table) {
            DB::statement("ALTER TABLE {$table} ENABLE TRIGGER ALL;"); // Activamos la revisión de claves foráneas        
        }
    }
}
