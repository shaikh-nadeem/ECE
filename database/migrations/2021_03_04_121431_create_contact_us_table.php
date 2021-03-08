<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactUsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('contact_us')){
            Schema::create('contact_us', function (Blueprint $table) {
                $table->id();
                $table->string('name')->nullable();
                $table->string('region')->nullable();
                $table->string('contact_number')->nullable();
                $table->string('email')->nullable();
                $table->string('purpose')->nullable();
                $table->string('comments')->nullable()->comment('send by user');
                $table->string('reply')->nullable()->comment('reply by admin');
                $table->string('is_active')->nullable()->comment('1=active, 0=deactive');
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
        Schema::dropIfExists('contact_us');
    }
}
