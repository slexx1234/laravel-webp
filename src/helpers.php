<?php

if (!function_exists('supportsWebp')) {
    function supportsWebp() {
        return strpos($_SERVER['HTTP_ACCEPT'], 'image/webp') !== false;
    }
}
