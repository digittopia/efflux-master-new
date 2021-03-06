<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoutesTable extends Migration {
 public function up() {
  Schema::create('efflux_site.routes', function (Blueprint $table) {
   $table->id();
   $table->string('uri', 255);
   $table->tinyInteger('status')->default(1);
   $table->softDeletes();
   $table->timestamps();
  });
 }
 public function down() {
  Schema::dropIfExists('efflux_site.routes');
 }
}