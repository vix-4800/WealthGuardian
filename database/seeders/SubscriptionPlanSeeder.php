<?php

namespace Database\Seeders;

use App\Models\SubscriptionPlan;
use Illuminate\Database\Seeder;

class SubscriptionPlanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        SubscriptionPlan::create([
            'name' => 'Basic Guardian',
            'description' => 'Ideal for individuals looking to dip their toes into financial management.',
            'cost' => 0,
        ]);

        SubscriptionPlan::create([
            'name' => 'Wealth Builder',
            'description' => 'Perfect for families or individuals seeking advanced budgeting and expense management features.',
            'cost' => 9.99,
        ]);

        SubscriptionPlan::create([
            'name' => 'Financial Mastery',
            'description' => 'Tailored for businesses and financial enthusiasts, providing comprehensive tools and advanced analytics.',
            'cost' => 39.99,
        ]);
    }
}
