<?php

namespace App\Http\Controllers;

use App\Models\Knowledges;
use App\Models\Skills;
use Illuminate\Http\Request;

class KnowledgesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $knowledges = Knowledges::all();
        return view('admin.knowledges.index', compact('knowledges'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        Knowledges::create([
            'name' => $request->name,
        ]);

        return redirect()->route('knowledges.index')
            ->with('success', 'Post has been created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Knowledges  $knowledges
     * @return \Illuminate\Http\Response
     */
    public function show(Knowledges $knowledges)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Knowledges  $knowledges
     * @return \Illuminate\Http\Response
     */
    public function edit(Knowledges $knowledges)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Knowledges  $knowledges
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Knowledges $knowledges)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Knowledges  $knowledges
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Knowledges $knowledges)
    {
        $id = \request()->id;
        $knowledges = Knowledges::find($id);
        $knowledges->delete();
        return back();
    }
}
