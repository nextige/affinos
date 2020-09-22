@extends('layouts.adminlayout')

@section('content')
<div class="page-inner no-page-title">
                <div id="main-wrapper">
                    <div class="row">
                        <div class="col-md-12">

                            <div class="panel panel-white">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="panel-heading clearfix">
                                            <h4 class="panel-title">Create Addons</h4>
                                        </div>
                                    </div>
                                    <div class="col-md-6 text-right btn-margin">
                                        <a href="packages.html" class="btn btn-primary">
                                            < Back</a> </div> </div> <div
                                                class="alert alert-success alert-dismissible fade in" role="alert">
                                                <button type="button" class="close" data-dismiss="alert"
                                                    aria-label="Close"><span aria-hidden="true">×</span></button>
                                                    @if(Session::has('message'))
                                                    <p>{{ Session::get('message') }}</p>
                                                    @endif
                                    </div>
                                    <div class="panel-body">
                                            <div class="panel-body">
                                                <form method = "Post" action="{{route('addons.store')}}">
                                                    @csrf
                                                    <div class="row">
                                                        <div class="col-md-3">
                                                            <div class="form-group">
                                                                <label>Name</label>
                                                                <input type="text"  name="name" id="name" class="form-control"
                                                                    placeholder="Addon Name">
                                                            </div>
                                                        </div>
                                                        @error('name')
                                                        <div class="alert alert-danger">{{ $message }}</div>
                                                        @enderror

                                                    </div>
                                                    <button type="submit" class="btn btn-primary">Add Addons</button>
                                                </form>
                                            </div>
                                    </div>
                                </div>




                            </div>
                        </div>
                    </div>
                </div><!-- Main Wrapper -->

            </div><!-- /Page Inner -->

        </div><!-- /Page Content -->
    </div>

@endsection 