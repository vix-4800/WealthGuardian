<?php

use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        DB::unprepared('
        CREATE TRIGGER `user_with_subscription`
        BEFORE UPDATE ON `users`
        FOR EACH ROW
        BEGIN
            IF NEW.admin = 0 AND OLD.admin = 1 THEN
                SET NEW.subscription_plan_id = 1;
            END IF;
        END
        ');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::unprepared('DROP TRIGGER IF EXISTS `user_with_subscription`');
    }
};
