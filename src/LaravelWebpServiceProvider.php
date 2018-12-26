<?php

namespace Slexx\LaravelWebp;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class LaravelWebpServiceProvider extends ServiceProvider
{
    /**
     * @return void
     */
    public function boot()
    {
        Blade::directive('webpJS', function() {
            return "<script>(function(){window.IS_SUPPORTS_WEBP=false;window.supportsWebp=function(){return window.IS_SUPPORTS_WEBP;};document.addEventListener('DOMContentLoaded',function(){var w=new Image();w.src='data:image/webp;base64,UklGRjoAAABXRUJQVlA4IC4AAACyAgCdASoCAAIALmk0mk0iIiIiIgBoSygABc6WWgAA/veff/0PP8bA//LwYAAA';w.onload=w.onerror=function(){document.querySelector('html').classList.add(w.height==2?'webp':'no-webp');window.IS_SUPPORTS_WEBP=w.height==2;};});})();</script>";
        });

        Blade::directive('webp', function() {
            return '<?php if (supportsWebp()): ?>';
        });

        Blade::directive('endwebp', function() {
            return '<?php endif; ?>';
        });
    }

    /**
     * @return void
     */
    public function register()
    {
        //
    }
}