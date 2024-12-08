<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Progress extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'task_name',
        'description',
        'status',
        'due_date',
        'completed_at',
    ];

    // Relasi ke tabel users
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
