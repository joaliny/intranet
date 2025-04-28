<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.admin'); // Use pontos para subdiretórios
    }

    public function colaboradores()
    {
        return view('admin.colaboradores'); // Use pontos para subdiretórios
    }

    // public function ramais()
    // {
    //     return view('admin.ramais'); // Use pontos para subdiretórios
    // }
}

