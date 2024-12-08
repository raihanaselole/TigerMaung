<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Progres extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('progress', function (Blueprint $table) {
            $table->id(); // ID unik progres
            $table->unsignedBigInteger('user_id'); // ID pengguna terkait
            $table->string('task_name'); // Nama tugas
            $table->text('description')->nullable(); // Deskripsi tugas (opsional)
            $table->enum('status', ['not started', 'in progress', 'completed'])->default('not started'); // Status progres
            $table->date('due_date'); // Tanggal tenggat tugas
            $table->timestamp('completed_at')->nullable(); // Tanggal selesai tugas (opsional)
            $table->timestamps(); // Kolom created_at dan updated_at

            // Tambahkan foreign key untuk user_id
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('progress');
    }
}