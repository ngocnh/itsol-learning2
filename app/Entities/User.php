<?php
/**
 * Created by NgocNH.
 * Date: 3/2/16
 * Time: 4:05 PM
 */

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = 'users';

    protected $fillable = ['name', 'email', 'password'];


    public function role()
    {
        return $this->hasOne();
    }
}