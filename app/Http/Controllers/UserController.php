<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function oportalu()
    {
        return view('oportalu');
    }

    public function dogadjaji()
    {
        return view('dogadjaji');
    }

    public function vesti()
    {
        return view('vesti');
    }

    public function ankete()
    {
        return view('ankete');
    }

    public function pravilnik()
    {
        return view('pravilnik');
    }
    public function getUsers()
    {
        $users = User::all();
        return view('users', compact('users'));
    }
    public function makeMeAnAdmin($id)
    {
        $user = new User();
        $user->makeAdmin($id);
        //return view('users');
        return redirect()->to('users')->with('message', 'Korisnik sa id: ' . $id . ' uspesno prebacen u admine');
    }
public function statistics()
{

    return view('statistics');
}



    public function categories()
    {
        $data = DB::table('users')
                     ->join('groups_users', 'groups_users.user_id', '=', 3,'inner', true)
                     ->join('groups','groups.id', '=', 1,'inner', true)
                     ->select('groups.role')
                     ->get();
        return view('categories',compact('data'));
    }

    public function deletingNews()
    {
            return view('deleting/news');
        }
        public function deletingEvents()
    {
            return view('deleting/events');
        }
        public function deletingAdverts()
    {
            return view('deleting/adverts');
        }
        public function deletingContent()
    {
            return view('deleting/content');
        }
        public function reports()
        {
            return view('reports');
        }

    public function content()
    {
        return view('content');
    }

}
