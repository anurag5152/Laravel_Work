<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use PhpOffice\PhpWord\TemplateProcessor;

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
    public function downloadTwo()
    {
        $data = [
            'name' => 'A SAIAKHIL',
            'email' => 'saiakhilakallam9@gmail.com',
            'phone' => '+91 7702588283',
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
        $pdf = Pdf::loadView('resume.resume_2', $data)
            ->setPaper('a4', 'portrait')
            ->setOptions([
                'isRemoteEnabled' => true,       // or avoid remote assets entirely
                'isHtml5ParserEnabled' => true,
            ]);

        return $pdf->download('resume.pdf');
    }
    public function previewTwo()
    {
        Log::info('Resume preview started');

        $data = [
            'name' => 'A SAIAKHIL',
            'email' => 'saiakhilakallam9@gmail.com',
            'phone' => '+91 7702588283',
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

        $view = view('resume.resume_2', $data);
        Log::info('Resume view rendered successfully');

        return $view;
    }

    //third resume
    public function downloadThree()
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
        $pdf = Pdf::loadView('resume.resume_3', $data)
            ->setPaper('a4', 'portrait')
            ->setOptions([
                'isRemoteEnabled' => true,       // or avoid remote assets entirely
                'isHtml5ParserEnabled' => true,
            ]);

        return $pdf->download('resume.pdf');
    }
    public function previewThree()
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

        $view = view('resume.resume_3', $data);
        Log::info('Resume view rendered successfully');


        return $view;
    }


    //fourth resume
    //third resume
    public function downloadFour()
    {
        $data = [
            'name' => 'Andrew Ryan',
            'email' => 'andrew@gmail.com',
            'phone' => '123-456-7890',
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
        $pdf = Pdf::loadView('resume.resume_4', $data)
            ->setPaper('a4', 'portrait')
            ->setOptions([
                'isRemoteEnabled' => true,       // or avoid remote assets entirely
                'isHtml5ParserEnabled' => true,
            ]);

        return $pdf->download('resume.pdf');
    }
    public function previewFour()
    {
        Log::info('Resume preview started');

        $data = [
            'name' => 'Andrew Ryan',
            'email' => 'andrew@gmail.com',
            'phone' => '123-456-7890',
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

        $view = view('resume.resume_4', $data);
        Log::info('Resume view rendered successfully');


        return $view;
    }

    public function generate()
    {
        $templatePath = storage_path('app/public/Resume_ats.docx');
        $tempPath     = storage_path('app/public/temp_resume.docx');
        $finalPath    = storage_path('app/public/Resume_' . time() . '.docx');

        $template = new TemplateProcessor($templatePath);

        $template->setValue('name', 'John Doe');
        $template->setValue('title', 'Software Engineer');
        $template->setValue('phone', '+91 9876543210');
        $template->setValue('email', 'john@example.com');

        $city    = 'New Delhi';
        $state   = 'Delhi';
        $country = 'India';

        $template->setValue('location', implode(', ', array_filter([$city, $state, $country])));
        $template->setValue('summary', 'Experienced Laravel developer with strong React and SQL skills.');

        $template->setValue('linkedin', 'LinkedIn');
        $template->setValue('github', 'GitHub');
        $template->setValue('website', 'Website');

        $skills = [
            ['skill_category' => 'Programming Skills', 'skill_list' => 'C, C++, Java, Python'],
            ['skill_category' => 'Frameworks',        'skill_list' => 'Laravel, React, Node.js'],
            ['skill_category' => 'Tools',             'skill_list' => 'Git, Docker, Kubernetes'],
        ];
        if (!empty($skills)) {
            $template->setValue('skills_heading', 'SKILLS');
            $template->cloneBlock('skills_block', 0, true, false, $skills);
        } else {
            $template->setValue('skills_heading', '');
            $template->cloneBlock('skills_block', 0, true, false);
        }

        $experiences = [
            [
                'designation' => 'Senior Developer',
                'job_type'    => 'On-site',
                'company'     => 'Tech Corp',
                'location'    => 'India',
                'start_date'  => 'Jan 2020',
                'end_date'    => 'Present',
                'meta_line'   => 'Team lead | Backend development | Agile',
                'points'      => [
                    'Led a team of 5 engineers',
                    'Built scalable APIs with Laravel',
                ],
            ],
            [
                'designation' => 'Developer',
                'job_type'    => 'Remote',
                'company'     => 'Acme Inc.',
                'location'    => 'Remote',
                'start_date'  => 'Jun 2018',
                'end_date'    => 'Dec 2019',
                'meta_line'   => 'Optimized queries | CI/CD',
                'points'      => [
                    'Optimized SQL queries',
                    'Implemented CI/CD with GitHub Actions',
                ],
            ],
        ];

        $expRepl = array_map(function ($e) use ($template) {
            $bullets = '• ' . implode("\n• ", $e['points']);
            $bullets = $template->replaceCarriageReturns($bullets);
            return [
                'designation'       => $e['designation'],
                'job_type'          => $e['job_type'],
                'company'           => $e['company'],
                'location'          => $e['location'],
                'start_date'        => $e['start_date'],
                'end_date'          => $e['end_date'],
                'meta_line'         => $e['meta_line'],
                'experience_points' => $bullets,
            ];
        }, $experiences);

        if (!empty($expRepl)) {
            $template->setValue('exp_heading', 'PROFESSIONAL EXPERIENCE');
            $template->cloneBlock('experience_block', 0, true, false, $expRepl);
        } else {
            $template->setValue('exp_heading', '');
            $template->cloneBlock('experience_block', 0, true, false);
        }

        $educations = [
            ['college' => 'IIT Delhi', 'course' => 'B.Tech CSE', 'location' => 'Delhi', 'gpa' => '8.5'],
            ['college' => 'ABC School', 'course' => 'High School', 'location' => 'Delhi', 'gpa' => '85%'],
        ];
        $eduRepl = array_map(fn($e) => [
            'college'  => $e['college'],
            'course'   => $e['course'],
            'location' => $e['location'],
            'gpa'      => $e['gpa'],
        ], $educations);

        if (!empty($eduRepl)) {
            $template->setValue('edu_heading', 'EDUCATION');
            $template->cloneBlock('education_block', 0, true, false, $eduRepl);
        } else {
            $template->setValue('edu_heading', '');
            $template->cloneBlock('education_block', 0, true, false);
        }

        $projects = [
            [
                'project_title' => 'Resume Builder System',
                'project_link'  => 'https://github.com/johndoe/resume-builder',
                'company'       => 'Tech Corp',
                'location'      => 'India',
                'points'        => [
                    'Built resume generator with Laravel + PhpWord',
                    'Integrated export to DOCX and PDF',
                ],
            ],
            [
                'project_title' => 'E-commerce Platform',
                'project_link'  => 'https://github.com/johndoe/ecommerce',
                'company'       => 'Code Labs',
                'location'      => 'Remote',
                'points'        => [
                    'Developed scalable product catalog',
                    'Implemented secure checkout process',
                ],
            ],
        ];

        $projRepl = [];
        $projectRealLinks = [];
        foreach ($projects as $i => $p) {
            $bullets = '• ' . implode("\n• ", $p['points']);
            $bullets = $template->replaceCarriageReturns($bullets);

            $projRepl[] = [
                'project_title'  => $p['project_title'],
                'project_link'   => 'View Project',
                'company'        => $p['company'],
                'location'       => $p['location'],
                'project_points' => $bullets,
            ];

            $projectRealLinks[] = $p['project_link'];
        }

        if (!empty($projRepl)) {
            $template->setValue('proj_heading', 'PROFESSIONAL PROJECTS');
            $template->cloneBlock('project_block', 0, true, false, $projRepl);
        } else {
            $template->setValue('proj_heading', '');
            $template->cloneBlock('project_block', 0, true, false);
        }

        $certs = [
            [
                'cert_name' => 'PMP Certified',
                'issuer'    => 'PMI',
                'points'    => [
                    'Validated project management expertise',
                    'Global recognition of leadership skills',
                ],
            ],
            [
                'cert_name' => 'AWS Solutions Architect',
                'issuer'    => 'Amazon',
                'points'    => [
                    'Designed and deployed scalable systems on AWS',
                    'Demonstrated cloud cost optimization strategies',
                ],
            ],
        ];

        $certRepl = array_map(function ($c) use ($template) {
            $lines = '- ' . implode("\n- ", $c['points']);
            $lines = $template->replaceCarriageReturns($lines);
            return [
                'cert_name'   => $c['cert_name'],
                'issuer'      => $c['issuer'],
                'cert_points' => $lines,
            ];
        }, $certs);

        if (!empty($certRepl)) {
            $template->setValue('cert_heading', 'CERTIFICATIONS');
            $template->cloneBlock('cert_block', 0, true, false, $certRepl);
        } else {
            $template->setValue('cert_heading', '');
            $template->cloneBlock('cert_block', 0, true, false);
        }

        $languages = [
            ['language' => 'English', 'points' => ['Read', 'Write', 'Speak']],
            ['language' => 'Spanish', 'points' => ['Read', 'Write', 'Speak']],
            ['language' => 'French', 'points' => ['Read', 'Write']],
        ];

        $langRepl = array_map(function ($l) {
            $line = implode(', ', $l['points']);
            return [
                'language'    => $l['language'],
                'lang_points' => $line,
            ];
        }, $languages);

        if (!empty($langRepl)) {
            $template->setValue('lang_heading', 'LANGUAGES');
            $template->cloneBlock('lang_block', 0, true, false, $langRepl);
        } else {
            $template->setValue('lang_heading', '');
            $template->cloneBlock('lang_block', 0, true, false);
        }



        $template->saveAs($tempPath);

        $zip = new \ZipArchive();
        $openRes = $zip->open($tempPath);
        if ($openRes !== true) {
            return response()->download($tempPath)->deleteFileAfterSend(true);
        }

        $relsPath = 'word/_rels/document.xml.rels';
        $relsXml = $zip->getFromName($relsPath);
        if ($relsXml === false) {
            $zip->close();
            return response()->download($tempPath)->deleteFileAfterSend(true);
        }

        $dummyToReal = [
            'http://dummy.com/linkedin' => 'https://linkedin.com/in/johndoe',
            'http://dummy.com/github'   => 'https://github.com/johndoe',
            'http://dummy.com/website'  => 'https://johndoe.com',
        ];

        foreach ($projectRealLinks as $idx => $realUrl) {
            $dummyKey = 'http://dummy.com/project' . ($idx + 1);
            $dummyToReal[$dummyKey] = $realUrl;
        }

        $updatedRels = str_replace(array_keys($dummyToReal), array_values($dummyToReal), $relsXml);

        $zip->addFromString($relsPath, $updatedRels);
        $zip->close();

        rename($tempPath, $finalPath);

        return response()->download($finalPath)->deleteFileAfterSend(true);
    }


    //another generate function
    public function generate1()
    {
        $templatePath = storage_path('app/public/Resume_ats_1.docx');
        $tempPath     = storage_path('app/public/temp_resume.docx');
        $finalPath    = storage_path('app/public/Resume_' . time() . '.docx');

        $template = new TemplateProcessor($templatePath);

        $template->setValue('name', 'John Doe');
        $template->setValue('title', 'Software Engineer');
        $template->setValue('phone', '+91 9876543210');
        $template->setValue('email', 'john@example.com');

        $city    = 'New Delhi';
        $state   = 'Delhi';
        $country = 'India';

        $template->setValue('location', implode(', ', array_filter([$city, $state, $country])));
        $template->setValue('summary', 'Experienced Laravel developer with strong React and SQL skills.');

        $template->setValue('linkedin', 'LinkedIn');
        $template->setValue('github', 'GitHub');
        $template->setValue('website', 'Website');

        $skills = [
            ['skill_category' => 'Programming Skills', 'skill_list' => 'C, C++, Java, Python'],
            ['skill_category' => 'Frameworks',        'skill_list' => 'Laravel, React, Node.js'],
            ['skill_category' => 'Tools',             'skill_list' => 'Git, Docker, Kubernetes'],
        ];
        if (!empty($skills)) {
            $template->setValue('skills_heading', 'SKILLS');
            $template->cloneBlock('skills_block', 0, true, false, $skills);
        } else {
            $template->setValue('skills_heading', '');
            $template->cloneBlock('skills_block', 0, true, false);
        }

        $experiences = [
            [
                'designation' => 'Senior Developer',
                'job_type'    => 'On-site',
                'company'     => 'Tech Corp',
                'location'    => 'India',
                'start_date'  => 'Jan 2020',
                'end_date'    => 'Present',
                'meta_line'   => 'Team lead | Backend development | Agile',
                'points'      => [
                    'Led a team of 5 engineers',
                    'Built scalable APIs with Laravel',
                ],
            ],
            [
                'designation' => 'Developer',
                'job_type'    => 'Remote',
                'company'     => 'Acme Inc.',
                'location'    => 'Remote',
                'start_date'  => 'Jun 2018',
                'end_date'    => 'Dec 2019',
                'meta_line'   => 'Optimized queries | CI/CD',
                'points'      => [
                    'Optimized SQL queries',
                    'Implemented CI/CD with GitHub Actions',
                ],
            ],
        ];

        $expRepl = array_map(function ($e) use ($template) {
            $bullets = '• ' . implode("\n• ", $e['points']);
            $bullets = $template->replaceCarriageReturns($bullets);
            return [
                'designation'       => $e['designation'],
                'job_type'          => $e['job_type'],
                'company'           => $e['company'],
                'location'          => $e['location'],
                'start_date'        => $e['start_date'],
                'end_date'          => $e['end_date'],
                'meta_line'         => $e['meta_line'],
                'experience_points' => $bullets,
            ];
        }, $experiences);

        if (!empty($expRepl)) {
            $template->setValue('exp_heading', 'PROFESSIONAL EXPERIENCE');
            $template->cloneBlock('experience_block', 0, true, false, $expRepl);
        } else {
            $template->setValue('exp_heading', '');
            $template->cloneBlock('experience_block', 0, true, false);
        }

        $educations = [
            ['college' => 'IIT Delhi', 'course' => 'B.Tech CSE', 'location' => 'Delhi', 'gpa' => '8.5'],
            ['college' => 'ABC School', 'course' => 'High School', 'location' => 'Delhi', 'gpa' => '85%'],
        ];
        $eduRepl = array_map(fn($e) => [
            'college'  => $e['college'],
            'course'   => $e['course'],
            'location' => $e['location'],
            'gpa'      => $e['gpa'],
        ], $educations);

        if (!empty($eduRepl)) {
            $template->setValue('edu_heading', 'EDUCATION');
            $template->cloneBlock('education_block', 0, true, false, $eduRepl);
        } else {
            $template->setValue('edu_heading', '');
            $template->cloneBlock('education_block', 0, true, false);
        }

        $projects = [
            [
                'project_title' => 'Resume Builder System',
                'project_link'  => 'https://github.com/johndoe/resume-builder',
                'company'       => 'Tech Corp',
                'location'      => 'India',
                'points'        => [
                    'Built resume generator with Laravel + PhpWord',
                    'Integrated export to DOCX and PDF',
                ],
            ],
            [
                'project_title' => 'E-commerce Platform',
                'project_link'  => 'https://github.com/johndoe/ecommerce',
                'company'       => 'Code Labs',
                'location'      => 'Remote',
                'points'        => [
                    'Developed scalable product catalog',
                    'Implemented secure checkout process',
                ],
            ],
        ];

        $projRepl = [];
        $projectRealLinks = [];
        foreach ($projects as $i => $p) {
            $bullets = '• ' . implode("\n• ", $p['points']);
            $bullets = $template->replaceCarriageReturns($bullets);

            $projRepl[] = [
                'project_title'  => $p['project_title'],
                'project_link'   => 'View Project',
                'company'        => $p['company'],
                'location'       => $p['location'],
                'project_points' => $bullets,
            ];

            $projectRealLinks[] = $p['project_link'];
        }

        if (!empty($projRepl)) {
            $template->setValue('proj_heading', 'PROFESSIONAL PROJECTS');
            $template->cloneBlock('project_block', 0, true, false, $projRepl);
        } else {
            $template->setValue('proj_heading', '');
            $template->cloneBlock('project_block', 0, true, false);
        }

        $certs = [
            [
                'cert_name' => 'PMP Certified',
                'issuer'    => 'PMI',
                'points'    => [
                    'Validated project management expertise',
                    'Global recognition of leadership skills',
                ],
            ],
            [
                'cert_name' => 'AWS Solutions Architect',
                'issuer'    => 'Amazon',
                'points'    => [
                    'Designed and deployed scalable systems on AWS',
                    'Demonstrated cloud cost optimization strategies',
                ],
            ],
        ];

        $certRepl = array_map(function ($c) use ($template) {
            $lines = '- ' . implode("\n- ", $c['points']);
            $lines = $template->replaceCarriageReturns($lines);
            return [
                'cert_name'   => $c['cert_name'],
                'issuer'      => $c['issuer'],
                'cert_points' => $lines,
            ];
        }, $certs);

        if (!empty($certRepl)) {
            $template->setValue('cert_heading', 'CERTIFICATIONS');
            $template->cloneBlock('cert_block', 0, true, false, $certRepl);
        } else {
            $template->setValue('cert_heading', '');
            $template->cloneBlock('cert_block', 0, true, false);
        }

        $languages = [
            ['language' => 'English', 'points' => ['Read', 'Write', 'Speak']],
            ['language' => 'Spanish', 'points' => ['Read', 'Write', 'Speak']],
            ['language' => 'French', 'points' => ['Read', 'Write']],
        ];

        $langRepl = array_map(function ($l) {
            $line = implode(', ', $l['points']);
            return [
                'language'    => $l['language'],
                'lang_points' => $line,
            ];
        }, $languages);

        if (!empty($langRepl)) {
            $template->setValue('lang_heading', 'LANGUAGES');
            $template->cloneBlock('lang_block', 0, true, false, $langRepl);
        } else {
            $template->setValue('lang_heading', '');
            $template->cloneBlock('lang_block', 0, true, false);
        }



        $template->saveAs($tempPath);

        $zip = new \ZipArchive();
        $openRes = $zip->open($tempPath);
        if ($openRes !== true) {
            return response()->download($tempPath)->deleteFileAfterSend(true);
        }

        $relsPath = 'word/_rels/document.xml.rels';
        $relsXml = $zip->getFromName($relsPath);
        if ($relsXml === false) {
            $zip->close();
            return response()->download($tempPath)->deleteFileAfterSend(true);
        }

        $dummyToReal = [
            'http://dummy.com/linkedin' => 'https://linkedin.com/in/johndoe',
            'http://dummy.com/github'   => 'https://github.com/johndoe',
            'http://dummy.com/website'  => 'https://johndoe.com',
        ];

        foreach ($projectRealLinks as $idx => $realUrl) {
            $dummyKey = 'http://dummy.com/project' . ($idx + 1);
            $dummyToReal[$dummyKey] = $realUrl;
        }

        $updatedRels = str_replace(array_keys($dummyToReal), array_values($dummyToReal), $relsXml);

        $zip->addFromString($relsPath, $updatedRels);
        $zip->close();

        rename($tempPath, $finalPath);

        return response()->download($finalPath)->deleteFileAfterSend(true);
    }
}
