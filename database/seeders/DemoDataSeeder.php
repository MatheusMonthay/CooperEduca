<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\XpRecord;
use App\Models\UserQuizAttempt;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

class DemoDataSeeder extends Seeder
{
    public function run()
    {
        // Criar usuários de exemplo
        $users = [
            [
                'name' => 'João Silva',
                'email' => 'joao@example.com',
                'password' => Hash::make('senha123'),
                'cpf' => '123.456.789-00',
                'telefone' => '(11) 99999-9999',
                'total_xp' => 1250,
                'terms_accepted' => true,
                'terms_accepted_at' => now(),
                'email_verified_at' => now(),
            ],
            [
                'name' => 'Maria Santos',
                'email' => 'maria@example.com',
                'password' => Hash::make('senha123'),
                'cpf' => '987.654.321-00',
                'telefone' => '(21) 98888-8888',
                'total_xp' => 980,
                'terms_accepted' => true,
                'terms_accepted_at' => now(),
                'email_verified_at' => now(),
            ],
            [
                'name' => 'Carlos Oliveira',
                'email' => 'carlos@example.com',
                'password' => Hash::make('senha123'),
                'cpf' => '456.789.123-00',
                'telefone' => '(31) 97777-7777',
                'total_xp' => 750,
                'terms_accepted' => true,
                'terms_accepted_at' => now(),
                'email_verified_at' => now(),
            ],
            [
                'name' => 'Ana Pereira',
                'email' => 'ana@example.com',
                'password' => Hash::make('senha123'),
                'cpf' => '789.123.456-00',
                'telefone' => '(41) 96666-6666',
                'total_xp' => 1120,
                'terms_accepted' => true,
                'terms_accepted_at' => now(),
                'email_verified_at' => now(),
            ],
            [
                'name' => 'Pedro Costa',
                'email' => 'pedro@example.com',
                'password' => Hash::make('senha123'),
                'cpf' => '321.654.987-00',
                'telefone' => '(51) 95555-5555',
                'total_xp' => 850,
                'terms_accepted' => true,
                'terms_accepted_at' => now(),
                'email_verified_at' => now(),
            ],
        ];

        foreach ($users as $userData) {
            $user = User::create($userData);

            // Criar registros de XP para cada usuário (exceto desta semana)
            $this->createXpRecords($user);
            
            // Criar tentativas de quiz para cada usuário
            $this->createQuizAttempts($user);
        }

        // Criar histórico de rankings de semanas anteriores (exceto esta semana)
        $this->createWeeklyRankings();
    }

    private function createXpRecords(User $user)
    {
        $courses = range(1, 7);
        $quizzes = range(1, 7);

        // XP de 2 semanas atrás
        for ($i = 0; $i < 5; $i++) {
            $daysAgo = rand(14, 20);
            
            // Criar XP de quiz (80% de chance) ou curso (20% de chance)
            if (rand(1, 100) <= 80) {
                // XP de quiz
                XpRecord::create([
                    'user_id' => $user->id,
                    'xp_amount' => rand(10, 100),
                    'source' => 'quiz',
                    'sourceable_type' => 'App\Models\Quiz',
                    'sourceable_id' => $quizzes[array_rand($quizzes)],
                    'created_at' => Carbon::now()->subDays($daysAgo),
                    'updated_at' => Carbon::now()->subDays($daysAgo),
                ]);
            } else {
                // XP de curso completo
                XpRecord::create([
                    'user_id' => $user->id,
                    'xp_amount' => rand(50, 150), // Mais XP por completar curso
                    'source' => 'course_completion',
                    'sourceable_type' => 'App\Models\Curso',
                    'sourceable_id' => $courses[array_rand($courses)],
                    'created_at' => Carbon::now()->subDays($daysAgo),
                    'updated_at' => Carbon::now()->subDays($daysAgo),
                ]);
            }
        }

        // XP da semana passada
        for ($i = 0; $i < 8; $i++) {
            $daysAgo = rand(7, 13);
            
            // Criar XP de quiz (70% de chance) ou curso (30% de chance)
            if (rand(1, 100) <= 70) {
                // XP de quiz
                XpRecord::create([
                    'user_id' => $user->id,
                    'xp_amount' => rand(10, 100),
                    'source' => 'quiz',
                    'sourceable_type' => 'App\Models\Quiz',
                    'sourceable_id' => $quizzes[array_rand($quizzes)],
                    'created_at' => Carbon::now()->subDays($daysAgo),
                    'updated_at' => Carbon::now()->subDays($daysAgo),
                ]);
            } else {
                // XP de curso completo
                XpRecord::create([
                    'user_id' => $user->id,
                    'xp_amount' => rand(50, 150),
                    'source' => 'course_completion',
                    'sourceable_type' => 'App\Models\Curso',
                    'sourceable_id' => $courses[array_rand($courses)],
                    'created_at' => Carbon::now()->subDays($daysAgo),
                    'updated_at' => Carbon::now()->subDays($daysAgo),
                ]);
            }
        }
    }

    private function createQuizAttempts(User $user)
    {
        $quizzes = range(1, 7);
        
        // Tentativas de quiz de semanas anteriores
        for ($i = 0; $i < 5; $i++) {
            $daysAgo = rand(7, 30);
            $quizId = $quizzes[array_rand($quizzes)];
            $score = rand(6, 10);
            
            UserQuizAttempt::create([
                'user_id' => $user->id,
                'quiz_id' => $quizId,
                'score' => $score,
                'total_xp_earned' => $score * 10,
                'completed_at' => Carbon::now()->subDays($daysAgo),
                'created_at' => Carbon::now()->subDays($daysAgo),
                'updated_at' => Carbon::now()->subDays($daysAgo),
            ]);
        }
    }

    private function createWeeklyRankings()
    {
        $users = User::all();
        
        // Ranking de 2 semanas atrás
        $weekStartDate = Carbon::now()->subWeeks(2)->startOfWeek();
        $top3 = $users->shuffle()->take(3)->map(function($user) {
            return [
                'id' => $user->id,
                'name' => $user->name,
                'xp' => rand(200, 500)
            ];
        });
        
        \DB::table('weekly_top3_history')->insert([
            'week_start_date' => $weekStartDate,
            'top3_users' => json_encode($top3),
            'created_at' => $weekStartDate,
            'updated_at' => $weekStartDate,
        ]);

        // Ranking da semana passada
        $weekStartDate = Carbon::now()->subWeek()->startOfWeek();
        $top3 = $users->shuffle()->take(3)->map(function($user) {
            return [
                'id' => $user->id,
                'name' => $user->name,
                'xp' => rand(200, 500)
            ];
        });
        
        \DB::table('weekly_top3_history')->insert([
            'week_start_date' => $weekStartDate,
            'top3_users' => json_encode($top3),
            'created_at' => $weekStartDate,
            'updated_at' => $weekStartDate,
        ]);
    }
}