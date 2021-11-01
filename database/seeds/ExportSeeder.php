<?php

use Carbon\Carbon;
use App\DailyRowEj;
use Illuminate\Database\Seeder;

class ExportSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // ATM
        for ($i = 0; $i <= 20; $i++) {
            $kanwil = str_pad($i, 2, '0', STR_PAD_LEFT);
            DailyRowEj::insert([
                'kanwil' => $kanwil,
                'kanwil_name' => 'Kanwil ' . $kanwil,
                'tid' => rand(1111111, 99999999),
                'ip_address' => '172.18.135.' . ($i + 2),
                'branch2' => rand(111111, 999999),
                'pengelola' => 'Pengelola ' . $kanwil,
                'brand' => 'NCR',
                'type' => 'ATM',
                'version' => 'V20201010',
                'summary' => 'Duplicate Row',
                'last_update_ej_online' => Carbon::now()->AddDays('+' . rand(1, 10)),
                'row_ej' => rand(1, 50),
                'row_ej_table' => rand(100, 200),
                'last_index_id' => rand(1, 200),
                'installation_status' => 'Success to Install NXLog',
                'created_at' => Carbon::now()->addHours(rand(1, 24))->toDateTimeString(),
                'updated_at' => Carbon::now()->addHours(rand(1, 24))->toDateTimeString()
            ]);
        }

        // CRM
        for ($i = 0; $i <= 20; $i++) {
            $kanwil = str_pad($i, 2, '0', STR_PAD_LEFT);
            DailyRowEj::insert([
                'kanwil' => $kanwil,
                'kanwil_name' => 'Kanwil ' . $kanwil,
                'tid' => rand(1111111, 99999999),
                'ip_address' => '172.18.135.' . ($i + 2),
                'branch2' => rand(111111, 999999),
                'pengelola' => 'Pengelola ' . $kanwil,
                'brand' => 'Hyosung',
                'type' => 'CRM',
                'version' => '20201010',
                'summary' => 'Duplicate Row',
                'last_update_ej_online' => Carbon::now()->AddDays('+' . rand(1, 10)),
                'row_ej' => rand(1, 50),
                'row_ej_table' => rand(100, 200),
                'last_index_id' => rand(1, 200),
                'installation_status' => 'Success to Install NXLog',
                'created_at' => Carbon::now()->addHours(rand(1, 24))->toDateTimeString(),
                'updated_at' => Carbon::now()->addHours(rand(1, 24))->toDateTimeString()
            ]);
        }
    }
}
