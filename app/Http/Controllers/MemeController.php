<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;

class MemeController extends Controller
{
    public function __invoke(): View
    {
        $files = Storage::files('memes');

        return view('memes', ['files' => $files]);
    }
}
