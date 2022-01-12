@extends('layouts.master')
@section('css')
    @toastr_css
@section('title')
    قائمة المخلصين
@stop
@endsection
@section('page-header')
    <!-- breadcrumb -->
@section('PageTitle')
    قائمة المخلصين
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
                                <a href="{{route('clearance.create')}}" class="btn btn-success btn-sm" role="button"
                                   aria-pressed="true">اضافةمخلص جديد</a><br><br>
                                <div class="table-responsive">
                                    <table id="datatable" class="table  table-hover table-sm table-bordered p-0"
                                           data-page-length="50"
                                           style="text-align: center">
                                        <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>اسم المخلص</th>
                                            <th>رقم التلفون </th>
                                            <th>الايميل </th>
                                            <th>الرقم الضريبي </th>
                                            <th> العمليات </th>

                                        </tr>
                                        </thead>
                                        <tbody>
                                        @isset($data)
                                        @foreach($data as $clearance)

                                            <tr>
                                                <td>{{ $clearance->id}}</td>
                                                <td>{{$clearance->name}}</td>
                                                <td>{{$clearance->phon}}</td>
                                                <td>{{$clearance->email}}</td>
                                                <td>{{$clearance->clearaneNumber}}</td>
                                                <td>
{{--                                                    {{route('admin.maincategories.edit',$bank -> id)}}--}}
                                                    <div class="btn-group" role="group"
                                                         aria-label="Basic example">
                                                        <a href="{{route('clearance.edit', $clearance -> id)}}"
                                                           class="btn btn-outline-primary btn-min-width box-shadow-3 mr-1 mb-1">تعديل</a>
{{--                                                        {{route('admin.maincategories.delete',$category -> id)}}--}}

                                                        <a href="{{route('clearance.delete', $clearance-> id)}}"
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
