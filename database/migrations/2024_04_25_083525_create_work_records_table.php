<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('work_records', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id');
            $table->dateTime('last_time_record')->nullable();
            $table->dateTime('time_record');
            $table->string('status');
            $table->string('total_minutes')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('work_records');
    }
};
