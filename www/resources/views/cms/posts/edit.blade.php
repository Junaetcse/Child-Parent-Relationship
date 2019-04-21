@extends('cms.base-layout')
@section('main-content')
    <div id="content-header">
        <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom">
                <i class="icon-home"></i> Main Post</a>
            <a href="#" class="tip-bottom">Main Post Update</a>
           </div>
    </div>
    <div class="container-fluid">
        <hr>
        <div class="row-fluid">
            <div class="span9">
                <div class="widget-box">
                    <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
                        <h5>Personal-info</h5>
                    </div>
                    <div class="widget-content nopadding">
                        @foreach($edit_main_post as $edit_post)
                            <form action="{{ route('main-post.update',$edit_post->id)}}" method="post" enctype="multipart/form-data" class="form-horizontal">
                                @method('PATCH')
                                @csrf
                                <fieldset>
                                    <div class="control-group">
                                        <label class="control-label" for="typeahead">Title </label>
                                        <div class="controls">
                                            <input type="text" class="span6 typeahead" value="{{$edit_post->title}}" name="title" id="typeahead" >
                                        </div>
                                    </div>
                                    <div class="control-group hidden-phone">
                                        <label class="control-label" for="textarea2">Description</label>
                                        <div class="controls">
			<textarea name="description" id="textarea2" rows="3">
			{{$edit_post->description}}
			</textarea>
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label" for="fileInput">Photo Upload</label>
                                        <div class="controls">
                                            <input class="input-file uniform_on" name="image" id="fileInput"
                                                   value="{{asset('images/Post/' . $edit_post->image)}}" type="file" onchange="readURL(this);">
                                        </div>
                                        <div class="controls" >
                                            @if($edit_post->image)
                                                <img id="blah" src="{{ asset('images/Post/' . $edit_post->image) }}" alt="your image" />
                                            @else
                                                <img id="blah" src="http://placehold.it/180" alt="your image" />
                                            @endif
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label" for="selectError3">Publish status</label>
                                        <div class="controls">
                                            <select name="publish_status" id="selectError3">
                                                <option {{old('publish_status', $edit_post->publish_status)=="0"? 'selected':''}} value="0" > Un Publish </option>
                                                <option {{old('publish_status', $edit_post->publish_status)=="1"? 'selected':''}}  value="1">Publish</option>
                                                <option {{old('publish_status', $edit_post->publish_status)=="2"? 'selected':''}}  value="2">Pending</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-actions">
                                        <button type="submit" class="btn btn-primary">Update Post</button>
                                        <button type="reset" class="btn">Cancel</button>
                                    </div>
                                </fieldset>
                            </form>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
