<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dier;

class DierController extends Controller
{
    public function index()
    {
        return view('dier.index', ['dieren' => Dier::all()]);
    }

    public function show(Dier $dier)
    {
        return view('dier.show', ['dier' => $dier]);
    }

    public function create()
    {
        return view('dier.create');
    }

    public function insert(Request $request)
    {
        $request->validate([
            'type' => 'required',
        ]);

        $dier = new Dier();
        $dier->type = $request->input('type');
        $dier->naam = $request->input('naam');

        if ($dier->save()) {
            return redirect()->route('dier.index');
        } else {
            var_dump("niet opgeslagen");
        }
    }

    public function edit(Dier $dier)
    {
        return view('dier.edit', ['dier' => $dier]);
    }

    public function update(Request $request, Dier $dier)
    {
        $dier->type = $request->input('type');
        $dier->naam = $request->input('naam');
        $dier->save();

        return redirect()->route('dier.edit', ['dier' => $dier->id]);
    }

    public function delete(Dier $dier)
    {
        if ($dier->delete()) {
            return redirect()->route('dier.index');
        } else {
            echo "fout bij verwijderen dier";
        }
    }
}
