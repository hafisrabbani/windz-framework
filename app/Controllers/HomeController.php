<?php

namespace App\Controllers;

use App\Models\User;
use App\Helpers\Debug;

class HomeController extends BaseController
{
    public function index()
    {
        $user = User::where('id', 1)->first();
        echo $this->blade->run("index", [
            "name" => "John Doe"
        ]);
    }
}
