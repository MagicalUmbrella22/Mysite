<?php

namespace App\Http\Controllers;

use App\Models\ImageData;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function upload(Request $request)
    {

        $request->validate([
            'type' => 'required',
            'image' => 'required|image|mimes:jpeg,png|max:5215'
        ]);
        $imageName = time() . "." . $request->image->extension();
        $imagepath = $request->image->storeAs('image', $imageName, 'public');

        ImageData::create([
            'type' => $request->type,
            'image' => $imagepath
        ]);

        return redirect('show');
    }
    public function show()
    {
        $datas = ImageData::orderBy('created_at', 'desc')->get();

        return view('index', compact('datas'));
    }
}
