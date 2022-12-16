<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $inputan['name'] = 'Muhammad Noval Ramadhani';
        $inputan['email'] = 'novalramadan0@gmail.com';//ganti pake emailmu
        $inputan['password'] = Hash::make('123342');//passwordnya 123258
        $inputan['phone'] = '08976479990';
        $inputan['alamat'] = 'Sumber Mlaten Rt 03 Rw 13';
        $inputan['role'] = 'admin';//kita akan membuat akun atau users in dengan role admin
        User::create($inputan);
    }
}
