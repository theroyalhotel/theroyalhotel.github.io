<?php

namespace App\Providers;

use App\Permissions;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ViewServiceProvider extends ServiceProvider
{

    public function register()
    {
        //
    }

    public function boot()
    {
        View::composer('*', function ($view) {
            $user_provider = Auth::user();
            if ($user_provider) {
                $user_provider->permission_name = Permissions::find($user_provider->id_permission)->name;
                $view->with([
                    'user_provider' => $user_provider,
                ]);
            };
        });
    }
}
