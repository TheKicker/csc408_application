<?php

use Illuminate\Database\Seeder;
use App\User;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();
        
        User::create(array(
            'name' => 'Scott Madeira',
            'email' => 'scottmadeira@gmail.com',
            'password' => Hash::make('asdfasdf'),
            'isAdmin' => 1,
        ));

        User::create(array(
            'name' => 'Cav Lemasters',
            'email' => 'cav.lemasters@outlook.com',
            'password' => Hash::make('Penguins'),
            'isAdmin' => 1,
        ));

        User::create(array(
            'name' => 'Haylee Heaton',
            'email' => 'haylee.heaton@geneva.edu',
            'password' => Hash::make('Geneva2019'),
            'isAdmin' => 0,
        ));

        User::create(array(
            'name' => 'Donald Trump',
            'email' => 'TrumpDaddy@WhiteHouse.com',
            'password' => Hash::make('HillarySucks'),
            'isAdmin' => 0,
        ));

        User::create(array(
            'name' => 'Sydney Crosby',
            'email' => 'SydTheKid@Penguins.com',
            'password' => Hash::make('LetsGoPens2019'),
            'isAdmin' => 0,
        ));

        User::create(array(
            'name' => 'Aubrey Drake Graham',
            'email' => 'Drake@GodsPlan.com',
            'password' => Hash::make('Scorpion2018'),
            'isAdmin' => 0,
        ));

        User::create(array(
            'name' => 'Julius Caesar',
            'email' => 'Caesar@HolyRomanEmpire.com',
            'password' => Hash::make('HelpIveBeenStabbed'),
            'isAdmin' => 0,
        ));

        User::create(array(
            'name' => 'Thomas Luther Bryan',
            'email' => 'Luke.Bryan@Country.com',
            'password' => Hash::make('KickTheDustUp'),
            'isAdmin' => 0,
        ));

        User::create(array(
            'name' => 'Elon Musk',
            'email' => 'Musk@Tesla.com',
            'password' => Hash::make('Spaceman'),
            'isAdmin' => 0,
        ));

        User::create(array(
            'name' => 'Jeff Bezos',
            'email' => 'Jeffy@Amazon.com',
            'password' => Hash::make('IUsedToSellBooks'),
            'isAdmin' => 0,
        ));

        User::create(array(
            'name' => 'Michael Scott',
            'email' => 'Scott@DunderMifflin.com',
            'password' => Hash::make('Password1234'),
            'isAdmin' => 0,
        ));

        User::create(array(
            'name' => 'Jaxon Teller',
            'email' => 'Jax@SAMCROW.com',
            'password' => Hash::make('RedwoodOriginal'),
            'isAdmin' => 0,
        ));

        User::create(array(
            'name' => 'Don Draper',
            'email' => 'Draper@SterlingCooper.com',
            'password' => Hash::make('MadisonAve'),
            'isAdmin' => 0,
        ));

        User::create(array(
            'name' => 'Don Vito Corleone',
            'email' => 'Godfather@LegalEnterprises.com',
            'password' => Hash::make('TheGreatestMobBossEver'),
            'isAdmin' => 0,
        ));

        User::create(array(
            'name' => 'Ryad Ramirez Al-Hassar',
            'email' => 'Jackal@RainbowSix.com',
            'password' => Hash::make('StandStillIAmComing'),
            'isAdmin' => 0,
        ));

        User::create(array(
            'name' => 'Tommy Smith',
            'email' => 'tsmith90210@ggmail.com',
            'password' => Hash::make('asdfasdf'),
            'isAdmin' => 0,
        ));
    
        User::create(array(
            'name' => 'Juju Dropped-Ball',
            'email' => 'juju@ggmail.com',
            'password' => Hash::make('qwerqwer'),
            'isAdmin' => 0,
        ));
    }
}
