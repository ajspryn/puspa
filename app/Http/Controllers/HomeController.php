<?php

namespace App\Http\Controllers;

use App\Models\ForumKegiatan;
use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if (Auth::user()) {
            $role = Role::select()->where('user_id', Auth::user()->id)->get()->first();
        } else {
            $role = false;
        }

        $url = '/';

        if ($role) {
            // super admin
            if ($role->role_id == 0) {
                return view('super-admin.dashboard', [
                    'kegiatans' => ForumKegiatan::all(),
                ]);
            // admin
            } elseif ($role->jabatan_id == 1) {
                $url = '/admin';
            // pembina
            } elseif ($role->jabatan_id == 2) {
                $url = '/pembina';
            // anggota 
            } else {
                return view('index', [
                    'kegiatans' => ForumKegiatan::select()->get(),
                ]);
            }
        } else {
            return view('index', [
                'kegiatans' => ForumKegiatan::select()->get(),
            ]);
        }
        return Redirect($url);
    }
}
