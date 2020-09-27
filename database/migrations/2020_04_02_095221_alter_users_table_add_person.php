<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterUsersTableAddPerson extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->integer('status')->after('password')->comment('0:Nonactive, 1:Active')->default(1);
            $table->integer('status_materi')->after('status')->comment('0:Yet, 1:Done')->default(0);
            $table->integer('status_evaluasi')->after('status_materi')->comment('0:Yet, 1:Done')->default(0);
            $table->string('person_type')->after('status_evaluasi')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('status');
            $table->dropColumn('status_materi');
            $table->dropColumn('status_evaluasi');
            $table->dropColumn('person_type');
        });
    }
}
