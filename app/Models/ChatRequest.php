<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ChatRequest extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['from_user_id', 'to_user_id', 'status'];
}
