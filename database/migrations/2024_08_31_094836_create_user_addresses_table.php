<?php

use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('user_addresses', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(User::class);
            $table->string('name')->nullable();
            $table->string('address');
            $table->foreignId('city_id')->constrained('locations');
            $table->foreignId('state_id')->constrained('locations');
            $table->foreignId('country_id')->constrained('locations');
            $table->string('postal_code');
            $table->string('phone_number')->nullable();
            $table->string('lat')->nullable();
            $table->string('long')->nullable();
            $table->boolean('is_default')->default(false);
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_addresses');
    }
};
