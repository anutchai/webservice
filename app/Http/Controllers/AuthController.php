<?php
namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function logout(Request $request){
        // คำสั่งสำหรับการลบ Token ที่ใช้อยู่ปัจจุบัน
        $request->user()->currentAccessToken()->delete();
        return response()->json([
            'message' => 'Logout Complete',
        ]);
    }

    public function login(Request $req){
        // การทำงาน Validator หรือการตรวจสอบข้อมูลที่รับเข้ามา
        $check = Validator::make($req -> all(),[
            'email' => 'required|email',
            'password' => 'required|min:6'
        ]);
        // ถ้าตรวจสอบไม่ผ่านจะให้แสดงข้อความ Error แจ้งเตือนกลับ
        if($check->fails()){
            return response()->json([
                'message' => "Error",
                'status_code' => "400",
            ]);
        }else{
            // แปลงข้อมูลที่ได้จาก Request มาเก็บใส่ตัวแปร $data
            $data = request(['email','password']);
            // use Illuminate\Support\Facades\Auth;
            // การตรวจสอบว่าข้อมูลในตัวแปร $data ตรงกับฐานข้อมูลหรือไม่
            if(Auth::attempt($data)){

                // ค้นหาผู้ใช้ โดยผ่าน Email
                $user = User::where('email', $req->email)->first();
                // สร้าง Token สำหรับ user นี้เท่านั้น และเก็บใส่ตัวแปร Token
                $token = $user->createToken('authToken')->plainTextToken;

                return response()->json([
                    "message" => "login สำเร็จ",
                    "status code" => "200",
                    "user infomation" => $user,
                    "token" => $token,
                ]);
            }else{
               dd("ไม่พบผู้ใช้หรือรหัสผ่านไม่ถูกต้อง");
            }
            return response()->json([
                'message' => "Success",
                'status_code' => "200"
            ]);
        }

    }
}
