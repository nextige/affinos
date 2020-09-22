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
                                            <h4 class="panel-title">Packages List</h4>
                                        </div>
                                    </div>
                                    <div class="col-md-6 text-right btn-margin">
                                        <a href="{{route('packages.create')}}" class="btn btn-primary">Add Packages</a>
                                    </div>
                                </div>

                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered display" id="example">
                                            <thead>
                                                <tr>
                                                    
                                                    <th class="p-name">Name</th>
                                                    <th class="p-price">Price</th>
                                                    <th class="p-subscription">Recurrence</th>
                                                    <th class="p-headline">Headline</th>
                                                    <th class="p-additional">Additional user Price</th>
                                                    <th class="p-description">Description</th>
                                                    <th class="p-action">Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($packages as $package) 
                                                <tr>
                                                    <th>{{$package->name}}</th>
                                                    <td>{{$package->price}}</td>
                                                    <td>{{$package->recurrance->name}}</td>
                                                    <td>{{$package->headline}}</td>
                                                    <td>{{$package->additional_user }}</td>
                                                    <td>{!! $package->description !!}</td>
                                                    <td>
                                                        <a href="{{route('packages.edit', ['package' => $package->id])}}" class="btn btn-primary btn-addon btn-sm" >
                                                            <i class="fa fa-pencil"></i>
                                                        </a>
                                                        <form action ="{{route('packages.destroy', ['package' => $package->id])}}" method="post">
                                                            <input type="hidden" name="_method" value="DELETE">
                                                            <input type = "hidden" name = "_token" value = "{{ csrf_token() }}">
                                                            <button type="submit" class="btn btn-danger btn-sm">
                                                                <i class="fa fa-trash" aria-hidden="true"></i>
                                                            </button>
                                                        </form>
                                                    </td>
                                                </tr>
                                               
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<!-- <div class="page-inner">
<div class="page-title d-flex align-items-center justify-content-between">
    <h3 class="breadcrumb-header"> Packages</h3> 
    <a class="btn btn-success m-b-sm" href="{{route('packages.create')}}">Add Package</a>
</div>
<div id="main-wrapper">
    <div class="row">
        <div class="col-md-12">
        <div class="panel panel-white">
            <div class="panel-body">
                <div class="table-responsive">
                <table id="example" class="display table" style="width: 100%; cellspacing: 0;">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Price</th>
                            <th>Recurrance</th>
                            <th>Headline</th>
                            <th>Description</th>
                            <th>Edit/Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($packages as $package) 
                        <tr role="row" class="odd">
                            <td class="sorting_1">{{$package->name}}</td>
                            <td>{{$package->price}}</td>
                            <td>{{$package->recurrance->name}}</td>
                            <td>{{$package->headline}}</td>
                            <td>{{$package->description}}</td>
                            <td>
                                <div class="btn-white">
                                <button class="btn btn-success">
                               

                                <a href="{{route('packages.edit', ['package' => $package->id])}}">
                                    <i class="fa fa-pencil" aria-hidden="true"></i>
                                </a>
                                </button>
                                <form action ="{{route('packages.destroy', ['package' => $package->id])}}" method="post">
                                    <input type="hidden" name="_method" value="DELETE">
                                    <input type = "hidden" name = "_token" value = "{{ csrf_token() }}">
                                    <button type="submit" class="btn btn-danger">
                                        <i class="fa fa-trash" aria-hidden="true"></i>
                                    </button>
                                </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>  
                </div>
            </div>
        </div>
        </div>
    </div>
</div>
</div> -->
@endsection




