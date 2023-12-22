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
        Schema::table('products', function (Blueprint $table) {
            $table->string('type_of_deficiency')->nullable();
            $table->string('image1')->nullable();
            $table->string('image2')->nullable();
            $table->string('role_of_deficiency')->nullable();
            $table->string('role_description')->nullable();
            $table->string('deficiency')->nullable();
            $table->string('deficiency_description')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('products', function (Blueprint $table) {
            //
        });
    }
};
