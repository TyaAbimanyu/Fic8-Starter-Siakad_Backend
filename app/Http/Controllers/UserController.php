<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

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

    public function create()
    {
        return view("pages/app/user/add-new-user");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreUserRequest $request)
    {
        User::create(([
            "name"=> $request->input("name"),
            "email"=> $request->input("email"),
            "password"=> Hash::make($request->input("password")),
            'roles' => $request->input('roles'),
            "phones"=> $request->input("phones"),
            "address"=> $request->input("address"),
        ]));

        return redirect()->route("user.index")->with("success", "User Created Successfully");
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

    public function edit(User $user)
    {
        return view("pages/app/user/edit-user")->with('user', $user);
    }
    public function update(UpdateUserRequest $request, User $user)
    {
        $validate = $request->validated();
        $user->update( $validate);
        return redirect()->route('user.index')->with('success', 'User Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('user.index')->with('success','User Deleted Successfully');
    }
}
