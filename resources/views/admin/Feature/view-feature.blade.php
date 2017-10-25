@extends('admin.master')
@section('title')

    ESPNBD |  Feature View

@endsection

@section('body')

    <div class="content-wrapper">
        <div class="container">
            <div class="row">

                <div class=" panel-default">
                    <div class=" panel page-title">
                        <div>
                            <h1><i class="fa fa-home fa-lg"></i>View Feature Content Details</h1>
                            <p>Table to display analytical data effectively</p>

                        </div>

                    </div>

                    <div class="panel panel-body">

                        <div class="row">
                            <div class="col-md-10">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="panel panel-default" style="margin-top:15px;width: 850px;">

                                            <table class="table table-hover table-bordered" id="sampleTable">
                                                <tr>
                                                    <th>Feature Id</th>
                                                    <td>{{$featureById->id}}</td>
                                                </tr>
                                                <tr>
                                                    <th>Feature Title</th>
                                                    <td>{{$featureById->feature_title}}</td>
                                                </tr>

                                                <th>Feature Description</th>
                                                <td>{{$featureById->feature_description}}</td>

                                                </tr>

                                                <tr>
                                                    <th>Feature Image</th>
                                                    <td><img src="{{ asset($featureById->feature_image) }}" alt="" height="100" width="100"></td>

                                                </tr>
                                                <tr>
                                                    <th>Publication Status</th>
                                                    <td>{{$featureById->publication_status}}</td>

                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>


@endsection