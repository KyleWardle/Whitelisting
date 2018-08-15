@extends('layouts.master')

@section('content')

    <div class="features-boxed" style="background-color:#eb3b60;">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card mb-5 mt-5" >
                        <div class="card-header">
                            <h4>Admin Menu</h4>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-12">
                                    <h2>Users</h2>
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-hover" id="userTable">
                                            <thead>
                                                <tr>
                                                    <th>User Name</th>
                                                    <th>User Email</th>
                                                    <th>Date Joined</th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($Users as $User)
                                                    <tr>
                                                        <td>{{$User->name}}</td>
                                                        <td>{{$User->email}}</td>
                                                        <td>{{$User->created_at}}</td>
                                                        <td><a class="btn btn-sm btn-danger" href="{{route('manageUser', $User->id)}}">Manage User</a></td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection

@section('customjavascript')
    <script>

        $(document).ready( function () {
            $('#userTable').DataTable();
        } );

    </script>
@endsection
