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
                                <h4 class="panel-title">Add Addon</h4>
                            </div>
                        </div>
                        <div class="col-md-6 text-right btn-margin">
                            <a href="addons.html" class="btn btn-primary">
                                < Back</a> </div> </div> <div class="panel-body">
                                    <form>
                                        <div class="panel-body">
                                            <form>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>Name</label>
                                                            <input type="text" class="form-control"
                                                                placeholder="Addon Name">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>Price</label>
                                                            <input type="text" class="form-control"
                                                                placeholder="Addons Price">
                                                        </div>
                                                    </div>
                                                </div>
                                                <button type="submit" class="btn btn-primary">Add
                                                    Addon</button>
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
@endsection