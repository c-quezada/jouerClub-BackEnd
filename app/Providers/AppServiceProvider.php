<?php

namespace App\Providers;

use App\User;
use App\Mail\UserCreated;
use App\Mail\UserMailChanged;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function boot()
    {

        User::created(function ($user)
        {
            if ($user->type == 'cluber' ) {
                retry(5, function() use ($user){
                Mail::to($user)->send(new UserCreated($user)); //Laravel se encarga de reconocer automaticamente el campo email del objeto user
                }, 100);
            }
            if ($user->type == 'jouer' ) {
                DB::table('jouer_skill')->insert([
                  'jouer_id' => $user->id,
                  'skill_id' => 1
                ]);

                retry(5, function() use ($user){
                    User::sendSMSVerification($user->phone, "Tu código de verificación JouerCLUB es: ".$user->code_verification);
                }, 100);
            }
            if ($user->type == 'coach' ) {
                DB::table('workshops')->insert([
                    'name' => 'Taller de Inicio',
                    'description' => 'Querido usuario, omita este taller, solo se carga de manera preestablecida para demostrar funcionalidad',
                    'lat' => '-33.405142',
                    'lng' => '-70.682644',
                    'time_begin' => '2018/12/12 00:00:00',
                    'time_end' => '2018/12/12 01:00:00',
                    'status' => 'finished',
                    'coach_id' => $user_id
                ]);

                retry(5, function() use ($user){
                    User::sendSMSVerification($user->phone, "Tu código de verificación JouerCLUB es: ".$user->code_verification);
                }, 100);
            }

        });

        User::updated(function ($user)
        {
            if ($user->type == 'jouer' ) {
                if ($user->isDirty('code_verification')) {
                    retry(5, function() use ($user){
                            User::sendSMSVerification($user->phone, "Tu número ha sido confirmado. Gracias por unirte al mundo JouerCLUB.");
                    }, 100);
                }
            }

            if ($user->type == 'cluber' ) {
                if ($user->isDirty('email')) {
                    retry(5, function() use ($user){
                            Mail::to($user)->send(new UserMailChanged($user));
                    }, 100);
                }
            }
        });

        Schema::defaultStringLength(191);

    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
