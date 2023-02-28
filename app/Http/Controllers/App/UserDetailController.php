<?php

namespace App\Http\Controllers\App;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserDetailController extends Controller
{
public function index(){
   
return view('app.userDetail.index'); 
return 'detail';
}
}
