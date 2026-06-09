<?php

use Laravel\Dusk\Browser;

Browser::macro('debugDump', function ($label = null) {
    dump('===========================================');
    dump($label);
    dump('URL: ' . $this->driver->getCurrentURL());
    dump('TITLE: ' . $this->driver->getTitle());
    dump(substr($this->text(), 0, 1000));
    dump('===========================================');

    return $this;
});

test('Test home page', function () {
    $this->browse(function (Browser $browser) {
        $browser->visit('/')
            ->debugDump('Test home page')
            ->assertSee('Lillium');
    });
});

test('Test codex', function () {
    $this->browse(function (Browser $browser) {
        $browser->visit('/codex')
            ->debugDump('Test codex')
            ->assertSee('Codex of Anomalies');
    });
});

test('Test store', function () {
    $this->browse(function (Browser $browser) {
        $browser->visit('/store')
            ->debugDump('Test store')
            ->assertSee('Store');
    });
});

test('Test login page', function () {
    $this->browse(function (Browser $browser) {
        $browser->visit('/login')
            ->debugDump('Test login page')
            ->assertSee('Welcome Traveller');
    });
});

