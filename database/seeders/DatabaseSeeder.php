<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RegionsSeeder::class);
        $this->call(ProviderGroupsSeeder::class);
        $this->call(ProvidersSeeder::class);
        $this->call(PlanTypesSeeder::class);
        $this->call(IsapresSeeder::class);
        $this->call(SuscriptionPricesSeeder::class);
        $this->call(RolesSeeder::class);
        $this->call(UsersSeeder::class);
        $this->call(PlansSeeder::class);
        
        $this->call(ProvidersQuePlanSeeder::class);
        $this->call(PlanProvidersSeeder::class);
        //  $this->call(PlansQuePlanSeeder::class);
        $this->call(MetadataSeeder::class);
        $this->call(ScoresSeeder::class);
        
        // $this->call(Providers7Porciento::class);
        // $this->call(PlansQuePlanSeeder::class);
        // $this->call(Plans7PorcientoSeeder::class);
    }
}
