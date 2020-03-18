<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Schema;
use Carbon\Carbon;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot() {

        Blade::directive('currency', function ($expression) {
            return "Rp. <?php echo number_format($expression, 0, ',', '.'); ?>";
        });

        /** greeting */
        Blade::directive('greeting', function () {
            $hours      = (int)Carbon::parse(Carbon::now())->format('H');
            $locale     = App::getLocale();
            $message    = NULL;
            if($hours >= 3 && $hours < 10) {
                $message = 'Wilujeung Engjing';
            }
            else if($hours > 10 && $hours <= 15) {
                $message = 'Good Siang';
            }
            else if($hours > 15 && $hours <= 18) {
                $message = 'Good Sonten';
            }
            else {
                $message = "Wilujeung Wengi";
            }
            return $message;
        });
    }
}
