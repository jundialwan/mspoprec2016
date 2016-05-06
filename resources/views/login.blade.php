@extends('master')

@section('content')
<div class="row">
    <div class="col-md-24">
        <div class="container">
            <form action="{{ url('user586') }}" method="POST">
                {!! csrf_field() !!}
                <input type="text" name="user" placeholder="username" required><br>
                <input type="password" name="pass" placeholder="password" required><br>
                
                <div class="btn-group">
                    <input type="submit" name="login" value="login" class="btn btn-default">
                </div>                                    
            </form>
        </div>
    </div>
</div>
@stop