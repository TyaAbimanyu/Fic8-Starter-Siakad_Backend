<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
{
    $users = DB::table('users')
        ->select('id', 'name', 'email', 'phones', DB::raw('DATE_FORMAT(created_at, "%d %M %Y") as created_at'));

    if ($request->input('name')) {
        $users->where('name', 'like', '%' . $request->input('name') . '%');
    }

    $users = $users->paginate(10);

    return view("pages/app/user/user-post", compact("users"));
}

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id, )
    {
        //

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
