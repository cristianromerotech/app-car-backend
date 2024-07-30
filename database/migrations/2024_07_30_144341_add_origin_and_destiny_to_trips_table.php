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
        Schema::table('trips', function (Blueprint $table) {
            //
            if (!Schema::hasColumn('trips', 'origin')) {
                $table->string('origin');
            }
            if (!Schema::hasColumn('trips', 'destiny')) {
                $table->string('destiny');
            }
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('trips', function (Blueprint $table) {
            //
            $table->dropColumn(['origin', 'destiny']);
        });
    }
};
