@extends('users.layouts.layout')
@section('title')
messages
@endsection
@section('content')
<div class="row">
    <div class="col-md-6 col-sm-6">
        <!-- BEGIN PORTLET-->
        <div class="portlet light bordered">
            <div class="portlet-title">
                <div class="caption">
                    <i class="icon-bubble font-hide hide"></i>
                    <span class="caption-subject font-hide bold uppercase">Chats</span>
                </div>
                <div class="actions">
                    <div class="portlet-input input-inline">
                        <div class="input-icon right">
                            <i class="icon-magnifier"></i>
                            <input type="text" class="form-control input-circle" placeholder="search..."> 
                        </div>
                    </div>
                </div>
            </div>
            <div class="portlet-body" id="chats">
                <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 525px;">
                    <div class="scroller" style="height: 525px; overflow: hidden; width: auto;" data-always-visible="1" data-rail-visible1="1" data-initialized="1">
                        <ul class="chats">
                            <li class="out">
                                <img class="avatar" alt="" src="../assets/layouts/layout/img/avatar2.jpg">
                                <div class="message">
                                    <span class="arrow"> </span>
                                    <a href="javascript:;" class="name"> Lisa Wong </a>
                                    <span class="datetime"> at 20:11 </span>
                                    <span class="body"> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </span>
                                </div>
                            </li>
                            <li class="out">
                                <img class="avatar" alt="" src="../assets/layouts/layout/img/avatar2.jpg">
                                <div class="message">
                                    <span class="arrow"> </span>
                                    <a href="javascript:;" class="name"> Lisa Wong </a>
                                    <span class="datetime"> at 20:11 </span>
                                    <span class="body"> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </span>
                                </div>
                            </li>
                            <li class="in">
                                <img class="avatar" alt="" src="../assets/layouts/layout/img/avatar1.jpg">
                                <div class="message">
                                    <span class="arrow"> </span>
                                    <a href="javascript:;" class="name"> Bob Nilson </a>
                                    <span class="datetime"> at 20:30 </span>
                                    <span class="body"> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </span>
                                </div>
                            </li>
                            <li class="in">
                                <img class="avatar" alt="" src="../assets/layouts/layout/img/avatar1.jpg">
                                <div class="message">
                                    <span class="arrow"> </span>
                                    <a href="javascript:;" class="name"> Bob Nilson </a>
                                    <span class="datetime"> at 20:30 </span>
                                    <span class="body"> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </span>
                                </div>
                            </li>
                            <li class="out">
                                <img class="avatar" alt="" src="../assets/layouts/layout/img/avatar3.jpg">
                                <div class="message">
                                    <span class="arrow"> </span>
                                    <a href="javascript:;" class="name"> Richard Doe </a>
                                    <span class="datetime"> at 20:33 </span>
                                    <span class="body"> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </span>
                                </div>
                            </li>
                            <li class="in">
                                <img class="avatar" alt="" src="../assets/layouts/layout/img/avatar3.jpg">
                                <div class="message">
                                    <span class="arrow"> </span>
                                    <a href="javascript:;" class="name"> Richard Doe </a>
                                    <span class="datetime"> at 20:35 </span>
                                    <span class="body"> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </span>
                                </div>
                            </li>
                            <li class="out">
                                <img class="avatar" alt="" src="../assets/layouts/layout/img/avatar1.jpg">
                                <div class="message">
                                    <span class="arrow"> </span>
                                    <a href="javascript:;" class="name"> Bob Nilson </a>
                                    <span class="datetime"> at 20:40 </span>
                                    <span class="body"> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </span>
                                </div>
                            </li>
                            <li class="in">
                                <img class="avatar" alt="" src="../assets/layouts/layout/img/avatar3.jpg">
                                <div class="message">
                                    <span class="arrow"> </span>
                                    <a href="javascript:;" class="name"> Richard Doe </a>
                                    <span class="datetime"> at 20:40 </span>
                                    <span class="body"> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </span>
                                </div>
                            </li>
                            <li class="out">
                                <img class="avatar" alt="" src="../assets/layouts/layout/img/avatar1.jpg">
                                <div class="message">
                                    <span class="arrow"> </span>
                                    <a href="javascript:;" class="name"> Bob Nilson </a>
                                    <span class="datetime"> at 20:54 </span>
                                    <span class="body"> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. sed diam nonummy nibh euismod tincidunt ut laoreet. </span>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="slimScrollBar" style="background: rgb(187, 187, 187); width: 7px; position: absolute; top: 0px; opacity: 0.4; display: block; border-radius: 7px; z-index: 99; right: 1px; height: 461.683px;"></div>
                    <div class="slimScrollRail" style="width: 7px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(234, 234, 234); opacity: 0.2; z-index: 90; right: 1px;"></div>
                </div>
                <div class="chat-form">
                    <div class="input-cont">
                        <input class="form-control" type="text" placeholder="Type a message here..."> 
                    </div>
                    <div class="btn-cont">
                        <span class="arrow"> </span>
                        <a href="" class="btn blue icn-only">
                        <i class="fa fa-check icon-white"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- END PORTLET-->
    </div>
</div>
@endsection