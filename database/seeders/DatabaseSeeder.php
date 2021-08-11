<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            AllStarSeeder::class,
            CitySeeder::class,
            CoachSeeder::class,
            CommentSeeder::class,
            CountrySeeder::class,
            CourtStatusSeeder::class,
            DistrictSeeder::class,
            LicenceTypeSeeder::class,
            ManagerRatingTypeSeeder::class,
            ManagerSeeder::class,
            MatchSeeder::class,
            MessageTypeSeeder::class,
            NotificationSeeder::class,
            PaymentTypeSeeder::class,
            PlayerRatingTypeSeeder::class,
            PlayerSeeder::class,
            PrizeSeeder::class,
            RatingSeeder::class,
            RefereeSeeder::class,
            SponsorSeeder::class,
            SupportTicketSeeder::class,
            TeamSeeder::class,
            TournamentSeeder::class,
            TrainerStatusSeeder::class,
            VideoSeeder::class,
            ]);
    }
}
