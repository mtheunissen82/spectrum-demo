<?php

namespace App\Http\Controllers;

use App\Dier;
use App\DierSoort;
use Illuminate\Http\Request;

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
        return view('dier.create', ["dierSoorten" => DierSoort::all()]);
    }

    public function insert(Request $request)
    {
        $request->validate([
            'soort' => 'required|integer',
            'naam' => 'required|max:10',
        ]);

        $dierSoort = DierSoort::find($request->input('soort'));

        // always validate user input
        if (!$dierSoort) {
            echo "diersoort niet geldig! exit code";
            exit;
        }

        $dier = new Dier();
        $dier->naam = $request->input('naam');
        $dier->soort()->associate($dierSoort);

        if ($dier->save()) {
            return redirect()->route('dier.index');
        } else {
            var_dump("niet opgeslagen");
        }
    }

    public function edit(Dier $dier)
    {
        return view('dier.edit', ['dier' => $dier, 'dierSoorten' => DierSoort::all()]);
    }

    public function update(Request $request, Dier $dier)
    {
        $request->validate([
            'soort' => 'required|integer',
            'naam' => 'required|max:10',
        ]);

        $dier->naam = $request->input('naam');
        $dier->soort()->associate(DierSoort::find($request->input('soort')));
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
