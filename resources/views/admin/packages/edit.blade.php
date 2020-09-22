@extends('layouts.adminlayout')

@section('content')
@if(Session::has('message'))
<p>{{ Session::get('message') }}</p>
@endif

<div class="page-inner no-page-title">
    <div id="main-wrapper">
        <div class="row">
            <div class="col-md-12">

                <div class="panel panel-white">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="panel-heading clearfix">
                                <h4 class="panel-title">Edit Package</h4>
                            </div>
                        </div>
                        <div class="col-md-6 text-right btn-margin">
                            <a href="packages.html" class="btn btn-primary">
                                Back</a> </div>
                    </div>
                    <div class="panel-body">
                            <div class="panel-body">
                                <form method="Post" action="{{route('packages.update',  ['package' => $package->id])}}">
                                <input type="hidden" name="_method" value="PUT">
                                <input type = "hidden" name = "_token" value = "{{ csrf_token() }}">
                                <input type = "hidden" name = "id" value = "{{ $package->id }}">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="name">Name</label>
                                                <input  name="name" id="name" type="text" class="form-control"
                                                value="{{$package->name}}">
                                            </div>
                                            @error('name')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Price</label>
                                                <input id="price" type="text" name="price" class="form-control"  value="{{$package->price}}">
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
                                                    <option @if($package->recurrance_id == $recurrance->id) selected @endif value="{{$recurrance->id}}">{{$recurrance->name}}</option>
                                                  @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Headline</label>
                                                <input type="text" name="headline" id="headline" class="form-control"
                                                value="{{$package->headline}}">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Description</label>
                                                <textarea id="description" name="description" class="summernote">{{$package->description}}</textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Additional User Price</label>
                                                <input type="text" name="additional_user" id="aditdional_user" class="form-control" value="{{$package->additional_user}}">
                                                                
                                            </div>
                                        </div>
                                        @foreach($addedAddons as $addedAddon)
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Addons</label>
                                                    <select name="addon_name[]" class="form-control">
                                                        <option>Addon Name</otion>
                                                        @foreach($addons as $addon)
                                                            <option @if($addedAddon->addon_id == $addon->id) selected @endif value="{{$addon->id}}">{{$addon->name}}</otion>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Price</label>
                                                    <input type="text" name="packageprice[]" id="price" class="form-control" value="{{$addedAddon->price}}">
                                                </div>
                                            </div>
                                        @endforeach
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
                                    <button type="submit" class="btn btn-primary">Update
                                        Package</button>
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
</div><!-- /Page Container -->

@endsection