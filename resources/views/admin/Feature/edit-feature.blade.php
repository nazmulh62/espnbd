@extends('admin.master')
@section('title')
    ESPNBD | Features Edit
@endsection

@section('body')

    <div class="content-wrapper">

        <div class="container">
            <div class="row">
                <div class="col-md-9 col-md-offset-1">
                    <div class="panel panel-default" style="margin-top:15px">
                        <div class="panel panel-heading  text text-center">Edit Features Form</div>

                        <div class="panel-body">
                            <br/>
                            {{Session('message')}}
                            <form action="{{url('/feature/update')}}" method="post" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <input type="hidden" value="{{ $featureById->id }}" name="feature_id" class="form-control" id="inputFeatureId" placeholder="Feature Id Here">

                                </div>

                                <div class="form-group">
                                    <label for="featureImageField">Features Image</label>
                                    <input type="file" name="feature_image" id="featureImage" accept="image/*">
                                    <img src="{{asset($featureById->feature_image)}}" width="70" height="70">
                                </div>
                                <div class="form-group">
                                    <label for="featureInputField">Features Title</label>
                                    <input type="text" value="{{ $featureById->feature_title }}" name="feature_title" class="form-control" id="featureInputField" placeholder="Features Title Here">
                                </div>
                                <div class="form-group">
                                    <label for="FeaturesDescriptionField">Features Description</label>
                                    <textarea class="form-control" name="feature_description" rows="5" placeholder="Features Description Here">{{ $featureById->feature_description }}</textarea>
                                </div>

                                <div class="form-group">
                                    <label for="publicationStatus"  class="control-label">Publication Status</label>
                                    <select class="form-control" name="publication_status">
                                        <option value="1">Published</option>
                                        <option value="0">Unpublished</option>
                                    </select>
                                </div>

                                <button type="submit" name="btn" class="btn btn-success btn-flat">Update Features info</button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection