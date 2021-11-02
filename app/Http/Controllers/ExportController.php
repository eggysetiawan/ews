<?php

namespace App\Http\Controllers;

use App\DailyRowEj;
use App\Http\Requests;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services\Export;
use Carbon\Carbon;

class ExportController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function export()
    {
        return (new Export())->export();
    }



    public function perkanwil($kanwil)
    {
        return (new Export())->export($kanwil);
    }
    public function perkanwiltype($kanwil, $type)
    {
        return (new Export())->export($kanwil, $type);
    }

    public function uker()
    {
        return (new Export())->export(null, null, true);
    }
}
