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
                                <h4 class="panel-title">Edit Addons</h4>
                            </div>
                        </div>
                        <div class="col-md-6 text-right btn-margin">
                            <a href="packages.html" class="btn btn-primary">
                                Back</a> </div>
                    </div>
                    <div class="panel-body">
                            <div class="panel-body">
                                <form method="Post" action="{{route('addons.update',  ['addon' => $addons->id])}}">
                                <input type="hidden" name="_method" value="PUT">
                                <input type = "hidden" name = "_token" value = "{{ csrf_token() }}">
                                <input type = "hidden" name = "id" value = "{{ $addons->id }}">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="name">Name</label>
                                                <input  name="name" id="name" type="text" class="form-control"
                                                value="{{$addons->name}}">
                                            </div>
                                            @error('name')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Update
                                        Addon</button>
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