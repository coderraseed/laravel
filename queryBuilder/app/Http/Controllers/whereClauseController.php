<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class whereClauseController extends Controller
{
    //*Basic Where Clauses
    public function whereClauseGreaterThen(){
        $query= DB::table('products')->where('products.price','>', 2000)->get();
        return $query;

    }
    public function whereClauseLessThen(){
        $query= DB::table('products')->where('products.price','<', 2000)->get();
        return $query;

    }
    public function whereClauseNotEqual(){
        $query= DB::table('products')->where('products.price','>', 2000)->get();
        return $query;

    }
    public function whereClauseEqual(){
        $query= DB::table('products')->where('products.price','>', 2000)->get();
        return $query;

    }
    public function whereClauseGreaterEqual(){
        $query= DB::table('products')->where('products.price','>', 2000)->get();
        return $query;

    }

    public function whereClauseLessEqual(){
        $query= DB::table('products')->where('products.price','>', 2000)->get();
        return $query;

    }
    public function whereClauseLike(){
        $query= DB::table('products')->where('products.price','>', 2000)->get();
        return $query;

    }
    public function whereClauseNotLike(){
        $query= DB::table('products')->where('products.price','>', 2000)->get();
        return $query;

    }
    public function whereClauseIn(){
        $query= DB::table('products')->where('products.price','>', 2000)->get();
        return $query;

    }
    public function whereClauseNotIn(){
        $query= DB::table('products')->where('products.price','>', 2000)->get();
        return $query;

    }
}
