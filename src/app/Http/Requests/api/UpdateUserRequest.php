<?php

namespace App\Http\Requests\api;

use App\Rules\RoleChangeCheck;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class UpdateUserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, array<int, string>>
     */
    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', Rule::unique('users')->withoutTrashed()->ignore($this->user->id)],
            'role' => ['required', 'integer', 'in:1,2,3', new RoleChangeCheck($this->user->id)],
        ];
    }
}
