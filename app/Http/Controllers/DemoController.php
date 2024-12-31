<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class DemoController extends Controller
{
    function DemoAction(){
     $results = DB::table('lots')->insert(
          [
            ['name' => 'Smartphone', 'category' => 'Electronics', 'price' => 500, 'stock_quantity' => 50, 'description' => 'Latest model smartphone with advanced features.'],
            ['name' => 'Laptop', 'category' => 'Electronics', 'price' => 1200, 'stock_quantity' => 30, 'description' => 'Lightweight laptop with long battery life.'],
            ['name' => 'Air Conditioner', 'category' => 'Appliances', 'price' => 350, 'stock_quantity' => 20, 'description' => 'Energy-efficient air conditioner with smart controls.'],
            ['name' => 'Vacuum Cleaner', 'category' => 'Appliances', 'price' => 120, 'stock_quantity' => 80, 'description' => 'Powerful vacuum cleaner for home use.'],
            ['name' => 'Smartwatch', 'category' => 'Electronics', 'price' => 200, 'stock_quantity' => 60, 'description' => 'Wearable device with fitness tracking features.'],
            ['name' => 'Headphones', 'category' => 'Electronics', 'price' => 80, 'stock_quantity' => 100, 'description' => 'Noise-canceling over-ear headphones.'],
            ['name' => 'Refrigerator', 'category' => 'Appliances', 'price' => 900, 'stock_quantity' => 10, 'description' => 'Large refrigerator with freezer compartment.'],
            ['name' => 'Blender', 'category' => 'Appliances', 'price' => 45, 'stock_quantity' => 90, 'description' => 'Multi-speed blender for smoothies and shakes.'],
            ['name' => 'Gaming Chair', 'category' => 'Furniture', 'price' => 250, 'stock_quantity' => 40, 'description' => 'Ergonomic gaming chair with lumbar support.'],
            ['name' => 'Office Desk', 'category' => 'Furniture', 'price' => 300, 'stock_quantity' => 25, 'description' => 'Modern office desk with storage compartments.'],
            ['name' => 'LED TV', 'category' => 'Electronics', 'price' => 700, 'stock_quantity' => 15, 'description' => 'Ultra HD LED TV with smart features.'],
            ['name' => 'Microwave Oven', 'category' => 'Appliances', 'price' => 150, 'stock_quantity' => 35, 'description' => 'Compact microwave oven with quick cooking options.'],
            ['name' => 'Electric Kettle', 'category' => 'Appliances', 'price' => 30, 'stock_quantity' => 120, 'description' => 'Fast-boiling electric kettle with auto shut-off.'],
            ['name' => 'Bluetooth Speaker', 'category' => 'Electronics', 'price' => 60, 'stock_quantity' => 75, 'description' => 'Portable Bluetooth speaker with deep bass.'],
            ['name' => 'Table Lamp', 'category' => 'Furniture', 'price' => 25, 'stock_quantity' => 150, 'description' => 'LED table lamp with adjustable brightness.'],
            ['name' => 'Bookshelf', 'category' => 'Furniture', 'price' => 150, 'stock_quantity' => 20, 'description' => 'Stylish wooden bookshelf with multiple shelves.'],
            ['name' => 'Wall Clock', 'category' => 'Decor', 'price' => 35, 'stock_quantity' => 50, 'description' => 'Classic wall clock with silent movement.'],
            ['name' => 'Dumbbell Set', 'category' => 'Fitness', 'price' => 80, 'stock_quantity' => 30, 'description' => 'Adjustable dumbbell set for weight training.'],
            ['name' => 'Yoga Mat', 'category' => 'Fitness', 'price' => 20, 'stock_quantity' => 100, 'description' => 'Non-slip yoga mat with extra cushioning.'],
            ['name' => 'Running Shoes', 'category' => 'Fashion', 'price' => 100, 'stock_quantity' => 70, 'description' => 'Comfortable running shoes with shock absorption.'],
            ['name' => 'Backpack', 'category' => 'Fashion', 'price' => 50, 'stock_quantity' => 80, 'description' => 'Durable backpack with multiple compartments.'],
            ['name' => 'Wristwatch', 'category' => 'Fashion', 'price' => 150, 'stock_quantity' => 25, 'description' => 'Elegant wristwatch with leather strap.'],
            ['name' => 'Sunglasses', 'category' => 'Fashion', 'price' => 90, 'stock_quantity' => 40, 'description' => 'Stylish sunglasses with UV protection.'],
            ['name' => 'Coffee Maker', 'category' => 'Appliances', 'price' => 100, 'stock_quantity' => 50, 'description' => 'Automatic coffee maker with brew strength control.'],
            ['name' => 'Camera', 'category' => 'Electronics', 'price' => 800, 'stock_quantity' => 15, 'description' => 'Digital camera with high zoom capability.'],
            ['name' => 'Tripod', 'category' => 'Electronics', 'price' => 50, 'stock_quantity' => 70, 'description' => 'Adjustable tripod for cameras and smartphones.'],
            ['name' => 'Water Bottle', 'category' => 'Fitness', 'price' => 15, 'stock_quantity' => 120, 'description' => 'Reusable water bottle with insulation.'],
            ['name' => 'Notebook', 'category' => 'Stationery', 'price' => 5, 'stock_quantity' => 200, 'description' => 'Spiral notebook with 200 pages.'],
            ['name' => 'Pen Set', 'category' => 'Stationery', 'price' => 10, 'stock_quantity' => 150, 'description' => 'Pack of 10 ballpoint pens.'],
            ['name' => 'Desk Organizer', 'category' => 'Furniture', 'price' => 20, 'stock_quantity' => 60, 'description' => 'Compact desk organizer with multiple compartments.'],
            ['name' => 'Gaming Console', 'category' => 'Electronics', 'price' => 500, 'stock_quantity' => 20, 'description' => 'Next-gen gaming console with 4K support.'],
            ['name' => 'Action Camera', 'category' => 'Electronics', 'price' => 300, 'stock_quantity' => 25, 'description' => 'Compact action camera for adventures.'],
            ['name' => 'Electric Scooter', 'category' => 'Vehicles', 'price' => 750, 'stock_quantity' => 10, 'description' => 'Eco-friendly electric scooter for daily commutes.'],
            ['name' => 'Portable Charger', 'category' => 'Accessories', 'price' => 40, 'stock_quantity' => 100, 'description' => 'High-capacity portable charger for devices.'],
            ['name' => 'Smart Doorbell', 'category' => 'Home Security', 'price' => 150, 'stock_quantity' => 35, 'description' => 'Smart doorbell with video recording and notifications.'],
            ['name' => 'Electric Drill', 'category' => 'Tools', 'price' => 120, 'stock_quantity' => 50, 'description' => 'Cordless electric drill for DIY projects.'],
            ['name' => 'Garden Chair', 'category' => 'Furniture', 'price' => 60, 'stock_quantity' => 40, 'description' => 'Durable outdoor chair for garden use.'],
            ['name' => 'Wall Shelf', 'category' => 'Furniture', 'price' => 80, 'stock_quantity' => 30, 'description' => 'Modern wall-mounted shelf for storage and decor.'],
            ['name' => 'Wireless Earbuds', 'category' => 'Electronics', 'price' => 120, 'stock_quantity' => 70, 'description' => 'Compact wireless earbuds with noise cancellation.'],
            ['name' => 'Digital Weighing Scale', 'category' => 'Fitness', 'price' => 35, 'stock_quantity' => 80, 'description' => 'Digital scale with accurate weight measurement.']

          ]
            
        );
        return $results;
    }
}
