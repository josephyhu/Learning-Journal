<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Entry;
use App\Models\User;
use Illuminate\Http\Request;

class EntryController extends Controller
{
    /**
     * Display a listing of the resource.
     * @param User $user
     * @return \Illuminate\Http\Response
     */
    public function index(User $user)
    {
        $entries = Entry::orderBy('date', 'desc')->orderBy('time', 'desc')->paginate(25);
        return view('users.entries.index', compact('user', 'entries'))
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
        $user = auth()->user();
        return view('users.entries.create', compact('user', 'categories'));

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
            'date_created' => 'required',
            'time_created' => 'required',
            'hours' => 'required',
            'minutes' => 'required',
            'difficulty' => 'required',
            'url' => 'required'
        ]);

        $entry = Entry::create($request->all());
        $user = auth()->user();
        $user->entries()->attach($entry->id);

        return redirect()->route('users.entries.index', compact('user'))
            ->with('success', 'Entry created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param User $user
     * @param   Entry  $entry
     *
     * @return \Illuminate\Http\Response
     */
    public function show(User $user, Entry $entry)
    {
        return view( 'users.entries.show', compact('user', 'entry'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param User $user
     * @param   Entry $entry
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user, Entry $entry)
    {
        $categories = Category::all();
        return view('users.entries.edit', compact('user', 'entry', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param User $user
     * @param  Entry  $entry
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user, Entry $entry)
    {
        $request->validate([
            'title' => 'required',
            'date_created' => 'required',
            'time_created' => 'required',
            'hours' => 'required',
            'minutes' => 'required',
            'difficulty' => 'required',
            'url' => 'required'
        ]);

        $entry->update($request->all());
        return redirect()->route('users.entries.show', compact('user', 'entry'))
            ->with('success', 'Entry updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param User $user
     * @param   Entry $entry
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user, Entry $entry)
    {
        $entry->delete();
        return redirect()->route('users.entries.index', compact('user'))
            ->with('success', 'Entry deleted successfully');
    }
}
