<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function index() {
        return <<<EOF
        <html>
            <body>
                <p>Hello!</p>
            </body>
        </html>
EOF;
    }
}
