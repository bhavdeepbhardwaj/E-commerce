<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function admin()
    {
        // return view('backend.layouts.master');
        return view('backend.admin');
    }

    public function userList()
    {
        return view('backend.user.userList');
    }

    public function venderList()
    {
        return view('backend.vender.venderList');
    }

    public function mainCategory()
    {
        return view('backend.category.mainCategoryList');
    }

    public function subCategory()
    {
        return view('backend.category.subCategoryList');
    }
}
