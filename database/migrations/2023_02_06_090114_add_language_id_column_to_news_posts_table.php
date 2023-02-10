<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class () extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('news_posts', function (Blueprint $table) {
            $table->foreignId("language_id")->after("sub_category_id")->constrained();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('news_posts', function (Blueprint $table) {
            $table->dropConstrainedForeignId("language_id");
        });
    }
};

