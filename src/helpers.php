<?php

if (!function_exists('supportsWebp')) {
    function supportsWebp() {
        if (isset($_SERVER['HTTP_ACCEPT'])) {
            return strpos($_SERVER['HTTP_ACCEPT'], 'image/webp') !== false;
        }
        return false;
    }
}
