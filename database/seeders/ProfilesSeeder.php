<?php

namespace Database\Seeders;

use App\Models\profiles;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProfilesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = User::all();
        foreach ($users as $user){
            if (rand(0,4)){
                $profile = profiles::factory()->make();
                $profile->user()->associate($user);
                $profile->save();
            }
        }
    }
}
