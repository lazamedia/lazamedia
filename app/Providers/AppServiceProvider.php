<?php

namespace App\Providers;

use Illuminate\Pagination\Paginator;
use Illuminate\Pagination\PaginationState;
use Illuminate\Support\ServiceProvider;
use App\Models\User;
use Illuminate\Support\Facades\Gate;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {

        $this->app->bind('path.public', function() {
            return base_path().'/../public_html';
        });

        Paginator::useBootstrap();

        Gate::define('admin', function(User $user){
            return $user->is_admin;
        });
    }
}
