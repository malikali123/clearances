<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('imports', function (Blueprint $table) {
            $table->id();
            $table->string('type')->nullable();
            $table->string('decription')->nullable();
            $table->integer('quantity');
            $table->integer('price');
            $table->unsignedBigInteger('clearance_id')->unsigned();

            $table->foreign('clearance_id')
                ->references('id')
                ->on('clearances')
                ->onDelete('cascade');
          //  $table->timestamps();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('imports');
    }
}
