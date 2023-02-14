<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Roles;

class RolesController extends Controller
{


    public function index()
    {
        // return view('about');
        // return view('admin.contact');
        // return view('admin.roles.baby');

        // return view('admin.roles.roles');

        $roles = Roles::all();
        return view ('admin.roles.roles')->with('students',  $roles);


    }


    public function create()
    {
        return view('admin.roles.create');
    }



    public function store(Request $request)
    {

    }

    public function edit()
    {
        return view('admin.roles.edit');
    }

    public function show()
    {
        return view('admin.roles.show');
    }



    public function update(Request $request, $id)
    {

    }


    public function destroy($id)
    {

    }
}
