<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Train;
use Illuminate\Http\Request;
use Carbon\Carbon;

class PageController extends Controller
{
    public function index()
    {

        $currentDate = Carbon::now()->toDateString();
        // $trains = Train::all();
        $trains = Train::whereDate('departure_time', $currentDate)->get();

        // dd($trains);
        return view('home', compact('trains'));

    }

}
