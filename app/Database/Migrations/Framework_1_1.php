<?php

namespace LaravelTokyo\Database\Migrations;

use Jumilla\Versionia\Laravel\Support\Migration;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;

class Framework_1_1 extends Migration
{
    /**
     * Define depends migration versions.
     * ex) ['auth' => 1.0].
     *
     * @return array
     */
    public function dependsTo()
    {
        return [
        ];
    }

    /**
     * Upgrade database.
     *
     * @return void
     */
    public function up()
    {
        $this->createNotificationTable();
    }

    /**
     * Downgrade database.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('notifications');
    }

    /**
     * Create 'cache' table.
     *
     * @return void
     */
    protected function createNotificationTable()
    {
        Schema::create('notifications', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->string('type');
            $table->morphs('notifiable');
            $table->text('data');
            $table->timestamp('read_at')->nullable();
            $table->timestamps();
        });
    }
}
