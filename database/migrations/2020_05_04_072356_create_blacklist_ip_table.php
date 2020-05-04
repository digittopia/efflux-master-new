<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlacklistIpTable extends Migration {
 public function up() {
  Schema::create('efflux_track.blacklist', function (Blueprint $table) {
   $table->id();
   $table->unsignedBigInteger('end')->nullable()->default(null)->index();
   $table->string('label', 100)->index();
   $table->timestamps();
  });
 }
 public function down() {
  Schema::dropIfExists('efflux_track.blacklist');
 }
}