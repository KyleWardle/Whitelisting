@extends('layouts.master')

@section('content')

    <div class="features-boxed" style="background-color:#eb3b60;">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <form method="POST" action="{{ route('manageUserSubmit', $User->id) }}" >
                        @csrf
                        <div class="card mb-5 mt-5" >
                            <div class="card-header">
                                <h4>Manage User - {{$User->name}}<a class="btn btn-info pull-right" href="{{route('adminMenu')}}">Back to User Management</a></h4>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-4">
                                        @include('layouts.dropdown', ['TypeModel'=>$TypePermissions, 'Name'=>'sd_permissions', 'Title'=>'SD', 'CurID'=>$SDPermissions->permission_level ?? null, 'Required'=>true])

                                        @include('layouts.dropdown', ['TypeModel'=>$TypePermissions, 'Name'=>'ems_permissions', 'Title'=>'EMS', 'CurID'=>$EMSPermissions->permission_level ?? null, 'Required'=>true])

                                        @include('layouts.dropdown', ['TypeModel'=>$TypePermissions, 'Name'=>'staff_permissions', 'Title'=>'Staff', 'CurID'=>$StaffPermissions->permission_level ?? null, 'Required'=>true])
                                    </div>

                                </div>

                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-danger pull-right">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>

@endsection
