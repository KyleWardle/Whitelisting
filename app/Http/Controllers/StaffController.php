<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Input;

use App\Whitelist;

use App\TypeStaffRank;

use App\Http\Middleware\CheckStaffPermissions;

class StaffController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware(CheckStaffPermissions::class);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */

    public function whitelistStaff()
    {
        $type = "Staff";
        $formUrl = route('staffSearch');
        return view('whitelist.main', compact(['type', 'formUrl']));
    }

    public function staffSearch(request $request)
    {
        $Whitelist = Whitelist::where('PlayerName', Input::get('name'))->first();

        if ($Whitelist) {
            return redirect()->route('showUserStaff', $Whitelist->uid);
        } else {
            $request->session()->flash('status', 'No User Found!');
            $request->session()->flash('alert-class', 'alert-danger');
            return redirect()->back();
        }
    }

    public function showUserStaff(request $request, $uid)
    {
        $Whitelist = Whitelist::findOrFail($uid);

        $TypeStaffRank = TypeStaffRank::get();

        $type = "Staff";
        $newWhitelistRoute = route('whitelistStaff');
        $postURL = route('submitUserStaff', $uid);

        return view('whitelist.user', compact(['Whitelist', 'type', 'TypeStaffRank', 'newWhitelistRoute', 'postURL']));
    }

    public function submitUserStaff(request $request, $uid)
    {
        $Whitelist = Whitelist::find($uid)->update(Input::except('_token'));
        $request->session()->flash('status', 'Whitelist Updated!');
        $request->session()->flash('alert-class', 'alert-success');
        return redirect()->back();
    }
}
