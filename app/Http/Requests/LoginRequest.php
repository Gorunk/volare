<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Factory;

class LoginRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules(): array
    {
        return [
            'email' => 'required',
            'password' => 'required'
        ];
    }

    public function getCredentials(): array
    {
        return $this->only('email', 'password');
        /*$name = $this->get('name');
        if ($this->isEmail($name)) {
            return [
            'email' => $name,
            'password' => $this->get('password')
            ];
        }
        return $this->only('name', 'password');*/
    }

    /*public function isEmail($value) {
        $factory = $this->container->make(Factory::class);

        return ! $factory->make(['name' => $value], ['name' => 'email'])->fails();
    }*/
}
