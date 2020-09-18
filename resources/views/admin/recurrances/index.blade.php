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
                                            <h4 class="panel-title">Recurrence</h4>
                                        </div>
                                    </div>
                                    <div class="col-md-6 text-right btn-margin">
                                        <a href="{{route('recurrances.create')}}" class="btn btn-primary">Add Recurrence</a>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered display" id="example">
                                            <thead>
                                                <tr>
                                                    <th class="p-id">Title</th>
                                                    <th class="r-action">Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($recurrances as $recurrance) 
                                                <tr>
                                                    <th>{{$recurrance->name}}</th>
                                                    <td>
                                                        <a class="btn btn-primary btn-addon btn-sm" href="{{route('recurrances.edit', ['recurrance' => $recurrance->id])}}">
                                                            <i class="fa fa-pencil"></i>
                                                        </a>
                                                        <form action ="{{route('recurrances.destroy', ['recurrance' => $recurrance->id])}}" method="post">
                                                            <input type="hidden" name="_method" value="DELETE">
                                                            <input type = "hidden" name = "_token" value = "{{ csrf_token() }}">
                                                        </form>
                                                        <a class="btn btn-danger btn-addon btn-sm " href="{{route('recurrances.destroy', ['recurrance' => $recurrance->id])}}"><i
                                                                class="fa fa-trash"></i></a>
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
    <h3 class="breadcrumb-header">Recurrances</h3> 
    <a class="btn btn-success m-b-sm" href="{{route('recurrances.create')}}">Add Recurrances</a>
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
                            <th>Title</th>
                            <th>Edit/Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($recurrances as $recurrance) 
                        <tr role="row" class="odd">
                            <td class="sorting_1">{{$recurrance->name}}</td>
                            <td>
                                <div class="btn-white">
                                <button class="btn btn-success">
                               

                                <a href="{{route('recurrances.edit', ['recurrance' => $recurrance->id])}}">
                                    <i class="fa fa-pencil" aria-hidden="true"></i>
                                </a>
                                </button>
                                <form action ="{{route('recurrances.destroy', ['recurrance' => $recurrance->id])}}" method="post">
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




