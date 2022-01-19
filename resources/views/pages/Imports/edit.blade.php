@extends('layouts.master')
@section('css')
    @toastr_css
@section('title')
    تعديل بضاعه وارده
@stop
@endsection
@section('page-header')
    <!-- breadcrumb -->
@section('PageTitle')
    تعديل بضاعه وارده
@stop
<!-- breadcrumb -->
@endsection
@section('content')
    <!-- row -->
    <div class="row">
        <div class="col-md-12 mb-30">
            <div class="card card-statistics h-100">
                <div class="card-body">

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form method="post" action="{{ route('import.update', $data->id) }}" autocomplete="off">
                        @csrf
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputEmail4"> اختر نوع البضاعه
                                </label>
                                <select name="value_id" class="select2 form-control">
                                    <optgroup label="من فضلك أختر صاحب الحساب ">
                                        @if($values && $values -> count() > 0)
                                            @foreach($values as $value)
                                                <option
                                                    value="{{$value -> id }}">{{$value->product_type}}</option>
                                            @endforeach
                                        @endif
                                    </optgroup>
                                </select>


                            </div>


                            {{--                            <div class="form-group col-md-6">--}}
{{--                                <label for="inputEmail4"> نوع البضاعه </label>--}}
{{--                                <input type="text" value="{{$data->type}}" name="type" class="form-control">--}}
{{--                            </div>--}}
                            <div class="form-group col-md-6">
                                <label for="inputEmail4">وصف البضاعه </label>
                                <input type="text" value="{{$data->decription}}" name="decription" class="form-control">

                                <input type="hidden" name="id" value="{{ $data->id }}">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputEmail4"> الكميه </label>
                                <input type="number" value="{{$data->quantity}}" name="quantity" class="form-control">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputEmail4">السعر </label>
                                <input type="number" value="{{$data->price}}" name="price" class="form-control">
                            </div>
                            {{--                            <div class="form-group col-md-6">--}}
                            {{--                                <label for="inputEmail4">المخلص </label>--}}
                            {{--                                <input type="text" value="" name="clearance" class="form-control">--}}
                            {{--                            </div>--}}

                            <input type="number" hidden readonly value="{{auth()->user()->id }}" name="clearance" class="form-control">


{{--                            <div class="form-group col-md-6">--}}
{{--                                <label for="inputEmail4"> اختر االمخلص--}}
{{--                                </label>--}}
{{--                                <select name="clearance" class="select2 form-control">--}}
{{--                                    <optgroup label="من فضلك أختر المخلص ">--}}
{{--                                        @if($clearance && $clearance -> count() > 0)--}}
{{--                                            @foreach($clearance as $clearanc)--}}
{{--                                                <option--}}
{{--                                                    value="{{$clearanc -> id }}">{{$clearanc -> name}}</option>--}}
{{--                                            @endforeach--}}
{{--                                        @endif--}}
{{--                                    </optgroup>--}}
{{--                                </select>--}}
{{--                                --}}{{--                                    @error('parent_id')--}}
{{--                                --}}{{--                                    <span class="text-danger"> {{$message}}</span>--}}
{{--                                --}}{{--                                    @enderror--}}


{{--                            </div>--}}


                        </div>



                        <button type="submit" class="btn btn-primary">تاكيد</button>

                    </form>

                </div>
            </div>
        </div>
    </div>
    <!-- row closed -->
@endsection
@section('js')
    @toastr_js
    @toastr_render
@endsection
