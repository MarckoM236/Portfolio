<?php

//activar la case active en la navegacion
function setActive($routeName){
    return request()->routeIs($routeName) ? 'active' : '';
}