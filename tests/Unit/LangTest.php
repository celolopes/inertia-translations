<?php
use App\Lang\Lang;

it('pode obter um rótulo de idioma associado', function () {
    expect(Lang::from('pt-BR')->label())->toBe('Português Brasileiro');
    expect(Lang::from('es')->label())->toBe('Español');
});
