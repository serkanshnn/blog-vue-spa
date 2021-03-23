<?php

namespace Tests\Feature\User;

use App\Models\User;
use Laravel\Passport\Passport;
use Tests\TestCase;

class UserApiTest extends TestCase
{
    /**
     * @test
     */
    public function it_should_get_users()
    {
        /** @var User $user */
        $user = User::factory()->create();
        Passport::actingAs($user);
        $response = $this->get(route('api::users.index'));
        $responseContent = json_decode($response->getContent());

        $response->assertStatus(200);
        $response->assertJsonStructure(['is_success', 'message', 'data']);
        $this->assertCount(1, $responseContent->data);
    }
}
