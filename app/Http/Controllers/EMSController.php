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

use App\Http\Middleware\CheckEMSPermissions;

class EMSController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware(CheckEMSPermissions::class);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */

    public function whitelistEMS()
    {
        $type = "EMS";
        $formUrl = route('EMSSearch');
        return view('whitelist.main', compact(['type', 'formUrl']));
    }

    public function EMSSearch(request $request)
    {
        $Whitelist = Whitelist::where('PlayerName', Input::get('name'))->first();

        if ($Whitelist) {
            return redirect()->route('showUserEMS', $Whitelist->uid);
        } else {
            $request->session()->flash('status', 'No User Found!');
            $request->session()->flash('alert-class', 'alert-danger');
            return redirect()->back();
        }
    }

    public function showUserEMS(request $request, $uid)
    {
        $Whitelist = Whitelist::findOrFail($uid);

        $TypeEMSRank = TypeEMSRank::get();
        $TypeEMSAviation = TypeEMSAviation::get();
        $TypeEMSFD = TypeEMSFD::get();

        $type = "EMS";
        $newWhitelistRoute = route('whitelistEMS');
        $postURL = route('submitUserEMS', $uid);

        return view('whitelist.user', compact(['Whitelist', 'type', 'TypeEMSRank', 'TypeEMSAviation', 'TypeEMSFD', 'newWhitelistRoute', 'postURL']));
    }

    public function submitUserEMS(request $request, $uid)
    {
        $Whitelist = Whitelist::find($uid)->update(Input::except('_token'));
        $request->session()->flash('status', 'Whitelist Updated!');
        $request->session()->flash('alert-class', 'alert-success');
        return redirect()->back();
    }
}
