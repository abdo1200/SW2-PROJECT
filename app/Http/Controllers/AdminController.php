<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class AdminController extends Controller
{
    //to view users
    public function viewusers(){
        $users=User::all();
        return view('admin.viewuser',compact('users'));
    }

    //to delete user
    public function delete($id)
    {
        $user =user::find($id);
        $user->delete();

        return redirect('/admin/viewuser.blade.php');
    }
}
