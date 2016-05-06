@extends('master')

@section('content')
<div class="row">
    <div class="col-md-24">
        
        <div id="blog-title" class="row blue-bg">
            <div class="col-md-20 col-md-offset-2">
                <div class="container white"><br><br>
                    <div class="type-t3 white">
                        Blog Dashboard
                    </div>
                                        
                    <div class="type-t7 white">
                        Manage blog here
                    </div><br><br>
                </div>
            </div><br><br>
        </div>
        
        <div id="dashboard-content" class="row">
            <div class="col-md-20 col-md-offset-2">                                               
                <div class="container">
                    
                    <div class="btn-group">
                        <a href="{{ url('user586/create') }}" class="btn btn-primary">
                            <span class="glyph glyph-add type-t7"></span>&nbsp;
                            new
                        </a>
                    </div><br><br><br>
                    
                    <table class="table table-striped">
                        <tr>
                            <th>Title</th>
                            <th>Created at</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        
                        @foreach($data['allpost'] as $post)
                        <tr>
                            <td>{{ $post->title }}</td>
                            <td>{{ $post->created_at }}</td>
                            <td>
                                @if ($post->post_status == 0)
                                    Drafted
                                @else
                                    Posted
                                @endif
                            </td>
                            <td>
                                <div class="btn-group">
                                    <form action="{{ url('user586/update') }}">
                                        {!! csrf_field() !!}
                                        <input type="hidden" name="hash" value="{{ $post->hash }}">
                                        <button class="btn admin-btn btn-link" name="edit">
                                            <span class="glyph glyph-edit type-t7"></span>&nbsp;
                                            edit
                                        </button>
                                        
                                        @if ($post->post_status == 1)
                                        <button class="btn admin-btn btn-link disabled" name="publish">
                                        @else
                                        <button class="btn admin-btn btn-link" name="publish">
                                        @endif
                                            <span class="glyph glyph-checkmark type-t7"></span>&nbsp;
                                            publish
                                        </button>
                                        
                                        @if ($post->post_status == 0)
                                        <button class="btn admin-btn btn-link disabled" name="draft">
                                        @else
                                        <button class="btn admin-btn btn-link" name="draft">
                                        @endif
                                            <span class="glyph glyph-cancel type-t7"></span>&nbsp;
                                            draft
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                        
                    </table>
            
                </div>
            </div> 
        </div>
    </div>
</div>
@stop