<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransacsionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transacsions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('import_id');
            $table->unsignedBigInteger('clearance_id');
            $table->unsignedBigInteger('account_id');
            $table->unsignedBigInteger('amount');
            $table->text('statement');

            $table->foreign('clearance_id')
                ->references('id')
                ->on('clearances')
                ->onDelete('cascade');

            $table->foreign('import_id')
                ->references('id')
                ->on('imports')
                ->onDelete('cascade');

            $table->foreign('account_id')
                ->references('id')
                ->on('accounts')
                ->onDelete('cascade');


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
        Schema::dropIfExists('transacsions');
    }
}
