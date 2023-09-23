<?php

function checkRouteActive($route)
{
    if (Route::current()->uri == $route) {
        return 'active';
    }
}

