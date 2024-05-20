@extends('frontend.master')
@section('content')
    <style>
        .stretch-card>.card {
            width: 100%;
            min-width: 100%
        }

        body {
            background-color: #f9f9fa
        }

        .flex {
            -webkit-box-flex: 1;
            -ms-flex: 1 1 auto;
            flex: 1 1 auto
        }

        @media (max-width:991.98px) {
            .padding {
                padding: 1.5rem
            }
        }

        @media (max-width:767.98px) {
            .padding {
                padding: 1rem
            }
        }

        .padding {
            padding: 3rem
        }

        .box.box-warning {
            border-top-color: #7FAD39
        }

        .box {
            position: relative;
            border-radius: 3px;
            background: #ffffff;
            border-top: 3px solid #d2d6de;
            margin-bottom: 20px;
            width: 100%;
            box-shadow: 0 1px 1px rgba(0, 0, 0, 0.1)
        }

        .box-header.with-border {
            border-bottom: 1px solid #f4f4f4
        }

        .box-header.with-border {
            border-bottom: 1px solid #f4f4f4
        }

        .box-header {
            color: #444;
            display: block;
            padding: 10px;
            position: relative
        }

        .box-header:before,
        .box-body:before,
        .box-footer:before,
        .box-header:after,
        .box-body:after,
        .box-footer:after {
            content: "";
            display: table
        }

        .box-header {
            color: #444;
            display: block;
            padding: 10px;
            position: relative
        }

        .box-header>.fa,
        .box-header>.glyphicon,
        .box-header>.ion,
        .box-header .box-title {
            display: inline-block;
            font-size: 18px;
            margin: 0;
            line-height: 1
        }

        .box-header>.box-tools {
            position: absolute;
            right: 10px;
            top: 5px
        }

        .box-header>.box-tools [data-toggle="tooltip"] {
            position: relative
        }

        .bg-yellow,
        .callout.callout-warning,
        .alert-warning,
        .label-warning,
        .modal-warning .modal-body {
            background-color: #f39c12 !important
        }

        .bg-yellow {
            color: #fff !important
        }

        .btn {
            border-radius: 3px;
            -webkit-box-shadow: none;
            box-shadow: none;
            border: 1px solid transparent
        }

        .btn-box-tool {
            padding: 5px;
            font-size: 12px;
            background: transparent;
            color: #97a0b3
        }

        .direct-chat .box-body {
            border-bottom-right-radius: 0;
            border-bottom-left-radius: 0;
            position: relative;
            overflow-x: hidden;
            padding: 0
        }

        .box-body {
            border-top-left-radius: 0;
            border-top-right-radius: 0;
            border-bottom-right-radius: 3px;
            border-bottom-left-radius: 3px;
            padding: 10px
        }

        .box-header:before,
        .box-body:before,
        .box-footer:before,
        .box-header:after,
        .box-body:after,
        .box-footer:after {
            content: "";
            display: table
        }

        .direct-chat-messages {
            -webkit-transform: translate(0, 0);
            -ms-transform: translate(0, 0);
            -o-transform: translate(0, 0);
            transform: translate(0, 0);
            padding: 10px;
            height: 500px;
            overflow: auto
        }

        .direct-chat-messages,
        .direct-chat-contacts {
            -webkit-transition: -webkit-transform .5s ease-in-out;
            -moz-transition: -moz-transform .5s ease-in-out;
            -o-transition: -o-transform .5s ease-in-out;
            transition: transform .5s ease-in-out
        }

        .direct-chat-msg {
            margin-bottom: 10px
        }

        .direct-chat-msg,
        .direct-chat-text {
            display: block
        }

        .direct-chat-info {
            display: block;
            margin-bottom: 2px;
            font-size: 12px
        }

        .direct-chat-timestamp {
            color: #999
        }

        .btn-group-vertical>.btn-group:after,
        .btn-group-vertical>.btn-group:before,
        .btn-toolbar:after,
        .btn-toolbar:before,
        .clearfix:after,
        .clearfix:before,
        .container-fluid:after,
        .container-fluid:before,
        .container:after,
        .container:before,
        .dl-horizontal dd:after,
        .dl-horizontal dd:before,
        .form-horizontal .form-group:after,
        .form-horizontal .form-group:before,
        .modal-footer:after,
        .modal-footer:before,
        .modal-header:after,
        .modal-header:before,
        .nav:after,
        .nav:before,
        .navbar-collapse:after,
        .navbar-collapse:before,
        .navbar-header:after,
        .navbar-header:before,
        .navbar:after,
        .navbar:before,
        .pager:after,
        .pager:before,
        .panel-body:after,
        .panel-body:before,
        .row:after,
        .row:before {
            display: table;
            content: ""
        }

        .direct-chat-img {
            border-radius: 50%;
            float: left;
            width: 40px;
            height: 40px
        }

        .direct-chat-text {
            border-radius: 5px;
            position: relative;
            padding: 5px 10px;
            background: #d2d6de;
            border: 1px solid #d2d6de;
            margin: 5px 0 0 50px;
            color: #444
        }

        .direct-chat-msg,
        .direct-chat-text {
            display: block
        }

        .direct-chat-text:before {
            border-width: 6px;
            margin-top: -6px
        }

        .direct-chat-text:after,
        .direct-chat-text:before {
            position: absolute;
            right: 100%;
            top: 15px;
            border: solid transparent;
            border-right-color: #d2d6de;
            content: ' ';
            height: 0;
            width: 0;
            pointer-events: none
        }

        .direct-chat-text:after {
            border-width: 5px;
            margin-top: -5px
        }

        .direct-chat-text:after,
        .direct-chat-text:before {
            position: absolute;
            right: 100%;
            top: 15px;
            border: solid transparent;
            border-right-color: #d2d6de;
            content: ' ';
            height: 0;
            width: 0;
            pointer-events: none
        }

        :after,
        :before {
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box
        }

        .direct-chat-msg:after {
            clear: both
        }

        .direct-chat-msg:after {
            content: "";
            display: table
        }

        .direct-chat-info {
            display: block;
            margin-bottom: 2px;
            font-size: 12px
        }

        .right .direct-chat-img {
            float: right
        }

        .direct-chat-warning .right>.direct-chat-text {
            background: #7FAD39;
            border-color: #7FAD39;
            color: #fff
        }

        .right .direct-chat-text {
            margin-right: 50px;
            margin-left: 0
        }

        .box-footer {
            border-top-left-radius: 0;
            border-top-right-radius: 0;
            border-bottom-right-radius: 3px;
            border-bottom-left-radius: 3px;
            border-top: 1px solid #f4f4f4;
            padding: 10px;
            background-color: #fff
        }

        .box-header:before,
        .box-body:before,
        .box-footer:before,
        .box-header:after,
        .box-body:after,
        .box-footer:after {
            content: "";
            display: table
        }

        .input-group-btn {
            position: relative;
            font-size: 0;
            white-space: nowrap
        }

        .input-group-btn:last-child>.btn,
        .input-group-btn:last-child>.btn-group {
            z-index: 2;
            margin-left: -1px
        }

        .btn-warning {
            color: #fff;
            background-color: #7FAD39;
            border-color: #7FAD39
        }
    </style>

    <div style="margin-top: 5px;">


        <div class="page-content page-container" id="page-content">
            <div class="padding">
                <div class="row container d-flex justify-content-center">
                    <div class="col-md-4"></div>
                    <div class="col-md-4">
                        <div class="box box-warning direct-chat direct-chat-warning">
                            <div class="box-header with-border">
                                <h3 class="box-title">Chat Messages</h3>
                                <div class="box-tools pull-right"> <span data-toggle="tooltip" title=""
                                        class="badge bg-yellow" data-original-title="3 New Messages">
                                    </span> <button type="button" class="btn btn-box-tool" data-toggle="tooltip"
                                        title="" data-widget="chat-pane-toggle" data-original-title="Contacts"> <i
                                            class="fa fa-comments"></i></button> <a href="" type="submit"
                                        class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></a></div>
                            </div>
                            <div class="box-body">
                                <div class="direct-chat-messages">



                                    {{-- for me --}}
                                    <div class="direct-chat-msg right">
                                        <div class="direct-chat-info clearfix"> <span class="direct-chat-name pull-right">

                                            </span> <span class="direct-chat-timestamp pull-left">
                                            </span> </div> <img class="direct-chat-img"
                                            src="https://img.icons8.com/office/36/000000/person-female.png"
                                            alt="message user image">
                                        <div class="direct-chat-text">
                                        </div>
                                    </div>

                                    {{-- for admin --}}
                                    <div class="direct-chat-msg">
                                        <div class="direct-chat-info clearfix"> <span
                                                class="direct-chat-name pull-left">Admin</span> <span
                                                class="direct-chat-timestamp pull-right">
                                            </span> </div> <img class="direct-chat-img"
                                            src="https://img.icons8.com/color/36/000000/administrator-male.png"
                                            alt="message user image">
                                        <div class="direct-chat-text"> </div>
                                    </div>



                                </div>
                            </div>
                            <div class="box-footer">


                                <form action="{{route('webpage.support.message')}}" method="POST">
                                    @csrf
                                    <div class="input-group">
                                        <input type="text" name="message" placeholder="Type Message ..."
                                            class="form-control">
                                        <span class="input-group-btn">
                                            <button type="submit" class="btn btn-warning btn-flat">Send</button>
                                        </span>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4"></div>
                </div>
            </div>
        </div>


    </div>
@endsection
