<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Validator;

class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        //
    }

    public function boot(): void
    {
        Validator::replacer('unique', function ($message, $attribute, $rule, $parameters) {
            if ($attribute === 'email') {
                return 'O e-mail informado já está em uso.';
            }

            return $message;
        });
    }
}
