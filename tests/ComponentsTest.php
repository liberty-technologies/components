<?php

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Support\Facades\Gate;

it('does not render component props as html attributes', function (string $template, array $leakedAttributes) {
    $view = $this->blade($template);

    foreach ($leakedAttributes as $attribute) {
        $view->assertDontSee($attribute, false);
    }
})->with([
    'card title' => [
        '<x-lt-components::card.card title="Clientes">Body</x-lt-components::card.card>',
        ['title="Clientes"'],
    ],
    'widget title' => [
        '<x-lt-components::widget title="Total">10</x-lt-components::widget>',
        ['title="Total"'],
    ],
    'description list item' => [
        '<x-lt-components::descriptionList.item title="Nombre" slot-id="name">Ana</x-lt-components::descriptionList.item>',
        ['title="Nombre"', 'slot-id="name"'],
    ],
    'external link' => [
        '<x-lt-components::links.external route="https://example.com">Docs</x-lt-components::links.external>',
        ['route="https://example.com"'],
    ],
    'sidebar item' => [
        '<x-lt-components::sidebar.item route="/clientes" icon="heroicon-o-users" :active="true">Clientes</x-lt-components::sidebar.item>',
        ['route="/clientes"', 'icon="heroicon-o-users"', 'active="active"'],
    ],
]);

it('still renders the values passed as props', function () {
    $this->blade('<x-lt-components::card.card title="Clientes">Body</x-lt-components::card.card>')
        ->assertSeeInOrder(['<h1', 'Clientes', '</h1>', 'Body'], false);

    $this->blade('<x-lt-components::widget title="Total">10</x-lt-components::widget>')
        ->assertSeeInOrder(['Total', '10']);

    $this->blade('<x-lt-components::descriptionList.item title="Nombre" slot-id="name">Ana</x-lt-components::descriptionList.item>')
        ->assertSeeInOrder(['<dt', 'Nombre', 'id="name"', 'Ana'], false);

    $this->blade('<x-lt-components::links.external route="https://example.com">Docs</x-lt-components::links.external>')
        ->assertSee('href="https://example.com"', false);

    $this->blade('<x-lt-components::sidebar.item route="/clientes" icon="heroicon-o-users" :active="true">Clientes</x-lt-components::sidebar.item>')
        ->assertSee('href="/clientes"', false)
        ->assertSee('bg-primary-700', false)
        ->assertSee('<svg', false);
});

it('keeps title slots working on the card', function () {
    $this->blade('<x-lt-components::card.card><x-slot:title>Clientes</x-slot:title><x-slot:actions>Crear</x-slot:actions>Body</x-lt-components::card.card>')
        ->assertSeeInOrder(['<h1', 'Clientes', 'Crear', 'Body'], false);
});

it('renders the table footer only when given', function () {
    $this->blade('<x-lt-components::table.table><x-slot:head>H</x-slot:head><x-slot:body>B</x-slot:body></x-lt-components::table.table>')
        ->assertDontSee('<tfoot', false);

    $this->blade('<x-lt-components::table.table><x-slot:head>H</x-slot:head><x-slot:body>B</x-slot:body><x-slot:foot>F</x-slot:foot></x-lt-components::table.table>')
        ->assertSeeInOrder(['<tfoot', 'F', '</tfoot>'], false);
});

it('renders the delete button only when the delete policy allows it', function (bool $allowed) {
    Gate::define('delete', fn (?Authenticatable $user, object $object) => $allowed);

    $view = $this->blade(
        '<x-lt-components::buttons.delete :object="$object" route="/clientes/1" />',
        ['object' => new stdClass],
    );

    if ($allowed) {
        $view->assertSee('action="/clientes/1"', false)
            ->assertSee('name="_method" value="delete"', false)
            ->assertDontSee('form.submit()', false);
    } else {
        $view->assertDontSee('<form', false);
    }
})->with([
    'allowed' => true,
    'denied' => false,
]);
