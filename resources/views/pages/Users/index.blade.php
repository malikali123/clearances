@extends('layouts.master')
@section('css')
    @toastr_css
@section('title')
    قائمة المستخدمين
@stop
@endsection
@section('page-header')
    <!-- breadcrumb -->
@section('PageTitle')
    قائمة المستخدمين
@stop
<!-- breadcrumb -->
@endsection
@section('content')
    <!-- row -->
    <div class="row">
        <div class="col-md-12 mb-30">
            <div class="card card-statistics h-100">
                <div class="card-body">
                    <div class="col-xl-12 mb-30">
                        <div class="card card-statistics h-100">
                            <div class="card-body">
                                <a href="{{route('users.create')}}" class="btn btn-success btn-sm" role="button"
                                   aria-pressed="true">اضافة مستخدم جديد</a><br><br>
                                <div class="table-responsive">
                                    <table id="datatable" class="table  table-hover table-sm table-bordered p-0"
                                           data-page-length="50"
                                           style="text-align: center">
                                        <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>اسم المستخدم</th>

                                            <th>الايميل </th>
                                            <th>الصلاحيه </th>
                                            <th> العمليات </th>

                                        </tr>
                                        </thead>
                                        <tbody>
                                        @isset($data)
                                        @foreach($data as $user)

                                            <tr>
                                                <td>{{ $user->id}}</td>
                                                <td>{{$user->name}}</td>
                                                <td>{{$user->email}}</td>
                                                <td>{{$user -> role -> name}}</td>
                                                <td>
{{--                                                    {{route('admin.maincategories.edit',$bank -> id)}}--}}
                                                    <div class="btn-group" role="group"
                                                         aria-label="Basic example">
                                                        <a href="{{route('users.edit', $user -> id)}}"
                                                           class="btn btn-outline-primary btn-min-width box-shadow-3 mr-1 mb-1">تعديل</a>
{{--                                                        {{route('admin.maincategories.delete',$category -> id)}}--}}

                                                        <a href="{{route('users.delete', $user-> id)}}"
                                                           class="btn btn-outline-danger btn-min-width box-shadow-3 mr-1 mb-1">حذف</a>



                                                    </div>
                                                </td>

                                            </tr>

{{--                                        @include('pages.library.destroy')--}}
                                        @endforeach
                                        @endisset
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- row closed -->
@endsection
@section('js')
{{--    @toastr_js--}}
{{--    @toastr_render--}}
@endsection
