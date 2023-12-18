<?php

use App\Models\admin\Category;
use App\Models\admin\SubCategory;
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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('slug')->nullable();
            $table->string('front_image')->nullable();
            $table->string('image')->nullable();
            $table->string('back_image')->nullable();
            $table->text('benefits')->nullable();
            $table->tinyInteger('status')->nullable();
            $table->text('video_link')->nullable();
            $table->text('catelog_link')->nullable();
            $table->text('crop')->nullable();
            $table->text('dosage')->nullable();
            $table->text('packing')->nullable();
            $table->text('composition')->nullable();
            $table->foreignIdFor(Category::class)->nullable()->constrained()->onDelete('cascade');
            $table->foreignIdFor(SubCategory::class)->nullable()->constrained()->onDelete('cascade');
            $table->timestamps();
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
        Schema::dropIfExists('products');
    }
};
