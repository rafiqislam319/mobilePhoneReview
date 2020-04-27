<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMobilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mobiles', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('brand_id')->nullable();
            $table->string('mobile_name')->nullable();
            $table->string('model')->nullable();
            $table->string('color')->nullable();
            $table->string('price')->nullable();
            $table->date('launch_date')->nullable();
            $table->string('network_type')->nullable();
            $table->string('sim')->nullable();
            $table->string('gprs')->nullable();
            $table->string('edge')->nullable();
            $table->string('wlan')->nullable();
            $table->string('bluetooth')->nullable();
            $table->string('gps')->nullable();
            $table->string('fm_radio')->nullable();
            $table->string('usb')->nullable();
            $table->string('display_size')->nullable();
            $table->string('display_feature')->nullable();
            $table->string('display_resolution')->nullable();
            $table->string('display_protection')->nullable();
            $table->string('body_dimension')->nullable();
            $table->string('body_weight')->nullable();
            $table->string('p_camera')->nullable();
            $table->string('p_camera_feature')->nullable();
            $table->string('s_camera')->nullable();
            $table->string('s_camera_feature')->nullable();
            $table->string('video_recording')->nullable();
            $table->string('os')->nullable();
            $table->string('os_version')->nullable();
            $table->string('cpu')->nullable();
            $table->string('rom')->nullable();
            $table->string('e_memory')->nullable();
            $table->string('ram')->nullable();
            $table->string('audio')->nullable();
            $table->string('l_speaker')->nullable();
            $table->string('battery_type')->nullable();
            $table->string('battery_capacity')->nullable();
            $table->string('finger_print')->nullable();
            $table->string('face_unlock')->nullable();
            $table->string('made_in')->nullable();
            $table->string('short_description')->nullable();
            $table->text('highlights')->nullable();
            $table->text('file')->nullable();
            $table->tinyInteger('publication_status')->nullable();
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
        Schema::dropIfExists('mobiles');
    }
}
