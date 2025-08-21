<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class ResumeController extends Controller
{
    public function download()
    {
        // Example full resume data
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

        // Generate PDF
        $pdf = Pdf::loadView('resume.resume', $data)
                  ->setPaper('a4', 'portrait')
                  ->setOption('isRemoteEnabled', true);

        return $pdf->download('resume.pdf');
    }

    public function preview()
    {
        // Same data as above
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

        return view('resume.resume', $data);
    }
}
