<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateActiveCampaignClientsTable extends Migration
{
    public function up()
    {
        Schema::create('active_campaign_clients', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('account_name')->nullable();
            $table->string('account_status')->nullable();
            $table->date('anniversay_date')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
