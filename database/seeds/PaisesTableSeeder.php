<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use app\Pais;

class PaisesTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        DB::table ( 'p_pais' )->insert ( array (
            'CODIGO_PAIS' => 169,
            'NOMBRE' => urlencode ( 'Colombia' ),
            'ISO' => 'CO',
            'CODIGO_TELEFONICO' => 57,
            'created_by' => 'admin',
            'created_at' => Carbon::now ()
        ) );
//         factory ( Pais::class, 50 )->create();
    }
}
