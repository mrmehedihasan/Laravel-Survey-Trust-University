<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSWOTTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('SWOT', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->nullable();
            $table->string('contact')->nullable();
            $table->string('position')->nullable();
            $table->string('strength-a')->nullable();
            $table->string('strength-b')->nullable();
            $table->string('strength-c')->nullable();
            $table->string('strength-d')->nullable();
            $table->string('strength-outcome-a')->nullable();
            $table->string('strength-outcome-b')->nullable();
            $table->string('strength-outcome-c')->nullable();
            $table->string('strength-outcome-d')->nullable();
            $table->string('weakness-a')->nullable();
            $table->string('weakness-b')->nullable();
            $table->string('weakness-c')->nullable();
            $table->string('weakness-d')->nullable();
            $table->string('weakness-overcome-a')->nullable();
            $table->string('weakness-overcome-b')->nullable();
            $table->string('weakness-overcome-c')->nullable();
            $table->string('weakness-overcome-d')->nullable();
            $table->string('opportunities-a')->nullable();
            $table->string('opportunities-b')->nullable();
            $table->string('opportunities-c')->nullable();
            $table->string('opportunities-d')->nullable();
            $table->string('opportunities-utilize-a')->nullable();
            $table->string('opportunities-utilize-b')->nullable();
            $table->string('opportunities-utilize-c')->nullable();
            $table->string('opportunities-utilize-d')->nullable();
            $table->string('threats-a')->nullable();
            $table->string('threats-b')->nullable();
            $table->string('threats-c')->nullable();
            $table->string('threats-d')->nullable();
            $table->string('threats-minimized-a')->nullable();
            $table->string('threats-minimized-b')->nullable();
            $table->string('threats-minimized-c')->nullable();
            $table->string('threats-minimized-d')->nullable();
            $table->string('comments')->nullable();
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
        Schema::dropIfExists('SWOT');
    }
}
