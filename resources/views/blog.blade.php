@extends('master')

@section('content')
<div class="row">
    <div class="col-md-24">
        
        <div id="blog-title" class="row blue-bg">
            <div class="col-md-18 col-md-offset-3">
                <div class="container white"><br><br><br><br>
                    <div class="type-t3 white">
                        {{ $data['blog']->title }}
                    </div>
                                        
                    <div class="type-t7 white">
                        {{ $data['blog']->created_at }}
                    </div><br><br>
                </div>
            </div><br><br>
        </div>
        
        <div id="blog-content" class="row">
            <div class="col-md-18 col-md-offset-3">
                <div class="container">
                    <p class="blog-body type-t5">
                        {{ $data['blog']->content }}
                    </p><br><br>
                    
                    <div class="type-t6">
                        <a href="">back to blog list</a>
                    </div>   
                </div>                    
            </div>            
        </div><br><br>
        
        
    </div>
</div>
@stop