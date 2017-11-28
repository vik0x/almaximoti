<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddGetProviderProcedure extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $sql = 'CREATE PROCEDURE get_provider( IN product_id_proc INT(10) )
            BEGIN
                SELECT
                    p.id,
                    p.name,
                    detail.key as clave,
                    detail.price
                FROM
                    product_providers as detail JOIN providers as p on p.id = detail.provider_id
                WHERE
                    detail.product_id = product_id_proc
                ORDER BY p.name;
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
        $sql = 'DROP PROCEDURE get_provider;';
        \DB::unprepared($sql);
    }
}
