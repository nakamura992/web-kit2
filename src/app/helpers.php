<?php

if (!function_exists('ddc')) {
    function ddc($data, ...$args)
    {
        clock($data, ...$args);
        abort(500);
    }
}
