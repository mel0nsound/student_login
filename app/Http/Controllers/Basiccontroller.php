<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class Basiccontroller extends Controller
{
    // public function login_fn()
    // {
    //     return view('login');

    // }

    public function tablelist_fn()
    {
        //$stds = Student::get();
        $students = Student::get();
        //สร้างjqueryเพื่อเรียกดูข้อมูลจากmodel ซึ่งmodelจะทำงานร่วมกับsql
       // dd($students); ddคือคำสั่งเรียกดูค่าข้อมูลที่ส่งผ่าน
       // return view('tablelist', compact('students'));
        return view('tablelist', compact('students'));

    }

    public function addlist_fn()
    {
        return view('addlist');
    }

    public function postlist(Request $request)
    {
        try {
        //เช็คค่าว่าerrorระหว่างทำงานไหม
       // dd($request);
        $student = new Student;
        $student ->id = $request ->id;
        $student ->email = $request ->email;
        $student ->name = $request ->name;
        $student ->age = $request ->age;
        $student ->sex = $request ->sex;
        $student ->save();
        // ให้โมเดลบันทึกข้อมูลลงฟิลด์
        return redirect('/tablelist');
       
        } catch (\Throwable $th) {
            //throw $th; ถ้าerrorจะแจ้งmessageผ่าน th
           // dd($th->getMessage());
            return back();
        }
    }

    public function delete_fn(Request $request)
    {
    //    dd($request);
        $id = $request->get('id');
    //    $std = Student::find($id);
       $std = Student::where('id', $id) ->first();

       if ($std->delete()) {
            $resp = ['success' => 1, 'code' => 200, 'msg' => 'ลบข้อมูลสำเร็จ'];
        } else {
            $resp = ['success' => 0, 'code' => 500, 'msg' => 'เกิดข้อผิดพลาด โปรดลองใหม่อีกครั้ง!'];
        }
       //สร้างตัวแปรstdจากstudentเพือค้นหา
       //findใช้ค้นหาได้เฉพาะตัวแปรที่มีชื่อว่าidเท่านั้น

       //$std = Student::where('id', $id) ->first();
       //คำสั่งค้นหา //firstใช้ค้นหาตัวแรกในรายการ
    //    $std ->delete();
       
    //    return back();
    }

    public function edit_fn($id)
    {
       //dd($id);
       $std = Student::find($id);
       //$std = Student::where('id', $id) ->first();
       
       return view('edit', compact('std'));
    }

    public function post_edit_fn(Request $request)
    {
        //dd($request);
        try {
        //เช็คค่าว่าerrorระหว่างทำงานไหม
       // dd($request);
        $student = Student::where('id',$request ->id) ->first();
        $student ->email = $request ->email;
        $student ->name = $request ->name;
        $student ->age = $request ->age;
        $student ->sex = $request ->sex;
        $student ->save();
        // ให้โมเดลบันทึกข้อมูลลงฟิลด์
        return redirect('/tablelist');
       
        } catch (\Throwable $th) {
            //throw $th; ถ้าerrorจะแจ้งmessageผ่าน th
           // dd($th->getMessage());
            return back();
        }
    }

    public function indexhome()
    {
        // dd("test");
        return view('home');
    }


}