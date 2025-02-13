<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JobSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    { {
            DB::table('jobs')->insert([
                [
                    'job_position' => 'Software Engineer',
                    'location' => 'New York, NY',
                    'company' => 'Tech Solutions Inc.',
                    'description' => 'Develop and maintain web applications.',
                    'salary' => '85000',
                ],
                [
                    'job_position' => 'Project Manager',
                    'location' => 'San Francisco, CA',
                    'company' => 'Innovative Projects LLC',
                    'description' => 'Oversee project timelines and deliverables.',
                    'salary' => '95000',
                ],
                [
                    'job_position' => 'Data Analyst',
                    'location' => 'Chicago, IL',
                    'company' => 'Data Insights Co.',
                    'description' => 'Analyze data trends and provide insights.',
                    'salary' => '70000',
                ],
                [
                    'job_position' => 'UX Designer',
                    'location' => 'Austin, TX',
                    'company' => 'Creative Designs Ltd.',
                    'description' => 'Design user-friendly interfaces.',
                    'salary' => '75000',
                ],
                [
                    'job_position' => 'Marketing Specialist',
                    'location' => 'Los Angeles, CA',
                    'company' => 'Market Masters Inc.',
                    'description' => 'Create and implement marketing strategies.',
                    'salary' => '68000',
                ],
                [
                    'job_position' => 'HR Manager',
                    'location' => 'Seattle, WA',
                    'company' => 'People First Corp.',
                    'description' => 'Manage recruitment and employee relations.',
                    'salary' => '80000',
                ],
                [
                    'job_position' => 'Sales Representative',
                    'location' => 'Miami, FL',
                    'company' => 'Sales Unlimited LLC',
                    'description' => 'Drive sales and build client relationships.',
                    'salary' => '60000',
                ],
                [
                    'job_position' => 'Accountant',
                    'location' => 'Denver, CO',
                    'company' => 'Finance Experts Co.',
                    'description' => 'Handle financial records and reports.',
                    'salary' => '72000',
                ],
                [
                    'job_position' => 'Customer Support Specialist',
                    'location' => 'Boston, MA',
                    'company' => 'Support Hub Inc.',
                    'description' => 'Assist customers with inquiries and issues.',
                    'salary' => '54000',
                ],
                [
                    'job_position' => 'Network Engineer',
                    'location' => 'Houston, TX',
                    'company' => 'NetTech Solutions',
                    'description' => 'Maintain and troubleshoot network infrastructure.',
                    'salary' => '82000',
                ]
            ]);
        }
    }
}
