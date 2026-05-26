<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('team_members', function (Blueprint $table) {
            $table->uuid('id')->primary();
            
            // Asumsi tabel 'teams' menggunakan UUID juga
            $table->foreignUuid('team_id')->constrained('teams')->onDelete('cascade');
            
            $table->string('nama_lengkap');
            $table->string('no_whatsapp');
            $table->string('asal_instansi');
            
            // Kolom ini akan menyimpan URL dari Cloudinary / S3 / Supabase
            $table->string('ktm_url')->nullable(); 
            
            $table->boolean('is_captain')->default(false);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('team_members');
    }
};