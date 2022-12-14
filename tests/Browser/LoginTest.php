<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;
use App\Models\User;

class LoginTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testSuccessfulLogin()
    {
        $this->browse(function (Browser $browser) {
            $suer = User::factory()->create();
            $browser->visit('/login')
                    ->type('email', $user->email)
                    ->type('password','password')
                    ->press('LOG IN')
                    ->assertPathIs('/tweet')
                    ->assertSee('つぶやきアプリ');
        });
    }
}
