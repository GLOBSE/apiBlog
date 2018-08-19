<?php
/**
 * Created by PhpStorm.
 * User: HP
 * Date: 8/20/2018
 * Time: 1:52 AM
 */

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    /**
     * This is function describe content getUser
     * return object
     */
    public static function getUser($id)
    {
        $user = Users::find($id);
    }
}