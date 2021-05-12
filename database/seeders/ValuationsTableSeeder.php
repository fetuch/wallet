<?php

namespace Database\Seeders;

use App\Models\Resource;
use App\Models\Valuation;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class ValuationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $resources = Resource::all();

        foreach($resources as $resource)
        {
            $startDate = Carbon::now()->subWeek();

            for($i = 0; $i < 7; $i++)
            {
                Valuation::factory()->create([
                    'resource_id' => $resource->id,
                    'date' => $startDate->addDays(1),
                    'amount' => rand(20, 30),
                ]);
            }
        }
    }
}
