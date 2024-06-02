<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Listing;
use App\Models\Category;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        User::create([
            'name' => 'Nadhif Fauzil Adhim',
            'email' => 'nadya15a3@gmail.com',
            'password'=> 'test',
            'username'=> 'nadhif.fa',
            'phone'=>'+6285727785062'
           ]);

        User::factory(10)->create();

       Category::create([
        'name' => 'Kost',
        'slug' => 'kost'
       ]);

       Category::create([
        'name' => 'Kontrakan',
        'slug' => 'kontrakan'
       ]);

       Category::create([
        'name' => 'Paviliun',
        'slug' => 'paviliun'
       ]);


       Listing::factory(50)->create();

    //    Listing::create([
    //     'placename'=>'Kost UGM',
    //     'category_id' => 1,
    //     'user_id' => 1,
    //     'slug'=>'kost-ugm',
    //     'price'=> 1500000,
    //     'location'=>' Jalan Kaliurang Km.0,5 Blok D No. 69B, Sendowo, Sinduadi, Kec. Mlati, Kabupaten Sleman, Daerah Istimewa Yogyakarta 55281',
    //     'available'=> 10,
    //     'facility'=> 'Kost Bebas 24 Jam, Boleh bawa cewe dosa ditanggung sendiri, Kamar mandi luar, (di masjid ), free wifi, free air, free Listrik'
    //    ]);

    //    Listing::create([
    //     'placename'=>'Kost Putra Hijau',
    //     'category_id' => 1,
    //     'user_id' => 4,
    //     'slug'=>'kost-putra-hijau',
    //     'price'=> 500000,
    //     'location'=>' Jl. Mancasan Indah III No.6, Ngringin, Condongcatur, Kec. Depok, Kabupaten Sleman, Daerah Istimewa Yogyakarta 55283',
    //     'available'=> 2,
    //     'facility'=> 'Kost Putra Rumah Hijau Area Strategis Dekat Amikom, UPN, UII, YKPN, Atmajaya Dekat Halte Trans, Hartono Mall dll Fasilitas Listrik, Air, Wifi,Iuran Sampah Untuk saat ini sudah full ya kamarnya  *Mohon berhati2, kami pihak kost rumah hijau tidak pernah meminta dp utk booking kost'
    //    ]);
        
    //    Listing::create([
    //     'placename'=>'Kost Putra Permata',
    //     'category_id' => 1,
    //     'user_id' => 5,
    //     'slug'=>'kost-putra-permata',
    //     'price'=> 1200000,
    //     'location'=>'Demakan Lama Tegalrejo RT 46 RW 07 No 718A, Tegalrejo, Kec. Tegalrejo, Kota Yogyakarta, Daerah Istimewa Yogyakarta 55244',
    //     'available'=> 5,
    //     'facility'=> 'Kost Bebas'
    //    ]);

    //    Listing::create([
    //     'placename'=>'Paviliun Concat',
    //     'category_id' => 3,
    //     'user_id' => 7,
    //     'slug'=>'paviliun-concat',
    //     'price'=> 1500000,
    //     'location'=>' Jl. Lely IV No.200, Perumnas Condong Catur, Condongcatur, Kec. Depok, Kabupaten Sleman, Daerah Istimewa Yogyakarta 55281',
    //     'available'=> 10,
    //     'facility'=> 'Kost Strict, tau udah cape lama ngetik ke migrate lagi hedehh pokonya ini tentang fasilitas dari Paviliunnya',
    //     'imagepath'=> 'https://dynamic-media-cdn.tripadvisor.com/media/photo-o/0c/5a/41/28/getlstd-property-photo.jpg '
    //    ])

    }
}
