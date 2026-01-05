<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

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

        View::composer('*', function ($view) {
            $view->with('userData', [
                'name' => 'Rizky Fikry Fadillah',
                'tagline' => 'Full-Stack Developer',
                'bio' => 'Seorang full-stack developer yang berforkus pada pembuatan website modern, responsif dan mudah digunakan.',
                'email' => 'fikryrizky12@gmail.com',
                'location' => 'Bogor, Indonesia',
                'social' => [
                'github' => 'https://github.com/Noxrein',
                'linkedin' => 'https://www.linkedin.com/in/rizkyfikry/',
                'instagram' => 'https://www.instagram.com/rzfdillah/',
                'tiktok' => 'https://www.tiktok.com/@rxreinxii',
            ]
            ]);
        });
    }
}
