<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\CategoryCollection;
use App\Models\Category;
use Illuminate\Http\Request;
/**
 * @group all data
 */
class DataController extends Controller
{
    /**
     * Get all categories
     */
    public function getCategory(){
        $categories = Category::all();
        return new CategoryCollection($categories);
    }

    /**
     * Create custom registration
     */
    public function register(){

    }
}
