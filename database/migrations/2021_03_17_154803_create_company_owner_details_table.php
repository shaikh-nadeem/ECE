<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompanyOwnerDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('company_owner_details', function (Blueprint $table) {
            $table->id();
            $table->string('center_manager_detail_id')->nullable();
            $table->string('billing_detail_id')->nullable();
            $table->string('company_legal_name')->nullable();
            $table->string('company_trading_name')->nullable();
            $table->string('company_center_address')->nullable();
            $table->string('company_suburb')->nullable();
            $table->string('company_region')->nullable();
            $table->string('company_office_address')->nullable();
            $table->string('owner_name')->nullable();
            $table->string('owner_contact_number')->nullable();
            $table->string('owner_email')->nullable();
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
        Schema::dropIfExists('company_owner_details');
    }
}
