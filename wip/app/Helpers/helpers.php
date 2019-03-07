<?php


use App\Facades\Compass;

if (!function_exists('get_file_name')) {
    function get_file_name($name)
    {
        preg_match('/(_)([0-9])+$/', $name, $matches);
        if (count($matches) == 3) {
            return Illuminate\Support\Str::replaceLast($matches[0], '', $name).'_'.(intval($matches[2]) + 1);
        } else {
            return $name.'_1';
        }
    }
}

if (!function_exists('menu')) {
    function menu($menuName, $type = null, array $options = [])
    {
        return Compass::model('Menu')->display($menuName, $type, $options);
    }
}

if (!function_exists('setting')) {
    function setting($key, $default = null)
    {
        return Compass::setting($key, $default);
    }
}
