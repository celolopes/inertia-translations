<?php

it('seleciona o idiona corretamente', function () {
    $response = $this->post('/language', [
        'language' => $language = 'pt-BR'
    ]);

    $response->assertSessionHas('language', $language)
    ->assertStatus(302);
});
