<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateManageShippingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('manage_shipping', function (Blueprint $table) {
            $table->id();
			$table->string('city')->nullable();
			$table->string('postal_code')->nullable();
			$table->string('sector')->nullable();
			$table->string('delivery_rate')->nullable();
			$table->string('pickup_location')->nullable();
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
        Schema::dropIfExists('manage_shipping');
    }
}
