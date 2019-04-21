@extends('cms.base-layout')
@section('main-content')
<!--main-container-part-->

    <!--breadcrumbs-->
    <div id="content-header">
        <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a></div>
    </div>
    <!--End-breadcrumbs-->

    <!--Action boxes-->
    <div class="container-fluid">
        <div class="quick-actions_homepage">
            <ul class="quick-actions">
                <li class="bg_lb"> <a href="#"> <i class="icon-dashboard"></i> <span class="label label-important">

                        </span> New Members </a> </li>
                {{--<li class="bg_lg span3"> <a href="charts.html"> <i class="icon-signal"></i> Charts</a> </li>--}}
                <li class="bg_ly"> <a href="#"> <i class="icon-inbox"></i><span class="label label-success">

                        </span> Total Post </a> </li>
                {{--<li class="bg_lo"> <a href="#"> <i class="icon-th"></i> Tables</a> </li>--}}
                {{--<li class="bg_ls"> <a href="#"> <i class="icon-fullscreen"></i> Full width</a> </li>--}}
                {{--<li class="bg_lo span3"> <a href="form-common.html"> <i class="icon-th-list"></i> Forms</a> </li>--}}
                {{--<li class="bg_ls"> <a href="buttons.html"> <i class="icon-tint"></i> Buttons</a> </li>--}}
                {{--<li class="bg_lb"> <a href="interface.html"> <i class="icon-pencil"></i>Elements</a> </li>--}}
                {{--<li class="bg_lg"> <a href="calendar.html"> <i class="icon-calendar"></i> Calendar</a> </li>--}}
                {{--<li class="bg_lr"> <a href="error404.html"> <i class="icon-info-sign"></i> Error</a> </li>--}}

            </ul>
        </div>

<<hr/>
        <div class="row-fluid">
            <div class="span6">
                <div class="widget-box widget-chat">
                    <div class="widget-title bg_lb"> <span class="icon"> <i class="icon-comment"></i> </span>
                        <h5>Chat Option</h5>
                    </div>
                    <div class="widget-content nopadding collapse in" id="collapseG4">
                        <div class="chat-users panel-right2">
                            <div class="panel-title">
                                <h5>Online Users</h5>
                                <button class="btn btn-mini" id="show-folder">New Folder</button>
                                <input id="js-input" data-parent_id="0" type="text" name="name" value="New Folder"  style="width: 100px">
                                <button id="add-folder" class="btn btn-mini add">+</button>
                            </div>
                            <div class="panel-content nopadding">
                                <ul class="contact-list">
                                    <li id="user-Alex" class="online"><a href=""><img alt="" src="img/demo/av1.jpg" /> <span>Alex</span></a></li>
                                    <li id="user-Linda"><a href=""><img alt="" src="img/demo/av2.jpg" /> <span>Linda</span></a></li>
                                    <li id="user-John" class="online new"><a href=""><img alt="" src="img/demo/av3.jpg" /> <span>John</span></a><span class="msg-count badge badge-info">3</span></li>
                                    <li id="user-Mark" class="online"><a href=""><img alt="" src="img/demo/av4.jpg" /> <span>Mark</span></a></li>
                                    <li id="user-Maxi" class="online"><a href=""><img alt="" src="img/demo/av5.jpg" /> <span>Maxi</span></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="chat-content panel-left2">
                            <div class="chat-messages" id="chat-messages">
                                <div id="chat-messages-inner"></div>
                            </div>
                            <div class="chat-message well">
                                <button class="btn btn-success">Send</button>
                                <span class="input-box">
                <input type="text" name="msg-box" id="msg-box" />
                </span> </div>
                        </div>
                    </div>
                </div>

                <div class="accordion" id="collapse-group">

            </div>
        </div>
        <hr>

        </div>
            </div>
        </div>
</div>

@endsection
