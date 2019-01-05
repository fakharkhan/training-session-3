<?php

namespace App\Providers;

use App\Observers\UserObserver;
use App\User;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        User::observe(UserObserver::class);

        Blade::directive('text', function ($expression) {
            return  $this->includeField('controls.text',$expression);
        });

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
    //this method is just used for the demo of blade custom
    // directive
    // by default this method does not come with laravel app service provide
    public function includeField($view,$expression)
    {
        if (!$expression) {
            $expression = [];
        }

        return "<?php echo \$__env->make('{$view}',[$expression], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>";

    }
}
