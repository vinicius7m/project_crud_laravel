<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Pessoa;

class PessoaController extends Controller
{
    public function index() {
        $pessoas = Pessoa::paginate(10);

        return view('pessoas.index', compact('pessoas'));
    }

    public function create() {
        $pessoas = Pessoa::all(['id', 'nome']); 
        return view('pessoas.create');
    }

    public function pessoa(Request $request) {
        $data = $request->all();

        Pessoa::create($data);
        
        // flash('Pessoa registrada com sucesso')->success();

        return redirect()->route('admin.pessoas.index');
    }
}
