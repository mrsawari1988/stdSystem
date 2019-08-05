@extends('master')
@section('content')
    <div class="box">

        <div class="box-header">
            <h3 class="box-title"> دانش آموزان</h3>
        </div>

        <!-- /.box-header -->
        <div class="box-body table-responsive no-padding">
            <table class="table table-hover">
                <tbody>

                <tr>
                    <th>ردیف</th>
                    <th>نام</th>
                    <th>نام خانوادگی</th>
                    <th>نام پدر</th>
                    <th>کد ملی</th>
                    <th>پایه</th>
                    <th>رشته</th>
                    <th>وضعیت</th>
                </tr>
                <?php $num = 1?>
                @foreach($users as $user)
                <tr>
                    <td>{{$num}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->family}}</td>
                    <td>{{$user->father->first_name}}</td>
                    <td>{{$user->code_melli}}</td>
                    <td>
                        @if($user->grade == 10)
                            {{'دهم'}}
                        @elseif($user->grade == 11)
                        {{'یازدهم'}}
                        @elseif($user->grade == 12)
                        {{ 'دوازدهم' }}
                        @endif
                    </td>
                    <td>
                        @if($user->field == 1500)
                            {{'ریاضی'}}
                        @elseif($user->field == 1600)
                            {{'تجربی'}}
                        @elseif($user->field == 1700)
                            {{ 'اانسانی' }}
                        @endif
                    </td>
                    <td>
                        @if($user->register_status == 0)
                            <span class="label label-danger">ثبت نشده</span>
                        @elseif($user->register_status > 0 && $user->register_status < 4)
                            <span class="label label-warning">درحال ثبت نام</span>
                        @elseif($user->register_status == 4)
                            <span class="label label-success">ثبت شده</span>
                        @endif
                        </td>
                </tr>
                    <?php $num++ ?>
                @endforeach

                </tbody>
            </table>
        </div>
        <!-- /.box-body -->
    </div>
    @endsection