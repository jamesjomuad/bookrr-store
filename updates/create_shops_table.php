<?php namespace Bookrr\Store\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateShopsTable extends Migration
{
    public function up()
    {
        Schema::create('bookrr_store_shops', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('bookrr_store_shops');
    }
}
