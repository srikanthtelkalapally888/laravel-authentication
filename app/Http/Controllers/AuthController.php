<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Kreait\Firebase\Contract\Auth;

class AuthController extends Controller
{
    //
    public function __construct(Auth $auth)
    {
        $this->auth = $auth;
    }
    public function index(){
        $uid = rand();

        $customToken =$this->auth->createCustomToken($uid);

    }
}
