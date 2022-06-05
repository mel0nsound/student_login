@extends('layout.main')

@section('titlebar','เพิ่มข้อมูล')
@section('page-title','เพิ่มข้อมูล')
@php
    $page="addlist";
@endphp

@section('content')
    <h3 class="text-center">เพิ่มข้อมูลนักศึกษา</h3>
    
    <div class="card card-border-color card-border-color-primary">
        <div class="card-header card-header-divider">เพิ่มข้อมูล<span class="card-subtitle">เพิ่มข้อมูล</span></div>
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
{{-- zxxxxxx
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