<?php
/**
 * Created by NgocNH.
 * Date: 3/2/16
 * Time: 4:08 PM
 */

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{

    protected $table = 'roles';

    protected $fillable = [ 'name' ];
}