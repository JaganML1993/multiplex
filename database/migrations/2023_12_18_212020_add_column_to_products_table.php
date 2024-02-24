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
           
            $table->text('active_ingredients')->nullable();
            $table->text('mode_of_action')->nullable();
            $table->text('precautions')->nullable();
            $table->text('special_features')->nullable();
            $table->text('time_of_erection')->nullable();
            $table->text('note')->nullable();
            $table->text('plant_type')->nullable();
            $table->text('plant_height')->nullable();
            $table->text('duration')->nullable();
            $table->text('fruit_shape')->nullable();
            $table->text('fruit_weight')->nullable();
            $table->text('crud_weight')->nullable();
            $table->text('fruit_color')->nullable();
            $table->text('fruit_length')->nullable();
            $table->text('pod_length')->nullable();
            $table->text('flowering')->nullable();
            $table->text('fruit_bearing')->nullable();
            $table->text('root_length')->nullable();
            $table->text('harvesting')->nullable();
            $table->text('package_of_practices')->nullable();
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
            $table->dropColumn([
               
                'active_ingredients',
                'mode_of_action',
                'precautions',
                'special_features',
                'time_of_erection',
                'note',
                'plant_type',
                'plant_height',
                'duration',
                'fruit_shape',
                'fruit_weight',
                'crud_weight',
                'fruit_color',
                'fruit_length',
                'pod_length',
                'flowering',
                'fruit_bearing',
                'root_length',
                'harvesting',
                'package_of_practices',
            ]);
        });
    }
};
