<?php

namespace Database\Seeders;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->name = 'Vaishnavi K Shylaji';
        $user->email = 'vaishnavikshylaji33@gmail.com';
        $user->dob = Carbon::parse('22-05-1997');
        $user->password = Hash::make('password');
        $user->save();

        $user = new User();
        $user->name = 'Athira K R';
        $user->email = 'aathira@gmail.com';
        $user->dob = Carbon::parse('22-05-1997');
        $user->password = Hash::make('password');
        $user->save();

        $user = new User();
        $user->name = 'Ayana P C';
        $user->email = 'ayana@gmail.com';
        $user->dob = Carbon::parse('22-05-1997');
        $user->password = Hash::make('password');
        $user->save();
    }
}
