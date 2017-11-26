<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddGetProductsProcedure extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $sql = 'CREATE PROCEDURE get_products()
            BEGIN
                SELECT
                    p.id,
                    p.name,
                    p.key,
                    t.name as type
                FROM
                    products AS p
                JOIN product_types AS t ON t.id = p.product_type_id;
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
        $sql = 'DROP PROCEDURE get_products;';
        \DB::unprepared($sql);
    }
}
