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
                                            <h4 class="panel-title">Create Package</h4>
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
                                                <form method = "Post" action="{{route('packages.store')}}">
                                                    @csrf
                                                    <div class="row">
                                                        <div class="col-md-3">
                                                            <div class="form-group">
                                                                <label>Name</label>
                                                                <input type="text"  name="name" id="name" class="form-control"
                                                                    placeholder="Package Name">
                                                            </div>
                                                        </div>
                                                        @error('name')
                                                        <div class="alert alert-danger">{{ $message }}</div>
                                                        @enderror
                                                        <div class="col-md-3">
                                                            <div class="form-group">
                                                                <label>Price</label>
                                                                <input id="price" name="price"  type="text" class="form-control"
                                                                    placeholder="Package Price">
                                                            </div>
                                                        </div>
                                                        @error('monthly_rate')
                                                        <div class="alert alert-danger">{{ $message }}</div>
                                                        @enderror

                                                        <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label>Recurrence</label>
                                                            <select name="recurrance_id" id="recurrance_id" class="form-control">
                                                                @foreach($recurrances as $recurrance)
                                                                <option value="{{$recurrance->id}}">{{$recurrance->name}}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
</div>
                                                        <div class="col-md-3">
                                                            <div class="form-group">
                                                                <label>Headline</label>
                                                                <input type="text" name="headline" id="headline" class="form-control"
                                                                    placeholder="Package Headline">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label>Description</label>
                                                                <textarea id="description" name="description"  class="summernote"></textarea>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label>Additional user</label>
                                                                <input type="text" name="additional_user" id="additional_user" class="form-control"
                                                                    placeholder="Aditional User">
                                                                
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label>Addons</label>
                                                                <select name="addon_name[]" class="form-control">
                                                                    <option value="">Addon Name</otion>
                                                                    @foreach($addons as $addon)
                                                                        <option value="{{$addon->id}}">{{$addon->name}}</otion>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label>Price</label>
                                                                <input type="text" name="packageprice[]" id="price" class="form-control" value="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <button type="submit" class="btn btn-primary">Add Package</button>
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