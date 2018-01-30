<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\User;
class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*$this->truncateDB([
            'users',
            'clubers'
        ]);*/

        $this->call(UserCluberSeeder::class);
        $this->call(RegionSeeder::class);
        //$this->call(SportFieldSeeder::class);
    }

    protected function truncateDB (array $tables){
        DB::statement('SET FOREIGN_KEY_CHECKS= 0'); // Desactivamos la revisión de claves foráneas
        foreach ($tables as $table) {
            DB::table($table)->truncate();
        }
        DB::statement('SET FOREIGN_KEY_CHECKS= 1'); // Reactivamos la revisión de claves foráneas
    }
}
