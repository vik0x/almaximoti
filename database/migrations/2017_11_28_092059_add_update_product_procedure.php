<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddUpdateProductProcedure extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $sql = 'CREATE PROCEDURE update_product(
                IN id_proc INT(10),
                IN type_proc INT(10),
                IN key_proc VARCHAR(255),
                IN name_proc VARCHAR(255),
                IN active_proc TINYINT(4)
            )
            BEGIN
                UPDATE
                    products
                SET
                    products.product_type_id = type_proc,
                    products.key = key_proc,
                    products.name = name_proc,
                    products.active = active_proc
                WHERE
                    products.id = id_proc;
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
        $sql = 'DROP PROCEDURE update_product;';
        \DB::unprepared($sql);
    }
}
