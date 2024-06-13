@extends('layouts.app')
@section('content')
<!-- content @s -->
<div class="nk-content ">
    <div class="container-fluid">
        <div class="nk-content-inner">
            <div class="nk-content-body">
                <div class="nk-block-head nk-block-head-sm">
                    @include('layouts.flash')
                    <div class="nk-block-between">
                        <div class="nk-block-head-content">
                            <h3 class="nk-block-title page-title">All Role</h3>
            
                        </div><!-- .nk-block-head-content -->
                        <div class="nk-block-head-content">
                            <div class="toggle-wrap nk-block-tools-toggle">
                                <a href="#" class="btn btn-icon btn-trigger toggle-expand me-n1" data-target="pageMenu"><em class="icon ni ni-menu-alt-r"></em></a>
                                <div class="toggle-expand-content" data-content="pageMenu">
                                    <ul class="nk-block-tools g-3">

                                        <li class="nk-block-tools-opt d-none d-sm-block">
                                            <a href="{{url('roles/create')}}" class="btn btn-primary"><em class="icon ni ni-plus"></em><span>Add Role</span></a>
                                        </li>
                                        <li class="nk-block-tools-opt d-block d-sm-none">
                                            <a href="#" class="btn btn-icon btn-primary"><em class="icon ni ni-plus"></em></a>
                                        </li>
                                    </ul>
                                </div>
                            </div><!-- .toggle-wrap -->
                        </div><!-- .nk-block-head-content -->
                    </div><!-- .nk-block-between -->
                </div><!-- .nk-block-head -->
                <div class="nk-block nk-block-lg">

                    <div class="card card-bordered card-preview">
                        <div class="card-inner">
                            <table class="table" id="myTable">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Name</th>
                                        <th>Action</th>    
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($role as $role)
                                    <tr>
                                        <td>{{$role -> id}}</td>
                                        <td>{{$role -> name}}</td>
                                        <td>
                                            <a href="{{ url('roles/'.$role->id.'/edit') }}" class="btn btn-success">Edit</a>
                                        </td>
                                    </tr>
                                    @endforeach 
                                </tbody>
                            </table>
                        </div>
                    </div><!-- .card-preview -->
                </div> <!-- nk-block -->

            </div>
        </div>
    </div>
</div>
@endsection
