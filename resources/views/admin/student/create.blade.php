@extends('student.master')
@section('content')
    <div class="box box-default">

        <!-- Box Header -->
        <div class="box-header with-border">
            <h3 class="box-title">ثبت اطلاعات تماس و آدرس</h3>
        </div>
        <!-- End of Box Header -->

        <!-- Box Body -->
        <div class="box-body">

        <!-- Errors Here -->
        @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        <!-- Errors end -->

            <!-- Register Form Here -->
            <form action="" class="form-horizontal" method="post">
              {{ csrf_field() }}

              <div class="row">

                  <div class="col-md-6">

                      <div class="form-group">
                          <label for="code_melli" class="col-sm-3 control-label">کد ملی</label>
                          <div class="col-sm-9">
                              <input type="text" class="form-control" id="code_melli" name="code_melli" value="{{old('code_melli')}}">
                          </div>
                      </div>

                  </div>

                  <div class="col-md-6">
                      <div class="form-group">
                          <label for="phone" class="col-sm-3 control-label">شماره تماس</label>
                          <div class="col-sm-9">
                              <input type="text" class="form-control" id="phone" name="phone" value="{{old('phone')}}">
                          </div>
                      </div>
                  </div>

              </div>

                <hr>

                <div class="row">


                    <div class="col-md-6">

                        <div class="form-group">
                            <label for="name" class="col-sm-3 control-label">نام</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="name" name="name" value="{{old('name')}}">
                            </div>
                        </div>

                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="family" class="col-sm-3 control-label">نام خانوادگی</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="family" name="family" value="{{old('family')}}">
                            </div>
                        </div>
                    </div>

                </div>

                <hr>

                <div class="row">

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="field" class="col-sm-3 control-label">رشته</label>
                            <div class="col-md-9">
                                <select name="field" id="field" class="form-control">
                                    <option value="1500">ریاضی و فیزیک</option>
                                    <option value="1600">علوم تجربی</option>
                                    <option value="1700">علوم انسانی</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="grade" class="col-sm-3 control-label">پایه</label>
                            <div class="col-md-9">
                                <select name="grade" id="grade" class="form-control">
                                    <option value="10">دهم</option>
                                    <option value="11">یازدهم</option>
                                    <option value="12">دوازدهم</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-9"></div>
                    <div class="col-md-3">
                        <input type="submit" class="btn btn-block btn-success btn-lg" value="ثبت اطلاعات دانش آموز" >

                    </div>
                </div>
            </form>
            <!-- Register Form End -->

        </div>
        <!-- End Of Box Body -->

    </div>
    @endsection