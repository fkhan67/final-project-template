<?php

namespace app\core;

class Controller
{
    public function view($path, $data = [], $includeBundle = false)
    {
        // Extract data variables for use in the included view file
        extract($data);

        // Include the JavaScript bundle if needed
        if ($includeBundle) {
            echo vite('main.js'); // Assuming vite is a function to include JavaScript bundles
        }

        // Include the HTML view file
        include $path;
    }
}
