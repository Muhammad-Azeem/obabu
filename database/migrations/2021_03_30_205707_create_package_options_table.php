<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePackageOptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('package_options', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('package_id')->unsigned()->nullable();
            $table->foreign('package_id')->references('id')->on('packages')->onDelete('cascade');
            $table->string('number')->nullable();
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
        Schema::dropIfExists('package_options');
    }
}
