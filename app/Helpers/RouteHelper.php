<?php

namespace App\Helpers;

use Illuminate\Http\Request;

class RouteHelper
{
    /*
    |--------------------------------------------------------------------------
    | Detect Active Route
    |--------------------------------------------------------------------------
    |
    | Compare given route with current route and return output if they match.
    | Very useful for navigation, marking if the link is active.
    |
    */
    public static function isActiveRoute($routeGroup)
    {
        if (strpos(request()->route()->getName(), $routeGroup) !== false)
            return "active";
        return "";
    }

    /*
    |--------------------------------------------------------------------------
    | Detect Active Routes
    |--------------------------------------------------------------------------
    |
    | Compare given routes with current route and return output if they match.
    | Very useful for navigation, marking if the link is active.
    |
    */
    public static function areActiveRoutes(Array $routes)
    {
        $request = request();

        foreach ($routes as $route) {
            if (strpos(request()->route()->getName(), $route) !== false)
                return "active";
        }
        return "";
    }
}
