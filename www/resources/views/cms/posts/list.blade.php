@extends('cms.base-layout')
@section('main-content')
    <div id="content-header">
        <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom">
                <i class="icon-home"></i> Main Post</a></div>
    </div>
    <div class="container-fluid">
        <hr>
        <div class="row-fluid">
            <div class="span12">
                <div class="widget-box">
                    <div class="widget-title"> <span class="icon"> <i class="icon-th"></i> </span>

                        <a class="btn btn-success" href="{{URL::to('/admin/main-post/create')}}">Add Post</a>
                        <h5>Post list</h5>

                    </div>
                    <div class="widget-content nopadding">
                        <table class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Image</th>
                                <th>Status</th>
                                <th>Publish Date</th>
                                {{--<th>Editor</th>--}}
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($main_posts as $main_post)
                            <tr class="odd gradeX">
                                <td>{{str_limit($main_post->title, 15)}}</td>
                                <td>{{str_limit($main_post->description,30)}}</td>
                                <td><img src="{{ asset('images/Post/' . $main_post->image) }}"   width="20px" height="10px" ></td>
                                <td>

                                    @if($main_post->publish_status == 0)
                                        <span class="label label-fail">Un Publish</span>
                                    @elseif($main_post->publish_status == 1)
                                        <span class="label label-success">Published</span>
                                        @else
                                        <span class="label label-info">Pending</span>
                                    @endif
                                </td>
                                <td>{{$main_post->created_at}}</td>
                                {{--<td>Win 95+</td>--}}
                                <td class="center">
                                    <a href="{{URL::to('admin/main-post/'.$main_post->id.'/edit')}}" class="btn btn-success btn-mini">edit</a>
                                    <a href="{{URL::to('admin/post',$main_post->id)}}" class="btn btn-danger btn-mini">delete</a>
                                </td>
                            </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

