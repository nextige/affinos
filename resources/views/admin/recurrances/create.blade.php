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
                                            <h4 class="panel-title">Add Recurrence</h4>
                                        </div>
                                    </div>
                                    <div class="col-md-6 text-right btn-margin">
                                        <a href="recurrence.html" class="btn btn-primary">
                                            < Back</a> </div> </div> <div class="panel-body">
                                                    <div class="panel-body">
                                                        <form method = "Post" action="{{route('recurrances.store')}}">
                                                        @csrf
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label>Name</label>
                                                                        <input type="text" class="form-control" id="name"  name="name" placeholder="Package Name">
                                                                        @error('name')
                                                                        <div class="alert alert-danger">{{ $message }}</div>
                                                                       @enderror    
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label>Frequency (in months)</label>
                                                                        <input type="text" class="form-control" id="frequency"  name="frequency" placeholder="Frequency">
                                                                        @error('frequency')
                                                                        <div class="alert alert-danger">{{ $message }}</div>
                                                                       @enderror    
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <button type="submit" class="btn btn-primary">Add
                                                                Recurrence</button>
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
<!-- <div class="page-inner">
<div class="page-title d-flex align-items-center justify-content-center">
    <h3 class="breadcrumb-header">Create Recurrance</h3> 
</div>
<div id="main-wrapper">
<div class="row">
  <div class="col-sm-offset-2 col-sm-8">
<div class="panel panel-white">
  <div class="panel-body">
 
  <form method = "Post" action="{{route('recurrances.store')}}">
  @csrf
    <div class="form-group">
      <label for="name">Name</label>
        <input type="text" class="form-control" id="name"  name="name">
        @error('name')
         <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    
    <div class="form-group">        
      <div class="text-center">
        <button type="submit" class="btn btn-default btn-lg">Create</button>
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