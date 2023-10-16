<?php

namespace App\Http\Controllers\Backend;

use App\DataTables\UsersDataTable;
use App\Http\Controllers\Controller;
use App\Http\Requests\User\StoreRequest;
use App\Http\Requests\User\UpdateRequest;
use App\Models\Department;
use App\Models\Place;
use App\Models\User;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    public function index(UsersDataTable $dataTable)
    {
        return $dataTable->render('backend.sections.users.index');
    }

    public function create()
    {
       $places = Place::select('id', 'description')->get();
       $departments = Department::select('id', 'name')->get();

        return view('backend.sections.users.create', compact('places', 'departments'));
    }

    public function store(StoreRequest $request)
    {
        $user = User::create([
            'first_name' => $request->get('first_name'),
            'last_name' => $request->get('last_name'),
            'rut' => $request->get('rut'),
            'department' => $request->get('department'),
            'email' => $request->get('email'),
            'role' => $request->get('role'),
            'id_places' => $request->get('id_places'),
            'password' => bcrypt($request->get('password')),
        ]);

        if ($request->has('profile_photo_path')) {
            $profile_photo_path = $request->file('profile_photo_path');
            $imageName = 'media/profile-photos/' . time() . $profile_photo_path->getClientOriginalName();
            Storage::disk('public')->put($imageName, file_get_contents($profile_photo_path));
            $user->profile_photo_path = $imageName;
            $user->save();
        }

        return redirect()->route('users.index')->with('success', 'Usuario creado correctamente');
    }

    public function show(string $id)
    {
        $user = User::find($id);

        return view('backend.sections.users.show', compact('user'));
    }

    public function edit(string $id)
    {
        $user = User::find($id);
        $places = Place::select('id', 'description')->get();
        $departments = Department::select('id', 'name')->get();

        return view('backend.sections.users.edit', compact('user', 'places', 'departments'));
    }

    public function update(UpdateRequest $request, string $id)
    {
        $user = User::find($id);

        $user->update([
            'first_name' => $request->get('first_name'),
            'last_name' => $request->get('last_name'),
            'rut' => $request->get('rut'),
            'department_id' => $request->get('department_id'),
            'email' => $request->get('email'),
            'role' => $request->get('role'),
            'id_places' => $request->get('id_places'),
        ]);

        if ($request->get('password')){
            $user->update([
                'password' => bcrypt($request->get('password'))
            ]);
        }

        if ($request->has('profile_photo_path')){
            $profile_photo_path = $request->file('profile_photo_path');

            $imageName = 'media/profile-photos/' . time() . $profile_photo_path->getClientOriginalName();
            Storage::disk('public')->put($imageName, file_get_contents($profile_photo_path));
            $user->update([
                'profile_photo_path' => $imageName
            ]);
        }

        return redirect()->route('users.index')->with('success', 'Usuario actualizado correctamente');
    }

    public function destroy(string $id)
    {
        $user = User::find($id);
        $user->delete();

        return redirect()->route('users.index')->with('success', 'Usuario eliminado correctamente');
    }
}
