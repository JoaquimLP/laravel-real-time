<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index()
    {
        return view('site.home.index');
    }

    public function create()
    {
        return view('site.home.create');
    }


    public function store(Request $request)
    {
        $user = User::first();

        $post = $user->post()->create([
            'title' => $request->title,
            'body' => $request->body,
        ]);
        return view('site.home.create');
    }
}
