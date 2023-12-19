<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChuyenMucsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chuyen_muc', function (Blueprint $table) {
            $table->unsignedTinyInteger('id')->autoIncrement();
            $table->string('ten_chuyen_muc');
            // $table->timestamps();

        });

        Schema::create('bai_viet_thuoc_chuyen_muc', function (Blueprint $table) {
            $table->unsignedBigInteger('id_bai_viet');
            $table->unsignedTinyInteger('id_chuyen_muc');

            $table->foreign('id_bai_viet','fk_bai_viet_thuoc_chuyen_muc')
                ->on('bai_viet')
                ->references('id')
                ->cascadeOnDelete()
                ->cascadeOnUpdate();

            $table->foreign('id_chuyen_muc','fk_chuyen_muc_co_bai_viet')
                ->on('chuyen_muc')
                ->references('id')
                ->cascadeOnDelete()
                ->cascadeOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bai_viet_thuoc_chuyen_muc');
        Schema::dropIfExists('chuyen_muc');
    }
}
