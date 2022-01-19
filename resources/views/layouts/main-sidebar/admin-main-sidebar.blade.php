<div class="scrollbar side-menu-bg" style="overflow: scroll">
    <ul class="nav navbar-nav side-menu" id="sidebarnav">
        <!-- menu item Dashboard-->
        <li>
            <a href="{{ url('/dashboard') }}">
                <div class="pull-left"><i class="ti-home"></i><span class="right-nav-text">{{trans('main_trans.Dashboard')}}</span>
                </div>
                <div class="clearfix"></div>
            </a>
        </li>
        <!-- menu title -->
        <li class="mt-10 mb-10 text-muted pl-4 font-medium menu-title">{{trans('main_trans.Programname')}} </li>

{{--        المخلصين--}}


        <li>
            <a href="javascript:void(0);" data-toggle="collapse" data-target="#Customs-broker-menu">
                <div class="pull-left"><i class="fas fa-user-tie"></i><span
                        class="right-nav-text">المخلصين </span></div>
                <div class="pull-right"><i class="ti-plus"></i></div>
                <div class="clearfix"></div>
            </a>
            <ul id="Customs-broker-menu" class="collapse" data-parent="#sidebarnav">
                <li> <a href="{{route('admin.clearance')}}">  عرض جميع المخلصين </a> </li>
                <li> <a href="{{route('clearance.create')}}"> اضافة مخلص جديد  </a> </li>

            </ul>
        </li>


        {{--البنوك--}}

        <li>
            <a href="javascript:void(0);" data-toggle="collapse" data-target="#Bank-menu">
                <div class="pull-left"><i class="fas fa-university"></i><span
                        class="right-nav-text">البنوك</span></div>
                <div class="pull-right"><i class="ti-plus"></i></div>
                <div class="clearfix"></div>
            </a>
            <ul id="Bank-menu" class="collapse" data-parent="#sidebarnav">
                <li> <a href="{{route('admin.bank')}}">  عرض البنوك </a> </li>
                <li> <a href="{{route('bank.create')}}"> اضافة بنك جديد  </a> </li>

            </ul>
        </li>




        {{--
  ادخال وعرض النسب المئوية لاسعار الواردات
--}}

        <li>
            <a href="javascript:void(0);" data-toggle="collapse" data-target="#Values-menu">
                <div class="pull-left"><i class="fas fa-money-bill-wave-alt"></i><span
                        class="right-nav-text">التعريفات الجمركيه</span></div>
                <div class="pull-right"><i class="ti-plus"></i></div>
                <div class="clearfix"></div>
            </a>
            <ul id="Values-menu" class="collapse" data-parent="#sidebarnav">
                <li> <a href="{{route('admin.values')}}">  عرض التعريفات </a> </li>
                <li> <a href="{{route('values.create')}}"> اضافة تعريفه جديد </a> </li>

            </ul>
        </li>


{{--        الدفع--}}

        <li>
            <a href="javascript:void(0);" data-toggle="collapse" data-target="#Payment-menu">
                <div class="pull-left"><i class="fas fa-money"></i><span
                        class="right-nav-text">الدفع</span></div>
                <div class="pull-right"><i class="ti-plus"></i></div>
                <div class="clearfix"></div>
            </a>
            <ul id="Payment-menu" class="collapse" data-parent="#sidebarnav">
                <li> <a href="{{route('admin.transactions')}}">  عرض الدفعيات السابقه </a> </li>
                <li> <a href="{{route('transactions.create')}}"> اضافة دفعيه جديد  </a> </li>

            </ul>
        </li>

        <li>
            <a href="javascript:void(0);" data-toggle="collapse" data-target="#storage-menu">
                <div class="pull-left"><i class="fas fa-money"></i><span
                        class="right-nav-text">المخزن</span></div>
                <div class="pull-right"><i class="ti-plus"></i></div>
                <div class="clearfix"></div>
            </a>
            <ul id="storage-menu" class="collapse" data-parent="#sidebarnav">
                <li> <a href="{{route('admin.import')}}">  عرض المخزون  </a> </li>


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


