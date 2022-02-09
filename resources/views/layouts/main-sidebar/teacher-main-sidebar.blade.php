<div class="scrollbar side-menu-bg" style="overflow: scroll">
    <ul class="nav navbar-nav side-menu" id="sidebarnav">
        <!-- menu item Dashboard-->
        <li>
            <a href="{{ url('/clearance/dashboard') }}">
                <div class="pull-left"><i class="ti-home"></i><span
                        class="right-nav-text">الرئيسيه</span>
                </div>
                <div class="clearfix"></div>
            </a>
        </li>
        <!-- menu title -->
        <li class="mt-10 mb-10 text-muted pl-4 font-medium menu-title">{{trans('main_trans.Programname')}} </li>



        {{--البضائع او الواردات--}}

        <li>
            <a href="javascript:void(0);" data-toggle="collapse" data-target="#Imports-menu">
                <div class="pull-left"><i class="fas fa-container-storage"></i><span
                        class="right-nav-text">الواردات</span></div>
                <div class="pull-right"><i class="ti-plus"></i></div>
                <div class="clearfix"></div>
            </a>
            <ul id="Imports-menu" class="collapse" data-parent="#sidebarnav">
                <li> <a href="{{route('admin.import')}}">  عرض الواردات </a> </li>
                <li> <a href="{{route('import.create')}}"> اضافة واردات جديد  </a> </li>

            </ul>
        </li>




        {{--الحسابات--}}
        <li>
            <a href="javascript:void(0);" data-toggle="collapse" data-target="#Accounts-menu">
                <div class="pull-left"><i class="fas fa-money-bill-wave-alt"></i><span
                        class="right-nav-text">الحسابات</span></div>
                <div class="pull-right"><i class="ti-plus"></i></div>
                <div class="clearfix"></div>
            </a>
            <ul id="Accounts-menu" class="collapse" data-parent="#sidebarnav">
                <li> <a href="{{route('admin.account')}}">  عرض الحسابات </a> </li>
                <li> <a href="{{route('account.create')}}"> اضافة حساب جديد </a> </li>

            </ul>
        </li>

        <li>
            <a href="javascript:void(0);" data-toggle="collapse" data-target="#Payment-menu">
                <div class="pull-left"><i class="fas fa-money"></i><span
                        class="right-nav-text">فرز الواردات</span></div>
                <div class="pull-right"><i class="ti-plus"></i></div>
                <div class="clearfix"></div>
            </a>
            <ul id="Payment-menu" class="collapse" data-parent="#sidebarnav">
                <li> <a href="{{route('admin.certificate_clearance.clearance')}}">  عرض البضائع المخلصه </a> </li>
                <li> <a href="{{route('admin.not_certificate.clearance')}}"> بضائع في انتظار الدفع </a> </li>

            </ul>
        </li>



        {{--        شهادة الوارد--}}
        <li>
            <a href="javascript:void(0);" data-toggle="collapse" data-target="#Certificate-menu">
                <div class="pull-left"><i class="far fa-file-certificate"></i><span
                        class="right-nav-text">شهادة الوارد</span></div>
                <div class="pull-right"><i class="ti-plus"></i></div>
                <div class="clearfix"></div>
            </a>
            <ul id="Certificate-menu" class="collapse" data-parent="#sidebarnav">
                <li> <a href="">  عرض جميع الشهادات </a> </li>
                <li> <a href=""> اضافة شهاده جديد  </a> </li>
                {{--                <i class="far fa-file-certificate"></i>--}}
            </ul>
        </li>

        {{--        <!-- الملف الشخصي-->--}}
        {{--        <li>--}}
        {{--            <a href="{{route('settings.index')}}"><i class="fas fa-id-card-alt"></i><span--}}
        {{--                    class="right-nav-text">الملف الشخصي</span></a>--}}
        {{--        </li>--}}


    </ul>
</div>
