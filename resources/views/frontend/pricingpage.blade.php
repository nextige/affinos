@extends('layouts.app')

@section('content')
<div class="page-inner">
                    <div class="page-title">
                        <h3 class="breadcrumb-header">Pricing</h3>
                    </div>
                    <div class="row">
                    @foreach($packagesToReturn as $key => $packages)
                        @foreach($packages as $package)
                            <div class="col-md-4">
                                <h4>{{$package->name}}</h4>
                                <h3>{{$package->price}}</h3>
                                <p>{{$package->recurrance->name}}</p>
                                <h4>{{$package->recurrance->name}}</h4>
                                <p>{!! $package->description !!}</p>
                                <a href="{{url('processprincing', $package->id)}}">Get Affinos</a>
                            </div>
                        @endforeach
                    @endforeach
                    </div>
                    
                    <div class="page-footer">
                        <p>Made with <i class="fa fa-heart"></i> by stacks</p>
                    </div>
                </div><!-- /Page Inner -->
@endsection
