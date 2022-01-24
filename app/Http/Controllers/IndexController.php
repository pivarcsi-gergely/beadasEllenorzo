<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{
    public function index()
    {
        $studentCount = DB::table('hazis')->distinct()->count();
        $finishedCount = DB::table('hazis')->whereRaw('url <> ""')->whereNotNull('url')->count(); //->orWhere('url', '<>', "''")->count();

        return view('index', [
            'studentCount' => $studentCount,
            'finishedCount' => $finishedCount
        ]);
    }
}
