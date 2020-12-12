<?php

namespace Database\Factories;

use App\Models\History;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

class HistoryFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = History::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        static $order = -1;
        $order++;
        return [
            'temp' => $this->faker->randomFloat($nbMaxDecimals = null, $min = 0, $max = 70),
            'date_at' => Carbon::now()->subDay($order)->format('Y-m-d'),
        ];
    }
}
