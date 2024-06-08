<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCreateUserFormRequest;
use Illuminate\Http\Request;
use SebastianBergmann\CodeCoverage\Node\CrapIndex;
use App\Models\User;

class UserController extends Controller
{
    public function index(Request $request)
    {
        $users = User::paginate(8);
        return view('users.index', compact('users'));
        
    }

    public function create()
    {
        return view('users.create');
    }

    public function show($id)
    {
        if (!$user = User::find($id))
        return redirect()->route(('users.index'));
        return view('users.details', compact('user'));
    }

    public function store(StoreCreateUserFormRequest $request)
    {
        $data = $request->all();
        $data['password'] = bcrypt($request->password);
        $user = User::create($data);
        session()->flash('success', 'User registered successfully');
        return redirect()->route('users.create');
        // php artisan make:request StoreCreateUserFormRequest
    }

    public function edit($id)
    {
        if(!$user = User::find($id))
        return redirect()->route('users.index');
        return view('users.edit', compact('user'));
    }

    public function update(StoreCreateUserFormRequest $request, $id)
    {
        if (!$user = User::find($id))
        return redirect()->route('user.edit');
        $data = $request->only('name', 'email');
        if ($request->password)
        $data['password'] = bcrypt($request->password);
        $user->update($data);
        session()->flash('success', 'User edit successfully');
        return redirect()->route('users.edit', $user->id);
    }

    public function destroy($id)
    {
        $user = User::find($id);
        if (!$user) {
            return redirect()->route('users.index')->with('error', 'Usuário não encontrado.');
        }
        $user->delete();
        return redirect()->route('users.index')->with('success', 'User delete successfully');
    }
}
