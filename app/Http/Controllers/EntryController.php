<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Entry;
use Illuminate\Http\Request;

class EntryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $entries = Entry::latest()->paginate(25);

        return view('entries.index', compact('entries'))
            ->with('i', (request()->input('page', 1) - 1) * 25);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('entries.create', compact('categories'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'hours' => 'required',
            'minutes' => 'required',
            'difficulty' => 'required',
            'url' => 'required'
        ]);

        $entry = Entry::create($request->all());
        $user = auth()->user();
        $user->entries()->attach($entry->id);

        return redirect()->route('entries.index')
            ->with('success', 'Entry created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  Entry  $entry
     * @return \Illuminate\Http\Response
     */
    public function show(Entry $entry)
    {
        return view( 'entries.show', compact('entry'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Entry  $entry
     * @return \Illuminate\Http\Response
     */
    public function edit(Entry $entry)
    {
        $categories = Category::all();
        return view('entries.edit', compact('entry', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  Entry  $entry
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Entry $entry)
    {
        $request->validate([
            'title' => 'required',
            'hours' => 'required',
            'minutes' => 'required',
            'difficulty' => 'required',
            'url' => 'required'
        ]);

        $entry->update($request->all());

        return redirect()->route('entries.show', compact('entry'))
            ->with('success', 'Entry updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Entry  $entry
     * @return \Illuminate\Http\Response
     */
    public function destroy(Entry $entry)
    {
        $entry->delete();

        return redirect()->route('entries.index')
            ->with('success', 'Entry deleted successfully');
    }
}
