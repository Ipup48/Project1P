<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\User;

class AdminDashboardTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function admin_user_can_access_admin_dashboard()
    {
        // Create an admin user
        $adminUser = User::factory()->create([
            'is_admin' => true,
        ]);

        // Acting as the admin user
        $response = $this->actingAs($adminUser);

        // Visit the admin dashboard
        $response = $this->get('/admin/new/dashboard');

        // Assert that the response status is 200 (OK)
        $response->assertStatus(200);
        
        // Assert that the dashboard content is present
        $response->assertSee('Welcome to the Admin Dashboard');
    }

    /** @test */
    public function non_admin_user_cannot_access_admin_dashboard()
    {
        // Create a regular user
        $regularUser = User::factory()->create([
            'is_admin' => false,
        ]);

        // Acting as the regular user
        $response = $this->actingAs($regularUser);

        // Try to visit the admin dashboard
        $response = $this->get('/admin/new/dashboard');

        // Assert that the user is redirected (not authorized)
        $response->assertStatus(302); // Redirect status
    }
}