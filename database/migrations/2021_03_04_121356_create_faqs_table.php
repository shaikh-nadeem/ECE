<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFaqsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('faqs')){
            Schema::create('faqs', function (Blueprint $table) {
                $table->id();
                $table->string('category')->nullable();
                $table->string('title')->nullable();
                $table->string('content')->nullable();
                $table->string('status')->nullable()->default(1)->comment('1=active 0=deactive');
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('faqs');
    }
}
