<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Customer;

class CustomerForm extends FormRequest
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
        $customerId = isset($this->customer) ? ',cpf,' .$this->customer->id : null;
        return [
            'cpf' =>'required|max:11|unique:customers' . $customerId,
            'name' => 'required|max:200',
            'surname' => 'required|max:200',
            'phone' => 'required|max:11',
        ];
    }

    public function persist(Customer $sustomer)
    {
        $sustomer->cpf = $this->cpf;
        $sustomer->name = $this->name;
        $sustomer->surname = $this->surname;
        $sustomer->phone = $this->phone;
        $sustomer->save();
    }

    /**
     * Configure the validator instance.
     *
     * @param  \Illuminate\Validation\Validator  $validator
     * @return void
     */
    public function withValidator($validator)
    {
        if ($validator->fails()) {
            return redirect($this->getRedirectUrl())
                ->with('warning', 'Verifique os erros a seguir para podermos continuar.');
        }
    }

}
