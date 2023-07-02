<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class laravelQueryBuiderDoc extends Controller
{
    //!Raw Expressions

      //@ Subquery Joins

   /*  public function subQueryJoin(){
        $result =DB::table('products')
        ->joinSub('categories', function (JoinClause $join){
            $join->on('products.category_id', '=', 'categories.id')
            ->where('products.price', '>', 2000);
        })
        ->get();
        return $result;

    } */
    public function insertMultipleRecord() {

        $posts = [
            ['title' => 'Post 1', 'slug' => 'first', 'excerpt' => 'Lorem', 'description' => 'Lorem Ipsum'],
            ['title' => 'Post 2', 'slug' => 'second', 'excerpt' => 'Ipsum', 'description' => 'Ipsum Lorem'],
            ['title' => 'Post 3', 'slug' => 'third', 'excerpt' => 'doler', 'description' => 'Doler Ipsum'],
            // Add more records as needed
        ];

        $result = DB::table('posts')->insertOrIgnore($posts);
        return $result;
    }




}
