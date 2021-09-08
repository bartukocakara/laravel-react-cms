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
            UserSeeder::class,
            AllStarSeeder::class,
            CitySeeder::class,
            CoachSeeder::class,
            CommentSeeder::class,
            CountrySeeder::class,
            CourtStatusSeeder::class,
            CurrencySeeder::class,
            DistrictSeeder::class,
            LicenceSeeder::class,
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
            MatchSettingSeeder::class,
            TrainerSettingSeeder::class,
            TrainingSetting::class,
            PlayerSetting::class,
            MatchSettingsSeeder::class,
            CourtSettingSeeder::class,
            TournamentSettingSeeder::class,
            AllStarSettingSeeder::class,
            GiftSeeder::class,
            ManagerContractSeeder::class,
            PlayerContractSeeder::class,
            FaqSeeder::class,
            PermissionSeeder::class,
            RoleSeeder::class,
            TrainingItemSeeder::class,
            TrainingTypeSeeder::class,
            TransactionSeeder::class,
            SurveySeeder::class,
            ModuleSeeder::class,
            SubModuleSeeder::class,
            PageSeeder::class,
            CompanySeeder::class,
            CommissionSeeder::class,
            MembershiğTypeSeeder::class,
            ]);
    }
}
