<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return 'welcome';
    }

    public function about()
    {
        return 'Name: Evan Diantha Fafian, NIM: 2341760163';
    }

    public function articles($id)
    {
        return "Article Page with id {$id}";
    }
}
