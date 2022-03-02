<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $banners = Banner::latest()->get();
        return view('backend.banner.index',compact('banners'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('backend.banner.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'seq'             => 'required',
            'type'            => 'required',
            'url'             => 'required',
            'slug'            => 'required',
            'webImage'        => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'mobImage'        => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'status'          => 'required',
            'startDate'       => 'required',
            'endDate'         => 'required',
            'title'           => 'required',
            'description'     => 'required',
        ]);

        // Banner::create($request->all());

        $input = $request->all();

        if ($webImage = $request->file('webImage')) {
            $destinationPath = 'images/Banners/';
            $profileImageweb = $webImage->getClientOriginalName();
            $webImage->move($destinationPath, $profileImageweb);
            $input['webImage'] = "$profileImageweb";
        }

        if ($mobImage = $request->file('mobImage')) {
            $destinationPath = 'images/Banners/';
            $profileImage = $mobImage->getClientOriginalName();
            $mobImage->move($destinationPath, $profileImage);
            $input['mobImage'] = "$profileImage";
        }

        Banner::create($input);


        return redirect()->back()->with('success','Banner created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Banner $banner)
    {
        return view('backend.banner.edit',compact('banner'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Banner $banner)
    {
        //
        $request->validate([
            'seq'             => 'required',
            'type'            => 'required',
            'url'             => 'required',
            'slug'            => 'required',
            'webImage'        => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'mobImage'        => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'status'          => 'required',
            'startDate'       => 'required',
            'endDate'         => 'required',
            'title'           => 'required',
            'description'     => 'required',
        ]);

        // Banner::create($request->all());

        $input = $request->all();

        if ($webImage = $request->file('webImage')) {
            $destinationPath = 'images/Banners/';
            $profileImageweb = $webImage->getClientOriginalName();
            $webImage->move($destinationPath, $profileImageweb);
            $input['webImage'] = "$profileImageweb";
        }else{
            unset($input['webImage']);
        }

        if ($mobImage = $request->file('mobImage')) {
            $destinationPath = 'images/Banners/';
            $profileImage = $mobImage->getClientOriginalName();
            $mobImage->move($destinationPath, $profileImage);
            $input['mobImage'] = "$profileImage";
        }else{
            unset($input['mobImage']);
        }

        // Banner::update($input);
        $banner->update($input);


        return redirect()->back()->with('success','Banner Updated successfully.');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
