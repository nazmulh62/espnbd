@extends('admin.master')
@section('title')
    ESPNBD | Notice Add
@endsection

@section('body')

    <div class="content-wrapper">

        <div class="container">
            <div class="row">
                <div class="col-md-9 col-md-offset-1">
                    <div class="panel panel-default" style="margin-top:15px">
                        <div class="panel panel-heading  text text-center">Add Notice Content Form</div>

                        <div class="panel-body">
                            <br/>
                            {{Session('message')}}
                            <form action="{{url('/notice/new')}}" method="post" enctype="multipart/form-data">
                                {{ csrf_field() }}

                                <div class="form-group">
                                    <label for="contentInputField">Notice Title</label>
                                    <input type="text" name="notice_title" class="form-control" id="contentInputField" placeholder="Notice Title Here">
                                </div>
                                <div class="form-group">
                                    <label for="contentAuthorName">Author Name</label>
                                    <input type="text" name="author_name" class="form-control" id="contentInputField" placeholder="Notice Author Name Here">
                                </div>
                                <div class="form-group">
                                    <label for="contentDescription">Notice Description</label>
                                    <textarea class="form-control" name="notice_description" rows="7" placeholder="Notice Description Here"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="contentImageField">Notice Image</label>
                                    <input type="file" name="notice_image" accept="image/*" id="ImageInputFile" >
                                </div>
                                <div class="form-group">
                                    <label for="publicationStatus"  class="control-label">Publication Status</label>
                                    <select class="form-control" name="publication_status">
                                        <option value="1">Published</option>
                                        <option value="0">Unpublished</option>
                                    </select>
                                </div>

                                <button type="submit" name="btn" class="btn btn-success btn-flat">Save Notice info</button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection