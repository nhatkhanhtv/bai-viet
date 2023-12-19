<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBinhLuansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('binh_luan', function (Blueprint $table) {
            $table->id();
            $table->string('email_nguoi_binh_luan');
            $table->string('ten_nguoi_binh_luan');
            $table->text('noi_dung');
            $table->unsignedBigInteger('id_bai_viet');
            $table->timestamps();

            $table->foreign('id_bai_viet')
                ->on('bai_viet')
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
        Schema::dropIfExists('binh_luan');
    }
}
