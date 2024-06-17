<?php

if (!function_exists('asana')) {
    /**
     * Get the asana instance.
     *
     * @return \Andrez89\LaravelAsana\Asana
     */
    function asana()
    {
        return app('torann.asana');
    }
}
