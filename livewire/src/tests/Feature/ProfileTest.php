<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\Concerns\InteractsWithExceptionHandling;
use Livewire\Livewire;
use Tests\TestCase;

class ProfileTest extends TestCase
{

    use RefreshDatabase;

    use InteractsWithExceptionHandling;

   /** @test */

   public function can_visit_lv_profile_route()
   {

        // $user = User::factory()->create();
        $user = User::factory()->create();

        $this->actingAs($user)

            ->withoutExceptionHandling()

            ->get('/lvprofile')

            ->assertSuccessful()

            ->assertSeeLivewire('pages.profile');

   }

   /** @test */
   public function can_update_profile()
   {
         $user = User::factory()->create();

         Livewire::actingAs($user)

            ->test('profile')

            ->set('name', 'foo')

            ->set('about', 'bar')

            ->call('save');


   }
}
