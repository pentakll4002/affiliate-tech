<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Validator;

class ForgotPasswordController extends Controller
{
    public function sendResetLink(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|exists:users,email',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'errors' => $validator->errors()
            ], 422);
        }

        $status = Password::sendResetLink($request->only('email'));

        if ($status === Password::RESET_LINK_SENT) {
            return response()->json([
                'status' => true,
                'message' => 'Liên kết đặt lại mật khẩu đã được gửi qua email!'
            ]);
        }

        return response()->json([
            'status' => false,
            'message' => 'Không thể gửi liên kết, vui lòng thử lại.'
        ], 500);
    }
}

?>
