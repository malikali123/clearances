@extends('layouts.master')
@section('css')
    @toastr_css
@section('title')
    قائمة التعريفات
@stop
@endsection
@section('page-header')
    <!-- breadcrumb -->
@section('PageTitle')
    قائمة التعريفات
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
                                <a href="{{route('values.create')}}" class="btn btn-success btn-sm" role="button"
                                   aria-pressed="true">اضافة تعريفه جديده</a><br><br>
                                <div class="table-responsive">
                                    <table id="datatable" class="table  table-hover table-sm table-bordered p-0"
                                           data-page-length="50"
                                           style="text-align: center">
                                        <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>نوع الوارد </th>
                                            <th> الكود </th>
                                            <th> الوصف </th>
                                            <th> القيمه الجمركيه بالنسبه المئويه </th>
                                            <th> العمليات </th>

                                        </tr>
                                        </thead>
                                        <tbody>
                                        @isset($value)
                                        @foreach($value as $values)

                                            <tr>
                                                <td>{{ $values->id}}</td>
                                                <td>{{$values->product_type}}</td>
                                                <td>{{$values->product_code}}</td>
                                                <td>{{$values->description}}</td>
                                                <td>{{$values->value}}</td>


                                                <td>
{{--                                                    {{route('admin.maincategories.edit',$bank -> id)}}--}}
                                                    <div class="btn-group" role="group"
                                                         aria-label="Basic example">
                                                        <a href="{{route('values.edit', $values -> id)}}"
                                                           class="btn btn-outline-primary btn-min-width box-shadow-3 mr-1 mb-1">تعديل</a>
{{--                                                        {{route('admin.maincategories.delete',$category -> id)}}--}}

                                                        <a href="{{route('values.delete', $values-> id)}}"
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
