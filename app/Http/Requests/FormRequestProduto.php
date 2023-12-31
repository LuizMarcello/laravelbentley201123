<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FormRequestProduto extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        $request = [];
        /* Se for "POST" entra aqui */
        if ($this->method() == "POST" || $this->method() == 'PUT') {
            $request = [
                //'nome' => 'required',
                //'valor' => 'required',
                //'banda' => 'required',
                //'datanota' => 'required',
                //'marca' => 'required',
                //'modelo' => 'required',
                //'notafiscal' => 'required',
                //'diametro' => 'required',
                //'situacao' => 'required',
                //'observacao' => 'required',
                //'metros' => 'required',
                //'tipodecabo' => 'required',
                //'voltagem' => 'required',
                //'serial' => 'required',
                //'macaddress' => 'required'
        ];
        }
        /* Se for "GET" retorna string vazia, e não valida nada */
        return $request;
    }
}