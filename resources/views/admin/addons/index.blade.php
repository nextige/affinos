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
                                <h4 class="panel-title">Addons</h4>
                            </div>
                        </div>
                        <div class="col-md-6 text-right btn-margin">
                            <a href="add-addon.html" class="btn btn-primary">Add Addons</a>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-bordered display" id="example">
                                <thead>
                                    <tr>
                                        <th class="p-name">Name</th>
                                        <th class="p-name">Price</th>
                                        <th class="r-action">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                       
                                        <td>Federal Bids</td>
                                        <td>$69.00</td>
                                        <td>
                                            <a class="btn btn-primary btn-addon btn-sm" href="">
                                                <i class="fa fa-pencil"></i>
                                            </a>
                                            <a class="btn btn-danger btn-addon btn-sm " href=""><i
                                                    class="fa fa-trash"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        
                                        <td>Military Bids</td>
                                        <td>$69.00</td>
                                        <td>
                                            <a class="btn btn-primary btn-addon btn-sm" href="">
                                                <i class="fa fa-pencil"></i>
                                            </a>
                                            <a class="btn btn-danger btn-addon btn-sm " href=""><i
                                                    class="fa fa-trash"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        
                                        <td>Canada Bids</td>
                                        <td>$69.00</td>
                                        <td>
                                            <a class="btn btn-primary btn-addon btn-sm" href="">
                                                <i class="fa fa-pencil"></i>
                                            </a>
                                            <a class="btn btn-danger btn-addon btn-sm " href=""><i
                                                    class="fa fa-trash"></i></a>
                                        </td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>




            </div>
        </div>
    </div>
</div><!-- Main Wrapper -->

@endsection