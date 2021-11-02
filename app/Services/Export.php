<?php

namespace App\Services;

use Border;
use App\DailyRowEj;
use Maatwebsite\Excel\Facades\Excel;

class Export
{
    public function export($kanwil = null, $type = null, $uker = null)
    {
        $sheet = 'ews';
        $filename = 'ews_all_' . date('Ymdhis');
        $items = DailyRowEj::get();

        if (!empty($kanwil)) {
            $items = DailyRowEj::where('kanwil', $kanwil)->get();
            $kanwil = '_' . str_replace(' ', '_', $items->first()->kanwil_name) . '_';
            $filename = 'ews' . $kanwil . date('YmdHis');
            $sheet = 'ews_' . $items->first()->kanwil_name;
        }

        if ($type) {
            $filename = 'ews' . $kanwil . strtolower($type) . '_' . date('YmdHis');
            $sheet = 'ews_' . $items->first()->kanwil_name . '_' . $type;
        }

        if ($uker) {
            $filename = 'ews_uker_' . date('YmdHis');
        }

        return Excel::create($filename, function ($excel) use ($sheet, $items, $uker) {
            $excel->sheet($sheet, function ($sheet) use ($items, $uker) {
                $sheet->setAutoSize(true);

                if ($uker) {
                    $sheet->loadView('uker', compact('items'));
                } else {
                    $sheet->loadView('table', compact('items'));
                }
            });
        })->export('xlsx');
    }
}
