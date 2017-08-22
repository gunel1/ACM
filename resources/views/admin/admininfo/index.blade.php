@extends('admin.master')
@section('content')
    <section id="main-content">
        <section class="wrapper">
            <div class="container" style="height: 100%;width: 100%;">
                <div class="" >
                    <div class="item" style="margin-top: 1%; box-shadow: 1px 1px 1px black;">
                        <div class="thumbnail" style="margin-top: 1%">
                            <h1 style="margin-left: 5%">Admin Info</h1>
                            <div class="productinfo text-center">
                                  {{$user->name}}</a><p><hr>
                                    <i>{{$user->email}}</i></p><hr></div></a>
                            <div class="row">
                                <div class="col-xs-12 col-md-6">
                                    <a href="{{ URL::to('/adminpanel/info/edit') }}" class="btn btn-danger" style="background-color: #5fbe28; border: 0;"><i class="fa fa-pencil-square-o"> </i> Edit</a>
                                </div></div>
                            <!-- /page content -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </section>
@stop
