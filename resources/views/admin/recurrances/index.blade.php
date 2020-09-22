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
                                                    <th class="p-id">Frequency(in months)</th>
                                                    <th class="r-action">Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($recurrances as $recurrance) 
                                                <tr>
                                                    <th>{{$recurrance->name}}</th>
                                                    <th>{{$recurrance->frequency}}</th>
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
@endsection




