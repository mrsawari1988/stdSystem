@extends('student.master')

@section('content')
<div class="box box-default">
    <div class="box-header with-border">
      <h3 class="box-title">اطلاعات دانش آموز را وارد نمایید</h3>
    </div>
    <div class="box-body">
        
      <form class="form-horizontal" method="post" action="">
         {{ csrf_field() }}

        <div class="row">

          <div class="col-md-6"> 
            <div class="form-group">
              <label for="codemelli" class="col-sm-3 control-label">کد ملی</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" id="codemelli" name="codemelli" >
              </div>
          </div>

        </div>
          <div class="col-md-6"></div>
        </div>

        <hr>

      <div class="row"> 

        <div class="col-md-6">
            <div class="form-group">
                <label for="firstname" class="col-sm-3 control-label">نام</label>

                <div class="col-sm-9">
                  <input type="text" class="form-control" id="firstname" name="firstname" >
                </div>
            </div>

            <div class="form-group">
                <label for="fathername" class="col-sm-3 control-label">نام پدر</label>
                
                <div class="col-sm-9">
                  <input type="text" class="form-control" id="fathername" name="fathername">
                </div>
            </div>

        </div>


        <div class="col-md-6">

            <div class="form-group">
                <label for="lastname" class="col-sm-3 control-label">نام خانوادگی</label>

                <div class="col-sm-9">
                  <input type="text" class="form-control" id="lastname" name="lastname">
                </div>
            </div>

            <div class="form-group">
                <label for="phone" class="col-sm-3 control-label">موبایل</label>
                
                <div class="col-sm-9">
                  <input type="text" class="form-control" id="phone" name="phone" >
                </div>
            </div>

        </div>
       
      </div>

      <hr>
      <div class="row"> 

          <div class="col-md-6">
              <div class="form-group">
                  <label for="birthdate" class="col-sm-3 control-label">تاریخ تولد</label>
                <div class="col-md-9">
                  <div class="input-group date">
                      <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                      </div>
                      <input type="text" id="tarikh" name="birthdate" class="form-control pull-right"> 
                    </div>
              </div>
              </div>
  
              <div class="form-group">
                  <label for="birthissue" class="col-sm-3 control-label">محل صدور</label>
                  
                  <div class="col-sm-9">
                    <input type="text" class="form-control" id="birthissue" name="birthissue">
                  </div>
              </div>

              <div class="form-group">
                  <label for="horoofserialshenasname" class="col-sm-3 control-label">حرف سریال شناسنامه</label>
                  
                  <div class="col-sm-9">
                    <select name="horoofserialshenasname" id="horoofserialshenasname" class="form-control">
                        <option selected="selected" value="1">الف</option>
                        <option value="2">ب</option>
                        <option value="3">پ</option>
                        <option value="4">ت</option>
                        <option value="5">ث</option>
                        <option value="6">ج</option>
                        <option value="7">چ</option>
                        <option value="8">ح</option>
                        <option value="9">خ</option>
                        <option value="10">د</option>
                        <option value="11">ذ</option>
                        <option value="12">ر</option>
                        <option value="13">ز</option>
                        <option value="14">ژ</option>
                        <option value="15">س</option>
                        <option value="16">ش</option>
                        <option value="17">ص</option>
                        <option value="18">ض</option>
                        <option value="19">ط</option>
                        <option value="20">ظ</option>
                        <option value="21">ع</option>
                        <option value="22">غ</option>
                        <option value="23">ف</option>
                        <option value="24">ق</option>
                        <option value="25">ك</option>
                        <option value="26">گ</option>
                        <option value="27">ل</option>
                        <option value="28">م</option>
                        <option value="29">ن</option>
                        <option value="30">و</option>
                        <option value="31">ه</option>
                        <option value="32">ى</option>
                        <option value="33">يك المثني</option>
                        <option value="34">دو المثني</option>
                        <option value="35">سه المثني</option>
                        <option value="36">چهار المثني</option>
                        <option value="37">پنج المثني</option>
                        <option value="38">شش المثني</option>
                        <option value="39">هفت المثني</option>
                        <option value="40">هشت المثني</option>
                        <option value="41">نه المثني</option>
                        <option value="42">یازده المثني</option>
                        <option value="43">دوازده المثني</option>
                        <option value="44">اتباع خارجی</option>
                        <option value="45">ده المثني</option>
                        <option value="46">سیزده المثنی</option>
                        <option value="47">چهارده المثنی</option>
                        <option value="48">پانزده المثنی</option>
                    </select>
                  </div>
              </div>
  
          </div>
  
  
          <div class="col-md-6">
  
              <div class="form-group">
                  <label for="birthplace" class="col-sm-3 control-label">محل تولد</label>
  
                  <div class="col-sm-9">
                    <input type="text" class="form-control" id="birthplace" name="birthplace">
                  </div>
              </div>
  
              <div class="form-group">
                  <label for="serialshenasname" class="col-sm-3 control-label">ش سریال شناسنامه</label>
                  
                  <div class="col-sm-9">
                    <input type="text" class="form-control" id="serialshenasname" name="serialshenasname" >
                  </div>
              </div>

              <div class="form-group">
                  <label for="shomareseri" class="col-sm-3 control-label">ش سری شناسنامه</label>
                  
                  <div class="col-sm-9">
                    <input type="text" class="form-control" id="shomareseri" name="shomareseri" >
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
        <input type="hidden" id="tarikhAlt" name="birthdateAlt" class="form-control pull-right">
    </form>
    </div> 
  </div> 
@endsection