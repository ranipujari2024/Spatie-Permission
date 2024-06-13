@extends('layouts.app')
@section('content')

<div class="nk-content ">
    <div class="container-fluid">
        <div class="nk-content-inner">
            <div class="nk-content-body">
                <div class="nk-block-head nk-block-head-sm">
                    <div class="nk-block-between">
                        <div class="nk-block-head-content">
                            <h3 class="nk-block-title page-title">Edit User</h3>
                        </div>
                    </div>
                </div>
                <div class="nk-block nk-block-lg">

                    <div class="card card-bordered card-preview">
                        <div class="card-inner">
                            <form method="POST" action="{{url('users/'.$user->id)}}">
                                @csrf
                                @method('PUT')
                                <div class="row g-4">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-label" for="full-name-1">Name</label>
                                            <div class="form-control-wrap">
                                                <input type="text" class="form-control @error('name') is-invalid @enderror" value="{{ $user->name }}" name="name" placeholder="Enter Name" id="full-name-1">
                                                @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-label" for="full-name-1">Email</label>
                                            <div class="form-control-wrap">
                                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $user->email  }}" placeholder="Enter email" required autocomplete="email">
                                                @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-label" for="full-name-1">New Password</label>
                                            <div class="form-control-wrap">
                                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Enter password" autocomplete="new-password">
                                                @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-label" for="full-name-1">Confirm Password</label>
                                            <div class="form-control-wrap">
                                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Enter confirm password" autocomplete="new-password">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-label" for="full-name-1">Role</label>
                                            <div class="form-control-wrap">
                                                <select class="form-control @error('role') is-invalid @enderror form-select" name="role" data-placeholder="Select System User" >
                                                    <option label="empty" value="" ></option>
                                                    @foreach($role as $role)
                                                        <option value="{{$role->id}}" {{ in_array($role->name, $userRoles) ? 'selected' : '' }}>{{$role->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-lg btn-primary">Save</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div> 
            </div>
        </div>
    </div>
</div>

@endsection
