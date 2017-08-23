@extends('admin.master')
@section('content')
    <section id="main-content">
        <section class="wrapper">
        <div class="container" style="width: 100%;">
            <div class="thumbnail" style="width: 100%;box-shadow: 1px 1px 1px black; margin-right: 10%;">
                <div class="row">
                    <div  class="panel-heading" style="margin-right: 2%; margin-left: 0%;">
                        <form action="{{ URL::to('adminpanel/contact/delete') }}" method="post">
                            <p><label><input type="checkbox" id="checkAll"/> Check all</label></p>
                                {{ csrf_field() }}
                                <input type="hidden" name="_method" value="delete">


                                <button class="btn btn-danger">Delete Checked</button>

                            <table style="width:100%">
                                <tr>
                                    <th>name</th>
                                    <th>email</th>
                                    <th>text</th>
                                </tr>
                        @foreach($contacts as $contact)
                                    <tr>
                                        <td>{{$contact->name}}</td>
                                        <td>{{$contact->email}}</td>
                                        <td>{{$contact->message}}</td>
                                        <td><input type="checkbox" name="checked[]" class="checkboxes" value="{{ $contact->id }}" />  </td>
                                    </tr>
                        @endforeach
                        </table></form>
                    </div>
                </div>
                <div class="container">
                    {{$contacts->render()}}
                </div>
                </div>
            </div>
        </div>
    </section>
    </section>
    <script>
        function showAlarm(btn) {
            if (confirm("ARE YOU SURE?") == true) {
                btn.parentElement.submit();
            } else {
            }}
    </script>
@endsection

