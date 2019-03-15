<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists ( 'p_pais' );
        Schema::create ( 'p_pais', function (Blueprint $table) {
            $table->increments ( 'CODIGO_PAIS' )->unique();
            $table->string ( 'NOMBRE' )->unique();
            $table->char ( 'ISO', 5 )->unique();
            $table->integer ( 'CODIGO_TELEFONICO' )->unique();
            $table->string ( 'created_by' )->default ( 'admin' );
            $table->softDeletes ();
            $table->timestamps ();
        } );
            
            DB::statement('ALTER TABLE p_pais CHANGE CODIGO_PAIS CODIGO_PAIS INT(3) UNSIGNED ZEROFILL NOT NULL');
            DB::statement('ALTER TABLE p_pais CHANGE CODIGO_TELEFONICO CODIGO_TELEFONICO INT(3) UNSIGNED ZEROFILL NOT NULL');
        
        

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('p_pais');
    }
}
