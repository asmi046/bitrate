<?php

namespace Database\Factories;

use App\Models\Lead;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Lead>
 */
class LeadFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var class-string<Lead>
     */
    protected $model = Lead::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'tel' => '+79991234567',
            'msg' => 'Заказ обратного звонка',
            'source' => 'callback-modal',
            'page_url' => 'http://localhost/',
            'ip_address' => '127.0.0.1',
            'user_agent' => 'phpunit',
        ];
    }
}
