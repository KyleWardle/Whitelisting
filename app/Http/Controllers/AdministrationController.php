<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Middleware\CheckSuperAdmin;
use App\User;

use App\EMSPermissions;
use App\SDPermissions;
use App\StaffPermissions;
use App\TypePermissions;

use Input;


class AdministrationController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware(CheckSuperAdmin::class);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */

     public function adminMenu()
     {
         $Users = User::where('is_super_admin', 0)->get();
         return view('admin.menu', compact('Users'));
     }

     public function manageUser($userid)
     {
         $EMSPermissions = EMSPermissions::where('user_id', $userid)->first();
         $SDPermissions = SDPermissions::where('user_id', $userid)->first();
         $StaffPermissions = StaffPermissions::where('user_id', $userid)->first();
         $TypePermissions = TypePermissions::get();

         $User = User::where('is_super_admin', 0)->findOrFail($userid);
         return view('admin.manage', compact('User', 'EMSPermissions', 'SDPermissions', 'StaffPermissions', 'TypePermissions'));
     }

     public function manageUserSubmit(request $request, $userid)
     {
         $SDPermissions = SDPermissions::where('user_id', $userid)->first();
         if (!$SDPermissions) {
             $SDPermissions = new SDPermissions;
         }
         $SDPermissions->user_id = $userid;
         $SDPermissions->permission_level = Input::get('sd_permissions');
         $SDPermissions->save();#

         $EMSPermissions = EMSPermissions::where('user_id', $userid)->first();
         if (!$EMSPermissions) {
             $EMSPermissions = new EMSPermissions;
         }
         $EMSPermissions->user_id = $userid;
         $EMSPermissions->permission_level = Input::get('ems_permissions');
         $EMSPermissions->save();

         $StaffPermissions = StaffPermissions::where('user_id', $userid)->first();
         if (!$StaffPermissions) {
             $StaffPermissions = new StaffPermissions;
         }
         $StaffPermissions->user_id = $userid;
         $StaffPermissions->permission_level = Input::get('staff_permissions');
         $StaffPermissions->save();

         $request->session()->flash('status', 'Saved Permissions!');
         $request->session()->flash('alert-class', 'alert-success');

         return redirect()->back();
     }


}
