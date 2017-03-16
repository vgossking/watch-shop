<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
       /* DB::table('watches')->insert([
            'name' => 'FAF05001W0',
            'shape' => 'round',
            'size' => 40,
            'bezel_material' => 'stainless steel',
            'band_material' => 'leather',
            'quantity' => 20,
            'price' => 120.5,
            'brand_id' => 1
        ]);*/

        DB::table('users')->insert([
            'first_name' => 'Vũ',
            'last_name' => 'Vương',
            'email' => 'minhvu.261294@gmail.com',
            'password' => bcrypt('babyno1994'),
            'role_id' => 1,
            'is_active' => true
        ]);

        DB::table('roles')->insert([
            'name' => 'administrator'
        ]);
        DB::table('roles')->insert([
            'name' => 'customer'
        ]);
        DB::table('roles')->insert([
            'name' => 'vip'
        ]);

        DB::table('categories')->insert([
            'name' => 'Men'
        ]);

        DB::table('categories')->insert([
            'name' => 'Women'
        ]);

        DB::table('categories')->insert([
            'name' => 'Sport'
        ]);

        DB::table('categories')->insert([
            'name' => 'Elegant'
        ]);

        DB::table('brands')->insert([
            'name' => 'orient',
            'parent_id' => 0
        ]);

        DB::table('brands')->insert([
            'name' => 'tissot',
            'parent_id' => 0
        ]);

        DB::table('brands')->insert([
            'name' => 'cadino',
            'parent_id' => 0
        ]);

        DB::table('brands')->insert([
            'name' => 'rolex',
            'parent_id' => 0
        ]);

        DB::table('brands')->insert([
            'name' => 'roamer',
            'parent_id' => 0
        ]);

        $watches = factory(App\Watch::class, 500)->create()->each(function ($u) {
            $u->categories()->attach([1, 3]);
        });;
        factory(App\User::class, 500)->create();
        factory(App\Brand::class, 20)->create();
    }
}
