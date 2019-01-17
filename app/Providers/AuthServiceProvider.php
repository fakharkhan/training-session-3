<?php

namespace App\Providers;


use App\Policies\RolePolicy;
use App\Policies\StudentPolicy;
use App\Post;
use App\Role;
use App\Student;
use Illuminate\Support\Facades\Event;
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
        Student::class => StudentPolicy::class,
        Role::class => RolePolicy::class
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('create-student', function ($user) {
            return $user->id == 9;
        });


        Event::listen('students.create', function ($user, $student) {
            logger('A new student is created:',[$user, $student]);
        });
    }
}
