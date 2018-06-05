<?php

use App\Team;
use App\User;
use App\Court;
use App\Skill;
use App\Sport;
use App\Branch;
use App\Meeting;
use App\Facility;
use App\Workshop;
use App\SportField;
use App\Maintenance;
use App\Availability;
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


        //DEVELOPMENT 
        $users = 50; $courts = 100; 
        $facilities = 300; $workshops = 100;
        $teams = 50; $maintenance = 300; $meetings = 100;
        User::flushEventListeners(); //Ignora los eventos asociados al usuario y asi no se envian correos de manera masiva por la creacion de usuarios a traves de UserFactory
        //factory(User::class, $users)->create();
        $this->call(RegionSeeder::class);

        $this->call(sportFieldSeeder::class);
        //factory(Court::class, $courts)->create();
        //factory(Meeting::class, $meetings)->create();
        $this->call(SportsSeeder::class);
        $this->call(BranchesSeeder::class);

        //factory(Facility::class, $facilities)->create();
        //factory(Maintenance::class, $maintenance)->create();
        //factory(Workshop::class, $workshops)->create();
        //factory(Team::class, $teams)->create();
        $this->call(SkillsSeeder::class); 
        //factory(Availability::class, 1000)->create(); 

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
