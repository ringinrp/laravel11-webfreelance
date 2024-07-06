<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use App\Models\Category;

class FrontController extends Controller
{
    //

    public function index(){
        $categories = Category::all();
        $projects = Project::orderByDesc('id')->get();

        return view('front.index', compact('categories','projects'));
    }

    public function category(Category $category){
        return view('front.category', compact('category'));
    }

    public function details(Project $project){
        $projects = Project::orderByDesc('id')->get();
        return view('front.details', compact('project', 'projects'));
    }
}