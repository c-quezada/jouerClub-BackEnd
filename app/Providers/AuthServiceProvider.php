<?php

namespace App\Providers;

use Carbon\Carbon;
use Laravel\Passport\Passport;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

          Passport::routes();
          Passport::tokensExpireIn(Carbon::now()->addDays(30));
          Passport::refreshTokensExpireIn(Carbon::now()->addDays(30));

          Passport::enableImplicitGrant();

          Passport::tokensCan([
            //CLUBER
            'manage-sportfields'     => 'Administrar recintos deportivos - CRUD',
            'manage-courts'          => 'Administrar canchas - CRUD',
            'manage-maintenance'     => 'Administrar mantenciones - CRUD',
            'manage-availability'    => 'Administrar mantenciones - CRUD',
            //JOUER
            'manage-teams'           => 'Administrar recintos deportivos - CRUD',
            'manage-meetings'        => 'Administrar canchas - CRUD',
            'join/left-skills'       => 'Administrar mantenciones - CRUD',
            'join/leave-workshops'   => 'Administrar mantenciones - CRUD',
            //GENERAL
            'our_clients'            => 'Dar acceso a ciertos recursos a los desarrolladores',
            'manage-account'         => 'Administrar cuenta - CRUD (Menos eliminar la cuenta)',
          ]);
    }
}
