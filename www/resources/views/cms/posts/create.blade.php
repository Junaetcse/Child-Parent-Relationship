@extends('cms.base-layout')
@section('main-content')
        <div id="content-header">
            <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom">
                    <i class="icon-home"></i> Main Post</a> <a href="#" class="tip-bottom">
                    Main Post Create</a></div>
        </div>
        <div class="container-fluid">
            <hr>
            <div class="row-fluid">
                <div class="span9">
                    <div class="widget-box">
                        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
                            <h5>Create Post</h5>
                        </div>
                        <div class="widget-content nopadding">
                            <form action="{{url('admin/main-post')}}" method="post" enctype="multipart/form-data" class="form-horizontal">
                            @csrf
                            <fieldset>

                            <div class="control-group">
                            <label class="control-label " for="typeahead">Title </label>
                            <div class="controls">
                            <input type="text" class="span11 typeahead" name="title" id="typeahead" >
                            </div>
                            </div>

                            <div class="control-group hidden-phone">
                            <label class="control-label" for="textarea2">Description</label>
                            <div class="controls ">
                            <textarea  class="span11" name="description" id="textarea2" rows="5"></textarea>
                            </div>
                            </div>

                            <div class="control-group">
                            <label class="control-label" for="fileInput">Photo Upload</label>
                            <div class="controls">
                            <input class="input-file uniform_on span11" name="image" id="fileInput" type="file" onchange="readURL(this);">
                            </div>
                            <div class="controls" >
                            <img id="blah" src="http://placehold.it/180" alt="your image" />
                            </div>
                            </div>
                            <div class="control-group">
                            <label class="control-label" for="selectError3">Publish status</label>
                            <div class="controls">
                            <select name="publish_status" id="selectError3">
                            <option value="0">Un Publish</option>
                            <option value="1">Publish</option>
                            <option value="2">Pending</option>
                            </select>
                            </div>
                            </div>
                            <div class="form-actions">
                            <button type="submit" class="btn btn-primary">Upload</button>
                            <button type="reset" class="btn">Cancel</button>
                            </div>
                            </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

@endsection
