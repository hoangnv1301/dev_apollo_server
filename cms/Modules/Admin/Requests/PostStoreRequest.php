<?php

namespace Core\Modules\Admin\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostStoreRequest extends FormRequest
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
        // $ruleArr = [
        //     'name' => 'required',
        //     'email' => 'required|email'
        // ];
        // if ($this->change_password == 1) {
        //     $ruleArr["password"] =
        //         [
        //             'required',
        //             'between:8,36',
        //             'confirmed',
        //             'regex:[^(?:(?=.*\d)(?=.*[A-Z])(?=.*[a-z])|(?=.*\d)(?=.*[^A-Za-z0-9])(?=.*[a-z])|(?=.*[^A-Za-z0-9])(?=.*[A-Z])(?=.*[a-z])|(?=.*\d)(?=.*[A-Z])(?=.*[^A-Za-z0-9]))(?!.*(.)\1{8,})[A-Za-z0-9!~<>,;:_=?*+#."&§%°()\|\[\]\-\$\^\@\/]]',
        //         ];
        // }
        // return $ruleArr;
    }

    public function messages()
    {
        // return [
        //     'name.required' => 'お名前が入力されていません。',
        //     'email.required' => 'メールアドレスが入力されていません',
        //     'password.required' => 'パスワードが入力されていません。',
        //     'password.between' => 'パスワードは8～36文字で設定してください。',
        //     'password.confirmed' => 'パスワードが一致していません。',
        //     'password.regex' => 'パスワードは8文字以上、半角アルファベット大文字、小文字、半角数字、記号の中から3種類以上を組み合わせてください'
        // ];
    }
}
