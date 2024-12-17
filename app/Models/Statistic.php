<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Statistic extends Model
{
    use HasFactory;

    protected $table = 'progress'; // Nama tabel di database
    protected $fillable = [
        'user_id',
        'task_name',
        'description',
        'status',
        'due_date',
    ];

    // Relasi dengan User (1-to-many)
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
