<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class APItable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('users',function(Blueprint $table) {
           $table->bigIncrements('id');
           $table->string('note');
           $table->timestamp('created_at')->nullable();
           $table->timestamp('updated_at')->nullable();
       });
       Schema::create('notes',function(Blueprint $table) {
        $table->bigIncrements('id');
        $table->string('note');
        $table->string('date');
        $table->timestamp('created_at')->nullable();
        $table->timestamp('updated_at')->nullable();
    });

       
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
