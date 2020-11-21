<?php

namespace App\Http\Controllers\api;

use App\Models\Entry;
use App\Models\User;
use App\Http\Controllers\Controller;
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
        return response(Entry::all(), 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return response("Creating an entry only available via web", 403);
    }

    /**
     * Display the specified resource.
     *
     * @param User $user
     * @param   Entry  $entry
     *
     * @return \Illuminate\Http\Response
     */
    public function show(User $user,Entry $entry)
    {
        return response($entry, 200);
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
        return response("Updating an entry only available via web", 403);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return response("Deleting an entry only available via web", 403);
    }
}
