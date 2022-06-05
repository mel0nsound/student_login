@extends('layouts.app')
{{-- 
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('อีเมล') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('ชื่อ-นามสกุล') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('รหัสนักศึกษา') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="text" class="form-control @error('id') is-invalid @enderror" name="id" required autocomplete="new-password">

                                @error('id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row pt-1">
                            <label class="col-12 col-sm-2 col-form-label text-sm-right">อายุ</label>
                            <div class="col-12 col-sm-8 col-lg-6">
                              <select name="age" class="form-control" id="age">
                                <option value ="" disabled selected >- โปรดเลือก -</option>
                               
                                <?php for($i = 10; $i <= 90; $i++): ?> {
            
                                  <option value ="<?=$i?>"> <?=$i?> </option>
              
                                  }<?php endfor; ?>
                              </select>
                            </div>
                          </div>
            
                          <div class="form-group row pt-3">
                            <label class="col-12 col-sm-2 col-form-label text-sm-right pt-4">sex</label>
                            <div class="col-12 col-sm-8 col-lg-6">
                              <div class="form-check form-check-inline">
                                <label class="custom-control custom-radio custom-radio-icon custom-control-inline">
                                  <input class="custom-control-input" id="radioicon" value="f" required type="radio" name="sex" ><span class="custom-control-label"><i class="mdi mdi-female"></i></span>
                                </label>
                                <label class="custom-control custom-radio custom-radio-icon custom-control-inline">
                                  <input class="custom-control-input" id="radioicon2" type="radio" name="sex" value="m" required><span class="custom-control-label"><i class="mdi mdi-male-alt"></i></span>
                                </label>
                              </div>
                            </div>
                          </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
zzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzz
@endsection --}}


 {{-- @extends('layout.main') --}}

{{-- @section('titlebar','เพิ่มข้อมูล') --}}
{{-- @section('page-title','เพิ่มข้อมูล') --}}
@php
    $page="register";
@endphp 

@section('content')
    
    
    <div class="card card-border-color card-border-color-primary">
        <div class="card-header card-header-divider">สมัครสมาชิก</div>
        <div class="card-body">
          <form action="{{ route('saveaddlist') }}" method="post">
            @csrf
            <div class="form-group row mt-2">
              <label class="col-3 col-lg-2 col-form-label text-right" for="password">รหัสนักศึกษา</label>
              <div class="col-9 col-lg-10">
                <input class="form-control" id="password" type="text" name="id" placeholder="รหัสนักศึกษา">
              </div>
            </div>

            <div class="form-group row">
              <label class="col-3 col-lg-2 col-form-label text-right" for="name">ชื่อ-สกุล</label>
              <div class="col-9 col-lg-10">
                <input class="form-control" id="name" type="text" name="name" placeholder="ชื่อ-สกุล">
              </div>
            </div>

            <div class="form-group row">
              <label class="col-3 col-lg-2 col-form-label text-right" for="email">อีเมล</label>
              <div class="col-9 col-lg-10">
                <input class="form-control" id="email" type="text" name="email" placeholder="อีเมล">
              </div>
            </div>

            <div class="form-group row pt-1">
                <label class="col-12 col-sm-2 col-form-label text-sm-right">อายุ</label>
                <div class="col-12 col-sm-8 col-lg-6">
                  <select name="age" class="form-control" id="age">
                    <option value ="" disabled selected >- โปรดเลือก -</option>
                   
                    <?php for($i = 10; $i <= 90; $i++): ?> {

                      <option value ="<?=$i?>"> <?=$i?> </option>
  
                      }<?php endfor; ?>
                  </select>
                </div>
              </div>
{{-- 
            <div class="form-group row pt-3">
                <label class="col-12 col-sm-2 col-form-label text-sm-right pt-4">sex</label>
                <div class="col-12 col-sm-8 col-lg-6">
                  <div class="form-check form-check-inline">
                    <label class="custom-control custom-radio custom-radio-icon custom-control-inline">
                      <input class="custom-control-input" id="radioicon" value="f" required type="radio" name="sex" ><span class="custom-control-label"><i class="mdi mdi-female"></i></span>
                    </label>
                    <label class="custom-control custom-radio custom-radio-icon custom-control-inline">
                      <input class="custom-control-input" id="radioicon2" type="radio" name="sex" value="m" required><span class="custom-control-label"><i class="mdi mdi-male-alt"></i></span>
                    </label>
                  </div>
                </div>
              </div> --}}

              <div class="form-group row pt-3">
                <label class="col-12 col-sm-2 col-form-label text-sm-right pt-4">sex</label>
                <div class="col-12 col-sm-8 col-lg-6">
                  <div class="form-check form-check-inline">
                    <label class="custom-control custom-radio custom-radio-icon custom-control-inline">
                      <input class="custom-control-input" id="radioicon" value="f" required type="radio" name="sex" ><span class="custom-control-label"><i class="mdi mdi-female"></i></span>
                    </label>
                    <label class="custom-control custom-radio custom-radio-icon custom-control-inline">
                      <input class="custom-control-input" id="radioicon2" type="radio" name="sex" value="m" required><span class="custom-control-label"><i class="mdi mdi-male-alt"></i></span>
                    </label>
                  </div>
                </div>
              </div>

            <div class="row pt-3 mt-1">
              <div class="col-sm-6 col-lg-6 pb-4 pb-lg-0">
                <div class="be-checkbox custom-control custom-checkbox">
                  <input class="custom-control-input" type="checkbox" id="check2">
                  <label class="custom-control-label" for="check2">Remember me</label>
                </div>
              </div>
              <div class="col-sm-6">
                <p class="text-right">
                  <button class="btn btn-space btn-primary" type="submit">Register</button>
                  <button class="btn btn-space btn-secondary">Cancel</button>
                </p>
              </div>
            </div>
          </form>
        </div>
      </div>
@endsection
