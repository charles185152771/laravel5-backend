<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlbumPhotoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('album_photo', function (Blueprint $table) {
            $table->increments('id');
            $table->string('photo_name');
            $table->string('photo_desc')->default('');
            $table->tinyInteger('display_order')->default(0)->comment = '图片显示顺序';
            $table->string('photo_path')->default('')->comment = '图片地址';
            $table->integer('like_count')->default(0)->comment = '喜欢数/赞';
            $table->integer('view_count')->default(0)->comment = '浏览数';
            $table->integer('comment_count')->default(0)->comment = '评论数';
            $table->integer('user_id')->default(0);
            $table->softDeletes();
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
        Schema::drop('album_photo');
    }
}
