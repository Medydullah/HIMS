<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class PeopleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

 //       $user = new User();
//       $user->email = "armando@gmail.com";
//       $user->phone = "07633286653";
//       $user->dmw_token= "U2019-003-TGA5";
//
//       $user->name = "Braylon Armando";
//       $user->gender = "Male";
//       $user->dob = "19-01-31";
//
//       $user->password = Hash::make("zxcvbnm");
//       $user->save();

        $user = new User();
        $user->email = "medy@gmail.com";
        $user->phone = "0686100150p";
        $user->dmw_token= "M2020-003-TGA6";

        $user->name = "Mohamed A Nassoro";
        $user->gender = "Male";
        $user->dob = "1996-01-12";

        $user->password = Hash::make("zxcvbnm");
        $user->save();

    }
}
