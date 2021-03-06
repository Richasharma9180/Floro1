<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAuthenticationLogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        {
        Schema::table('authentication_logs', function (Blueprint $table) {
        $table->datetime('last_login_at')->nullable();
        $table->datetime('last_logout_at')->nullable();
        $table->string('last_login_ip')->nullable();
        $table->string('http_user_agent')->nullable();
        });
        
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('authentication_logs');
    }
}
