<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReportViolenceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('report_violence', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->unsignedBigInteger('report_id')
                ->references('id')
                ->on('reports')
                ->onDelete('cascade');

            $table->unsignedBigInteger('violence_id')
            ->references('id')
            ->on('violences')
            ->onDelete('cascade');

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
        Schema::dropIfExists('report_violence');
    }
}
