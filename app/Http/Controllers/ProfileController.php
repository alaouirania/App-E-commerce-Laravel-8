<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;
use DB;

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
        //$posts = DB::table('posts')->where('user_id','=', auth()->id())->get();
       // $posts = DB::table('posts')->where('user_id','=','$id')->pluck('id');
       $posts = Post::orderBy('id','DESC')->paginate(5);

        return view('profile.index', compact('posts'));
    }
    public function posts()
    {
        return $this->hasMany(Post::class);
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
            'image' => 'required',
            'description' => 'required',
            'price' => 'required',
            'category' => 'required',
            'location' => 'required',
            'state' => 'required',
            'image.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);
        $input = $request->except(['_token']);

    
        if($request->file('image')){
            $file= $request->file('image');
            $filename= $file->getClientOriginalName();
            $file-> move(public_path('public/Image'), $filename);
            $input['image']= $filename;
        }
        Post::create($input);

        return redirect()->route('profile.index')            
        ->with('success','Post created successfully.');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::find($id);

        return view('profile.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::find($id);

        return view('profile.edit', compact('post'));
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
            'image' => 'required',
            'description' => 'required',
            'price' => 'required',
            'category' => 'required',
            'location' => 'required',
            'state' => 'required',
            'image.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        Post::where('id', $id)
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
        Post::find($id)
            ->delete();

        return redirect()->route('profile.index');
    }
}