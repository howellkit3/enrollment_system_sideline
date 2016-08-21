<?php namespace App\Http\Models\plumeria;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $connection = 'stbenilde';
    protected $table = 'users';   
    protected $fillable = ['name', 'email','studnum' 'password'];
    protected $hidden = [
        'password', 'remember_token',
    ];
    
 
}
