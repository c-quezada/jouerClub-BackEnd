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
            'manege-sportfields'   => 'Administrar recintos deportivos - CRUD',
            'manege-courts'        => 'Administrar canchas - CRUD',
            'manege-maintenance'   => 'Administrar mantenciones - CRUD',
            'manege-availability'  => 'Administrar mantenciones - CRUD',
            //JOUER
            //GENERAL
            'our_clients'          => 'Dar acceso a ciertos recursos a los desarrolladores',
            'manege-account'       => 'Administrar cuenta - CRUD (Menos eliminar la cuenta)',
          ]);
    }
}
