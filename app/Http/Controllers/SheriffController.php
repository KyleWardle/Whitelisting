<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Input;

use App\Whitelist;

use App\TypeBlacklisted;

use App\TypeEMSAviation;
use App\TypeEMSFD;
use App\TypeEMSRank;

use App\TypeSDRank;
use App\TypeSDAviation;
use App\TypeSDCID;
use App\TypeSDFTO;
use App\TypeSDGU;
use App\TypeSDHP;
use App\TypeSDIA;
use App\TypeSDK9;
use App\TypeSDSERT;

use App\TypeStaffRank;

use App\Http\Middleware\CheckSDPermissions;

class SheriffController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware(CheckSDPermissions::class);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */

    public function whitelistSheriff()
    {
        $type = "Sheriff";
        $formUrl = route('sheriffSearch');
        return view('whitelist.main', compact(['type', 'formUrl']));
    }

    public function sheriffSearch(request $request)
    {
        $Whitelist = Whitelist::where('PlayerName', Input::get('name'))->first();

        if ($Whitelist) {
            return redirect()->route('showUserSheriff', $Whitelist->uid);
        } else {
            $request->session()->flash('status', 'No User Found!');
            $request->session()->flash('alert-class', 'alert-danger');
            return redirect()->back();
        }
    }

    public function showUserSheriff(request $request, $uid)
    {
        $Whitelist = Whitelist::findOrFail($uid);

        $TypeSDRank = TypeSDRank::get();
        $TypeSDAviation = TypeSDAviation::get();
        $TypeSDCID = TypeSDCID::get();
        $TypeSDFTO = TypeSDFTO::get();
        $TypeSDGU = TypeSDGU::get();
        $TypeSDHP = TypeSDHP::get();
        $TypeSDIA = TypeSDIA::get();
        $TypeSDK9 = TypeSDK9::get();
        $TypeSDSERT = TypeSDSERT::get();
        $type = "Sheriff";
        $newWhitelistRoute = route('whitelistSheriff');
        $postURL = route('submitUserSheriff', $uid);

        return view('whitelist.user', compact(['Whitelist', 'type', 'TypeSDRank', 'TypeSDAviation', 'TypeSDCID', 'TypeSDFTO', 'TypeSDGU', 'TypeSDHP', 'TypeSDIA', 'TypeSDK9','TypeSDSERT', 'newWhitelistRoute', 'postURL']));
    }

    public function submitUserSheriff(request $request, $uid)
    {
        $Whitelist = Whitelist::find($uid)->update(Input::except('_token'));
        $request->session()->flash('status', 'Whitelist Updated!');
        $request->session()->flash('alert-class', 'alert-success');
        return redirect()->back();
    }
}
