<?php

use App\Enum\ConversationRoleEnum;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    
    public function up(): void
    {
        Schema::create('participants', function (Blueprint $table) {
            $table->foreignId('conversation_id')->constrained('conversations')->cascadeOnDelete();
            $table->foreignId('user_id')->constrained('users')->cascadeOnDelete();
            $table->string('role')->default(ConversationRoleEnum::MEMBER->value);
            $table->timestamp('joined_at');
        }); 
    }

    
    public function down(): void
    {
        Schema::dropIfExists('participants');
    }
};
