<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBaiVietsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bai_viet', function (Blueprint $table) {
            $table->id();
            $table->string('chu_de');
            $table->text('noi_dung');
            
            $table->unsignedInteger('id_tac_gia');
            $table->timestamps();

            $table->foreign('id_tac_gia')
                ->on('danh_sach_tac_gia')
                ->references('id')
                ->restrictOnDelete()
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
        Schema::dropIfExists('bai_viet');
    }
}
