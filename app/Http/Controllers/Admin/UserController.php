<?php

namespace App\Http\Controllers\Admin;

use App\Exports\UsersExport;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class UserController extends Controller
{
    public function index()
    {
        $total = User::count();;
        $users = User::OrderBy('id', 'desc')->paginate(10);
        
        return view('admin.users.index', compact('users', 'total'));
    }

    public function create()
    {
        return view('admin.users.create');
    }

    public function show() 
    {

    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'dni' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'password' => 'required|confirmed'
        ]);

        $user = new User();

        $user->name = $request->name;
        $user->dni = $request->dni;
        $user->phone = $request->phone;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->save();

        return redirect()->route('adminusers.index')->with('message', 'El usuario ha sido creado satisfactoriamente!');
    }

    public function edit(User $user)
    {
        return view('admin.users.edit', compact('user'));
    }

    public function update(Request $request, User $user)
    {
        $request->validate([
            'name' => 'required',
            'dni' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'password' => 'required|confirmed'
        ]);

        $user->name = $request->name;
        $user->dni = $request->dni;
        $user->phone = $request->phone;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->save();

        return redirect()->route('adminusers.index')->with('message', 'El usuario ha sido actualizado satisfactoriamente!');
    }

    public function export()
    {
        return Excel::download(new UsersExport, 'users.xlsx');
    }

    public function editPassword(User $user)
    {
        return view('admin.users.change-password', compact('user'));
    }
    
    public function resetPassword(Request $request, User $user)
    {
        $request->validate([
            'password' => 'required|confirmed'
        ]);

        $user->password = bcrypt($request->password);
        $user->update();

        return redirect()->route('adminusers.index')->with('message', 'Se cambio la contraseña correctamente!');
    }
}
