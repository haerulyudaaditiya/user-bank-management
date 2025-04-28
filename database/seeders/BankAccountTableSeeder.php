<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BankAccountTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('bank_accounts')->insert([
            [
                'user_id' => 1,
                'bank_name' => 'Bank Central Asia',
                'account_number' => '123456789',
                'status' => 'active',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'user_id' => 2,
                'bank_name' => 'Bank Negara Indonesia',
                'account_number' => '987654321',
                'status' => 'active',
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);
    }
}
