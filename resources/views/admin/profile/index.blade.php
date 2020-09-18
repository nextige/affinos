@extends('layouts.adminlayout')

@section('content')

<div class="page-inner no-page-title">
    <div id="main-wrapper">
        <div class="row">
            <div class="col-md-12">


                <div class="panel panel-white">
                    <div class="panel-heading clearfix">
                        <h4 class="panel-title">Basic Information</h4>
                    </div>
                    <div class="panel-body">
                        <form>
                            <div class="panel-body">
                                <form>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>First
                                                    Name</label>
                                                <input type="text" name="fname" class="form-control"
                                                    placeholder="First Name">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Last Name</label>
                                                <input type="email" name="lname" class="form-control"
                                                    placeholder="Last Name">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Phone No.</label>
                                                <input type="text" name="phone" class="form-control"
                                                    placeholder="Phone No.">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Email Address</label>
                                                <input type="email" name="email" class="form-control"
                                                    placeholder="Email Address">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Cage Code</label>
                                                <input type="email" name="cagecode" class="form-control"
                                                    placeholder="Code">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Are you registered in SAMS?</label>
                                                <p class="inp-radio">
                                                    <span>
                                                        <input type="radio" id="test1" name="gender" checked=""
                                                            value="male">
                                                        <label for="test1">Yes</label>
                                                    </span>
                                                    <span class="pl-4">
                                                        <input type="radio" id="test2" name="gender" value="female">
                                                        <label for="test2">No</label>
                                                    </span>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>City</label>
                                                <input type="text" name="city" class="form-control" placeholder="City">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Zip</label>
                                                <input type="text" name="zip" class="form-control" placeholder="Zip">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>State</label>
                                                <select class="form-control">
                                                    <option>State</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                    <option>4</option>
                                                    <option>5</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Country</label>
                                                <select class="form-control">
                                                    <option>Country</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                    <option>4</option>
                                                    <option>5</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Address</label>
                                                <textarea type="email" name="address" class="form-control" rows="3"
                                                    placeholder="Address"></textarea>
                                            </div>
                                        </div>

                                    </div>
                                    <button type="submit" class="btn btn-primary">Update Info</button>
                                </form>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="panel panel-white">
                    <div class="panel-heading clearfix">
                        <h4 class="panel-title">Update Photo</h4>
                    </div>
                    <div class="panel-body">
                        <form>
                            <div class="panel-body">
                                <form>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <div class="avatar-upload">
                                                    <div class="avatar-edit">
                                                        <input type='file' id="imageUpload"
                                                            accept=".png, .jpg, .jpeg" />
                                                        <label for="imageUpload"></label>
                                                    </div>
                                                    <div class="avatar-preview">
                                                        <div id="imagePreview"
                                                            style="background-image: url(http://via.placeholder.com/300x300);">
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <button type="submit" class="btn btn-primary">Update Photo</button>
                                </form>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="panel panel-white">
                    <div class="panel-heading clearfix">
                        <h4 class="panel-title">Change Password</h4>
                    </div>
                    <div class="panel-body">
                        <form>
                            <div class="panel-body">
                                <form>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Password</label>
                                                <input type="text" class="form-control" placeholder="Password">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Confirm Password</label>
                                                <input type="email" class="form-control" placeholder="Confirm Password">
                                            </div>
                                        </div>

                                    </div>
                                    <button type="submit" class="btn btn-primary">Update Password</button>
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

@endsection