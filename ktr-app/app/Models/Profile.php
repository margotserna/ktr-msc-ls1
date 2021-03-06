<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\User;
class Profile extends Model
{
    use HasFactory;

    protected $table = 'profiles';

    protected $fillable = [
        'name', 
        'company', 
        'email',
        'phone',
        'created_at',
        'updated_at',
        'user_id'
    ];

    public $incrementing = true;

    /**
     * Get the user for a profile.
     */
    public function user()
    {
        return $this->hasOne(User::class);
    }
}
