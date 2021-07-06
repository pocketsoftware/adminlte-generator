<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrackerdetailsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trackerdetails', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('qc');
            $table->string('fullname');
            $table->string('deladdr');
            $table->string('csz');
            $table->string('intelligentmailbarcode');
            $table->string('cardnumberwcheck');
            $table->string('type');
            $table->string('serialnumber');
            $table->string('imbalpha');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('trackerdetails');
    }
}
