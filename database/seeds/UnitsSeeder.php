<?php

use App\Unit;
use Illuminate\Database\Seeder;

class UnitsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $satuan = [
            [
                'satuan' => 'Unit',
            ],
            [
                'satuan' => 'Buah',
            ],
            [
                'satuan' => 'Pasang',
            ],
            [
                'satuan' => 'Lembar',
            ],
            [
                'satuan' => 'Keping',
            ],
            [
                'satuan' => 'Batang',
            ],
            [
                'satuan' => 'Bungkus',
            ],
            [
                'satuan' => 'Potong',
            ],
            [
                'satuan' => 'Tablet',
            ],
            [
                'satuan' => 'Ekor',
            ],
            [
                'satuan' => 'Rim',
            ],
            [
                'satuan' => 'Karat',
            ],
            [
                'satuan' => 'Botol',
            ],
            [
                'satuan' => 'Butir',
            ],
            [
                'satuan' => 'Roll',
            ],
            [
                'satuan' => 'Dus',
            ],
            [
                'satuan' => 'Karung',
            ],
            [
                'satuan' => 'Koli',
            ],
            [
                'satuan' => 'Sak',
            ],
            [
                'satuan' => 'Bal',
            ],
            [
                'satuan' => 'Kaleng',
            ],
            [
                'satuan' => 'Set',
            ],
            [
                'satuan' => 'Slop',
            ],
            [
                'satuan' => 'Gulung',
            ],
            [
                'satuan' => 'Ton',
            ],
            [
                'satuan' => 'KiloGram',
            ],
            [
                'satuan' => 'Gram',
            ],
            [
                'satuan' => 'MiliGram',
            ],
            [
                'satuan' => 'Meter',
            ],
            [
                'satuan' => 'M2',
            ],
            [
                'satuan' => 'M3',
            ],
            [
                'satuan' => 'Inchi',
            ],
            [
                'satuan' => 'Cc',
            ],
            [
                'satuan' => 'Liter',
            ]
        ];

        Unit::insert($satuan);
    }
}
