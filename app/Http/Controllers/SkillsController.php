<?php

namespace App\Http\Controllers;

use App\Models\Skills;
use Illuminate\Http\Request;

class SkillsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $skills = Skills::all();
        return view('admin.skills.index', compact('skills'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        return view('admin.skills.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        Skills::create([
            'name' => $request->name,
            'percent' => $request->percent
        ]);

        return redirect()->route('skills.index')
            ->with('success', 'Post has been created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Skills $skills
     * @return \Illuminate\Http\Response
     */
    public function show(Skills $skills)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Skills $skills
     * @return \Illuminate\Http\Response
     */
    public function edit(Skills $skills)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Skills $skills
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Skills $skills)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Skills $skills
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Skills $skills)
    {
        $id = \request()->id;
        $skills = Skills::find($id);
        $skills->delete();
        return back();
    }
}
