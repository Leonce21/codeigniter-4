<?php
if(!function_exists('current_route_name')){
    function current_route_name(){
        $router = \CodeIgniter\Config\Services::router();
        $route_options = $router->getMatchedRouteOptions();

        if (isset($route_options['as'])) {
            $route_name = $route_options['as'];
            return $route_name;
        } else {
            // Handle the case where there's no route name defined
            return '';  // Or a default value
        }
    }
}
