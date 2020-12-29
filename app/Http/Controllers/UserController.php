<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class UserController extends Controller
{
    public function list($id = null)
    {
        return $id ? User::find($id) : User::all();
    }

    public function add(Request $request)
    {
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        $result = $user->save();
        if ($result) {
            return ['Result'    =>  'Data has been saved'];
        } else {
            return ['Result'    =>  'Saving Failed'];
        }
    }
    
    public function update(Request $request, $id)
    {
        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        $result = $user->save();
        if ($result) {
            return ['Result'    =>  'Data has been updated'];
        } else {
            return ['Result'    =>  'Updating Failed'];
        }
    }

    public function search($name)
    {
        $userSearch = User::where('name', 'like', '%' . $name . '%')->get();
        if ($userSearch->count()) {
            return $userSearch;
        } else {
            return "Searched Data Not Found";
        }
    }

    public function delete($id)
    {
        $user = User::find($id);
        if ($user) {
            $user->delete();
            return ['Result'    =>  'User Deleted Successfully'];
        } else {
            return ['Result'    =>  'Deleting Failed'];
        }
    }
}
