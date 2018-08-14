@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col align-self-center">
                <h1 class="text-center" style="font-size:58px;padding:19px;padding-bottom:48px;font-family:Cantarell, sans-serif;">OLRPG Whitelisting System</h1>
            </div>
        </div>
    </div>

    <div class="features-boxed" style="background-color:#eb3b60;">
        <div class="container">
            <div class="intro"></div>
            <div class="row justify-content-center features">
                <div class="col-sm-6 col-md-5 col-lg-4 item">
                    <div class="bounce animated box"><i class="fa fa-lock icon" style="color:#f4476b;"></i>
                        <h3 class="name">Sheriff</h3>
                        <p class="description"><br>Whitelist members of the Erie County Sheriff's Department here!<br><br></p><a class="btn btn-outline-info" role="button" href="{{route('whitelistSheriff')}}">Continue</a></div>
                </div>
                <div class="col-sm-6 col-md-5 col-lg-4 item">
                    <div class="bounce animated box"><i class="fa fa-ambulance icon" style="color:#eb3b60;"></i>
                        <h3 class="name">EMS</h3>
                        <p class="description"><br>Whitelist members of the Erie County Emergency Medical Service here!<br><br></p><a class="btn btn-outline-info" role="button" href="{{route('whitelistEMS')}}">Continue</a></div>
                </div>
                <div class="col-sm-6 col-md-5 col-lg-4 item">
                    <div class="bounce animated box"><i class="fa fa-fighter-jet icon" style="color:#eb3b60;"></i>
                        <h3 class="name">Staff</h3>
                        <p class="description"><br>Whitelist Staff members here for OurLifeRPG servers.<br><br></p><a class="btn btn-outline-info" role="button" href="{{route('whitelistStaff')}}">Continue</a></div>
                </div>
            </div>
        </div>
    </div>

    <div></div>
    <div></div>
    <div></div>
@endsection
