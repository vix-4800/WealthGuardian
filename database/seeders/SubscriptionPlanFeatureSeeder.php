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
            'feature' => 'Individual configuration',
        ]);
        SubscriptionPlanFeature::create([
            'subscription_plan_id' => 1,
            'feature' => 'Essential budgeting tools',
        ]);
        SubscriptionPlanFeature::create([
            'subscription_plan_id' => 1,
            'feature' => 'Limited expense categories',
        ]);

        // Second plan
        SubscriptionPlanFeature::create([
            'subscription_plan_id' => 2,
            'feature' => 'Individual and family configurations',
        ]);
        SubscriptionPlanFeature::create([
            'subscription_plan_id' => 2,
            'feature' => 'Advanced budgeting and expense management',
        ]);
        SubscriptionPlanFeature::create([
            'subscription_plan_id' => 2,
            'feature' => 'Customizable expense categories',
        ]);
        SubscriptionPlanFeature::create([
            'subscription_plan_id' => 2,
            'feature' => 'Multi-device synchronization',
        ]);

        // Third plan
        SubscriptionPlanFeature::create([
            'subscription_plan_id' => 3,
            'feature' => 'Individual, family, and business configurations',
        ]);
        SubscriptionPlanFeature::create([
            'subscription_plan_id' => 3,
            'feature' => 'Comprehensive budgeting and expense tracking',
        ]);
        SubscriptionPlanFeature::create([
            'subscription_plan_id' => 3,
            'feature' => 'Unlimited customizable expense categories',
        ]);
        SubscriptionPlanFeature::create([
            'subscription_plan_id' => 3,
            'feature' => 'Multi-device synchronization',
        ]);
        SubscriptionPlanFeature::create([
            'subscription_plan_id' => 3,
            'feature' => 'Advanced financial insights and analytics',
        ]);
    }
}
