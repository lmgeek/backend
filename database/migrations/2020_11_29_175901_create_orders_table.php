<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');
            $table->string('companyName');
            $table->integer('referenceName');
            $table->string('projectName');
            $table->string('address');
            $table->string('zipcode');
            $table->string('city');
            $table->string('province');
            $table->string('country');
            $table->boolean('checklist');
            $table->longText('comments');
            $table->integer('contributor');
            $table->string('status');
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
        Schema::drop('orders');
    }
}
