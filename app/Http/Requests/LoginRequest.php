<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Container\BindingResolutionException;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Factory as ValidationFactory;

class LoginRequest extends FormRequest
{

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
            'email' => 'required',
            'password' => 'required'
        ];
    }

    /**
     * Get the needed authorization credentials from the request.
     *
     * @return array
     */
    public function getCredentials()
    {
        return $this->only('email', 'password');
        /*$username = $this->get('name');

        if ($this->isEmail($username)) {
            return [
                'email' => $username,
                'password' => $this->get('password')
            ];
        }

        return $this->only('name', 'password');*/
    }

    /**
     * Validate if provided parameter is valid email.
     *
     * @param $param
     * @return bool
     * @throws BindingResolutionException
     */
    private function isEmail($param)
    {
        $factory = $this->container->make(ValidationFactory::class);

        return ! $factory->make(
            ['name' => $param],
            ['name' => 'email']
        )->fails();
    }
}
