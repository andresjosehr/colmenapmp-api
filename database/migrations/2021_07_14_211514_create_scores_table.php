<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateScoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('scores', function (Blueprint $table) {
            $table->id();
            $table->string("category");
            $table->integer("isapre_id");
            $table->integer("plan_id");
            $table->string("ambulatory_payment_code");
            $table->string("description");
            $table->string("currency_ambulatory_type");
            $table->string("currency_hospitable_type");
            $table->float("score_weighting");
            $table->integer("ambulatory_porccob");
            $table->integer("hospitable_porccob");
            $table->integer("benefits_analyzed");
            $table->float("account_score");
            $table->float("plan_score");
            $table->float("ambulatory_score");
            $table->float("hospitable_score");
            $table->integer("provider_id");
            $table->float("ambulatory_limit");
            $table->float("hospitable_limit");
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
        Schema::dropIfExists('scores');
    }
}
