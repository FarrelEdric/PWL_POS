<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\UserController;

class UserModel extends Model
{
    use HasFactory;

    protected $table = 'm_user';
    protected $pimaryKey = 'user_id';


    protected $fillable = ['level_id', 'username', 'nama', 'password'];
    
}
