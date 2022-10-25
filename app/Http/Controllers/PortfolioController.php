<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $portfolio = Portfolio::all();
        return view('admin.portfolio.index', compact('portfolio'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        $tags = DB::table('tags')->get();
        return view('admin.portfolio.create', compact('tags'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
//        $request->validate([
//            'title' => 'required',
//            'description' => 'required',
//            'technologies' => 'required',
//            'link' => 'required',
//            'tag' => 'required',
//            'image' => 'required',
//        ]);
        $image = $request->file('image');
        $newname = time() . $image->getClientOriginalName();
        $image->move('admin/img/portfolio', $newname);


        Portfolio::create(
            [
                'title' => $request->title,
                'description' => $request->description,
                'technologies' => $request->technologies,
                'link' => $request->link,
                'tags' => $request->tags,
                'image' => $newname,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]
        );

        return redirect()->route('portfolio.index')
            ->with('success', 'Post has been created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Portfolio $portfolio
     * @return \Illuminate\Http\Response
     */
    public function show(Portfolio $portfolio)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Portfolio $portfolio
     * @return \Illuminate\Http\Response
     */
    public function edit(Portfolio $portfolio)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Portfolio $portfolio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Portfolio $portfolio)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Portfolio $portfolio
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Portfolio $portfolio)
    {
        $portfolio->delete();
        unlink('admin/img/portfolio/' . $portfolio->image);
        return back();
    }
}
