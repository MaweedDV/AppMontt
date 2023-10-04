<?php

namespace App\Http\Controllers\Backend;

use App\DataTables\UsersDataTable;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Else_;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(UsersDataTable $dataTable)
    {

        //$users = User::all();

        return $dataTable->render('Backend.Users.index');
        // dd($users); ---> modo debug dd(variable)

        //return view('Backend.Users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Backend.Users.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $user = new User();


        if ($_POST['txtPassword']==$_POST['txtConfirmPsw']) {
            $user->name = $_POST['txtName'];
            $user->email = $_POST['txtEmail'];
            $user->role = $_POST['txtRole'];
            $user->password = bcrypt($_POST['txtPassword']);

            $user->save();

            echo'<script type="text/javascript">
                    alert("El usuario se agregó de forma correcta.");
                    window.location.href="users";
                </script>';

        }else {
            echo'<script type="text/javascript">
                    alert("La confirmación de password no coincide.");
                    window.location.href="users";
                </script>';
        };




    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
      
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
