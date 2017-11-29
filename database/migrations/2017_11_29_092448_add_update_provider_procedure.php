<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddUpdateProviderProcedure extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $sql = 'CREATE PROCEDURE update_provider(
                IN product_id_proc INT(10),
                IN provider_id_proc INT(10),
                IN provider_last_id_proc INT(10),
                IN clave_proc VARCHAR(255),
                IN price_proc FLOAT(8,2)
            )
            BEGIN
                IF provider_last_id_proc != 0 THEN
                    UPDATE
                        product_providers AS p
                    SET
                        p.provider_id   = provider_id_proc,
                        p.key           = clave_proc,
                        p.price         = price_proc
                    WHERE
                        p.product_id = product_id_proc AND p.provider_id = provider_last_id_proc;
                ELSE
                    INSERT INTO product_providers(product_id,provider_id,product_providers.key,price)
                    VALUES(product_id_proc,provider_id_proc,clave_proc,price_proc);
                END IF;
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
        $sql = 'DROP PROCEDURE update_provider;';
        \DB::unprepared($sql);
    }
}
