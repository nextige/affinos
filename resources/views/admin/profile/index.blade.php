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
                            <div class="panel-body">
                                <form method = "POST" action="{{route('profile.store')}}">
                                @csrf
                                    <input type="hidden" name="id" value="{{ $user->id }}" />
                                     <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>First
                                                    Name</label>
                                                <input type="text" name="name" class="form-control"
                                                    value = '{{$user->name}}'>
                                            </div>
                                        </div>
                                   
                                     
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Last Name</label>
                                                <input type="text" name="last_name" class="form-control"
                                                    placeholder="Last Name" value="{{$user->last_name}}">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Phone No.</label>
                                                <input type="text" name="phone" value="{{$user->phone}}" class="form-control"
                                                    placeholder="Phone No.">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Email Address</label>
                                                <input type="email" name="email" class="form-control"
                                                value='{{$user->email}}'>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Cage Code</label>
                                                <input type="text" value="{{$user->cagecode}}" name="cagecode" class="form-control"
                                                    placeholder="Code">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Are you registered in SAMS?</label>
                                                <p class="inp-radio">
                                                    <span>
                                                        <input type="radio" @if($user->sams) selected @endif id="test1" name="sams" checked=""
                                                            value="yes">
                                                        <label for="test1">Yes</label>
                                                    </span>
                                                    <span class="pl-4">
                                                        <input type="radio" @if(!$user->sams) selected @endif id="test2" name="sams" value="yes">
                                                        <label for="test2">No</label>
                                                    </span>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>City</label>
                                                <input type="text" value="{{$user->city}}" name="city" class="form-control" placeholder="City">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Zip</label>
                                                <input type="text" value="{{$user->zip}}" name="zip" class="form-control" placeholder="Zip">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>State</label>
                                                <select class="form-control" name="state">
                                                    <option>State</option>
                                                    @foreach($address as $add)
                                                        <option @if($add->state_code == $user->state) selected @endif value="{{ $add->state_code }}">{{ $add->state }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Country</label>
                                                <select class="form-control" name="country">
                                                    <option>Country</option>
                                                    @foreach($address as $country)
                                                        <option @if($add->country_code == $user->country) selected @endif value="{{$country->country_code}}">{{ $country->country }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Address</label>
                                                <textarea name="address" class="form-control" rows="3"
                                                    placeholder="Address">{{$user->address}}</textarea>
                                            </div>
                                        </div>

                                    </div>
                                    <button type="submit" class="btn btn-primary">Update Info</button>
                                </form>
                            </div>
                    </div>
                </div>

                <div class="panel panel-white">
                    <div class="panel-heading clearfix">
                        <h4 class="panel-title">Update Photo</h4>
                    </div>
                    <div class="panel-body">
                       
                            <div class="panel-body">
                                <form method="POST"  action="{{route('profile.avatar')}}" enctype="multipart/form-data">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <div class="avatar-upload">
                                                    <div class="avatar-edit">
                                                        <input type='file' name="image"  id="imageUpload"
                                                            accept=".png, .jpg, .jpeg" />
                                                        <label for="imageUpload"></label>
                                                    </div>
                                                    <div class="avatar-preview">
                                                        <div id="imagePreview"
                                                            src="{{url('uploads/section_image')}}>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <button type="submit" class="btn btn-primary">Update Photo</button>
                                </form>
                            </div>
                        
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
                                                <input type="text"  name=password class="form-control" value='{{$user->password}}'>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Confirm Password</label>
                                                <input type="text" name="cpassword" class="form-control" placeholder="Confirm Password">
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