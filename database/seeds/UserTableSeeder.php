<?php

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\Hash;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        
        User::create([
            'promote_id' => 1,
            'first_name' => 'Admin',
            'username' => 'admin',
            'email' => 'admin@admin.com',
            'password' => Hash::make('admin'),
            'payment_email' => 'admin@admin.com',
            'type' => 'admin',
            'affiliate_link' => url(env('APP_URL')).'?ref=1'
        ]);
        User::create([
            'promote_id' => 1,
            'first_name' => 'Client',
            'username' => 'client',
            'email' => 'client@client.com',
            'password' => Hash::make('client'),
            'payment_email' => 'client@client.com',
            'affiliate_link' => url(env('APP_URL')).'?ref=2'
        ]);
        
    }
}
