<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('index', [
            'users' => User::paginate(5),
            'title' => 'User Page',
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('data-users.create', [
            'users' => User::all(),
            'title' => 'Create User Page'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $request->validated();

        // $data = [
        //     'nama' => $request->nama,
        //     'email' => $request->email,
        //     'password' => Hash::make($request->password),
        //     'role' => $request->roles,
        // ];
        // User::create($data);

        dd($request->nama);
        // $user = new User;
        // $user->nama = $request->nama;
        // $user->email = $request->email;
        // $user->password = $request->password;
        // $user->role = $request->roles;
        // $user->save();

        return redirect()->route('')->with('success', 'Product created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        //
    }
}
