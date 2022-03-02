<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBannersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('banners', function (Blueprint $table) {
            $table->id();
            $table->integer('seq')->default(99);
            $table->string('type')->index();
            $table->string('url',100)->nullable();
            $table->string('slug')->unique();
            $table->string('webImage');
            $table->string('mobImage');
            $table->enum('status',['active','inactive'])->default('inactive');
            $table->date('startDate')->nullable();
            $table->date('endDate')->nullable();
            $table->string('title')->nullable();
            $table->string('description')->nullable();
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
        Schema::dropIfExists('banners');
    }
}
