<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Names;

class NameController extends Controller
{
    public function Names()
    {

        return response()->json('{"name":"John", "age":30, "car":null}');
    }
}
