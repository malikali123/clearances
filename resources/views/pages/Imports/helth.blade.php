@extends('layouts.master')
@section('css')
    @toastr_css
@section('title')
    فحص الادويه وتاكيد صلاحيتها
@stop
@endsection
@section('page-header')
    <!-- breadcrumb -->
@section('PageTitle')
    فحص الادويه وتاكيد صلاحيتها
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

                                <br><br>
                                <div class="table-responsive">
                                    <table id="datatable" class="table  table-hover table-sm table-bordered p-0"
                                           data-page-length="50"
                                           style="text-align: center">
                                        <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>نوع الوارد </th>
                                            <th>وصف الوارد </th>
                                            <th>الكميه </th>
                                            <th> السعر </th>
                                            <th> اسم المخلص </th>
                                            <th> اجمالي المبلغ </th>
                                            <th>  الحاله </th>
                                            <th> العمليات </th>

                                        </tr>
                                        </thead>
                                        <tbody>
                                        @isset($data)
                                        @foreach($data as $imports)

                                            <tr>
                                                <td>{{ $imports->id}}</td>
                                                <td>{{$imports ->value->product_type}}</td>
                                                <td>{{$imports->decription}}</td>
                                                <td>{{$imports->quantity}}</td>
                                                <td>{{$imports->price}}</td>
                                                <td>{{$category -> clearance -> name  ?? '--' }}</td>

{{--                                                <td>{{$imports->clearance->name}}</td>--}}
                                                <td>{{$imports->total}}</td>
                                                <td class="alert {{ $imports -> status == 1 ? 'alert-success' : 'alert-danger' }}" >{{$imports -> getStatus2()}}</td>

{{--                                                <td>{{$imports->status}}</td>--}}
                                                <td>
{{--                                                    {{route('admin.maincategories.edit',$bank -> id)}}--}}
                                                    <div class="btn-group" role="group"
                                                         aria-label="Basic example">

                                                        @if ($imports -> status > 0)
                                                            <a href="{{route('transactions.print.helth', $imports -> id)}}"
                                                               class="btn btn-outline-success btn-min-width box-shadow-3 mr-1 mb-1">عرض التفاصيل</a>

                                                        @else

                                                        <a href="{{route('transactions.helth', $imports -> id)}}"
                                                           class="btn btn-outline-success btn-min-width box-shadow-3 mr-1 mb-1">تاكيد الصلاحيه</a>

                                                       {{--

                                                                                                                   {{route('admin.maincategories.delete',$category -> id)}}--}}

                                                        <a href="{{route('import.delete', $imports-> id)}}"
                                                           class="btn btn-outline-danger btn-min-width box-shadow-3 mr-1 mb-1">حذف</a>

                                                        @endif

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
