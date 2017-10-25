@extends('admin.master')
@section('title')
    ESPNBD | Notice Edit
@endsection

@section('body')

    <div class="content-wrapper">

        <div class="container">
            <div class="row">
                <div class="col-md-9 col-md-offset-1">
                    <div class="panel panel-default" style="margin-top:15px">
                        <div class="panel panel-heading  text text-center">Edit Notice Content Form</div>

                        <div class="panel-body">
                            <br/>
                            {{Session::get('message')}}
                            <form action="{{url('/notice/update')}}" method="post" enctype="multipart/form-data">

                                {{ csrf_field() }}
                                <div class="form-group">
                                    <label for="contentInputField">Notice Title</label>
                                    <input type="text" value="{{$noticeById->notice_title}}" name="notice_title" class="form-control" id="contentInputField" placeholder="Notice Title Here">
                                    <input type="hidden" value="{{ $noticeById->id }}" name="notice_id" class="form-control">

                                </div>
                                <div class="form-group">
                                    <label for="contentAuthorName">Author Name</label>
                                    <input type="text" value="{{$noticeById->author_name}}" name="author_name" class="form-control" id="contentInputField" placeholder="Notice Author Name Here">
                                </div>
                                <div class="form-group">
                                    <label for="contentDescription">Notice Description</label>
                                    <textarea class="form-control" name="notice_description" rows="5" placeholder="Notice Description Here">{{$noticeById->notice_description}}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="contentImageField">Notice Image</label>
                                    <input type="file" value="{{asset($noticeById->notice_image)}}" name="notice_image" accept="image/*" id="ImageInputFile">
                                    {{--<img src="{{asset($noticeById->notice_image)}}" width="50" height="50">--}}

                                </div>
                                <div class="form-group">
                                    <label for="publicationStatus"  class="control-label">Publication Status</label>
                                    <select class="form-control" name="publication_status">
                                        <option value="1">Published</option>
                                        <option value="0">Unpublished</option>
                                    </select>
                                </div>

                                <button type="submit" name="btn" class="btn btn-success btn-flat">Update Notice info</button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection