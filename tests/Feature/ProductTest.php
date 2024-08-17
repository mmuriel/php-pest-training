<?php

namespace Tests\Feature;

it('can list products', function () {
    $this->getJson('/api/products')->assertStatus(200);
});


it('can create a product', function () {
    $data = [
        'name' => 'Product 1',
        'price' => 100
    ];
    // 201 http created
    $this->postJson('/api/products/create',$data)->assertStatus(201);
});
