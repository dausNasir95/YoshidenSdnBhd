<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::truncate(); // Optional: clear previous data

        $products = [
            [
                'product_name' => 'ICT Test Fixture',
                'description' => 'Reliable in-circuit testing fixture for PCBA validation.',
                'category' => 'Test Fixtures',
                'image_url' => 'images/products/ict_fixture.jpg',
                'spec_sheet_url' => null,
                'price' => 1500.00,
                'is_featured' => true,
                'specifications' => json_encode([
                    'Pins' => '128',
                    'Voltage' => '5V',
                    'Material' => 'Aluminum Frame',
                ]),
            ],
            [
                'product_name' => 'TRIMECH Heat Sealing Machine',
                'description' => 'Precision heat bonding for flexible electronics.',
                'category' => 'Machines',
                'image_url' => 'images/products/heat_sealer.jpg',
                'spec_sheet_url' => null,
                'price' => 3200.00,
                'is_featured' => true,
                'specifications' => json_encode([
                    'Temp Range' => '50°C - 300°C',
                    'Power' => '220V',
                    'Control' => 'Digital Interface',
                ]),
            ],
            [
                'product_name' => 'Vanguard Tape & Reel System',
                'description' => 'Automated component packaging solution.',
                'category' => 'Packaging Equipment',
                'image_url' => 'images/products/tape_reel.jpg',
                'spec_sheet_url' => null,
                'price' => 2800.00,
                'is_featured' => false,
                'specifications' => json_encode([
                    'Speed' => '120 components/min',
                    'Modes' => 'Manual / Auto',
                ]),
            ],
            [
                'product_name' => 'HIOS Electric Screwdriver',
                'description' => 'High precision torque-controlled screwdrivers.',
                'category' => 'Tools',
                'image_url' => 'images/products/screwdriver.jpg',
                'spec_sheet_url' => null,
                'price' => 499.99,
                'is_featured' => true,
                'specifications' => json_encode([
                    'Torque' => '0.5 - 2.5 Nm',
                    'Speed' => '1000 RPM',
                ]),
            ],
            [
                'product_name' => 'Custom PCB Repair Service',
                'description' => 'Professional repair for single to multi-layer PCBs.',
                'category' => 'Services',
                'image_url' => 'images/products/pcb_repair.jpg',
                'spec_sheet_url' => null,
                'price' => null,
                'is_featured' => false,
                'specifications' => json_encode([
                    'Layers Supported' => 'Up to 8',
                    'Turnaround Time' => '3-5 Days',
                ]),
            ],
        ];

        foreach ($products as $product) {
            Product::create($product);
        }
    }
}
