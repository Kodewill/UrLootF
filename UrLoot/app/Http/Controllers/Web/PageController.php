<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;


class PageController extends Controller
{
    public function urloot(){

        $professorNames = DB::table('professor')->get('professorName');

        return view('web.post',compact('professorNames'));
    }
}
