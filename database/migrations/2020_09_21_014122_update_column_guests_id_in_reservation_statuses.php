<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateColumnGuestsIdInReservationStatuses extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('reservation_statuses', function (Blueprint $table) {
            $table->foreign('guest_id')->references('id')->on('guests');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('reservation_statuses', function (Blueprint $table) {
            //
        });
    }
}
