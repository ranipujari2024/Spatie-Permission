@extends('layouts.app')
@section('content')

<div class="nk-content ">
    <div class="container-fluid">
        <div class="nk-content-inner">
            <div class="nk-content-body">
                <div class="nk-block-head nk-block-head-sm">
                    <div class="nk-block-between">
                        <div class="nk-block-head-content">
                            <h3 class="nk-block-title page-title"></h3>
                        </div>
                    </div>
                </div>
                <div class="nk-block nk-block-lg">

                    <div class="card card-bordered card-preview">
                        <div class="card-inner">
                            <form method="POST" action="{{url('users/'.$data->id.'/give-permissions')}}">
                                @csrf
                                @method('PUT')
                                <div class="row g-4">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label class="form-label" for="full-name-1">Permissions</label>
                                            @error('permission')
                                            <span class="invalid-feedback" role="alert" style="display:block;">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                            <div class="row">
                                            @foreach($permissions as $per)
                                                <div class="col-lg-3">
                                                    <input type="checkbox"  name="permission[]"  @if($per->is_present ==1) checked @endif id="labelfor{{$per->id}}" value="{{$per->name}}">  {{ $per->name }}
                                                </div>
                                            @endforeach
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
