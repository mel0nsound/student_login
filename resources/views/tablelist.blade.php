
@extends('layout.main')
{{-- <meta name="csrf-token" content="{{ csrf_token() }}" /> --}}
@section('titlebar','แสดงข้อมูล')
@section('page-title','แสดงข้อมูล')
@php
    $page="tablelist";
@endphp
{{-- <script src="sweetalert2.all.min.js"></script>
<script src="sweetalert2.min.js"></script>
<link rel="stylesheet" href="sweetalert2.min.css"> --}}

@section('content')
  <meta name="csrf-token" content="{{ csrf_token() }}" />
    <h3 class="text-center">แสดงข้อมูลนักศึกษา</h3>
    <div class="card card-table">
        <div class="card-header">ข้อมูลนักศึกษา
          {{-- <div class="tools dropdown"><span class="icon mdi mdi-download"></span><a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown"><span class="icon mdi mdi-more-vert"></span></a>
            <div class="dropdown-menu" role="menu"><a class="dropdown-item" href="#">Action</a><a class="dropdown-item" href="#">Another action</a><a class="dropdown-item" href="#">Something else here</a>
              <div class="dropdown-divider"></div><a class="dropdown-item" href="#">Separated link</a>
            </div>
          </div>
        </div> --}}
        <div class="card-body">
          <table class="table table-striped table-borderless table-hover">
            <thead>
              <tr>
                <th style="width:20%;" class="">รหัสนักศึกษา</th>
                <th style="width:30%;" class="">อีเมล</th>
                <th style="width:30%;" class="">ชื่อ-สกุล</th>
                <th style="width:10%;" class="text-center">อายุ</th>
                <th style="width:10%;" class="text-center">เพศ</th>
                <th style="width:10%;" class=""></th>
              </tr>
            </thead>
            <tbody class="no-border-x">

                @forelse ($students as $item)
                <tr>
                    <td>{{$item ->id}}</td>
                    <td>{{$item ->email}}</td>
                    <td>{{$item ->name}}</td>
                    <td class="text-center">{{$item ->age}}</td>
                    <td class="text-center">   
                        @if ($item ->sex == "m")
                        ชาย
                        @else
                        หญิง
                        @endif
                    </td>
                     

                    <td class="actions">
                        <a href="{{ route('edit', ['id'=>$item->id] ) }}" class="btn btn-space btn-warning hover">แก้ไข</a>

                        {{-- <button href="/delete/{{$item ->id}}" class="btn btn-space btn-danger hover">ลบ</button> --}}
                        <button onclick="setDelete({{$item ->id}})" type="button" class="btn btn-danger"><i class="fa fa-undo" aria-hidden="true"></i>{{__('ลบ')}}</button>
                    </td>
                  </tr>
                @empty
                <tr>
                    <td  class="text-center" colspan="5">ไม่พบข้อมูล</td>
                  </tr>
 
                @endforelse
             
            </tbody>
          </table>
        </div>
      </div>
      {{-- <script src="{{ asset('/js/student.js') }}"></script> --}}
      {{-- <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script> --}}
      <script src="sweetalert2/dist/sweetalert2.all.min.js"></script>
      <script src="sweetalert2/dist/sweetalert2.min.js"></script>
      <link rel="stylesheet" href="sweetalert2/dist/sweetalert2.min.css">

      <script>
      function setDelete(id) {
        console.log(id);
        Swal.fire({
          title: 'แน่ใจหรือไม่?',
          text: "ลบข้อมูลนักศึกษา!",
          icon: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
          if (result.isConfirmed) {
            event.preventDefault();
                    let _token = $('meta[name="csrf-token"]').attr('content');
        
                    $.ajax({
                        url: "/laravel_login/public/delete",
                        headers: {
                          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        type: "POST",
                        data: {
                            id: id,
                            // status: status,
                            _token: _token
                        },
                        success: function(resp) {
                          location.href = "/laravel_login/public/tablelist";
                        },
                    });

            // Swal.fire(
            //   'Deleted!',
            //   'Your file has been deleted.',
            //   'success'
            // )
          }
        })
      }
      </script>
@endsection