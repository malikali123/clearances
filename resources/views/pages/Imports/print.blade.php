@extends('layouts.print')
@section('title','_')
@section('content')
    <div class="app-content content">
        <div class="content-wrapper pt-0">

            <div class="content-body">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="text-center">جميع الحسابات البنكية بالشركة </h4>
                            </div>

                            <div class="card-content collapse show">
                                <div class="table-responsive">
                                    <table class="table table-striped table-hover">


                                        <tbody>
                                        <?php $num = 1; ?>
                                        <tr>

                                            <th> نوع الوارد </th>
                                            <td>{{ $data ->value->product_type }}</td>

                                        </tr>
                                        <tr>
{{--                                            $data->clearance ? $data->clearance->name : 'بدون'--}}
                                            <th>إسم المخلص </th>
                                            <td>{{ $data->clearance->name }}</td>
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
@endsection
