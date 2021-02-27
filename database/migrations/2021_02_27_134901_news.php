<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class News extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('news', function (Blueprint $table) {
        $table->increments('newsID');
        $table->integer('newsCategoryID')->nullable();
        $table->string('newsTitle')->nullable();
        $table->string('newsSource')->nullable();
        $table->text('newsImages')->nullable();
        $table->integer('statusID')->default(0)->comment('0 - Default, 1 - Active, 2 - Inactive, 3 - Deleted');
        $table->integer('createdBy')->default(0);
        $table->timestamp('createdDateTime')->useCurrent();
        $table->integer('modifiedBy')->nullable();
        $table->timestamp('modifiedDateTime')->default(DB::raw('NULL ON UPDATE CURRENT_TIMESTAMP'))->nullable();
      });

      DB::table('news')->insert(['newsCategoryID' => 1, 'newsTitle' => 'News Title 1', 'newsSource' => 'News', 'newsImages' => 'noImage.png', 'statusID' => 1]);
      DB::table('news')->insert(['newsCategoryID' => 2, 'newsTitle' => 'News Title 2', 'newsSource' => 'News', 'newsImages' => 'noImage.png', 'statusID' => 1]);
      DB::table('news')->insert(['newsCategoryID' => 3, 'newsTitle' => 'News Title 3', 'newsSource' => 'News', 'newsImages' => 'noImage.png,noImage.png,noImage.png', 'statusID' => 1]);
      DB::table('news')->insert(['newsCategoryID' => 4, 'newsTitle' => 'News Title 4', 'newsSource' => 'News', 'newsImages' => 'noImage.png', 'statusID' => 1]);
      DB::table('news')->insert(['newsCategoryID' => 1, 'newsTitle' => 'News Title 5', 'newsSource' => 'News', 'newsImages' => 'noImage.png,noImage.png,noImage.png', 'statusID' => 1]);
      DB::table('news')->insert(['newsCategoryID' => 3, 'newsTitle' => 'News Title 6', 'newsSource' => 'News', 'newsImages' => 'noImage.png', 'statusID' => 1]);
      DB::table('news')->insert(['newsCategoryID' => 4, 'newsTitle' => 'News Title 7', 'newsSource' => 'News', 'newsImages' => 'noImage.png', 'statusID' => 1]);
      DB::table('news')->insert(['newsCategoryID' => 2, 'newsTitle' => 'News Title 8', 'newsSource' => 'News', 'newsImages' => 'noImage.png,noImage.png,noImage.png', 'statusID' => 1]);
      DB::table('news')->insert(['newsCategoryID' => 3, 'newsTitle' => 'News Title 9', 'newsSource' => 'News', 'newsImages' => 'noImage.png,noImage.png,noImage.png', 'statusID' => 1]);
      DB::table('news')->insert(['newsCategoryID' => 2, 'newsTitle' => 'News Title 10', 'newsSource' => 'News', 'newsImages' => 'noImage.png,noImage.png,noImage.png', 'statusID' => 1]);
      DB::table('news')->insert(['newsCategoryID' => 1, 'newsTitle' => 'News Title 11', 'newsSource' => 'News', 'newsImages' => 'noImage.png', 'statusID' => 1]);
      DB::table('news')->insert(['newsCategoryID' => 2, 'newsTitle' => 'News Title 12', 'newsSource' => 'News', 'newsImages' => 'noImage.png', 'statusID' => 1]);
      DB::table('news')->insert(['newsCategoryID' => 3, 'newsTitle' => 'News Title 13', 'newsSource' => 'News', 'newsImages' => 'noImage.png,noImage.png,noImage.png', 'statusID' => 1]);
      DB::table('news')->insert(['newsCategoryID' => 4, 'newsTitle' => 'News Title 14', 'newsSource' => 'News', 'newsImages' => 'noImage.png', 'statusID' => 1]);
      DB::table('news')->insert(['newsCategoryID' => 1, 'newsTitle' => 'News Title 15', 'newsSource' => 'News', 'newsImages' => 'noImage.png,noImage.png,noImage.png', 'statusID' => 1]);
      DB::table('news')->insert(['newsCategoryID' => 3, 'newsTitle' => 'News Title 16', 'newsSource' => 'News', 'newsImages' => 'noImage.png', 'statusID' => 1]);
      DB::table('news')->insert(['newsCategoryID' => 4, 'newsTitle' => 'News Title 17', 'newsSource' => 'News', 'newsImages' => 'noImage.png', 'statusID' => 1]);
      DB::table('news')->insert(['newsCategoryID' => 2, 'newsTitle' => 'News Title 18', 'newsSource' => 'News', 'newsImages' => 'noImage.png,noImage.png,noImage.png', 'statusID' => 1]);
      DB::table('news')->insert(['newsCategoryID' => 3, 'newsTitle' => 'News Title 19', 'newsSource' => 'News', 'newsImages' => 'noImage.png,noImage.png,noImage.png', 'statusID' => 1]);
      DB::table('news')->insert(['newsCategoryID' => 2, 'newsTitle' => 'News Title 20', 'newsSource' => 'News', 'newsImages' => 'noImage.png,noImage.png,noImage.png', 'statusID' => 1]);
      DB::table('news')->insert(['newsCategoryID' => 1, 'newsTitle' => 'News Title 21', 'newsSource' => 'News', 'newsImages' => 'noImage.png', 'statusID' => 1]);
      DB::table('news')->insert(['newsCategoryID' => 2, 'newsTitle' => 'News Title 22', 'newsSource' => 'News', 'newsImages' => 'noImage.png', 'statusID' => 1]);
      DB::table('news')->insert(['newsCategoryID' => 3, 'newsTitle' => 'News Title 23', 'newsSource' => 'News', 'newsImages' => 'noImage.png,noImage.png,noImage.png', 'statusID' => 1]);
      DB::table('news')->insert(['newsCategoryID' => 4, 'newsTitle' => 'News Title 24', 'newsSource' => 'News', 'newsImages' => 'noImage.png', 'statusID' => 1]);
      DB::table('news')->insert(['newsCategoryID' => 1, 'newsTitle' => 'News Title 25', 'newsSource' => 'News', 'newsImages' => 'noImage.png,noImage.png,noImage.png', 'statusID' => 1]);
      DB::table('news')->insert(['newsCategoryID' => 3, 'newsTitle' => 'News Title 26', 'newsSource' => 'News', 'newsImages' => 'noImage.png', 'statusID' => 1]);
      DB::table('news')->insert(['newsCategoryID' => 4, 'newsTitle' => 'News Title 27', 'newsSource' => 'News', 'newsImages' => 'noImage.png', 'statusID' => 1]);
      DB::table('news')->insert(['newsCategoryID' => 2, 'newsTitle' => 'News Title 28', 'newsSource' => 'News', 'newsImages' => 'noImage.png,noImage.png,noImage.png', 'statusID' => 1]);
      DB::table('news')->insert(['newsCategoryID' => 3, 'newsTitle' => 'News Title 29', 'newsSource' => 'News', 'newsImages' => 'noImage.png,noImage.png,noImage.png', 'statusID' => 1]);
      DB::table('news')->insert(['newsCategoryID' => 2, 'newsTitle' => 'News Title 30', 'newsSource' => 'News', 'newsImages' => 'noImage.png,noImage.png,noImage.png', 'statusID' => 1]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::dropIfExists('news');
    }
}
