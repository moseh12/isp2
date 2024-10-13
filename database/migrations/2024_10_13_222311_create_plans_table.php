<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlansTable extends Migration // Ensure this class name matches
{
    public function up()
    {
        Schema::create('plans', function (Blueprint $table) {
            $table->id(); // Auto-incrementing ID
            $table->string('plan'); // Plan name
            $table->string('service_type'); // Service Type (e.g., pppoe/static-ip)
            $table->decimal('amount', 8, 2); // Amount in KES
            $table->string('queue')->nullable(); // Queue
            $table->string('session_time')->nullable(); // Session Time
            $table->bigInteger('bytes_quota')->nullable(); // Bytes Quota
            $table->string('status'); // Status (active, inactive, etc.)
            $table->timestamps(); // created_at and updated_at timestamps
        });
    }

    public function down()
    {
        Schema::dropIfExists('plans');
    }
}
