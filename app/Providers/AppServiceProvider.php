<?php

namespace App\Providers;

use Illuminate\Support\Facades\Response;
use Illuminate\Support\ServiceProvider;

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
        Response::macro('sendResponse', function ($data, $message) {
            return response()->json([
                'success' => true,
                'message' => $message,
                'data' => $data
            ]);
        });

        Response::macro('success', function ($message) {
            return response()->json([
                'success' => true,
                'message' => $message
            ]);
        });

        Response::macro('error', function ($message, $statusCode) {
            return response()->json([
                'success' => false,
                'message' => $message
            ], $statusCode);
        });
    }
}
