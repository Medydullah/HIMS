<?php

use App\District;
use Illuminate\Database\Seeder;

class DistrictTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*
        *Seeding Arusha districts............
        */
        $district = new District();
        $district->name = 'Arusha';
        $district->region_id = '1';
        $district->save();

        $district = new District();
        $district->name = 'Arusha City Council';
        $district->region_id = '1';
        $district->save();

        $district = new District();
        $district->name = 'Karatu';
        $district->region_id = '1';
        $district->save();

        $district = new District();
        $district->name = 'Longido';
        $district->region_id = '1';
        $district->save();

        $district = new District();
        $district->name = 'Meru';
        $district->region_id = '1';
        $district->save();

        $district = new District();
        $district->name = 'Monduli';
        $district->region_id = '1';
        $district->save();

        $district = new District();
        $district->name = 'Ngorongoro';
        $district->region_id = '1';
        $district->save();


        /*
         *Seeding Dar Es Salaam districts
         */
        $district = new District();
        $district->name = 'Ilala';
        $district->region_id = '2';
        $district->save();

        $district = new District();
        $district->name = 'Kigamboni';
        $district->region_id = '2';
        $district->save();

        $district = new District();
        $district->name = 'Kinondoni';
        $district->region_id = '2';
        $district->save();

        $district = new District();
        $district->name = 'Temeke';
        $district->region_id = '2';
        $district->save();

        $district = new District();
        $district->name = 'Ubungo';
        $district->region_id = '2';
        $district->save();


        /*
         *Seeding Dodoma districts
         */
        $district = new District();
        $district->name = 'Bahi';
        $district->region_id = '3';
        $district->save();

        $district = new District();
        $district->name = 'Chamwino';
        $district->region_id = '3';
        $district->save();

        $district = new District();
        $district->name = 'Chemba';
        $district->region_id = '3';
        $district->save();

        $district = new District();
        $district->name = 'Dodoma';
        $district->region_id = '3';
        $district->save();

        $district = new District();
        $district->name = 'Kondoa';
        $district->region_id = '3';
        $district->save();

        $district = new District();
        $district->name = 'Kongwa';
        $district->region_id = '3';
        $district->save();

        $district = new District();
        $district->name = 'Mpwapwa';
        $district->region_id = '3';
        $district->save();


        /*
         *Seeding Geita districts
         */

        $district = new District();
        $district->name = 'Bukombe';
        $district->region_id = '4';
        $district->save();

        $district = new District();
        $district->name = 'Chato';
        $district->region_id = '4';
        $district->save();

        $district = new District();
        $district->name = 'Geita Town';
        $district->region_id = '4';
        $district->save();

        $district = new District();
        $district->name = 'Mbogwe';
        $district->region_id = '4';
        $district->save();

        $district = new District();
        $district->name = 'Nyang\'hwale';
        $district->region_id = '4';
        $district->save();


        /*
         *Seeding Iringa districts
         */

        $district = new District();
        $district->name = 'Iringa';
        $district->region_id = '5';
        $district->save();

        $district = new District();
        $district->name = 'Iringa Municipal';
        $district->region_id = '5';
        $district->save();

        $district = new District();
        $district->name = 'Kilolo';
        $district->region_id = '5';
        $district->save();

        $district = new District();
        $district->name = 'Mafinga';
        $district->region_id = '5';
        $district->save();

        $district = new District();
        $district->name = 'Mufindi';
        $district->region_id = '5';
        $district->save();


        /*
        *Seeding Kagera districts
        */
        $district = new District();
        $district->name = 'Biharamulo';
        $district->region_id = '6';
        $district->save();

        $district = new District();
        $district->name = 'Bukoba';
        $district->region_id = '6';
        $district->save();

        $district = new District();
        $district->name = 'Bukoba Municipal';
        $district->region_id = '6';
        $district->save();

        $district = new District();
        $district->name = 'Karagwe';
        $district->region_id = '6';
        $district->save();

        $district = new District();
        $district->name = 'Kyerwa';
        $district->region_id = '6';
        $district->save();

        $district = new District();
        $district->name = 'Missenyi';
        $district->region_id = '6';
        $district->save();

        $district = new District();
        $district->name = 'Muleba';
        $district->region_id = '6';
        $district->save();

        $district = new District();
        $district->name = 'Ngara';
        $district->region_id = '6';
        $district->save();

        /*
         *Seeding Katavi districts
         */
        $district = new District();
        $district->name = 'Mlele';
        $district->region_id = '7';
        $district->save();

        $district = new District();
        $district->name = 'Mpanda';
        $district->region_id = '7';
        $district->save();

        $district = new District();
        $district->name = 'Mpanda Town';
        $district->region_id = '7';
        $district->save();

        /*
         *Seeding Kigoma districts
         */

        $district = new District();
        $district->name = 'Buhigwe';
        $district->region_id = '8';
        $district->save();

        $district = new District();
        $district->name = 'Kakonko';
        $district->region_id = '8';
        $district->save();

        $district = new District();
        $district->name = 'Kasulu';
        $district->region_id = '8';
        $district->save();

        $district = new District();
        $district->name = 'Kasulu Town';
        $district->region_id = '8';
        $district->save();

        $district = new District();
        $district->name = 'Kibondo';
        $district->region_id = '8';
        $district->save();

        $district = new District();
        $district->name = 'Kigoma District';
        $district->region_id = '8';
        $district->save();

        $district = new District();
        $district->name = 'Kigoma-Ujiji';
        $district->region_id = '8';
        $district->save();

        $district = new District();
        $district->name = 'Uvinza';
        $district->region_id = '8';
        $district->save();


        /*
        *Seeding Kilimanjaro districts
        */

        $district = new District();
        $district->name = 'Hai';
        $district->region_id = '9';
        $district->save();

        $district = new District();
        $district->name = 'Moshi';
        $district->region_id = '9';
        $district->save();

        $district = new District();
        $district->name = 'Moshi';
        $district->region_id = '9';
        $district->save();

        $district = new District();
        $district->name = 'Mwanga';
        $district->region_id = '9';
        $district->save();

        $district = new District();
        $district->name = 'Rombo';
        $district->region_id = '9';
        $district->save();

        $district = new District();
        $district->name = 'Same';
        $district->region_id = '9';
        $district->save();

        $district = new District();
        $district->name = 'Siha';
        $district->region_id = '9';
        $district->save();


        /*
        *Seeding Lindi districts
        */
        $district = new District();
        $district->name = 'Kilwa';
        $district->region_id = '10';
        $district->save();

        $district = new District();
        $district->name = 'Lindi District';
        $district->region_id = '10';
        $district->save();

        $district = new District();
        $district->name = 'Lindi Municipal';
        $district->region_id = '10';
        $district->save();

        $district = new District();
        $district->name = 'Liwale';
        $district->region_id = '10';
        $district->save();

        $district = new District();
        $district->name = 'Nachingwea';
        $district->region_id = '10';
        $district->save();

        $district = new District();
        $district->name = 'Ruangwa';
        $district->region_id = '10';
        $district->save();

        /*
        *Seeding Manyara districts
        */

        $district = new District();
        $district->name = 'Babati Town';
        $district->region_id = '11';
        $district->save();

        $district = new District();
        $district->name = 'Babati';
        $district->region_id = '11';
        $district->save();

        $district = new District();
        $district->name = 'Hanang';
        $district->region_id = '11';
        $district->save();

        $district = new District();
        $district->name = 'Kiteto';
        $district->region_id = '11';
        $district->save();

        $district = new District();
        $district->name = 'Mbulu';
        $district->region_id = '11';
        $district->save();

        $district = new District();
        $district->name = 'Simanjiro';
        $district->region_id = '11';
        $district->save();

        /*
         *Seeding Mara Districts..........
         */

        $district = new District();
        $district->name = 'Bunda';
        $district->region_id = '12';
        $district->save();

        $district = new District();
        $district->name = 'Butiama';
        $district->region_id = '12';
        $district->save();

        $district = new District();
        $district->name = 'Musoma';
        $district->region_id = '12';
        $district->save();

        $district = new District();
        $district->name = 'Musoma Municipal';
        $district->region_id = '12';
        $district->save();

        $district = new District();
        $district->name = 'Rorya';
        $district->region_id = '12';
        $district->save();

        $district = new District();
        $district->name = 'Serengeti';
        $district->region_id = '12';
        $district->save();

        $district = new District();
        $district->name = 'Tarime';
        $district->region_id = '12';
        $district->save();

        /*
        *Seeding Mbeya Districts..........
        */

        $district = new District();
        $district->name = 'Busokelo';
        $district->region_id = '13';
        $district->save();

        $district = new District();
        $district->name = 'Chunya';
        $district->region_id = '13';
        $district->save();

        $district = new District();
        $district->name = 'Kyela';
        $district->region_id = '13';
        $district->save();

        $district = new District();
        $district->name = 'Mbarali';
        $district->region_id = '13';
        $district->save();

        $district = new District();
        $district->name = 'Mbeya City';
        $district->region_id = '13';
        $district->save();

        $district = new District();
        $district->name = 'Mbeya District';
        $district->region_id = '13';
        $district->save();

        $district = new District();
        $district->name = 'Rungwe';
        $district->region_id = '13';
        $district->save();


        /*
        *Seeding Morogoro Districts..........
        */
        $district = new District();
        $district->name = 'Gairo';
        $district->region_id = '14';
        $district->save();

        $district = new District();
        $district->name = 'Kilombero';
        $district->region_id = '14';
        $district->save();

        $district = new District();
        $district->name = 'Kilosa';
        $district->region_id = '14';
        $district->save();

        $district = new District();
        $district->name = 'Morogoro District';
        $district->region_id = '14';
        $district->save();

        $district = new District();
        $district->name = 'Morogoro Municipal';
        $district->region_id = '14';
        $district->save();

        $district = new District();
        $district->name = 'Mvomero';
        $district->region_id = '14';
        $district->save();

        $district = new District();
        $district->name = 'Ulanga';
    }
}
