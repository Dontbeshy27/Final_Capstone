<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pubg_clan extends Model
{
    use HasFactory;
    protected $fillable = ['user_name', 'password', 'email', 'clan_name', 'ingame_name', 'role'];
}
