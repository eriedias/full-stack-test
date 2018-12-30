<?php

namespace App\Http\Controllers\Admin;

use App\Usuario;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class InicioController extends Controller
{
    public function index()
    {
        $usuarios = Usuario::all();
        return view('admin.index', ['usuarios' => $usuarios]);
    }
}
