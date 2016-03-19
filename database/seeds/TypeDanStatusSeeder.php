<?php

use Illuminate\Database\Seeder;

class TypeDanStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Type = ["Pemesanan","Pembayaran","Pengiriman"];
        array_map(function ($name){
            $now = date('Y-m-d H:i:s',strtotime('now'));
            DB::table('Type')->insert([
                    'name'=>$name,
                    'created_at'=>$now,
                    'updated_at'=>$now
                ]);
        },$Type);
        
        $StatusPesan = ["Baru","Dipesan","Ditutup","Return","Batal"];
        array_map(function ($name){
            $now = date('Y-m-d H:i:s',strtotime('now'));
            DB::table('Status')->insert([
                    'code'=>substr($name.3),
                    'name'=>$name,
                    'description'=>"Status untuk pemesanan",
                    'type' => 1,
                    'created_at'=>$now,
                    'updated_at'=>$now
                ]);
        },$StatusPesan);
        
        $StatusBayar = ["Belum di Bayar","Sebagian","Selesai","Return","Batal"];
        array_map(function ($name){
            $now = date('Y-m-d H:i:s',strtotime('now'));
            DB::table('Status')->insert([
                    'code'=>substr($name.3),
                    'name'=>$name,
                    'description'=>"Status untuk pembayaran",
                    'type' => 1,
                    'created_at'=>$now,
                    'updated_at'=>$now
                ]);
        },$StatusBayar);
        
        $StatusKirim = ["Belum di Kirim","Sedang di Kirim","Sudah sampai tujuan","Return","Batal"];
        array_map(function ($name){
            $now = date('Y-m-d H:i:s',strtotime('now'));
            DB::table('Status')->insert([
                    'code'=>substr($name.3),
                    'name'=>$name,
                    'description'=>"Status untuk pengiriman",
                    'type' => 1,
                    'created_at'=>$now,
                    'updated_at'=>$now
                ]);
        },$StatusKirim);
    }
}
