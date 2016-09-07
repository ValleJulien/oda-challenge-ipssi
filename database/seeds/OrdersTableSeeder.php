<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class OrdersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $user_ids = DB::table('datas')->select('user_id')->get();

        foreach($user_ids as $user_id){
            DB::table('orders')->insert([
                'vat' => 20,
                'status' => 1,
                'user_id' => $user_id->user_id,
                'offer_id' => 2,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'price' => '20.0'
            ]);
        }
    }
}