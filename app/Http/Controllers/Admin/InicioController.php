<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class InicioController extends Controller
{
    public function inicio()
    {
        $clientes = DB::table('clientes')->get();

        return view('admin.index', ['clientes' => $clientes]);
    }
}
