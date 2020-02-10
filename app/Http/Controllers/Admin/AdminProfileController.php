<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Profile;

class AdminProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $profile = Profile::first();
        // // dd($profile);
        // return view('admin-pages.profile.index')->with('profile',$profile);

        return Profile::all();
    }

    public function show(Profile $profile)
    {
        return $profile;
    }

    public function store(Request $request)
    {
        $profile = Profile::create($request->all());

        return response()->json($article, 201);
    }

    public function update(Request $request, Profile $profile)
    {
        $profile->update($request->all());

        return response()->json($profile, 200);
    }

    public function delete(Profile $profile)
    {
        $profile->delete();

        return response()->json(null, 204);
    }

    public function resume()
    {
        return view('admin-pages.profile.resume');
    }

    public function socialmedia()
    {
        return view('admin-pages.profile.social-media');
    }

    public function edit()
    {
        $editProfile = Profile::first();
        // dd($profile);
        return view('admin-pages.profile.edit')->with('editProfile',$editProfile);
    }

    public function save()
    {
        $editProfile = Profile::first();
        // dd($profile);
        return view('admin-pages.profile.edit')->with('editProfile',$editProfile);
    }
}
