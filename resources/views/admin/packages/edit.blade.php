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
                        <form>
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
                                                <div  id="description" value="{{$package->description}}" class="summernote"></div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Additional user</label>
                                                <input type="text" name="additional_user" id="aditdional_user" class="form-control" value="{{$package->aditdional_user}}">
                                                                
                                            </div>
                                        </div>

                                    </div>
                                    <button type="submit" class="btn btn-primary">Update
                                        Package</button>
                                </form>
                            </div>
                        </form>
                    </div>
                </div>




            </div>
        </div>
    </div>
</div><!-- Main Wrapper -->

</div><!-- /Page Inner -->

</div><!-- /Page Content -->
</div><!-- /Page Container -->
<!-- <div class="page-inner">
<div class="page-title d-flex align-items-center justify-content-center">
    <h3 class="breadcrumb-header">Update Package</h3> 
</div>
<div id="main-wrapper">
<div class="row">
  <div class="col-sm-offset-2 col-sm-8">
<div class="panel panel-white">
  <div class="panel-body">
 
  <form method = "Post" action="{{route('packages.update',  ['package' => $package->id])}}">
  <input type="hidden" name="_method" value="PUT">
<input type = "hidden" name = "_token" value = "{{ csrf_token() }}">
<input type = "hidden" name = "id" value = "{{ $package->id }}">
    <div class="form-group">
      <label for="name">Name</label>
        <input type="text" value="{{$package->name}}" class="form-control" id="name" placeholder="Name" name="name">
        @error('name')
         <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
      <label for="price">Price</label>         
        <input type="text" value="{{$package->price}}" class="form-control" id="price" placeholder="Price" name="price">
        @error('monthly_rate')
         <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
      <label for="recurrance_id">Recurrances</label>
      <select class="form-control" name="recurrance_id" id="recurrance_id">
        @foreach($recurrances as $recurrance)
          <option @if($package->recurrance_id == $recurrance->id) selected @endif value="{{$recurrance->id}}">{{$recurrance->name}}</option>
        @endforeach
      </select>
    </div>
    <div class="form-group">
      <label for="headline"> Headline</label>
        <input type="text" value="{{$package->headline}}" class="form-control" id="headline" placeholder=" Headline" name="headline">
    </div>
    <div class="form-group">
      <label for="description">Discription</label>
        <input type="text" value="{{$package->description}}" class="form-control" id="description" placeholder="Discription" name="description">
    </div>
    
    <div class="form-group">        
      <div class="text-center">
        <button type="submit" class="btn btn-default btn-lg">Update</button>
      </div>
    </div>
  </form>
  </div>
</div>
 
  </div>
</div>


</div>
</div> -->

@endsection