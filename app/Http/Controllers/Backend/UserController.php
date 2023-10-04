<?php

namespace App\Http\Controllers\Backend;

use App\DataTables\UsersDataTable;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(UsersDataTable $dataTable)
    {
        return $dataTable->render('backend.sections.users.index');
    }

    public function create()
    {
        return view('backend.sections.users.create');

    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|min:5|max:50',
            'email' => 'email|required|unique:users,email',
            'txtRole' => 'required',
            'txtPlace' => 'required',
            'password' => 'required|confirmed|min:8|max:50',
            'password_confirmation' => 'required'
        ]);

        User::create([
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'role' => $request->get('txtRole'),
            'place' => $request->get('txtPlace'),
            'password' => $request->get('password'),
        ]);

        return redirect()->route('users.index')->with('success', 'User created successfully');
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        $user = User::find($id);

        return view('backend.sections.users.edit', compact('user'));
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required|min:5|max:50',
            'email' => 'email|required|unique:users,email,' . $id,
            'txtRole' => 'required',
            'txtPlace' => 'required',
            'password' => 'required|confirmed|min:8|max:50',
            'password_confirmation' => 'required'
        ]);

        $user = User::find($id);

        $user->update([
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'role' => $request->get('txtRole'),
            'place' => $request->get('txtPlace'),
            'password' => $request->get('password'),
        ]);

        return redirect()->route('users.index')->with('success', 'User updated successfully');
    }

    public function destroy(string $id)
    {
        $user = User::find($id);

        $user->delete();
    }
}
