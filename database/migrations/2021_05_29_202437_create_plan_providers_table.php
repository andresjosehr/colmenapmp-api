<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlanProvidersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plan_providers', function (Blueprint $table) {
            $table->id();
            $table->integer("plan_id");
            $table->integer("provider_id");
            $table->float("percentage_ambulatory")->default(0)->nullable();
            $table->float("percentage_hospitable")->default(0)->nullable();
            $table->float("urgency_amount")->default(0)->nullable();
            $table->string("urgency_unit")->default("%")->nullable();
            $table->timestamps();
            $table->index(['plan_id', 'provider_id']);
            // ALTER TABLE `plan_providers` ADD INDEX `plan_providers_idx_plan_id_provider_id` (`plan_id`,`provider_id`);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('plan_providers');
    }
}
