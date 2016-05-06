@extends('master')

@section('content')
<div class="row">
    <div class="col-md-24">
        
        <div id="blog-header" class="row">
            <div class="col-md-24">
                <div class="container white"><br><br><br><br>
                    <div class="type-t3 white">
                        Personal Blog
                    </div>
                                        
                    <div class="type-t7 white">
                        Here is it, my personal blog. Not my daily life. Just a bunch of story.
                    </div><br><br>
                </div>
            </div>                        
        </div><br><br>
        
        <div id="blog-list" class="row">
            <div class="col-md-18 col-md-offset-3">
                <div class="container">
                    
                    @foreach($data['allblog'] as $blog)
                    <div class="type-t3">
                        <a href="{{ url('blog/'.$blog->hash) }}">{{ $blog->title }}</a><br>                        
                    </div><br>
                    <div class="type-t7 milk">
                        {{ $blog->created_at }}
                    </div><br>
                    
                    <div class="type-t5">
                        <p class="type-t5 blog-body">
                            {{ $blog->content }}
                            <a href="{{ url('blog/'.$blog->hash) }}">Read more</a>                                   
                        </p>
                    </div><br><hr><br>
                    @endforeach
                    
                </div>                   
            </div>
        </div>  
    </div>
</div>
@stop