<?php

namespace App\Http\Controllers;

use App\Models\PropertyAuction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function author()
    {
        $page_data['title'] = Auth::user()->name;
        $page_data['pAuctions'] = PropertyAuction::where('user_id', Auth::user()->id)->get();
        return view('author',$page_data);
    }
}
