<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddDeleteProviderProcedure extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $sql = 'CREATE PROCEDURE delete_provider( IN product_id_proc INT(10),IN provider_id_proc INT(10) )
            BEGIN
                DELETE
                FROM
                    product_providers
                WHERE
                    product_id = product_id_proc AND provider_id = provider_id_proc;
            END';
        \DB::unprepared($sql);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        $sql = 'DROP PROCEDURE delete_provider;';
        \DB::unprepared($sql);
    }
}
