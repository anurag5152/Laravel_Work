<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TemplateController extends Controller
{
    public function show()
    {
        $summary = "Passionate full-stack developer with 5+ years of experience building scalable 
        web applications and mobile solutions. I specialize in modern JavaScript frameworks, 
        cloud architecture, and creating seamless user experiences that solve real-world problems. 
        My approach combines technical expertise with creative problem-solving to deliver 
        high-performance applications that users love. I believe in writing clean, maintainable code 
        and staying current with emerging technologies.";

        $twitter  = "https://twitter.com/yourprofile";
        $linkedin = "https://linkedin.com/in/yourprofile";
        $github   = "https://github.com/yourprofile";


        $skills = [
            [
                'category' => 'Programming Languages',
                'skills_list' => ['PHP', 'JavaScript', 'Python', 'C++']
            ],
            [
                'category' => 'Frameworks & Libraries',
                'skills_list' => ['Laravel', 'React', 'Vue.js', 'Bootstrap']
            ],
            [
                'category' => 'Databases & Cloud',
                'skills_list' => ['MySQL', 'PostgreSQL', 'AWS', 'Firebase']
            ],
            [
                'category' => 'Tools & Practices',
                'skills_list' => ['Git', 'Docker', 'Agile/Scrum', 'CI/CD']
            ],
            [
                'category' => 'Tools & Practices',
                'skills_list' => ['Git', 'Docker', 'Agile/Scrum', 'CI/CD']
            ]
        ];


        $education = [
            [
                'university' => 'Harvard University',
                'degree'     => 'B.Sc. Computer Science',
                'year'       => '2009 - 2013'
            ],
            [
                'university' => 'Stanford University',
                'degree'     => 'M.Sc. Software Engineering',
                'year'       => '2013 - 2015'
            ],
            [
                'university' => 'MIT',
                'degree'     => 'Ph.D. Artificial Intelligence',
                'year'       => '2016 - 2020'
            ],
            [
                'university' => 'MIT',
                'degree'     => 'Ph.D. Artificial Intelligence',
                'year'       => '2016 - 2020'
            ]
        ];

        $experiences = [
            [
                'role'       => 'Senior Full-Stack Developer',
                'company'    => 'TechFlow Solutions',
                'duration'   => 'March 2022 - Present',
                'description' => 'Lead development of enterprise-level web applications serving 50K+ daily users.',
                'location'   => 'New York',
            ],
            [
                'role'       => 'Software Developer',
                'company'    => 'StartupHub Inc.',
                'duration'   => '2019 - 2022',
                'description' => 'Built scalable backend systems and optimized frontend performance.',
                'location'   => 'San Francisco',
            ],
            [
                'role'       => 'Junior Developer',
                'company'    => 'CodeCraft Agency',
                'duration'   => '2017 - 2019',
                'description' => 'Worked on client projects and assisted in full-stack application development.',
                'location'   => 'Boston',
            ],

            [
                'role'       => 'Junior Developer',
                'company'    => 'CodeCraft Agency',
                'duration'   => '2017 - 2019',
                'description' => 'Worked on client projects and assisted in full-stack application development.',
                'location'   => 'Boston',
            ],
        ];

        $volunteers = [
            [
                'role'        => 'Volunteer Teacher',
                'organization' => 'Community Learning Center',
                'duration'    => 'Jan 2021 - Dec 2021',
                'description' => 'Taught coding basics to underprivileged kids.',
                'location'    => 'New York',
            ],
            [
                'role'        => 'Event Organizer',
                'organization' => 'Tech4Good',
                'duration'    => '2019 - 2020',
                'description' => 'Organized charity hackathons to support NGOs.',
                'location'    => 'San Francisco',
            ],
            [
                'role'        => 'Mentor',
                'organization' => 'Open Source Initiative',
                'duration'    => '2018 - 2019',
                'description' => 'Guided newcomers contributing to open source projects.',
                'location'    => 'Remote',
            ],
        ];

        $publications = [
            [
                'title'     => 'Building Scalable Web Apps',
                'publisher' => 'Tech Journal',
                'year'      => '2021',
                'link'      => 'https://example.com/publication1',
            ],
            [
                'title'     => 'AI and The Future',
                'publisher' => 'AI Magazine',
                'year'      => '2020',
                'link'      => 'https://example.com/publication2',
            ],

            [
                'title'     => 'Building Scalable Web Apps',
                'publisher' => 'Tech Journal',
                'year'      => '2021',
                'link'      => 'https://example.com/publication1',
            ],
            [
                'title'     => 'AI and The Future',
                'publisher' => 'AI Magazine',
                'year'      => '2020',
                'link'      => 'https://example.com/publication2',
            ],
        ];

        $awards = [
            [
                'title'       => 'Best Developer Award',
                'organization' => 'TechFlow Solutions',
                'year'        => '2022',
            ],
            [
                'title'       => 'Hackathon Winner',
                'organization' => 'StartupHub',
                'year'        => '2020',
            ],
        ];

        $hobbies = ['Photography', 'Traveling', 'Open Source Contribution', 'Gaming'];

        $references = [
            [
                'name'     => 'Jane Smith',
                'position' => 'CTO',
                'company'  => 'TechFlow Solutions',
                'email'    => 'jane@example.com',
                'phone'    => '+1 987 654 3210',
            ],
            [
                'name'     => 'Michael Johnson',
                'position' => 'Team Lead',
                'company'  => 'StartupHub Inc.',
                'email'    => 'michael@example.com',
                'phone'    => '+1 123 456 7890',
            ],
        ];

        $projects = [
        [
            'title' => 'EcoTracker',
            'short_desc' => 'Full-Stack Application',
            'description' => 'EcoTracker helps users monitor carbon footprint using IoT devices integrated with React Native and Node.js backend.',
            'tech_stack' => 'React Native, Node.js, PostgreSQL',
            'image' => asset('images/grid.png'),
            'link' => 'https://github.com/yourprofile/ecotracker',
        ],
        [
            'title' => 'TaskFlow',
            'short_desc' => 'Project Management System',
            'description' => 'TaskFlow is a complete solution for agile project tracking, milestone management, and reporting.',
            'tech_stack' => 'Laravel, Vue.js, MySQL',
            'image' => asset('images/grid.png'),
            'link' => 'https://github.com/yourprofile/taskflow',
        ],
        [
            'title' => 'CryptoWatch',
            'short_desc' => 'Real-time Crypto Dashboard',
            'description' => 'CryptoWatch provides real-time tracking, news feed integration, and AI-based predictions.',
            'tech_stack' => 'Next.js, Express.js, MongoDB',
            'image' => asset('images/grid.png'),
            'link' => 'https://github.com/yourprofile/cryptowatch',
        ],
    ];

        return view('template_1.template_1', compact('summary', 'twitter', 'linkedin', 'github', 'skills', 'education', 'experiences', 'volunteers', 'publications', 'awards', 'hobbies', 'references', 'projects'));
    }
}
