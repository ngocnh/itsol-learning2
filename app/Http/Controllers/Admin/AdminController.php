<?php
/**
 * Created by NgocNH.
 * Date: 3/2/16
 * Time: 3:26 PM
 */

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{

    public function __construct()
    {
    }


    public function getIndex()
    {
        return view('admin.index');
    }


    public function getLogin()
    {
        return view('admin.login');
    }


    public function postLogin(Request $request)
    {
        if (Auth::attempt([ 'email' => $request->email, 'password' => $request->password ])) {
            return redirect()->route('dashboard');
        }

        return redirect()->back()->withInput();
    }
}