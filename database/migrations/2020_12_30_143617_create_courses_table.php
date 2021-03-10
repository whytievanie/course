<?php
declare(strict_types = 1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('SBU');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('education_id')->nullable();
            $table->string('description');
            $table->integer('availabilty')->nullable();
            $table->integer('howmuchstudent')->nullable();
            $table->timestamps();

            $table->foreign('user_id')
            ->references('id')
            ->on('users');

            $table->foreign('education_id')
            ->references('id')
            ->on('educations');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('courses');
    }
}
