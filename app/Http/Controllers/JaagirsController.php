<?php

namespace App\Http\Controllers;

use App\Http\Requests\JaagirRequest;
use App\Jaagir;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class JaagirsController extends Controller
{
    public function index(){
        $jaagirs = Jaagir::latest('updated_at')->published()->get();

        return view('jaagirs.index', compact('jaagirs'));
    }

    public function show(Jaagir $jaagir){
        return view('jaagirs.show', compact('jaagir'));
    }

    public function  create(){
        return view('jaagirs.create');
    }

    public function  store(JaagirRequest $request){
        $this->createJaagir($request);

        flash()->overlay('Your jobs has been posted.', 'Job Posted');

        return redirect('jaagirs');
    }

    public function edit(Jaagir $jaagir){
        return view('jaagirs.edit', compact('jaagir'));
    }

    public function update(Jaagir $jaagir, JaagirRequest $request){
        $jaagir->update($request->all());

        return redirect('jaagirs');
    }

    private function createJaagir( JaagirRequest $request){
        $jaagir = Auth::user()->jaagirs()->create($request->all());

        return    $jaagir;
    }

}
