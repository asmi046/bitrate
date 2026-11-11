<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreLeadRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules(): array
    {
        return [
            'tel' => ['required', 'string', 'regex:/^\d{11,15}$/'],
            'msg' => ['nullable', 'string', 'max:1000'],
            'source' => ['nullable', 'string', 'max:100'],
            'page_url' => ['nullable', 'string', 'max:2048'],
            'consent' => ['nullable', 'boolean'],
        ];
    }

    /**
     * Normalize the payload before it is validated.
     *
     * The phone number comes from a masked input, so it is reduced to digits
     * and the Russian country code is restored for the ten digit numbers.
     */
    protected function prepareForValidation(): void
    {
        $tel = preg_replace('/\D+/', '', (string) $this->input('tel'));

        if (strlen($tel) === 10) {
            $tel = '7'.$tel;
        }

        $this->merge(['tel' => $tel]);

        if (! $this->filled('page_url')) {
            $this->merge(['page_url' => $this->headers->get('referer')]);
        }
    }

    /**
     * Get custom attributes for validator errors.
     *
     * @return array<string, string>
     */
    public function attributes(): array
    {
        return [
            'tel' => 'номер телефона',
            'msg' => 'сообщение',
            'source' => 'источник заявки',
            'page_url' => 'адрес страницы',
            'consent' => 'согласие на обработку персональных данных',
        ];
    }

    /**
     * Get custom messages for validator errors.
     *
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [
            'tel.required' => 'Укажите номер телефона.',
            'tel.regex' => 'Номер телефона указан в неверном формате.',
            'msg.max' => 'Сообщение слишком длинное.',
            'source.max' => 'Некорректный источник заявки.',
            'page_url.max' => 'Некорректный адрес страницы.',
            'consent.boolean' => 'Некорректное значение согласия на обработку персональных данных.',
        ];
    }

    /**
     * Get the phone number in the international format.
     */
    public function phone(): string
    {
        return '+'.(string) $this->validated('tel');
    }
}
