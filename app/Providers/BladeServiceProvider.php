<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use Illuminate\Support\Facades\Blade;

class BladeServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        Blade::directive('text', function ($expression) {
            return  $this->includeField('controls.text',$expression);
        });

    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    public function includeField($view,$expression)
    {
        if (!$expression) {
            $expression = [];
        }

        return "<?php echo \$__env->make('{$view}',[$expression], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>";

    }
}
