<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
use App\Models\Post;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        //
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        Gate::define('read-post', function (User $user, Post $post) {
            return $user->id === $post->user_id ? 
            Response ::allow() :
            Response ::deny('connection refusé ');
        });
        Gate::define('update-post', function (User $user, Post $post) {
            return $user->id === $post->user_id;
        });
    } 
}
