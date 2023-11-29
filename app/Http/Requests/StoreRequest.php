<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        // false kalau pakai login-login
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'nama' => 'required|string',
            'email' => 'required|string|email|unique:users,email',
            'role' => 'required',
            'password' => 'required|string|min:4',
        ];
    }

    public function messages(): array
    {
        return [
            'nama.required' => 'Nama wajib diisi',
            'email.required' => 'Email wajib diisi',
            'email.email' => 'Silakan masukan email dengan benar',
            'email.unique' => 'Email sudah pernah digunakan, silahkan gunakan email lain',
            'role.required' => 'Pilih Role',
            'password.required' => 'Password wajib diisi',
            'password.min' => 'Minimum Password adalah 4 karakter',
            // 'password.confirmed' => 'Password belum cocok',
        ];
    }
}
