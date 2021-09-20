<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Livewire\Livewire;
use Tests\TestCase;

class RegisterTest extends TestCase
{

    use RefreshDatabase;

    public function registration_page_contains_livewire()
    {
        $this->get(route('public.signup'))->assertSeeLivewire('pages.register');
    }

    /** @test */
    public function input_signup_form()
    {

        Livewire::test('pages.register')

            ->set('email', 'hans@gmail.com')

            ->set('name', 'hanUnitTest')

            ->set('password', 'secret')

            ->set('passwordConfirmation', 'secret')

            ->call('register')

            ->assertRedirect(route('public.signup'));


        $this->assertTrue(User::whereEmail('hans@gmail.com')->exists());

        $this->assertEquals('hans@gmail.com', auth()->user()->email);

    }

    /** @test */
    public function email_is_required()
    {
        Livewire::test('pages.register')

        ->set('email', '')

        ->set('name', 'hanUnitTest')

        ->set('password', 'secret')

        ->set('passwordConfirmation', 'secret')

        ->call('register')

        ->assertHasErrors(['email' => 'required']);

    }


    /** @test */
    public function email_is_valid()
    {
        Livewire::test('pages.register')

        ->set('email', 'nass')

        ->set('name', 'hanUnitTest')

        ->set('password', 'secret')

        ->set('passwordConfirmation', 'secret')

        ->call('register')

        ->assertHasErrors(['email' => 'email']);

    }

    /** @test */
    public function email_is_unique()
    {
        User::create([
            'email' => 'hans@gmail.com',
            'name' => 'hans',
            'password' => Hash::make('password'),
        ]);

        Livewire::test('pages.register')

        ->set('email', 'hans@gmail.com')

        ->set('name', 'hanUnitTest')

        ->set('password', 'secret')

        ->set('passwordConfirmation', 'secret')

        ->call('register')

        ->assertHasErrors(['email' => 'unique']);

    }


    /** @test */
    public function password_is_required()
    {
        Livewire::test('pages.register')

        ->set('email', 'hans@gmail.com')

        ->set('name', 'hanUnitTest')

        ->set('password', '')

        ->set('passwordConfirmation', 'secret')

        ->call('register')

        ->assertHasErrors(['password' => 'required']);
    }

    /** @test */
    public function password_is_min_of_6()
    {
        Livewire::test('pages.register')

        ->set('email', 'hans@gmail.com')

        ->set('name', 'hanUnitTest')

        ->set('password', 'secre')

        ->set('passwordConfirmation', 'secret')

        ->call('register')

        ->assertHasErrors(['password' => 'min']);
    }


    public function password_not_equals_to_confirm_pass()
    {
        Livewire::test('pages.register')

        ->set('email', 'hans@gmail.com')

        ->set('name', 'hanUnitTest')

        ->set('password', 'secre')

        ->set('passwordConfirmation', 'notSecret')

        ->call('register')

        ->assertHasErrors(['password' => 'same']);
    }
}
