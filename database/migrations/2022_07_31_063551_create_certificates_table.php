<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCertificatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('certificates', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->string('notary')->nullable();
            $table->string('number')->nullable();
            $table->string('date')->nullable();
            $table->string('city')->nullable();
            $table->string('class_of_city')->nullable();
            $table->string('certificate_of_domicile')->nullable();
            $table->string('published_by')->nullable();
            $table->string('registration_number')->nullable();
            $table->string('tax_number')->nullable();
            $table->string('tax_letter')->nullable();
            $table->string('business_license')->nullable();
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
        Schema::dropIfExists('certificates');
    }
}
