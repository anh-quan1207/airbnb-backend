<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('rooms', function (Blueprint $table) {
            $table->renameColumn('bedRoom', 'bed_room');
            $table->renameColumn('bathRoom', 'bath_room');
        });
    }
    
    public function down()
    {
        Schema::table('rooms', function (Blueprint $table) {
            $table->renameColumn('bed_room', 'bedRoom');
            $table->renameColumn('bath_room', 'bathRoom');
        });
    }
};
