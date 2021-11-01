<?php

namespace App\Http\Controllers;

use App\DailyRowEj;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function welcome()
    {
        $items = DailyRowEj::get();
        return view('index', compact('items'));
    }

    public function perkanwil()
    {
        $items = DailyRowEj::select('*')->addSelect('kanwil')->groupBy('kanwil')->get();

        return view('perkanwil', compact('items'));
    }

    public function perkanwilType($kanwil, $type)
    {
        $items = DailyRowEj::query()
            ->where('kanwil', $kanwil)
            ->where('type', $type)
            ->get();
        return view('index', compact('items', 'type'));
    }
}
