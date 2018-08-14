@extends('layouts.master')

@section('content')

    <div class="features-boxed" style="background-color:#eb3b60;">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <form method="POST" action="{{ $postURL }}">
                        @csrf
                        <div class="card mb-5 mt-5" >
                            <div class="card-header">
                                <div class="row">
                                    <div class="col-sm-8">
                                        <h4>Whitelist {{ $Whitelist->PlayerName }} for {{ $type }}</h4>
                                    </div>
                                    <div class="col-sm-4">
                                        <a href="{{ $newWhitelistRoute }}" class="btn btn-outline-info">Whitelist Someone Else</a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm-6">

                                            @if($type == "Sheriff")
                                                @include('whitelist.factions.sd')
                                            @elseif($type == "EMS")
                                                @include('whitelist.factions.ems')
                                            @elseif($type == "Staff")
                                                @include('whitelist.factions.staff')
                                            @endif


                                        </div>
                                        <div class="col-sm-6 text-center">
                                            <h6>Blacklist Management</h6>
                                        </div>
                                    </div>
                            </div>
                            <div class="card-footer">
                                <button class="btn btn-outline-danger float-right" type="submit">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>

@endsection
