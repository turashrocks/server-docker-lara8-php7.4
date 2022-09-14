<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

/**
 * @OA\Schema(
 *      title="Update User Info request",
 *      description="Update User Info request body data",
 * )
 */
class UpdateInfoRequest extends FormRequest
{
    /**
     * @OA\Property(
     *   title="name"
     * )
     *
     * @var string
     */
    public $name;

    /**
     * @OA\Property(
     *   title="email"
     * )
     *
     * @var string
     */
    public $email;

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'email' => 'email',
        ];
    }
}
