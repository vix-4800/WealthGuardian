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
        CREATE TRIGGER `admin_no_family`
        BEFORE UPDATE ON `users`
        FOR EACH ROW
        BEGIN
            IF NEW.admin = 1 AND OLD.admin = 0 THEN
                SET NEW.family_id = NULL;
            END IF;
        END
        ');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::unprepared('DROP TRIGGER IF EXISTS `admin_no_family`');
    }
};
