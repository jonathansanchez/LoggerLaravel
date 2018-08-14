<?php namespace App\Providers;

use App\Infrastructure\Logging\Laravel\LaravelLogger;
use App\Infrastructure\Persistence\Eloquent\EloquentUserRepository;
use Illuminate\Support\ServiceProvider;


class InfrastructureServiceProvider extends ServiceProvider {
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * This service provider is a great spot to register your various container
     * bindings with the application. As you can see, we are registering our
     * "Registrar" implementation here. You can add your own bindings too!
     *
     * @return void
     */
    public function register()
    {
        $this->registerLaravelLogger();
        $this->registerUserRepository();
    }

    private function registerLogger()
    {
        $this->app->singleton(
                'App\Infrastructure\Logging\Logger',
                'App\Infrastructure\Logging\Laravel\LaravelLogger', function() {
                return new LaravelLogger();
            }
        );
    }

    /**
     * Another service that use Logger by Dependency Injection
     */
    private function registerUserRepository()
    {
        $this->app->singleton(
            'App\Models\User\UserRepository',
            'App\Infrastructure\Persistence\Eloquent\EloquentUserRepository', function($app) {
                return new EloquentUserRepository($app['Logger']);
            }
        );
    }
}


