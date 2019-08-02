@extends('student.master')
@section('content')

    {{-- depending on the users registeration status different messages will apear for the user
     we do that because during user registeration an error may happen , so the user understands from where he should complete
     his registeration
     --}}
    @switch($user->register_status)
        @case(1)
        @component('student.status.halfregistered')
            @slot('message')
                شما مرحله ثبت نام مشخصات دانش آموز را با موفقیت به اتمام رسانده اید برای ادامه فراید ثبت نمام کلیک نمایید
                @endslot
            @endcomponent
        @break
        @case(2)
        @component('student.status.halfregistered')
            @slot('message')
                شما مرحله ثبت نام مشخصات دانش آموز و اطلاعات پدر را با موفقیت به اتمام رسانده اید برای ادامه فراید ثبت نمام کلیک نمایید
            @endslot
        @endcomponent
        @break
        @case(3)
        @component('student.status.halfregistered')
            @slot('message')
                شما مرحله ثبت نام مشخصات دانش آموز و اطلاعات پدر و مادر را با موفقیت به اتمام رسانده اید برای ادامه فراید ثبت نمام کلیک نمایید
            @endslot
        @endcomponent
        @break
        @case(4)
        @include('student.status.registered')
        @break
        @default
        @include('student.status.unregistered')
        @endswitch
    @endsection