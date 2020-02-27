<?php

namespace App\Http\Controllers;

use App\Dier;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        echo "<pre>";
        $result = DB::table('dier')->select('id')->where('type', 'like', '%a%')->get();

        foreach ($result as $dier) {
            $dierObject = Dier::find($dier->id);
            var_dump($dierObject);
        }

        $katten = Dier::where('type', 'like', '%a%')->get();
        var_dump($katten);

        echo "</pre>";
        return view('home');
    }
}
