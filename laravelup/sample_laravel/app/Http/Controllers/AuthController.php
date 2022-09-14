<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RegisterRequest;
use App\Http\Requests\UpdateInfoRequest;
use App\Http\Requests\UpdatePasswordRequest;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Symfony\Component\HttpFoundation\Response;

class AuthController extends Controller
{
    /**
     * @OA\Post(
     *   path="/login",
     *   tags={"Public"},
     *   @OA\Response(response="200",
     *     description="Login",
     *   )
     * )
     */
    public function login(Request $request)
    {
        if (Auth::attempt($request->only('email', 'password'))) {
            $user = Auth::user();

            $token = $user->createToken('admin')->accessToken;

            return [
                'token' => $token,
            ];
        }

        return response([
            'error' => 'Invalid Credentials!',
        ], Response::HTTP_UNAUTHORIZED);
    }

    /**
     * @OA\Post(
     *   path="/register",
     *   tags={"Public"},
     *   @OA\Response(response="200",
     *     description="Register",
     *   )
     * )
     */
    public function register(RegisterRequest $request)
    {
        $user = User::create(
            $request->only('first_name', 'last_name', 'email')
            + [
                'password' => Hash::make($request->input('password')),
                'role_id' => 1,
            ]
        );

        return response($user, Response::HTTP_CREATED);
    }

    // public function logout()
    // {
    //     auth()->guard('api')->logout();
    //     return response()->json([
    //         'message'=>'successfully logged out'
    //     ]);
    // }

    public function logout()
    {
        $cookie = \Cookie::forget('jwt');

        $this->userService->post('logout', []);

        return response([
            'message' => 'success'
        ])->withCookie($cookie);
    }

    public function updateInfo(UpdateInfoRequest $request)
    {
        $user = $this->userService->put('users/info',
            $request->only('first_name', 'last_name', 'email')
        );

        return response($user, Response::HTTP_ACCEPTED);
    }

    public function updatePassword(UpdatePasswordRequest $request)
    {
        $user = $this->userService->put('users/info', $request->only('password'));

        return response($user, Response::HTTP_ACCEPTED);
    }
}
