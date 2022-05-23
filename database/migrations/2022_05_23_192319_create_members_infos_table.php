<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('members_infos', function (Blueprint $table) {
            $table->id();
            $table->string('mothersName');
            $table->string('fathersName');
            $table->text('photos')->nullable();
            $table->string('des')->nullable();
            $table->string('organization')->nullable();
            $table->string('nid');
            $table->string('religion');
            $table->text('address')->nullable();
            $table->enum('maritial_status', ['married', 'unmarried', 'single']);
            $table->enum('blood_group', ['A+', 'A-', 'B+', 'B-', 'AB+,', 'AB-', 'O+', 'O-']);
            $table->string('contact');
            $table->string('imo_number')->nullable();
            $table->text('comments')->nullable();
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
        Schema::dropIfExists('members_infos');
    }
};
