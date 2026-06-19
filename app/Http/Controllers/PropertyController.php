<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class PropertyController extends Controller
{
    public function index(): View
    {
        return view('pages.properties', [
            'properties' => self::properties(),
        ]);
    }

    public function show(int $id): View
    {
        $property = collect(self::properties())->firstWhere('id', $id);

        abort_if(! $property, 404);

        return view('pages.property-details', [
            'property' => $property,
        ]);
    }

    public static function latest(int $count = 5): array
    {
        return array_slice(self::properties(), 0, $count);
    }

    public static function properties(): array
    {
        return [
            [
                'id' => 1,
                'name' => 'Skyline Heights Apartment',
                'type' => 'Apartment',
                'price' => '$420,000',
                'status' => 'Available',
                'description' => 'A bright city apartment with an open living area, private balcony, modern kitchen, and quick access to business districts and lifestyle amenities.',
                'image' => 'https://images.unsplash.com/photo-1502672260266-1c1ef2d93688?auto=format&fit=crop&w=1200&q=80',
                'gallery' => [
                    'https://images.unsplash.com/photo-1502672260266-1c1ef2d93688?auto=format&fit=crop&w=1200&q=80',
                    'https://images.unsplash.com/photo-1560448204-e02f11c3d0e2?auto=format&fit=crop&w=1200&q=80',
                    'https://images.unsplash.com/photo-1560448075-bb485b067938?auto=format&fit=crop&w=1200&q=80',
                ],
            ],
            [
                'id' => 2,
                'name' => 'Palm Grove Villa',
                'type' => 'Villa',
                'price' => '$1,250,000',
                'status' => 'Sold',
                'description' => 'A private villa with landscaped gardens, generous reception spaces, a resort-style pool, and refined finishes throughout every room.',
                'image' => 'https://images.unsplash.com/photo-1613977257363-707ba9348227?auto=format&fit=crop&w=1200&q=80',
                'gallery' => [
                    'https://images.unsplash.com/photo-1613977257363-707ba9348227?auto=format&fit=crop&w=1200&q=80',
                    'https://images.unsplash.com/photo-1613977257592-4871e5fcd7c4?auto=format&fit=crop&w=1200&q=80',
                    'https://images.unsplash.com/photo-1600596542815-ffad4c1539a9?auto=format&fit=crop&w=1200&q=80',
                ],
            ],
            [
                'id' => 3,
                'name' => 'Central Business Office',
                'type' => 'Office',
                'price' => '$780,000',
                'status' => 'Reserved',
                'description' => 'A polished office floor designed for growing teams, featuring meeting rooms, flexible work areas, premium building services, and city views.',
                'image' => 'https://images.unsplash.com/photo-1497366754035-f200968a6e72?auto=format&fit=crop&w=1200&q=80',
                'gallery' => [
                    'https://images.unsplash.com/photo-1497366754035-f200968a6e72?auto=format&fit=crop&w=1200&q=80',
                    'https://images.unsplash.com/photo-1497366811353-6870744d04b2?auto=format&fit=crop&w=1200&q=80',
                    'https://images.unsplash.com/photo-1497366216548-37526070297c?auto=format&fit=crop&w=1200&q=80',
                ],
            ],
            [
                'id' => 4,
                'name' => 'Marina View Apartment',
                'type' => 'Apartment',
                'price' => '$610,000',
                'status' => 'Available',
                'description' => 'A waterfront apartment with floor-to-ceiling windows, elegant bedrooms, secure parking, and panoramic marina views.',
                'image' => 'https://images.unsplash.com/photo-1522708323590-d24dbb6b0267?auto=format&fit=crop&w=1200&q=80',
                'gallery' => [
                    'https://images.unsplash.com/photo-1522708323590-d24dbb6b0267?auto=format&fit=crop&w=1200&q=80',
                    'https://images.unsplash.com/photo-1560440021-33f9b867899d?auto=format&fit=crop&w=1200&q=80',
                    'https://images.unsplash.com/photo-1484154218962-a197022b5858?auto=format&fit=crop&w=1200&q=80',
                ],
            ],
            [
                'id' => 5,
                'name' => 'Garden Estate Villa',
                'type' => 'Villa',
                'price' => '$980,000',
                'status' => 'Reserved',
                'description' => 'A family-focused villa with a calm garden setting, spacious bedrooms, a chef-ready kitchen, and multiple outdoor entertaining zones.',
                'image' => 'https://images.unsplash.com/photo-1600585154340-be6161a56a0c?auto=format&fit=crop&w=1200&q=80',
                'gallery' => [
                    'https://images.unsplash.com/photo-1600585154340-be6161a56a0c?auto=format&fit=crop&w=1200&q=80',
                    'https://images.unsplash.com/photo-1600566753086-00f18fb6b3ea?auto=format&fit=crop&w=1200&q=80',
                    'https://images.unsplash.com/photo-1600607687939-ce8a6c25118c?auto=format&fit=crop&w=1200&q=80',
                ],
            ],
            [
                'id' => 6,
                'name' => 'Innovation Hub Office',
                'type' => 'Office',
                'price' => '$540,000',
                'status' => 'Available',
                'description' => 'A smart office suite with collaborative rooms, high-speed connectivity, reception space, and excellent transport links.',
                'image' => 'https://images.unsplash.com/photo-1517502884422-41eaead166d4?auto=format&fit=crop&w=1200&q=80',
                'gallery' => [
                    'https://images.unsplash.com/photo-1517502884422-41eaead166d4?auto=format&fit=crop&w=1200&q=80',
                    'https://images.unsplash.com/photo-1604328698692-f76ea9498e76?auto=format&fit=crop&w=1200&q=80',
                    'https://images.unsplash.com/photo-1600508774634-4e11d34730e2?auto=format&fit=crop&w=1200&q=80',
                ],
            ],
            [
                'id' => 7,
                'name' => 'Park Lane Apartment',
                'type' => 'Apartment',
                'price' => '$355,000',
                'status' => 'Sold',
                'description' => 'A practical and stylish apartment near parks, cafes, and transit, with smart storage and a warm contemporary interior.',
                'image' => 'https://images.unsplash.com/photo-1493809842364-78817add7ffb?auto=format&fit=crop&w=1200&q=80',
                'gallery' => [
                    'https://images.unsplash.com/photo-1493809842364-78817add7ffb?auto=format&fit=crop&w=1200&q=80',
                    'https://images.unsplash.com/photo-1505693416388-ac5ce068fe85?auto=format&fit=crop&w=1200&q=80',
                    'https://images.unsplash.com/photo-1560185893-a55cbc8c57e8?auto=format&fit=crop&w=1200&q=80',
                ],
            ],
            [
                'id' => 8,
                'name' => 'Horizon Executive Villa',
                'type' => 'Villa',
                'price' => '$1,600,000',
                'status' => 'Available',
                'description' => 'A premium villa with dramatic reception areas, a private pool, media lounge, guest suite, and elevated neighborhood views.',
                'image' => 'https://images.unsplash.com/photo-1600607687644-c7171b42498f?auto=format&fit=crop&w=1200&q=80',
                'gallery' => [
                    'https://images.unsplash.com/photo-1600607687644-c7171b42498f?auto=format&fit=crop&w=1200&q=80',
                    'https://images.unsplash.com/photo-1600566753190-17f0baa2a6c3?auto=format&fit=crop&w=1200&q=80',
                    'https://images.unsplash.com/photo-1600607688969-a5bfcd646154?auto=format&fit=crop&w=1200&q=80',
                ],
            ],
        ];
    }
}
