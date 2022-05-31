<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('desc');
            $table->string('engine');
            $table->unsignedInteger('fuel');
            $table->unsignedDecimal('price', $precision = 8, $scale = 2);
            $table->unsignedBigInteger('old_owner_id')->nullable();
            $table->timestamps();

            $table->index('old_owner_id', 'cars_old_owner_idx');
            $table->foreign('old_owner_id', 'cars_old_owner_fk')->on('old_owners')->references('id');

            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cars');
    }
};
