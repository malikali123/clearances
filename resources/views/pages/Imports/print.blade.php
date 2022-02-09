@extends('layouts.master')
@section('css')
    @toastr_css
@section('title')
    تفاصيل الشهادات الوارده
@stop
@endsection
@section('page-header')
    <!-- breadcrumb -->
@section('PageTitle')
    تفاصيل الشهادات الوارده
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
                                 <a target="_blank" href="{{route('import.print')}}" class="btn btn-outline-success float-right">طباعة <i class="la la-print"></i> </a>

                                <br><br>
                                <div class="table-responsive">
                                    <table id="datatable" class="table  table-hover table-sm table-bordered p-0"
                                           data-page-length="50"
                                           style="text-align: center">


                                        <tbody>
                                        <?php $num = 1; ?>
                                        <tr>

                                            <th> نوع الوارد </th>
                                            <td>{{ $data ->value->product_type }}</td>

                                        </tr>
                                        <tr>
                                            {{--                                            $data->clearance ? $data->clearance->name : 'بدون'--}}
                                            <th>إسم المخلص </th>
                                            <td>{{  $data->clearance ? $data->clearance->name : 'بدون' }}</td>
                                        </tr>
                                        <tr>
                                            <th>الوصف </th>
                                            <td>{{ $data->decription }}</td>
                                        </tr>

                                        <tr>
                                            <th>الكميه </th>
                                            <td>{{ $data->quantity}}
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>سعر الوحده </th>
                                            <td><strong onclick="testComma(this);"
                                                        class="money">{{ $data->price }}</strong></td>
                                        </tr>
                                        <tr>
                                            <th>اجمالي المبلغ </th>
                                            <td><strong onclick="testComma(this);"
                                                        class="money">{{ $data->total}}</strong></td>
                                        </tr>
                                        <tr>
                                            <th> القيمه الجمركيه
                                            <td>{{ $data->amount}}
                                            </th>
                                        </tr>

                                        <tr>
                                            <th>الحالة </th>
                                            <td class="alert alert-success">{{ $data->getStatus() }}</td>
                                        </tr>

                                        </tbody>
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
