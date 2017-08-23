@extends('admin.master')
@section('content')<section id="main-content">
        <section class="wrapper">
        <div class="container" style="height: 100%;width: 100%;">
            <div class="" >
                <div class="item" style="margin-top: 1%; box-shadow: 1px 1px 1px black;">
                    <div class="thumbnail" style="margin-top: 1%">
                        <h1 style="margin-left: 5%">EDIT Info</h1><hr>
                    <div class="row">
                        <br>
                    </div>@if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <ul>@foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul></div>@endif<br><br><br>
                    <form class="form-horizontal form-label-left" novalidate style="margin-top: 5%; width:90%;margin-left: 5%;" action="{{ URL::to('/adminpanel/info/store') }}" method="post" >
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label><span class="required">*</span>
                            <div class="col-md-6">
                                <input  class="form-control" name="name" value="{{$user->name}}" type="text" required>
                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">Email</label><span class="required">*</span>
                            <div class="col-md-6">
                                <input  class="form-control" name="email"  value="{{$user->email}}"  type="email" required>
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <label ><input type="checkbox" onchange="toggleCheckbox(this)" name="checkbox" checked > Change Password</label><br>
                        <div id="passwordPanel" >
                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label"> New Password</label><span class="required">*</span>
                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label"> Confirm New Password</label><span class="required">*</span>
                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>
                    </div>
                        <input type="hidden"  name="id" value="{{$user->id}}"><br>
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-3">
                                <button type="button" class="btn btn-primary"  onclick="redirect()">Cancel</button>
                                <input type="submit" class="btn btn-success"  value="Save" >
                            </div>
                        </div>
                    </form>
                    <!-- /page content -->
            </div>
        </div>
        </div>
        </div>
        <script>
            function redirect(){
                window.location="{{URL::to('/adminpanel/info')}}";
            }
            function toggleCheckbox(element)
            {if(element.checked){
                $('#passwordPanel').show();}
                else{
                    $('#passwordPanel').hide();}}
        </script>
        </section>
    </section>
@stop
