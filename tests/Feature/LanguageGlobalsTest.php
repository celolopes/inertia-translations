<?php
use Inertia\Testing\AssertableInertia;

it('contém uma lista de idiomas disponíveis', function () {
    $response = $this->get('/')
        ->assertInertia(function (AssertableInertia $page) {
            $page->where('languages.data.0.label', 'English')
                ->where('languages.data.0.value', 'en');
        });

    // $response->assertStatus(200);
});
