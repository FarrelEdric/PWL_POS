<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\UserController;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class UserModel extends Model
{
    use HasFactory;

    protected $table = 'm_user';
    protected $pimaryKey = 'user_id';


    protected $fillable = ['level_id', 'username', 'nama', 'password'];
    
    public function level():BelongsTo
    {
        return $this->belongsTo(LevelModel::class, 'level_id', 'level_id');
    }
}
