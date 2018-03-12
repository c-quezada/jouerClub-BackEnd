<?php

use App\Team;
use App\User;
use App\Court;
use App\Skill;
use App\Sport;
use App\Branch;
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

        $users = 200; $sportfields = 100; $courts = 400; $facilities = 600; $workshops = 100; $branches = 100; $teams = 100; $skills = 200;

        factory(User::class, $users)->create();
        $this->call(RegionSeeder::class);
        factory(SportField::class, $sportfields)->create();
        factory(Court::class, $courts)->create();
        
        $this->call(SportsSeeder::class);
        factory(Branch::class, $branches)->create()->each(
            function ($branch){
                $court = Court::all()->random(mt_rand(1, 5))->pluck('id');
                $branch->court()->attach($court);
            }
        );
        factory(Facility::class, $facilities)->create();
        factory(Workshop::class, $workshops)->create();
        factory(Team::class, $teams)->create();
        factory(Skill::class, $skills)->create(); 
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
