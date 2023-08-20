<?php

namespace Database\Factories;

use App\Models\OrganizerMember;
use App\Models\Team;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\TeamMember>
 */
class TeamMemberFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'organizer_member_id' => OrganizerMember::all()->random()->id,
            'team_id' => Team::all()->random()->id,
        ];
    }
}
