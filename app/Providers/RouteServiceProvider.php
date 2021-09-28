<?php

namespace App\Providers;

use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Route;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * The path to the "home" route for your application.
     *
     * This is used by Laravel authentication to redirect users after login.
     *
     * @var string
     */
    public const HOME = '/home';

    /**
     * The controller namespace for the application.
     *
     * When present, controller route declarations will automatically be prefixed with this namespace.
     *
     * @var string|null
     */
    protected $namespace = 'App\\Http\\Controllers';

    /**
     * Define your route model bindings, pattern filters, etc.
     *
     * @return void
     */
    public function boot()
    {
        $this->configureRateLimiting();

        $this->routes(function () {
            Route::prefix('api')
                ->middleware('api')
                ->namespace($this->namespace)
                ->group(base_path('routes/api.php'));

            Route::middleware('web')
                ->namespace($this->namespace)
                ->group(base_path('routes/web.php'));
            
            Route::middleware('admin')
                ->namespace($this->namespace)
                ->group(base_path('routes/admin.php')); 

            Route::middleware('super-admin')
                ->namespace($this->namespace)
                ->group(base_path('routes/super-admin.php'));

            Route::middleware('player')
                ->namespace($this->namespace)
                ->group(base_path('routes/front/player.php'));
            Route::middleware('trainer')
                ->namespace($this->namespace)
                ->group(base_path('routes/front/trainer.php'));
                
            Route::middleware('referee')
                ->namespace($this->namespace)
                ->group(base_path('routes/front/referee.php'));

            Route::middleware('manager')
                ->namespace($this->namespace)
                ->group(base_path('routes/front/manager.php'));
                
            Route::middleware('coach')
                ->namespace($this->namespace)
                ->group(base_path('routes/front/coach.php'));
            Route::middleware('referee')
                ->namespace($this->namespace)
                ->group(base_path('routes/front/referee.php'));
        });
    }

    /**
     * Configure the rate limiters for the application.
     *
     * @return void
     */
    protected function configureRateLimiting()
    {
        RateLimiter::for('api', function (Request $request) {
            return Limit::perMinute(60)->by(optional($request->user())->id ?: $request->ip());
        });
    }
}
