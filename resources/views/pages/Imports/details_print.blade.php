@extends('layouts.master')
@section('css')
    @toastr_css
@section('title')
    تفاصيل البضائع الوارده
@stop
@endsection
@section('page-header')
    <!-- breadcrumb -->
@section('PageTitle')
    تفاصيل البضائع الوارده
@stop
<!-- breadcrumb -->
@endsection
@section('content')
    <div id="invoice" style="background: #fff">
        <div class="col-12 p-3" style="text-align: center; max-width: 100%;">
            <div class="col-12 col-lg-12 p-0 main-box">
                <div class="col-12 px-0">
                    <div class="col-12 px-3 py-3">
                        <span class="fal fa-info-circle"></span>
                    </div>
                    <div class="col-12 divider" style="min-height: 2px;"></div>
                </div>

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
                    {{--                                        <tr>--}}
                    {{--                                            --}}{{--                                            $data->clearance ? $data->clearance->name : 'بدون'--}}
                    {{--                                            <th>رقم حساب المخلص </th>--}}
                    {{--                                            <td>{{  $data->account ? $data->account->name : 'بدون' }}</td>--}}
                    {{--                                        </tr>--}}
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

    <div class="text-center">
        <button onclick="print_page('#invoice')" class="btn btn-success">طباعة</button>
    </div>


    <script>
        function print_page(element){
            var width = document.body.clientWidth;
            var div_width = $(element).width();
            console.log(width);
            console.log(div_width);
            $(element).css('z-index','1000')
                .css('width',width+'px')
                .css('position','absolute')
                .css('top',0)
                .css('right',0)

            print()

            location.reload()
        }
    </script>

@endsection
