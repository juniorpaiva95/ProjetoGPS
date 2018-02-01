<?php
/**
 * Created by PhpStorm.
 * User: junior
 * Date: 31/01/18
 * Time: 21:49
 */

/**
 * Return nav-here if current path begins with this path.
 *
 * @param string $path
 * @return string
 */
function setActive($pattern)
{
//    return \Illuminate\Support\Facades\Request::is($path . '*') ? 'current' :  '';
    $path = request()->path();
    $pattern = str_replace('/','\\/', $pattern);
    $pattern = str_replace('*','.*', $pattern);

    return preg_match("/{$pattern}/i", $path) ? 'current' : '';
}