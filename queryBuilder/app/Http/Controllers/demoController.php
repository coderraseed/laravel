<?php

namespace App\Http\Controllers;

use Illuminate\Database\Query\JoinClause;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class demoController extends Controller
{
    public function demoAction(){
        $result =DB::table('products')->get();
        return $result;

    }

    public function demoActionFirst(){
        $result =DB::table('brands')->first();
        return $result;

    }
    public function demoActionView(){
        $result =DB::table('brands')->find(1);
        return $result;

    }
    public function demoActionView2(){
        $result =DB::table('brands')->find(3);
        return $result;

    }

    // pluck method
    public function demoActionView3(){
        $result =DB::table('brands')->pluck('brandName');
        return $result;

    }
    public function demoActionView4(){
        $result =DB::table('brands')->pluck('brandName', 'id');
        return $result;

    }
    public function demoActionView5(){
        $result =DB::table('brands')->pluck('brandImg', 'brandName');
        return $result;

    }

   /*
   !Aggregates
    The query builder also provides a variety of methods for retrieving aggregate values like
    !count, max, min, avg, and sum.
    You may call any of these methods after constructing your query
 */

    public function aggreGatesCount(){
        $result =DB::table('products')->count();
        return $result;

    }
    public function aggreGatesMax(){
        $result =DB::table('products')->max('price');
        return $result;

    }
    public function aggreGatesMin(){
        $result =DB::table('products')->min('price');
        return $result;

    }
    public function aggreGatesAvg(){
        $result =DB::table('products')->avg('price');
        return $result;

    }
    public function aggreGatesSum(){
        $result =DB::table('products')->sum('price');
        return $result;

    }


    /*
    !Select Statements

    !Specifying A Select Clause

    You may not always want to select all columns from a database table. Using the select method, you can specify a custom "select" clause for the query:
    */


    public function selectStatementSelect(){
        $result =DB::table('products')->select('title', 'price', 'stock')->get();
        return $result;

    }
    public function selectStatementDistinct(){
        $result =DB::table('products')->select('price')->distinct()->get();
        return $result;

    }
    public function selectStatementAddSelect(){
        $result =DB::table('products')->select('id', 'price')->addSelect('stock', 'star')->get();
        return $result;

    }
    /*
    ? Raw Methods
    !

    !Remember, Laravel can not guarantee that any query using raw expressions is protected against SQL injection vulnerabilities.

    */



    /*
    !Joins

    !Inner Join Clause

    The query builder may also be used to add join clauses to your queries. To perform a basic "inner join", you may use the join method on a query builder instance. The first argument passed to the join method is the name of the table you need to join to, while the remaining arguments specify the column constraints for the join. You may even join multiple tables in a single query:
    */
    public function innerJoin(){
        $result =DB::table('products')->join('categories', 'products.category_id', '=', 'categories.id')->get();
        return $result;

    }

  /*
     public function innerJoin(){
        $result =DB::table('products')->join('categories', 'products.category_id', '=', 'categories.id')->addSelect('stock', 'star')->get();
        return $result;

    }
    */

    public function innerJoin2(){
        $result =DB::table('products')
        ->join('categories', 'products.category_id', '=', 'categories.id')
        ->join('brands', 'products.brand_id', '=', 'brands.id')
        ->get();
        return $result;

    }
    public function leftJoin(){
        $result =DB::table('products')
        ->leftJoin('categories', 'products.category_id', '=', 'categories.id')
        ->leftJoin('brands', 'products.brand_id', '=', 'brands.id')
        ->get();
        return $result;

    }
    public function rightJoin(){
        $result =DB::table('products')
        ->rightJoin('categories', 'products.category_id', '=', 'categories.id')
        ->rightJoin('brands', 'products.brand_id', '=', 'brands.id')
        ->get();
        return $result;

    }
    public function crossJoin(){
        $result =DB::table('products')
        ->crossJoin('brands')
        ->get();
        return $result;

    }
    //%Advanced Join Clauses

    public function advanceJoin(){
        $result =DB::table('products')
        ->join('categories', function (JoinClause $join){
            $join->on('products.category_id', '=', 'categories.id')
            ->where('products.price', '>', 2000);
        })
        ->get();
        return $result;

    }

    ////Unions--The query builder also provides a convenient method to "union" two or more queries together. For example, you may create an initial query and use the union method to union it with more queries:

    public function unionJoin(){
        $query= DB::table('products')->where('products.price','>', 2000);

    }


}

