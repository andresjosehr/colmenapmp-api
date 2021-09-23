<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plans', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->string("code")->unique()->nullable()->default(null);
            $table->string("description")->nullable();
            $table->integer("isapre_id");
            $table->float("base_factor")->nullable();
            $table->integer("plan_type_id");
            $table->integer("ambulatory_percentage")->default(0);
            $table->integer("hospitable_percentage")->default(0);
            $table->integer("urgency_percentage")->default(0);
            $table->integer("annual_limit")->default(0);
            $table->boolean("regional")->default(false);
            $table->boolean("national")->default(false);
            $table->string("source")->nullable();
            $table->string("pdf")->nullable()->default(null);
            $table->string("pdf_benefits")->nullable()->default(null);
            $table->timestamps();

            $table->index(['isapre_id', 'plan_type_id']);
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('plans');
    }
}
