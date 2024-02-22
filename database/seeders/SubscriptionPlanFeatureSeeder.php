<?php

namespace Database\Seeders;

use App\Models\SubscriptionPlanFeature;
use Illuminate\Database\Seeder;

class SubscriptionPlanFeatureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // First plan
        SubscriptionPlanFeature::create([
            'subscription_plan_id' => 1,
            'name' => 'Individual configuration',
        ]);
        SubscriptionPlanFeature::create([
            'subscription_plan_id' => 1,
            'name' => 'Essential budgeting tools',
        ]);
        SubscriptionPlanFeature::create([
            'subscription_plan_id' => 1,
            'name' => 'Limited expense categories',
        ]);

        // Second plan
        SubscriptionPlanFeature::create([
            'subscription_plan_id' => 2,
            'name' => 'Individual and family configurations',
        ]);
        SubscriptionPlanFeature::create([
            'subscription_plan_id' => 2,
            'name' => 'Advanced budgeting and expense management',
        ]);
        SubscriptionPlanFeature::create([
            'subscription_plan_id' => 2,
            'name' => 'Customizable expense categories',
        ]);
        SubscriptionPlanFeature::create([
            'subscription_plan_id' => 2,
            'name' => 'Multi-device synchronization',
        ]);

        // Third plan
        SubscriptionPlanFeature::create([
            'subscription_plan_id' => 3,
            'name' => 'Individual, family, and business configurations',
        ]);
        SubscriptionPlanFeature::create([
            'subscription_plan_id' => 3,
            'name' => 'Comprehensive budgeting and expense tracking',
        ]);
        SubscriptionPlanFeature::create([
            'subscription_plan_id' => 3,
            'name' => 'Unlimited customizable expense categories',
        ]);
        SubscriptionPlanFeature::create([
            'subscription_plan_id' => 3,
            'name' => 'Multi-device synchronization',
        ]);
        SubscriptionPlanFeature::create([
            'subscription_plan_id' => 3,
            'name' => 'Advanced financial insights and analytics',
        ]);
    }
}
