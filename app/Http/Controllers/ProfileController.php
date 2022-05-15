<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;

class ProfileController extends Controller
{

    /**
     * create a new instance of the class
     *
     * @return void
     */
    function __construct()
    {
         $this->middleware('permission:profile-list|profile-create|profile-edit|profile-delete', ['only' => ['index', 'show']]);
         $this->middleware('permission:profile-create', ['only' => ['create', 'store']]);
         $this->middleware('permission:profile-edit', ['only' => ['edit', 'update']]);
         $this->middleware('permission:profile-delete', ['only' => ['destroy']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $profiles = Profile::orderBy('id', 'desc')
            ->get();

        return view('profile.index', compact('profiles'));
    }
    public function posts()
    {
        return $this->hasMany(Profile::class);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('profile.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->validate([
            'title' => 'required',
            'body' => 'required',
            'image' => 'required',
            'description' => 'required',
            'price' => 'required',
            'category' => 'required',
            'location' => 'required',
            'state' => 'required',
            'brand' => 'required',
            'image.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        Profile::create($input);

        return redirect()->route('profile.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $profile = Profile::find($id);

        return view('profile.show', compact('profile'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $profile = Profile::find($id);

        return view('profile.edit', compact('profile'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $input = $request->validate([
            'title' => 'required',
            'body' => 'required',
            'image' => 'required',
            'description' => 'required',
            'price' => 'required',
            'category' => 'required',
            'location' => 'required',
            'state' => 'required',
            'brand' => 'required',
            'image.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        Profile::where('id', $id)
            ->update($input);

        return redirect()->route('profile.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Profile::find($id)
            ->delete();

        return redirect()->route('profile.index');
    }
}