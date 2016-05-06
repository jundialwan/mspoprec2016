@extends('master')

@section('content')
<div class="row">
    <div class="col-md-24">
        <div class="container">
            <div class="row">
                <div class="col-md-18 col-md-offset-3">
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
                                @if ($post->status == 0)
                                    Drafted
                                @else
                                    Posted
                                @endif
                            </td>
                            <td>
                                <div class="btn-group">
                                    <form action="{{ url('user586/') }}">
                                        {!! csrf_field() !!}
                                        <input type="hidden" name="hash" value="{{ $post->hash }}">
                                        <button class="btn admin-btn btn-link">
                                            <span class="glyph glyph-edit type-t7"></span>&nbsp;
                                            edit
                                        </button>
                                        <button class="btn admin-btn btn-link">
                                            <span class="glyph glyph-checkmark type-t7"></span>&nbsp;
                                            publish
                                        </button>
                                        <button class="btn admin-btn btn-link">
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