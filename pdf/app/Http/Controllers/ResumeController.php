<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ResumeController extends Controller
{
    public function download()
    {
        $data = [
            'name' => 'John Doe',
            'email' => 'john@example.com',
            'phone' => '+91 98765 43210',
            'summary' => 'Full-stack developer with 5+ years of experience in Laravel, React, and AWS.',
            'education' => [
                ['degree' => 'B.Tech in Computer Science', 'institute' => 'IIT Delhi', 'year' => '2018'],
                ['degree' => 'M.Tech in Software Engineering', 'institute' => 'IIT Bombay', 'year' => '2020'],
            ],
            'experience' => [
                ['title' => 'Software Engineer', 'company' => 'Google', 'years' => '2020 - Present', 'details' => 'Working on scalable backend systems, improving API performance by 30%.'],
                ['title' => 'Intern', 'company' => 'Microsoft', 'years' => '2019', 'details' => 'Built an internal tool for automated testing.'],
            ],
            'skills' => ['Laravel', 'React', 'Node.js', 'MySQL', 'AWS', 'Docker'],
            'projects' => [
                ['name' => 'Resume Builder', 'description' => 'Built a Laravel + React based dynamic resume generator.'],
                ['name' => 'E-commerce Platform', 'description' => 'Developed a scalable e-commerce solution with payment gateway integration.'],
            ],
        ];

        // If you really need remote assets, either enable via config (see below)
        // or set via setOptions (note plural).
        $pdf = Pdf::loadView('resume.resume_1', $data)
            ->setPaper('a4', 'portrait')
            ->setOptions([
                'isRemoteEnabled' => true,       // or avoid remote assets entirely
                'isHtml5ParserEnabled' => true,
            ]);

        return $pdf->download('resume.pdf');
    }
    public function preview()
    {
        Log::info('Resume preview started');

        $data = [
            'name' => 'John Doe',
            'email' => 'john@example.com',
            'phone' => '+91 98765 43210',
            'summary' => 'Full-stack developer with 5+ years of experience in Laravel, React, and AWS.',
            'education' => [
                [
                    'degree' => 'B.Tech in Computer Science',
                    'institute' => 'IIT Delhi',
                    'year' => '2018',
                ],
                [
                    'degree' => 'M.Tech in Software Engineering',
                    'institute' => 'IIT Bombay',
                    'year' => '2020',
                ],
            ],
            'experience' => [
                [
                    'title' => 'Software Engineer',
                    'company' => 'Google',
                    'years' => '2020 - Present',
                    'details' => 'Working on scalable backend systems, improving API performance by 30%.',
                ],
                [
                    'title' => 'Intern',
                    'company' => 'Microsoft',
                    'years' => '2019',
                    'details' => 'Built an internal tool for automated testing.',
                ],
            ],
            'skills' => ['Laravel', 'React', 'Node.js', 'MySQL', 'AWS', 'Docker'],
            'projects' => [
                [
                    'name' => 'Resume Builder',
                    'description' => 'Built a Laravel + React based dynamic resume generator.',
                ],
                [
                    'name' => 'E-commerce Platform',
                    'description' => 'Developed a scalable e-commerce solution with payment gateway integration.',
                ],
            ],
        ];

        Log::info('Resume data prepared', $data);

        $view = view('resume.resume_1', $data);
        Log::info('Resume view rendered successfully');

        return $view;
    }


    //another resume
    public function downloadOne()
    {
        $data = [
            'name' => 'John Doe',
            'email' => 'john@example.com',
            'phone' => '+91 98765 43210',
            'summary' => 'Full-stack developer with 5+ years of experience in Laravel, React, and AWS.',
            'education' => [
                ['degree' => 'B.Tech in Computer Science', 'institute' => 'IIT Delhi', 'year' => '2018'],
                ['degree' => 'M.Tech in Software Engineering', 'institute' => 'IIT Bombay', 'year' => '2020'],
            ],
            'experience' => [
                ['title' => 'Software Engineer', 'company' => 'Google', 'years' => '2020 - Present', 'details' => 'Working on scalable backend systems, improving API performance by 30%.'],
                ['title' => 'Intern', 'company' => 'Microsoft', 'years' => '2019', 'details' => 'Built an internal tool for automated testing.'],
            ],
            'skills' => ['Laravel', 'React', 'Node.js', 'MySQL', 'AWS', 'Docker'],
            'projects' => [
                ['name' => 'Resume Builder', 'description' => 'Built a Laravel + React based dynamic resume generator.'],
                ['name' => 'E-commerce Platform', 'description' => 'Developed a scalable e-commerce solution with payment gateway integration.'],
            ],
        ];

        // If you really need remote assets, either enable via config (see below)
        // or set via setOptions (note plural).
        $pdf = Pdf::loadView('resume.resume_one', $data)
            ->setPaper('a4', 'portrait')
            ->setOptions([
                'isRemoteEnabled' => true,       // or avoid remote assets entirely
                'isHtml5ParserEnabled' => true,
            ]);

        return $pdf->download('resume.pdf');
    }
    public function previewOne()
    {
        Log::info('Resume preview started');

        $data = [
            'name' => 'John Doe',
            'email' => 'john@example.com',
            'phone' => '+91 98765 43210',
            'summary' => 'Full-stack developer with 5+ years of experience in Laravel, React, and AWS.',
            'education' => [
                [
                    'degree' => 'B.Tech in Computer Science',
                    'institute' => 'IIT Delhi',
                    'year' => '2018',
                ],
                [
                    'degree' => 'M.Tech in Software Engineering',
                    'institute' => 'IIT Bombay',
                    'year' => '2020',
                ],
            ],
            'experience' => [
                [
                    'title' => 'Software Engineer',
                    'company' => 'Google',
                    'years' => '2020 - Present',
                    'details' => 'Working on scalable backend systems, improving API performance by 30%.',
                ],
                [
                    'title' => 'Intern',
                    'company' => 'Microsoft',
                    'years' => '2019',
                    'details' => 'Built an internal tool for automated testing.',
                ],
            ],
            'skills' => ['Laravel', 'React', 'Node.js', 'MySQL', 'AWS', 'Docker'],
            'projects' => [
                [
                    'name' => 'Resume Builder',
                    'description' => 'Built a Laravel + React based dynamic resume generator.',
                ],
                [
                    'name' => 'E-commerce Platform',
                    'description' => 'Developed a scalable e-commerce solution with payment gateway integration.',
                ],
            ],
        ];

        Log::info('Resume data prepared', $data);

        $view = view('resume.resume_one', $data);
        Log::info('Resume view rendered successfully');

        return $view;
    }
}
