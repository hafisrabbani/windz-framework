<?php

namespace App\Filters;

use App\Filters\Filter;
use Pecee\Http\Request;

class Sample implements Filter
{
    public function handle(Request $request): void
    {
        session_start();
        if (!isset($_SESSION['user'])) {
            header('Location: /login');
        }
    }
}
