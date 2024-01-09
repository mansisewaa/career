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
        Schema::table('couselling_fors', function (Blueprint $table) {
            //
            // Rename the 'question' column to 'name'
            \DB::statement('ALTER TABLE couselling_fors CHANGE question name VARCHAR(255)');

        // Rename the 'category' column to 'category_id'
        \DB::statement('ALTER TABLE couselling_fors CHANGE category category_id INT');
    
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('couselling_fors', function (Blueprint $table) {
            //
        });
    }
};