{{--        التقارير--}}

        <li>
            <a href="javascript:void(0);" data-toggle="collapse" data-target="#Reports-menu">
                <div class="pull-left"><i class="fas fa-money-bill-wave-alt"></i><span
                        class="right-nav-text"> التقارير </span></div>
                <div class="pull-right"><i class="ti-plus"></i></div>
                <div class=""></div>
            </a>
            <ul id="Reports-menu" class="collapse" data-parent="#sidebarnav">
                <li> <a href="">  عرض التقارير </a> </li>
                <li> <a href=""> اضافة تقرير جديد  </a> </li>

            </ul>
        </li>
        <!-- Attendance-->
{{--        <li>--}}
{{--            <a href="javascript:void(0);" data-toggle="collapse" data-target="#Attendance-icon">--}}
{{--                <div class="pull-left"><i class="fas fa-calendar-alt"></i><span class="right-nav-text">{{trans('main_trans.Attendance')}}</span></div>--}}
{{--                <div class="pull-right"><i class="ti-plus"></i></div>--}}
{{--                <div class="clearfix"></div>--}}
{{--            </a>--}}
{{--            <ul id="Attendance-icon" class="collapse" data-parent="#sidebarnav">--}}
{{--                <li> <a href="{{route('Attendance.index')}}">قائمة الطلاب</a> </li>--}}
{{--            </ul>--}}
{{--        </li>--}}

        <!-- Subjects-->
{{--        <li>--}}
{{--            <a href="javascript:void(0);" data-toggle="collapse" data-target="#Subjects">--}}
{{--                <div class="pull-left"><i class="fas fa-book-open"></i><span class="right-nav-text">المواد الدراسية</span></div>--}}
{{--                <div class="pull-right"><i class="ti-plus"></i></div>--}}
{{--                <div class="clearfix"></div>--}}
{{--            </a>--}}
{{--            <ul id="Subjects" class="collapse" data-parent="#sidebarnav">--}}
{{--                <li> <a href="{{route('subjects.index')}}">قائمة المواد</a> </li>--}}
{{--            </ul>--}}
{{--        </li>--}}

        <!-- Quizzes-->
{{--        <li>--}}
{{--            <a href="javascript:void(0);" data-toggle="collapse" data-target="#Exams-icon">--}}
{{--                <div class="pull-left"><i class="fas fa-book-open"></i><span class="right-nav-text">الاختبارات</span></div>--}}
{{--                <div class="pull-right"><i class="ti-plus"></i></div>--}}
{{--                <div class="clearfix"></div>--}}
{{--            </a>--}}
{{--            <ul id="Exams-icon" class="collapse" data-parent="#sidebarnav">--}}
{{--                <li> <a href="{{route('Quizzes.index')}}">قائمة الاختبارات</a> </li>--}}
{{--                <li> <a href="{{route('questions.index')}}">قائمة الاسئلة</a> </li>--}}
{{--            </ul>--}}
{{--        </li>--}}


        <!-- library-->
{{--        <li>--}}
{{--            <a href="javascript:void(0);" data-toggle="collapse" data-target="#library-icon">--}}
{{--                <div class="pull-left"><i class="fas fa-book"></i><span class="right-nav-text">{{trans('main_trans.library')}}</span></div>--}}
{{--                <div class="pull-right"><i class="ti-plus"></i></div>--}}
{{--                <div class="clearfix"></div>--}}
{{--            </a>--}}
{{--            <ul id="library-icon" class="collapse" data-parent="#sidebarnav">--}}
{{--                <li> <a href="{{route('library.index')}}">قائمة الكتب</a> </li>--}}
{{--            </ul>--}}
{{--        </li>--}}


        <!-- Online classes-->
{{--        <li>--}}
{{--            <a href="javascript:void(0);" data-toggle="collapse" data-target="#Onlineclasses-icon">--}}
{{--                <div class="pull-left"><i class="fas fa-video"></i><span class="right-nav-text">{{trans('main_trans.Onlineclasses')}}</span></div>--}}
{{--                <div class="pull-right"><i class="ti-plus"></i></div>--}}
{{--                <div class="clearfix"></div>--}}
{{--            </a>--}}
{{--            <ul id="Onlineclasses-icon" class="collapse" data-parent="#sidebarnav">--}}
{{--                <li> <a href="{{route('online_classes.index')}}">حصص اونلاين مع زوم</a> </li>--}}
{{--            </ul>--}}
{{--        </li>--}}


        <!-- Settings-->




        <!-- Users-->
        <li>
            <a href="javascript:void(0);" data-toggle="collapse" data-target="#Users-icon">
                <div class="pull-left"><i class="fas fa-users"></i><span class="right-nav-text">{{trans('main_trans.Users')}}</span></div>
                <div class="pull-right"><i class="ti-plus"></i></div>
                <div class="clearfix"></div>
            </a>
            <ul id="Users-icon" class="collapse" data-parent="#sidebarnav">
                <li> <a href="fontawesome-icon.html">font Awesome</a> </li>
                <li> <a href="themify-icons.html">Themify icons</a> </li>
                <li> <a href="weather-icon.html">Weather icons</a> </li>
            </ul>
        </li>


        <!-- Settings-->

        <li>
            <a href=""><i class="fas fa-cogs"></i><span class="right-nav-text">{{trans('main_trans.Settings')}} </span></a>
        </li>


    </ul>
</div>
