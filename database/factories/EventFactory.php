<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Event>
 */
class EventFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $availableHour=$this->faker->numberBetween(10,18); //10から18までの数字
        $minutes=[0,30]; //00分か30分
        $mKey=array_rand($minutes); //配列$minutesからランダムにキーを取得。つまりこの場合は0か1。
        $addHour=$this->faker->numberBetween(1,3);  //イベント時間 1時間~3時間

        $dummyDate=$this->faker->dateTimeThisMonth; //今月の日にちをランダムに取得。
        $startDate=$dummyDate->setTime($availableHour,$minutes[$mKey]); //例えば2023年7月30日10:30など。
        $clone=clone $startDate; //そのままmodifyするとstartDateも変わるためコピー。
        $endDate=$clone->modify('+' . $addHour . 'hour');

        // dd($startDate,$endDate);


        return [
            'name'=>$this->faker->name,
            'information'=>$this->faker->realText,
            'max_people'=>$this->faker->numberBetween(1,20),
            'start_date'=> $startDate,
            'end_date'=> $endDate,
            'is_visible'=>$this->faker->boolean
        ];
    }
}
