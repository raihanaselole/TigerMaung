<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Progres extends Model
{
    use HasFactory;
    protected $table = 'progress';
    protected $fillable = ['user_id','task_name', 'description', 'status', 'due_date'];
}
