<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class NewsCategory extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('newsCategory', function (Blueprint $table) {
        $table->increments('newsCategoryID');
        $table->string('newsCategory')->nullable();
        $table->integer('statusID')->default(0)->comment('0 - Default, 1 - Active, 2 - Inactive, 3 - Deleted');
        $table->integer('createdBy')->default(0);
        $table->timestamp('createdDateTime')->useCurrent();
        $table->integer('modifiedBy')->nullable();
        $table->timestamp('modifiedDateTime')->default(DB::raw('NULL ON UPDATE CURRENT_TIMESTAMP'))->nullable();
      });

      DB::table('newsCategory')->insert(['newsCategory' => '热点', 'statusID' => 1]);
      DB::table('newsCategory')->insert(['newsCategory' => '专题', 'statusID' => 1]);
      DB::table('newsCategory')->insert(['newsCategory' => '直播', 'statusID' => 1]);
      DB::table('newsCategory')->insert(['newsCategory' => '话题', 'statusID' => 1]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::dropIfExists('newsCategory');
    }
}
