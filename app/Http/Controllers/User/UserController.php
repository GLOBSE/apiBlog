<?php
/**
 * Created by PhpStorm.
 * User: HP
 * Date: 8/20/2018
 * Time: 1:49 AM
 */
namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Model\Users;

class UserController extends Controller
{
    /**
     * UserController constructor.
     */
    public function __construct()
    {

    }

    public function listUser($id)
    {
        $data = Users::getUser($id);
        dd($data);
    }
}