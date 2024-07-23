<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLogtrailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('logtrails', function (Blueprint $table) {
            $table->id();
            $table->string('item_name')->nullable();
            $table->string('count')->nullable();
            $table->string('remaining')->nullable();
            $table->string('admin_name')->nullable();
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
        Schema::dropIfExists('logtrails');
    }
}
