@extends('layouts.master')

@section('content')

    <div class="features-boxed" style="background-color:#eb3b60;">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card mb-5 mt-5" >
                        <div class="card-header">
                            <h4>Whitelist {{ $type }}</h4>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-12">
                                    <h2>Enter the Player's name: </h2>
                                    <form method="POST" class="form-inline" action="{{ $formUrl }}" >
                                        @csrf
                                        <div class="form-group">
                                            <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" placeholder="Name" required autofocus>

                                            @if ($errors->has('name'))
                                                <span class="invalid-feedback">
                                                    <strong>{{ $errors->first('name') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                        <button type="submit" class="ml-3 btn btn-outline-success">Submit</button>
                                    </form>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection
