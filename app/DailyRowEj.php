<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DailyRowEj extends Model
{
    protected $table = 'ejlog_report_row';

    protected $fillable = [
        'index',
        'dbname',
        'kanwil',
        'tid',
        'ip_address',
        'branch2',
        'pengelola',
        'brand',
        'type',
        'installation_status',
        'version',
        'summary',
        'kanwil_name',
        'last_update_ej_online',
        'row_ej',
        'row_ej_table',
        'last_index_id',
        'created_at',
        'updated_at'
    ];

    public function getAccLastUpdateEjOnlineAttribute()
    {
        return date('d F, Y', strtotime($this->last_update_ej_online));
    }

    public function getAccCreatedAtAttribute()
    {
        return date('d F, Y', strtotime($this->created_at));
    }

    public function getAccAtmCountAttribute()
    {
        return DailyRowEj::where('type', 'ATM')->count();
    }

    public function getAccCrmCountAttribute()
    {
        return DailyRowEj::where('type', 'CRM')->count();
    }
}
