<?php

use Laravel\Dusk\Browser;

test('example', function () {
    $this->browse(function (Browser $browser) {

        $admin_email = "admin@example.com";
        $admin_password = "123";

        $this->browse(function (Browser $browser) use ($admin_email, $admin_password) {
            $browser->visit('/login')
                ->type('email', $admin_email)
                ->type('password', $admin_password)
                ->press('Login')
                ->waitForLocation('/home')
                ->assertSee('Listing');
        });
    });
});
