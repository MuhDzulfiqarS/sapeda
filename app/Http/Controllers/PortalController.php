<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortalController extends Controller
{
    // This method will handle the request when the link to "Portal 1" is clicked.
    public function home()
    {
        // You can place the logic for handling the "Portal 1" page here.
        // For example, you can pass some data to the view and display it.
        $data = [
            'pageTitle' => 'Portal 1',
            'moduleName' => 'Module 1',
            // Add other data as needed...
        ];

        return view('landing_page', $data);
    }
}
