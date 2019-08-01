@extends('student.master')

@section('content')
<div class="box box-default">
    <div class="box-header with-border">
      <h3 class="box-title">ثبت اطلاعات تماس و آدرس</h3>
    </div>
    <div class="box-body">
        
      <form class="form-horizontal" method="post" action="/">
         {{ csrf_field() }}
        <div class="row">

          <div class="col-md-6"> 
            <div class="form-group">
              <label for="address" class="col-sm-3 control-label">آدرس</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" id="address" name="address" >
              </div>
            </div>

            <div class="form-group">
                    <label for="postcode" class="col-sm-3 control-label">کد پستی</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="postcode" name="postcode" >
                    </div>
                  </div>

        </div>
          <div class="col-md-6">
            <div class="form-group">
                <label for="homephone" class="col-sm-3 control-label">تلفن منزل</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="homephone" name="homephone" >
                </div>
            </div>
          </div>
        </div>

        <hr>
        <div class="row">
                <div class="col-md-10"></div>
                <div class="col-md-2">
                  <input type="submit" class="btn btn-block btn-success btn-lg" value="ثبت اطلاعات آدرس" >
                    
                </div>
              </div>
    
    </form>
    </div> 
  </div> 
@endsection