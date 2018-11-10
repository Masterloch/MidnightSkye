<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Router 
{
    protected $routes = [];
    
    public function define($routes) {
        $this->routes = $routes;
    }
    
    public function direct($uri) {
        $uri_array = [];
        if (substr($uri, 0,12) == 'core/images/') {
            $uri_array['type'] = 'image';
            $image_path = $uri;
            $uri_array['path'] = $image_path;
            return $uri_array;
        }
        elseif (array_key_exists($uri, $this->routes)) {
            $uri_array['type'] = 'route';
            $uri_array['path'] = $this->routes[$uri];
            return $uri_array;
        }
        else {
            throw new Exception('No Route Defined.');
        }
    }
}


//
//Base 54 encoding images
//
//$imageData = base64_encode(file_get_contents($image));
//$uri_array['content'] = '<img src="data:image/png;base64,'.$imageData.'">';
//$uri_array['content'] = $imageData;

