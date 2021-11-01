<?php

namespace App\Services;

use Border;
use App\DailyRowEj;
use Maatwebsite\Excel\Facades\Excel;

class Export
{
    public function export($kanwil = null, $type = null)
    {
        $sheet = 'ews';
        $filename = 'ews_all_' . date('Ymdhis');
        $items = DailyRowEj::get();

        if ($kanwil) {
            $items = DailyRowEj::where('kanwil', $kanwil)->get();
            $kanwil = '_' . str_replace(' ', '_', $items->first()->kanwil_name) . '_';
            $filename = 'ews' . $kanwil . date('YmdHis');
            $sheet = 'ews_' . $items->first()->kanwil_name;
        }

        if ($type) {
            $filename = 'ews' . $kanwil . strtolower($type) . '_' . date('YmdHis');
            $sheet = 'ews_' . $items->first()->kanwil_name . '_' . $type;
        }

        return Excel::create($filename, function ($excel) use ($sheet, $items) {
            $excel->sheet($sheet, function ($sheet) use ($items) {
                $sheet->setAutoSize(true);
                $sheet->loadView('table', compact('items'));
            });
        })->export('xlsx');
    }
}
