<?php

namespace App\Http\Controllers;

use App\Models\User;
use Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class UsersController extends Controller
{
    /*
    ** ========================================================
    ** Function: showUsers()
    **
    ** INPUT PARAMETERS:
    **  None.
    **
    ** RETURN
    **  View with users array
    **
    **  IMPLEMENTATION
    **      Handle the '/users' route and displays all the available users in users table.
    **
    ** HISTORY
    **  2022-01-06 Uday - Created.
    ** ========================================================
    */
    public function showUsers() {
        $users = User::all()->toArray();
        return view('users.users')->with('users', $users);
    }


    /*
    ** ========================================================
    ** Function: showAddUser()
    **
    ** INPUT PARAMETERS:
    **  None.
    **
    ** RETURN
    **  View with users array
    **
    **  IMPLEMENTATION
    **      Handle the '/users' route and displays all the available users in users table.
    **
    ** HISTORY
    **  2022-01-06 Uday - Created.
    ** ========================================================
    */
    public function showAddUser() {
        $user = array();
        return view('users.addUser')->with('user', $user);
    }

    /*
    ** ========================================================
    ** Function: addUser()
    **
    **  HISTORY
    **  2022-01-06 Uday - Created.
    ** ========================================================
    */
    public function addUser(Request $request) {
        // Input validation
        $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email:rfc,dns|unique:users,email'
        ]);

        $inputs = $request->except('_token');
        $userInfo = $this->fillUserInfo($inputs);

        // Create new entry in User table
        User::create($userInfo);
        return redirect('/users')->with('message', 'User Added');
    }

    public function showEditUser($uid) {
        $user = User::where('user_id', $uid)->first();
        return view('users.editUser')->with('user', $user);
    }

    public function editUser(Request $request, $uid) {
        // Input validation
        $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email:rfc,dns'
        ]);

        $inputs = $request->except('_token');
        $userInfo = $this->fillUserInfo($inputs);

        $userMdl = User::findOrFail($uid);
        $userMdl->update($userInfo);
        return redirect('/users')->with('message', 'User Updated');
    }

    public function deleteUser($uid) {
        User::where('user_id', $uid)->delete();
    }

    public function fillUserInfo($inputs) {
        $userInfo = array();
        $userInfo['name'] = $inputs['name'];
        $userInfo['email'] = $inputs['email'];
        return $userInfo;
    }
}
