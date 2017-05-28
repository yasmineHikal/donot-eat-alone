@extends('admin.layouts.layout')
@section('title')
Reported Users
@endsection
@section('header')
{!! Html::style('assets/global/plugins/datatables/datatables.min.css') !!}
{!! Html::style('assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css') !!}
{!! Html::style('assets/global/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css') !!}
@endsection
@section('content')
<div class="row">
    <div class="col-md-12">
        <!-- BEGIN EXAMPLE TABLE PORTLET-->
        <div class="portlet light bordered">
            <div class="portlet-title">
                <div class="caption font-dark">
                    <i class="icon-settings font-dark"></i>
                    <span class="caption-subject bold uppercase">@yield('title')</span>
                </div>
                <div class="tools"> </div>
            </div>
            <div class="portlet-body">
                <div class="table-toolbar">
                    <div class="row">
                        <div class="col-md-10">
                            <div class="btn-group">
                                <button id="sample_editable_1_new" class="btn sbold green"> Add New
                                <i class="fa fa-plus"></i>
                                </button>
                            </div>
                        </div>
                        <div class="col-md-2">
                        </div>
                    </div>
                </div>
                <table class="table table-striped table-bordered table-hover table-checkable order-column" id="sample_1">
                    <thead>
                        <tr>
                            <th>
                                <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                <input type="checkbox" class="group-checkable" data-set="#sample_1 .checkboxes" />
                                <span></span>
                                </label>
                            </th>
                            <th> Username </th>
                            <th> Email </th>
                            <th> Status </th>
                            <th> Joined </th>
                            <th> Actions </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="odd gradeX">
                            <td>
                                <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                <input type="checkbox" class="checkboxes" value="1" />
                                <span></span>
                                </label>
                            </td>
                            <td> shuxer </td>
                            <td>
                                <a href="mailto:shuxer@gmail.com"> shuxer@gmail.com </a>
                            </td>
                            <td>
                                <span class="label label-sm label-success"> Approved </span>
                            </td>
                            <td class="center"> 12 Jan 2012 </td>
                            <td>
                                <div class="btn-group">
                                    <button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> Actions
                                    <i class="fa fa-angle-down"></i>
                                    </button>
                                    <ul class="dropdown-menu" role="menu">
                                        <li>
                                            <a href="javascript:;">
                                            <i class="icon-docs"></i> New Post </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                            <i class="icon-tag"></i> New Comment </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                            <i class="icon-user"></i> New User </a>
                                        </li>
                                        <li class="divider"> </li>
                                        <li>
                                            <a href="javascript:;">
                                            <i class="icon-flag"></i> Comments
                                            <span class="badge badge-success">4</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        <tr class="odd gradeX">
                            <td>
                                <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                <input type="checkbox" class="checkboxes" value="1" />
                                <span></span>
                                </label>
                            </td>
                            <td> looper </td>
                            <td>
                                <a href="mailto:looper90@gmail.com"> looper90@gmail.com </a>
                            </td>
                            <td>
                                <span class="label label-sm label-warning"> Suspended </span>
                            </td>
                            <td class="center"> 12.12.2011 </td>
                            <td>
                                <div class="btn-group">
                                    <button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> Actions
                                    <i class="fa fa-angle-down"></i>
                                    </button>
                                    <ul class="dropdown-menu" role="menu">
                                        <li>
                                            <a href="javascript:;">
                                            <i class="icon-docs"></i> New Post </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                            <i class="icon-tag"></i> New Comment </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                            <i class="icon-user"></i> New User </a>
                                        </li>
                                        <li class="divider"> </li>
                                        <li>
                                            <a href="javascript:;">
                                            <i class="icon-flag"></i> Comments
                                            <span class="badge badge-success">4</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        <tr class="odd gradeX">
                            <td>
                                <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                <input type="checkbox" class="checkboxes" value="1" />
                                <span></span>
                                </label>
                            </td>
                            <td> userwow </td>
                            <td>
                                <a href="mailto:userwow@yahoo.com"> userwow@yahoo.com </a>
                            </td>
                            <td>
                                <span class="label label-sm label-success"> Approved </span>
                            </td>
                            <td class="center"> 12.12.2011 </td>
                            <td>
                                <div class="btn-group">
                                    <button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> Actions
                                    <i class="fa fa-angle-down"></i>
                                    </button>
                                    <ul class="dropdown-menu" role="menu">
                                        <li>
                                            <a href="javascript:;">
                                            <i class="icon-docs"></i> New Post </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                            <i class="icon-tag"></i> New Comment </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                            <i class="icon-user"></i> New User </a>
                                        </li>
                                        <li class="divider"> </li>
                                        <li>
                                            <a href="javascript:;">
                                            <i class="icon-flag"></i> Comments
                                            <span class="badge badge-success">4</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        <tr class="odd gradeX">
                            <td>
                                <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                <input type="checkbox" class="checkboxes" value="1" />
                                <span></span>
                                </label>
                            </td>
                            <td> user1wow </td>
                            <td>
                                <a href="mailto:userwow@gmail.com"> userwow@gmail.com </a>
                            </td>
                            <td>
                                <span class="label label-sm label-danger"> Blocked </span>
                            </td>
                            <td class="center"> 12.12.2011 </td>
                            <td>
                                <div class="btn-group">
                                    <button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> Actions
                                    <i class="fa fa-angle-down"></i>
                                    </button>
                                    <ul class="dropdown-menu" role="menu">
                                        <li>
                                            <a href="javascript:;">
                                            <i class="icon-docs"></i> New Post </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                            <i class="icon-tag"></i> New Comment </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                            <i class="icon-user"></i> New User </a>
                                        </li>
                                        <li class="divider"> </li>
                                        <li>
                                            <a href="javascript:;">
                                            <i class="icon-flag"></i> Comments
                                            <span class="badge badge-success">4</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        <tr class="odd gradeX">
                            <td>
                                <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                <input type="checkbox" class="checkboxes" value="1" />
                                <span></span>
                                </label>
                            </td>
                            <td> restest </td>
                            <td>
                                <a href="mailto:userwow@gmail.com"> test@gmail.com </a>
                            </td>
                            <td>
                                <span class="label label-sm label-success"> Approved </span>
                            </td>
                            <td class="center"> 12.12.2011 </td>
                            <td>
                                <div class="btn-group">
                                    <button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> Actions
                                    <i class="fa fa-angle-down"></i>
                                    </button>
                                    <ul class="dropdown-menu" role="menu">
                                        <li>
                                            <a href="javascript:;">
                                            <i class="icon-docs"></i> New Post </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                            <i class="icon-tag"></i> New Comment </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                            <i class="icon-user"></i> New User </a>
                                        </li>
                                        <li class="divider"> </li>
                                        <li>
                                            <a href="javascript:;">
                                            <i class="icon-flag"></i> Comments
                                            <span class="badge badge-success">4</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        <tr class="odd gradeX">
                            <td>
                                <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                <input type="checkbox" class="checkboxes" value="1" />
                                <span></span>
                                </label>
                            </td>
                            <td> foopl </td>
                            <td>
                                <a href="mailto:userwow@gmail.com"> good@gmail.com </a>
                            </td>
                            <td>
                                <span class="label label-sm label-info"> Info </span>
                            </td>
                            <td class="center"> 12.12.2011 </td>
                            <td>
                                <div class="btn-group">
                                    <button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> Actions
                                    <i class="fa fa-angle-down"></i>
                                    </button>
                                    <ul class="dropdown-menu" role="menu">
                                        <li>
                                            <a href="javascript:;">
                                            <i class="icon-docs"></i> New Post </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                            <i class="icon-tag"></i> New Comment </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                            <i class="icon-user"></i> New User </a>
                                        </li>
                                        <li class="divider"> </li>
                                        <li>
                                            <a href="javascript:;">
                                            <i class="icon-flag"></i> Comments
                                            <span class="badge badge-success">4</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        <tr class="odd gradeX">
                            <td>
                                <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                <input type="checkbox" class="checkboxes" value="1" />
                                <span></span>
                                </label>
                            </td>
                            <td> weep </td>
                            <td>
                                <a href="mailto:userwow@gmail.com"> good@gmail.com </a>
                            </td>
                            <td>
                                <span class="label label-sm label-danger"> Rejected </span>
                            </td>
                            <td class="center"> 12.12.2011 </td>
                            <td>
                                <div class="btn-group">
                                    <button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> Actions
                                    <i class="fa fa-angle-down"></i>
                                    </button>
                                    <ul class="dropdown-menu" role="menu">
                                        <li>
                                            <a href="javascript:;">
                                            <i class="icon-docs"></i> New Post </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                            <i class="icon-tag"></i> New Comment </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                            <i class="icon-user"></i> New User </a>
                                        </li>
                                        <li class="divider"> </li>
                                        <li>
                                            <a href="javascript:;">
                                            <i class="icon-flag"></i> Comments
                                            <span class="badge badge-success">4</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        <tr class="odd gradeX">
                            <td>
                                <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                <input type="checkbox" class="checkboxes" value="1" />
                                <span></span>
                                </label>
                            </td>
                            <td> coop </td>
                            <td>
                                <a href="mailto:userwow@gmail.com"> good@gmail.com </a>
                            </td>
                            <td>
                                <span class="label label-sm label-info"> Info </span>
                            </td>
                            <td class="center"> 12.12.2011 </td>
                            <td>
                                <div class="btn-group">
                                    <button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> Actions
                                    <i class="fa fa-angle-down"></i>
                                    </button>
                                    <ul class="dropdown-menu" role="menu">
                                        <li>
                                            <a href="javascript:;">
                                            <i class="icon-docs"></i> New Post </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                            <i class="icon-tag"></i> New Comment </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                            <i class="icon-user"></i> New User </a>
                                        </li>
                                        <li class="divider"> </li>
                                        <li>
                                            <a href="javascript:;">
                                            <i class="icon-flag"></i> Comments
                                            <span class="badge badge-success">4</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        <tr class="odd gradeX">
                            <td>
                                <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                <input type="checkbox" class="checkboxes" value="1" />
                                <span></span>
                                </label>
                            </td>
                            <td> pppol </td>
                            <td>
                                <a href="mailto:userwow@gmail.com"> good@gmail.com </a>
                            </td>
                            <td>
                                <span class="label label-sm label-danger"> Suspended </span>
                            </td>
                            <td class="center"> 12.12.2011 </td>
                            <td>
                                <div class="btn-group">
                                    <button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> Actions
                                    <i class="fa fa-angle-down"></i>
                                    </button>
                                    <ul class="dropdown-menu" role="menu">
                                        <li>
                                            <a href="javascript:;">
                                            <i class="icon-docs"></i> New Post </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                            <i class="icon-tag"></i> New Comment </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                            <i class="icon-user"></i> New User </a>
                                        </li>
                                        <li class="divider"> </li>
                                        <li>
                                            <a href="javascript:;">
                                            <i class="icon-flag"></i> Comments
                                            <span class="badge badge-success">4</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        <tr class="odd gradeX">
                            <td>
                                <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                <input type="checkbox" class="checkboxes" value="1" />
                                <span></span>
                                </label>
                            </td>
                            <td> test </td>
                            <td>
                                <a href="mailto:userwow@gmail.com"> good@gmail.com </a>
                            </td>
                            <td>
                                <span class="label label-sm label-warning"> Suspended </span>
                            </td>
                            <td class="center"> 12.12.2011 </td>
                            <td>
                                <div class="btn-group">
                                    <button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> Actions
                                    <i class="fa fa-angle-down"></i>
                                    </button>
                                    <ul class="dropdown-menu" role="menu">
                                        <li>
                                            <a href="javascript:;">
                                            <i class="icon-docs"></i> New Post </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                            <i class="icon-tag"></i> New Comment </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                            <i class="icon-user"></i> New User </a>
                                        </li>
                                        <li class="divider"> </li>
                                        <li>
                                            <a href="javascript:;">
                                            <i class="icon-flag"></i> Comments
                                            <span class="badge badge-success">4</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        <tr class="odd gradeX">
                            <td>
                                <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                <input type="checkbox" class="checkboxes" value="1" />
                                <span></span>
                                </label>
                            </td>
                            <td> userwow </td>
                            <td>
                                <a href="mailto:userwow@gmail.com"> userwow@gmail.com </a>
                            </td>
                            <td>
                                <span class="label label-sm label-warning"> Suspended </span>
                            </td>
                            <td class="center"> 12.12.2011 </td>
                            <td>
                                <div class="btn-group">
                                    <button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> Actions
                                    <i class="fa fa-angle-down"></i>
                                    </button>
                                    <ul class="dropdown-menu" role="menu">
                                        <li>
                                            <a href="javascript:;">
                                            <i class="icon-docs"></i> New Post </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                            <i class="icon-tag"></i> New Comment </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                            <i class="icon-user"></i> New User </a>
                                        </li>
                                        <li class="divider"> </li>
                                        <li>
                                            <a href="javascript:;">
                                            <i class="icon-flag"></i> Comments
                                            <span class="badge badge-success">4</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        <tr class="odd gradeX">
                            <td>
                                <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                <input type="checkbox" class="checkboxes" value="1" />
                                <span></span>
                                </label>
                            </td>
                            <td> test </td>
                            <td>
                                <a href="mailto:userwow@gmail.com"> test@gmail.com </a>
                            </td>
                            <td>
                                <span class="label label-sm label-warning"> Suspended </span>
                            </td>
                            <td class="center"> 12.12.2011 </td>
                            <td>
                                <div class="btn-group">
                                    <button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> Actions
                                    <i class="fa fa-angle-down"></i>
                                    </button>
                                    <ul class="dropdown-menu" role="menu">
                                        <li>
                                            <a href="javascript:;">
                                            <i class="icon-docs"></i> New Post </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                            <i class="icon-tag"></i> New Comment </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                            <i class="icon-user"></i> New User </a>
                                        </li>
                                        <li class="divider"> </li>
                                        <li>
                                            <a href="javascript:;">
                                            <i class="icon-flag"></i> Comments
                                            <span class="badge badge-success">4</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        <tr class="odd gradeX">
                            <td>
                                <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                <input type="checkbox" class="checkboxes" value="1" />
                                <span></span>
                                </label>
                            </td>
                            <td> goop </td>
                            <td>
                                <a href="mailto:userwow@gmail.com"> good@gmail.com </a>
                            </td>
                            <td>
                                <span class="label label-sm label-warning"> Suspended </span>
                            </td>
                            <td class="center"> 12.12.2011 </td>
                            <td>
                                <div class="btn-group">
                                    <button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> Actions
                                    <i class="fa fa-angle-down"></i>
                                    </button>
                                    <ul class="dropdown-menu" role="menu">
                                        <li>
                                            <a href="javascript:;">
                                            <i class="icon-docs"></i> New Post </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                            <i class="icon-tag"></i> New Comment </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                            <i class="icon-user"></i> New User </a>
                                        </li>
                                        <li class="divider"> </li>
                                        <li>
                                            <a href="javascript:;">
                                            <i class="icon-flag"></i> Comments
                                            <span class="badge badge-success">4</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        <tr class="odd gradeX">
                            <td>
                                <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                <input type="checkbox" class="checkboxes" value="1" />
                                <span></span>
                                </label>
                            </td>
                            <td> weep </td>
                            <td>
                                <a href="mailto:userwow@gmail.com"> good@gmail.com </a>
                            </td>
                            <td>
                                <span class="label label-sm label-warning"> Suspended </span>
                            </td>
                            <td class="center"> 12.12.2011 </td>
                            <td>
                                <div class="btn-group">
                                    <button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> Actions
                                    <i class="fa fa-angle-down"></i>
                                    </button>
                                    <ul class="dropdown-menu" role="menu">
                                        <li>
                                            <a href="javascript:;">
                                            <i class="icon-docs"></i> New Post </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                            <i class="icon-tag"></i> New Comment </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                            <i class="icon-user"></i> New User </a>
                                        </li>
                                        <li class="divider"> </li>
                                        <li>
                                            <a href="javascript:;">
                                            <i class="icon-flag"></i> Comments
                                            <span class="badge badge-success">4</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        <tr class="odd gradeX">
                            <td>
                                <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                <input type="checkbox" class="checkboxes" value="1" />
                                <span></span>
                                </label>
                            </td>
                            <td> toopl </td>
                            <td>
                                <a href="mailto:userwow@gmail.com"> good@gmail.com </a>
                            </td>
                            <td>
                                <span class="label label-sm label-warning"> Suspended </span>
                            </td>
                            <td class="center"> 12.12.2011 </td>
                            <td>
                                <div class="btn-group">
                                    <button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> Actions
                                    <i class="fa fa-angle-down"></i>
                                    </button>
                                    <ul class="dropdown-menu" role="menu">
                                        <li>
                                            <a href="javascript:;">
                                            <i class="icon-docs"></i> New Post </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                            <i class="icon-tag"></i> New Comment </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                            <i class="icon-user"></i> New User </a>
                                        </li>
                                        <li class="divider"> </li>
                                        <li>
                                            <a href="javascript:;">
                                            <i class="icon-flag"></i> Comments
                                            <span class="badge badge-success">4</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        <tr class="odd gradeX">
                            <td>
                                <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                <input type="checkbox" class="checkboxes" value="1" />
                                <span></span>
                                </label>
                            </td>
                            <td> userwow </td>
                            <td>
                                <a href="mailto:userwow@gmail.com"> userwow@gmail.com </a>
                            </td>
                            <td>
                                <span class="label label-sm label-warning"> Suspended </span>
                            </td>
                            <td class="center"> 12.12.2011 </td>
                            <td>
                                <div class="btn-group">
                                    <button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> Actions
                                    <i class="fa fa-angle-down"></i>
                                    </button>
                                    <ul class="dropdown-menu" role="menu">
                                        <li>
                                            <a href="javascript:;">
                                            <i class="icon-docs"></i> New Post </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                            <i class="icon-tag"></i> New Comment </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                            <i class="icon-user"></i> New User </a>
                                        </li>
                                        <li class="divider"> </li>
                                        <li>
                                            <a href="javascript:;">
                                            <i class="icon-flag"></i> Comments
                                            <span class="badge badge-success">4</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        <tr class="odd gradeX">
                            <td>
                                <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                <input type="checkbox" class="checkboxes" value="1" />
                                <span></span>
                                </label>
                            </td>
                            <td> tes21t </td>
                            <td>
                                <a href="mailto:userwow@gmail.com"> test@gmail.com </a>
                            </td>
                            <td>
                                <span class="label label-sm label-warning"> Suspended </span>
                            </td>
                            <td class="center"> 12.12.2011 </td>
                            <td>
                                <div class="btn-group">
                                    <button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> Actions
                                    <i class="fa fa-angle-down"></i>
                                    </button>
                                    <ul class="dropdown-menu" role="menu">
                                        <li>
                                            <a href="javascript:;">
                                            <i class="icon-docs"></i> New Post </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                            <i class="icon-tag"></i> New Comment </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                            <i class="icon-user"></i> New User </a>
                                        </li>
                                        <li class="divider"> </li>
                                        <li>
                                            <a href="javascript:;">
                                            <i class="icon-flag"></i> Comments
                                            <span class="badge badge-success">4</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        <tr class="odd gradeX">
                            <td>
                                <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                <input type="checkbox" class="checkboxes" value="1" />
                                <span></span>
                                </label>
                            </td>
                            <td> fop </td>
                            <td>
                                <a href="mailto:userwow@gmail.com"> good@gmail.com </a>
                            </td>
                            <td>
                                <span class="label label-sm label-warning"> Suspended </span>
                            </td>
                            <td class="center"> 12.12.2011 </td>
                            <td>
                                <div class="btn-group">
                                    <button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> Actions
                                    <i class="fa fa-angle-down"></i>
                                    </button>
                                    <ul class="dropdown-menu" role="menu">
                                        <li>
                                            <a href="javascript:;">
                                            <i class="icon-docs"></i> New Post </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                            <i class="icon-tag"></i> New Comment </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                            <i class="icon-user"></i> New User </a>
                                        </li>
                                        <li class="divider"> </li>
                                        <li>
                                            <a href="javascript:;">
                                            <i class="icon-flag"></i> Comments
                                            <span class="badge badge-success">4</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        <tr class="odd gradeX">
                            <td>
                                <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                <input type="checkbox" class="checkboxes" value="1" />
                                <span></span>
                                </label>
                            </td>
                            <td> kop </td>
                            <td>
                                <a href="mailto:userwow@gmail.com"> good@gmail.com </a>
                            </td>
                            <td>
                                <span class="label label-sm label-warning"> Suspended </span>
                            </td>
                            <td class="center"> 12.12.2011 </td>
                            <td>
                                <div class="btn-group">
                                    <button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> Actions
                                    <i class="fa fa-angle-down"></i>
                                    </button>
                                    <ul class="dropdown-menu" role="menu">
                                        <li>
                                            <a href="javascript:;">
                                            <i class="icon-docs"></i> New Post </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                            <i class="icon-tag"></i> New Comment </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                            <i class="icon-user"></i> New User </a>
                                        </li>
                                        <li class="divider"> </li>
                                        <li>
                                            <a href="javascript:;">
                                            <i class="icon-flag"></i> Comments
                                            <span class="badge badge-success">4</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        <tr class="odd gradeX">
                            <td>
                                <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                <input type="checkbox" class="checkboxes" value="1" />
                                <span></span>
                                </label>
                            </td>
                            <td> vopl </td>
                            <td>
                                <a href="mailto:userwow@gmail.com"> good@gmail.com </a>
                            </td>
                            <td>
                                <span class="label label-sm label-warning"> Suspended </span>
                            </td>
                            <td class="center"> 12.12.2011 </td>
                            <td>
                                <div class="btn-group">
                                    <button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> Actions
                                    <i class="fa fa-angle-down"></i>
                                    </button>
                                    <ul class="dropdown-menu" role="menu">
                                        <li>
                                            <a href="javascript:;">
                                            <i class="icon-docs"></i> New Post </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                            <i class="icon-tag"></i> New Comment </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                            <i class="icon-user"></i> New User </a>
                                        </li>
                                        <li class="divider"> </li>
                                        <li>
                                            <a href="javascript:;">
                                            <i class="icon-flag"></i> Comments
                                            <span class="badge badge-success">4</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        <tr class="odd gradeX">
                            <td>
                                <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                <input type="checkbox" class="checkboxes" value="1" />
                                <span></span>
                                </label>
                            </td>
                            <td> userwow </td>
                            <td>
                                <a href="mailto:userwow@gmail.com"> userwow@gmail.com </a>
                            </td>
                            <td>
                                <span class="label label-sm label-warning"> Suspended </span>
                            </td>
                            <td class="center"> 12.12.2011 </td>
                            <td>
                                <div class="btn-group">
                                    <button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> Actions
                                    <i class="fa fa-angle-down"></i>
                                    </button>
                                    <ul class="dropdown-menu" role="menu">
                                        <li>
                                            <a href="javascript:;">
                                            <i class="icon-docs"></i> New Post </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                            <i class="icon-tag"></i> New Comment </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                            <i class="icon-user"></i> New User </a>
                                        </li>
                                        <li class="divider"> </li>
                                        <li>
                                            <a href="javascript:;">
                                            <i class="icon-flag"></i> Comments
                                            <span class="badge badge-success">4</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        <tr class="odd gradeX">
                            <td>
                                <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                <input type="checkbox" class="checkboxes" value="1" />
                                <span></span>
                                </label>
                            </td>
                            <td> wap </td>
                            <td>
                                <a href="mailto:userwow@gmail.com"> test@gmail.com </a>
                            </td>
                            <td>
                                <span class="label label-sm label-warning"> Suspended </span>
                            </td>
                            <td class="center"> 12.12.2011 </td>
                            <td>
                                <div class="btn-group">
                                    <button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> Actions
                                    <i class="fa fa-angle-down"></i>
                                    </button>
                                    <ul class="dropdown-menu" role="menu">
                                        <li>
                                            <a href="javascript:;">
                                            <i class="icon-docs"></i> New Post </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                            <i class="icon-tag"></i> New Comment </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                            <i class="icon-user"></i> New User </a>
                                        </li>
                                        <li class="divider"> </li>
                                        <li>
                                            <a href="javascript:;">
                                            <i class="icon-flag"></i> Comments
                                            <span class="badge badge-success">4</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        <tr class="odd gradeX">
                            <td>
                                <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                <input type="checkbox" class="checkboxes" value="1" />
                                <span></span>
                                </label>
                            </td>
                            <td> test </td>
                            <td>
                                <a href="mailto:userwow@gmail.com"> good@gmail.com </a>
                            </td>
                            <td>
                                <span class="label label-sm label-warning"> Suspended </span>
                            </td>
                            <td class="center"> 12.12.2011 </td>
                            <td>
                                <div class="btn-group">
                                    <button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> Actions
                                    <i class="fa fa-angle-down"></i>
                                    </button>
                                    <ul class="dropdown-menu" role="menu">
                                        <li>
                                            <a href="javascript:;">
                                            <i class="icon-docs"></i> New Post </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                            <i class="icon-tag"></i> New Comment </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                            <i class="icon-user"></i> New User </a>
                                        </li>
                                        <li class="divider"> </li>
                                        <li>
                                            <a href="javascript:;">
                                            <i class="icon-flag"></i> Comments
                                            <span class="badge badge-success">4</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        <tr class="odd gradeX">
                            <td>
                                <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                <input type="checkbox" class="checkboxes" value="1" />
                                <span></span>
                                </label>
                            </td>
                            <td> toop </td>
                            <td>
                                <a href="mailto:userwow@gmail.com"> good@gmail.com </a>
                            </td>
                            <td>
                                <span class="label label-sm label-warning"> Suspended </span>
                            </td>
                            <td class="center"> 12.12.2011 </td>
                            <td>
                                <div class="btn-group">
                                    <button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> Actions
                                    <i class="fa fa-angle-down"></i>
                                    </button>
                                    <ul class="dropdown-menu" role="menu">
                                        <li>
                                            <a href="javascript:;">
                                            <i class="icon-docs"></i> New Post </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                            <i class="icon-tag"></i> New Comment </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                            <i class="icon-user"></i> New User </a>
                                        </li>
                                        <li class="divider"> </li>
                                        <li>
                                            <a href="javascript:;">
                                            <i class="icon-flag"></i> Comments
                                            <span class="badge badge-success">4</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        <tr class="odd gradeX">
                            <td>
                                <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                <input type="checkbox" class="checkboxes" value="1" />
                                <span></span>
                                </label>
                            </td>
                            <td> weep </td>
                            <td>
                                <a href="mailto:userwow@gmail.com"> good@gmail.com </a>
                            </td>
                            <td>
                                <span class="label label-sm label-warning"> Suspended </span>
                            </td>
                            <td class="center"> 12.12.2011 </td>
                            <td>
                                <div class="btn-group">
                                    <button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> Actions
                                    <i class="fa fa-angle-down"></i>
                                    </button>
                                    <ul class="dropdown-menu" role="menu">
                                        <li>
                                            <a href="javascript:;">
                                            <i class="icon-docs"></i> New Post </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                            <i class="icon-tag"></i> New Comment </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                            <i class="icon-user"></i> New User </a>
                                        </li>
                                        <li class="divider"> </li>
                                        <li>
                                            <a href="javascript:;">
                                            <i class="icon-flag"></i> Comments
                                            <span class="badge badge-success">4</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <!-- END EXAMPLE TABLE PORTLET-->
    </div>
</div>
@endsection
@section('footer')
{!! Html::script('assets/pages/scripts/table-datatables-buttons.min.js') !!}
{!! Html::script('assets/global/scripts/datatable.js') !!}
{!! Html::script('assets/global/plugins/datatables/datatables.min.js') !!}
{!! Html::script('assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js') !!}
{!! Html::script('assets/pages/scripts/table-datatables-managed.min.js') !!}
{!! Html::script('assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js') !!}
@endsection