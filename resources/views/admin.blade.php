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
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        
                        <tr>
                            <td>test</td>
                            <td>Draft</td>
                            <td>
                                <div class="btn-group">
                                    <a href="{{ url('user586/create') }}" class="btn admin-btn btn-link">
                                        <span class="glyph glyph-edit type-t7"></span>&nbsp;
                                        edit
                                    </a>
                                    <a href="{{ url('user586/create') }}" class="btn admin-btn btn-link">
                                        <span class="glyph glyph-checkmark type-t7"></span>&nbsp;
                                        publish
                                    </a>
                                    <a href="{{ url('user586/create') }}" class="btn admin-btn btn-link">
                                        <span class="glyph glyph-cancel type-t7"></span>&nbsp;
                                        draft
                                    </a>
                                </div>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@stop