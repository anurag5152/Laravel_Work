<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TemplateController extends Controller
{
    public function show1()
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

    public function show2()
    {

        $specialties = [
            'User-Centered Design',
            'Interface Innovation',
            'Prototyping & Testing',
            'Design Systems',
        ];

        $summary = "I'm a passionate UX/UI designer who believes every pixel has a purpose. 
                With an eye for aesthetics and a heart for usability, I transform 
                complex problems into intuitive digital experiences that users actually love.
                I'm a passionate UX/UI designer who believes every pixel has a purpose. 
                With an eye for aesthetics and a heart for usability, I transform 
                complex problems into intuitive digital experiences that users actually love.
                I'm a passionate UX/UI designer who believes every pixel has a purpose. 
                With an eye for aesthetics and a heart for usability, I transform 
                complex problems into intuitive digital experiences that users actually love.";

        $socials = [
            'twitter' => 'https://twitter.com/username',
            'linkedin' => 'https://linkedin.com/in/username',
            'instagram' => 'https://instagram.com/username',
        ];

        $skills = [
            ['name' => 'Framer'],
            ['name' => 'Web Design'],
            ['name' => 'Figma'],
            ['name' => 'Logo Design'],
            ['name' => 'Prototype'],
            ['name' => 'UI/UX Design'],
            ['name' => 'Figma'],
            ['name' => 'Logo Design'],
            ['name' => 'Prototype'],
            ['name' => 'UI/UX Design'],
        ];

        $education = [
            [
                'university' => 'Springfield High School',
                'degree'     => 'Schooling',
                'year'       => '2009-2015',
                'icon'       => asset('images/education.png'), // your pin icon
            ],
            [
                'university' => 'XYZ University',
                'degree'     => "Bachelor's",
                'year'       => '2015-2019',
                'icon'       => asset('images/education.png'),
            ],
            [
                'university' => 'ABC Institute',
                'degree'     => 'Professional',
                'year'       => '2019-2021',
                'icon'       => asset('images/education.png'),
            ],
            [
                'university' => 'DEF Academy',
                'degree'     => 'Professional',
                'year'       => '2021-2023',
                'icon'       => asset('images/education.png'),
            ],
        ];

        $projects = [
            [
                'title'       => 'Resume Builder System',
                'short_desc'  => 'A Laravel + PhpWord based resume builder with export features.',
                'description' => 'Built a system where users can create ATS-friendly resumes, export them to DOCX and PDF, and choose from templates.',
                'tech_stack'  => 'Laravel, PhpWord, Bootstrap, MySQL',
                'image'       => asset('images/grid-blue.png'),
                'link'        => 'https://github.com/johndoe/resume-builder',
            ],
            [
                'title'       => 'E-Commerce Website',
                'short_desc'  => 'An online store with cart, checkout, and payment integration.',
                'description' => 'Developed an e-commerce website with admin dashboard, product management, and Stripe payment integration.',
                'tech_stack'  => 'Laravel, Alpine.js, Tailwind, MySQL',
                'image'       => asset('images/grid-blue.png'),
                'link'        => 'https://github.com/johndoe/ecommerce',
            ],
            [
                'title'       => 'Portfolio Website',
                'short_desc'  => 'Personal portfolio showcasing projects and skills.',
                'description' => 'Created a responsive portfolio website with dynamic project and blog sections.',
                'tech_stack'  => 'HTML, CSS, JavaScript, Bootstrap',
                'image'       => asset('images/grid-blue.png'),
                'link'        => 'https://johndoe.dev',
            ],
        ];

        $experience = [
            [
                'company' => 'Tech Corp',
                'position' => 'Software Engineer',
                'desc' => 'Worked on developing and maintaining web applications, collaborating with cross-functional teams to deliver high-quality software solutions.',
                'start' => '2009',
                'end' => '2015',
            ],
            [
                'company' => 'Innovate Ltd',
                'position' => 'Senior Developer',
                'desc' => 'Led a team of developers in designing and implementing scalable software solutions, ensuring code quality and best practices.',
                'start' => '2015',
                'end' => '2019',
            ],
            [
                'company' => 'Global Systems',
                'position' => 'Team Lead',
                'desc' => 'Managed a team of developers, overseeing project timelines, code reviews, and mentoring junior team members to foster professional growth.',
                'start' => '2019',
                'end' => '2023',
            ],
        ];

        $volunteers = [
            [
                'role'        => 'Event Coordinator',
                'duration'    => 'Jan 2023 - Dec 2023',
                'organization' => 'TechFest Community',
                'description' => 'Organized multiple workshops and coding hackathons for students.
                Organized multiple workshops and coding hackathons for students.',
                'location'    => 'Mumbai, India',
            ],
            [
                'role'        => 'Mentor',
                'duration'    => 'Mar 2022 - Oct 2022',
                'organization' => 'Code for Good',
                'description' => 'Mentored underprivileged students in web development basics.Mentored underprivileged students in web development basics.',
                'location'    => 'Delhi, India',
            ],
            [
                'role'        => 'Volunteer Teacher',
                'duration'    => 'Aug 2021 - Present',
                'organization' => 'NGO Learn & Grow',
                'description' => 'Teaching basic computer skills to rural students weekly.Teaching basic computer skills to rural students weekly.',
                'location'    => 'Pune, India',
            ],
        ];

        $publications = [
            [
                'title' => 'Deep Learning for AI',
                'publisher' => 'Tech Journal',
                'year' => 2022,
                'link' => 'https://example.com/deep-learning'
            ],
            [
                'title' => 'Laravel Tips and Tricks',
                'publisher' => 'Web Dev Magazine',
                'year' => 2023,
                'link' => 'https://example.com/laravel-tips'
            ],
            [
                'title' => 'Advanced PHP Techniques',
                'publisher' => 'Code Weekly',
                'year' => 2021,
                'link' => 'https://example.com/php-advanced'
            ],

        ];

        $awards = [
            [
                'title' => 'Best Developer Award',
                'organization' => 'Tech Conference 2023',
                'year' => 2023,
            ],
            [
                'title' => 'Outstanding Contribution',
                'organization' => 'Open Source Community',
                'year' => 2022,
            ],
            [
                'title' => 'Employee of the Year',
                'organization' => 'Awesome Company',
                'year' => 2021,
            ],
        ];

        $hobbies = [
            'Reading',
            'Traveling',
            'Photography',
            'Coding',
            'Gaming',
            'Music',
            'Cycling'
        ];

        $references = [
            [
                'name' => 'John Doe',
                'position' => 'Senior Developer',
                'company' => 'Tech Solutions',
                'email' => 'john@example.com',
                'phone' => '+91 9876543210'
            ],
            [
                'name' => 'Jane Smith',
                'position' => 'Project Manager',
                'company' => 'Innovate Inc',
                'email' => 'jane@example.com',
                'phone' => '+91 9123456789'
            ],
            [
                'name' => 'Robert Brown',
                'position' => 'Team Lead',
                'company' => 'Creative Labs',
                'email' => 'robert@example.com',
                'phone' => '+91 9988776655'
            ],
        ];


        return view('template_2.template_2', compact('specialties', 'summary', 'socials', 'skills', 'education', 'projects', 'experience', 'volunteers', 'publications', 'awards', 'hobbies', 'references'));
    }
    public function show3()
    {

        $summary = "I'm a passionate UI designer who believes every pixel has a purpose. 
                With an eye for aesthetics and a heart for usability, I transform 
                complex problems into intuitive digital experiences that users actually love.
                I'm a passionate UX/UI designer who believes every pixel has a purpose. 
                With an eye for aesthetics and a heart for usability, I transform 
                complex problems into intuitive digital experiences that users actually love.
                I'm a passionate UX/UI designer who believes every pixel has a purpose. 
                With an eye for aesthetics and a heart for usability, I transform 
                complex problems into intuitive digital experiences that users actually love.";

        $socials = [
            'twitter' => 'https://twitter.com/username',
            'linkedin' => 'https://linkedin.com/in/username',
            'instagram' => 'https://instagram.com/username',
        ];

        $skills = [
            ['name' => 'React', 'percent' => 95],
            ['name' => 'Node.js', 'percent' => 65],
            ['name' => 'MongoDB', 'percent' => 45],
            ['name' => 'AWS', 'percent' => 100],
            ['name' => 'Postman', 'percent' => 85],
            ['name' => 'Postman', 'percent' => 86],
            ['name' => 'Postman', 'percent' => 80],
            ['name' => 'Postman', 'percent' => 28],
            ['name' => 'Postman', 'percent' => 88],
            ['name' => 'Postman', 'percent' => 89],
            ['name' => 'Postman', 'percent' => 81],
        ];

        $education = [
            [
                'university' => 'Harvard University',
                'degree'     => 'Bachelor of Computer Science',
                'duration'   => '2009 - 2013',
            ],
            [
                'university' => 'MIT',
                'degree'     => 'Master of Software Engineering',
                'duration'   => '2013 - 2015',
            ],
            [
                'university' => 'Stanford University',
                'degree'     => 'PhD in Artificial Intelligence',
                'duration'   => '2016 - 2020',
            ],
            [
                'university' => 'Stanford University',
                'degree'     => 'PhD in Artificial Intelligence',
                'duration'   => '2016 - 2020',
            ]
        ];
        $experiences = [
            [
                'title'       => 'Senior Full-Stack Developer',
                'duration'    => 'March 2022 - Present',
                'job_type'    => 'Full-Time',
                'company'     => 'TechFlow Solutions',
                'description' => 'Lead development of enterprise-level web applications serving 50K+ daily users',
                'location'    => 'Newyork'
            ],
            [
                'title'       => 'Software Developer',
                'duration'    => 'March 2022 - Present',
                'job_type'    => 'Full-Time',
                'company'     => 'StartupHub Inc.',
                'description' => 'Lead development of enterprise-level web applications serving 50K+ daily users',
                'location'    => 'Newyork'
            ],
            [
                'title'       => 'Junior Developer',
                'duration'    => 'March 2022 - Present',
                'job_type'    => 'Full-Time',
                'company'     => 'CodeCraft Agency',
                'description' => 'Lead development of enterprise-level web applications serving 50K+ daily users',
                'location'    => 'Newyork'
            ],
        ];

        $volunteers = [
            [
                'title' => 'Community Teacher',
                'duration' => 'Jan 2020 - Dec 2021',
                'organization' => 'Local Education NGO',
                'description' => 'Taught underprivileged children basic computer skills and English.',
                'location' => 'New Delhi, India'
            ],
            [
                'title' => 'Event Coordinator',
                'duration' => '2018 - 2019',
                'organization' => 'Youth Empowerment Foundation',
                'description' => 'Organized workshops and fundraising events for skill development.',
                'location' => 'Mumbai, India'
            ],
        ];

        $projects = [
            [
                'title'       => 'Resume Builder System',
                'short_desc'  => 'A Laravel + PhpWord based resume builder with export features.',
                'description' => 'Built a system where users can create ATS-friendly resumes, export them to DOCX and PDF, and choose from templates.',
                'tech_stack'  => 'Laravel, PhpWord, Bootstrap, MySQL',
                'image'       => asset('images/grid-blue.png'),
                'link'        => 'https://github.com/johndoe/resume-builder',
            ],
            [
                'title'       => 'E-Commerce Website',
                'short_desc'  => 'An online store with cart, checkout, and payment integration.',
                'description' => 'Developed an e-commerce website with admin dashboard, product management, and Stripe payment integration.',
                'tech_stack'  => 'Laravel, Alpine.js, Tailwind, MySQL',
                'image'       => asset('images/grid-blue.png'),
                'link'        => 'https://github.com/johndoe/ecommerce',
            ],
            [
                'title'       => 'Portfolio Website',
                'short_desc'  => 'Personal portfolio showcasing projects and skills.',
                'description' => 'Created a responsive portfolio website with dynamic project and blog sections.',
                'tech_stack'  => 'HTML, CSS, JavaScript, Bootstrap',
                'image'       => asset('images/grid-blue.png'),
                'link'        => 'https://johndoe.dev',
            ],
        ];
        $publications = [
            [
                'title'       => 'Designing Scalable Web Applications',
                'authors'     => 'John Doe',
                'journal'     => 'International Journal of Computer Science',
                'year'        => '2023',
                'description' => 'A study on scalable architectures for high-traffic web applications.',
                'link'        => 'https://example.com/publication1'
            ],
            [
                'title'       => 'AI in Modern UI/UX',
                'authors'     => 'Jane Smith',
                'journal'     => 'UI/UX Innovation Conference',
                'year'        => '2022',
                'description' => 'Exploring the role of AI in creating adaptive user interfaces.',
                'link'        => 'https://example.com/publication2'
            ],
        ];

        $awards = [
            [
                'title'       => 'Best UI Designer',
                'organization' => 'Design Summit 2023',
                'year'        => '2023',
                'description' => 'Awarded for outstanding creativity and innovation in user interface design.'
            ],
            [
                'title'       => 'Employee of the Year',
                'organization' => 'TechFlow Solutions',
                'year'        => '2022',
                'description' => 'Recognized for leading multiple successful projects and mentoring juniors.'
            ],
            [
                'title'       => 'Innovation in AI',
                'organization' => 'AI Expo',
                'year'        => '2021',
                'description' => 'Honored for building AI-driven tools enhancing UX adaptability.'
            ],
        ];

        $hobbies = [
            [
                'name' => 'Photography',
                'icon' => 'bi-camera', // Bootstrap Icon class
                'description' => 'Capturing nature and street photography during travels.'
            ],
            [
                'name' => 'Reading',
                'icon' => 'bi-book',
                'description' => 'Exploring books on psychology, technology, and history.'
            ],
            [
                'name' => 'Cycling',
                'icon' => 'bi-bicycle',
                'description' => 'Long rides during weekends to stay fit and adventurous.'
            ],
            [
                'name' => 'Gaming',
                'icon' => 'bi-controller',
                'description' => 'Competitive eSports and casual gaming with friends.'
            ],
        ];

        $references = [
            [
                'name'       => 'Ankit Raj',
                'position'   => 'Assistant Director',
                'company'    => 'Labour Department',
                'email'      => 'ankit.raj@example.com',
                'phone'      => '+91 9876543210',
            ],
            [
                'name'       => 'Priya Sharma',
                'position'   => 'HR Manager',
                'company'    => 'TechFlow Solutions',
                'email'      => 'priya.sharma@example.com',
                'phone'      => '+91 9988776655',
            ],
        ];

        return view('template_3.template_3', compact('summary', 'socials', 'skills', 'education', 'experiences', 'volunteers', 'projects', 'publications', 'awards', 'hobbies', 'references'));
    }

    public function show4()
    {

        $paragraph = "Passionate copywriter with 4+ years of experience crafting compelling content that converts. 
        I specialize in creating authentic brand voices that resonate with audiences and drive results. 
        My approach combines strategic thinking with creative storytelling to deliver copy that not only sounds great but performs even better. 
        From startups to established brands, I help businesses communicate their value clearly and persuasively. 
        When I'm not writing, you’ll find me exploring NYC’s coffee scene, reading mystery novels, or planning my next travel adventure.";

        $image = "images/about.png";

        $skills = [
            ['name' => 'React', 'percent' => 95],
            ['name' => 'Node.js', 'percent' => 65],
            ['name' => 'MongoDB', 'percent' => 45],
            ['name' => 'AWS', 'percent' => 100],
            ['name' => 'Postman', 'percent' => 85],
            ['name' => 'Postman', 'percent' => 86],
            ['name' => 'Postman', 'percent' => 80],
            ['name' => 'Postman', 'percent' => 28],
            ['name' => 'Postman', 'percent' => 88],
            ['name' => 'Postman', 'percent' => 89],
            ['name' => 'Postman', 'percent' => 81],
        ];

        $education = [
            [
                'institution' => 'Columbia University',
                'years' => '2016-2020',
                'degree' => 'Bachelor of Arts - English Literature',
                'field' => 'English Literature',
            ],
            [
                'institution' => 'Harvard Extension School',
                'years' => '2021',
                'degree' => 'Certification - Creative Writing',
                'field' => 'Short Stories & Essays',
            ],
            [
                'institution' => 'Columbia University',
                'years' => '2016-2020',
                'degree' => 'Bachelor of Arts - English Literature',
                'field' => 'English Literature',
            ],
            [
                'institution' => 'Harvard Extension School',
                'years' => '2021',
                'degree' => 'Certification - Creative Writing',
                'field' => 'Short Stories & Essays',
            ]
        ];

        $experiences = [
            [
                'role' => 'Senior Freelance Copywriter',
                'company' => 'Self-Employed',
                'description' => 'Generated $2M+ in client revenue through copy optimization',
                'extra' => 'Manage 10+ ongoing client relationships',
                'date' => '2022 - Present',
            ],
            [
                'role' => 'Content Marketing Specialist',
                'company' => 'Self-Employed',
                'description' => 'Generated $2M+ in client revenue through copy optimization',
                'extra' => 'Manage 10+ ongoing client relationships',
                'date' => '2021 - 2022',
            ],
            [
                'role' => 'Junior Copy-writer',
                'company' => 'Self-Employed',
                'description' => 'Generated $2M+ in client revenue through copy optimization',
                'extra' => 'Manage 10+ ongoing client relationships',
                'date' => '2020 - 2021',
            ],
        ];

        $projects = [
            [
                'title' => 'Tech-writer',
                'year' => '2022',
                'link'        => 'https://github.com/johndoe/ecommerce',
                'tech_stack'  => 'Laravel, PhpWord, Bootstrap, MySQL',
                'description' => 'Rewrite complete onboarding email sequence resulting in 65% increase in trial-to-paid conversions.',
                'image' => 'images/edu4.png',
            ],
            [
                'title' => 'E-commerce website copy',
                'year' => '2022',
                'link'        => 'https://github.com/johndoe/ecommerce',
                'tech_stack'  => 'Laravel, PhpWord, Bootstrap, MySQL',
                'description' => 'Rewrite complete onboarding email sequence resulting in 65% increase in trial-to-paid conversions.',
                'image' => 'images/edu4.png',
            ],
            [
                'title' => 'Content-marketing',
                'year' => '2022',
                'link'        => 'https://github.com/johndoe/ecommerce',
                'tech_stack'  => 'Laravel, PhpWord, Bootstrap, MySQL',
                'description' => 'Rewrite complete onboarding email sequence resulting in 65% increase in trial-to-paid conversions.',
                'image' => 'images/edu4.png',
            ],
        ];

        $volunteers = [
            [
                'role' => 'Community Mentor',
                'organization' => 'Open Source Initiative',
                'description' => 'Guided students in contributing to open-source projects.',
                'year' => '2023 - Present',
            ],
            [
                'role' => 'Event Organizer',
                'organization' => 'Tech for Good',
                'description' => 'Organized annual hackathon for social impact.',
                'year' => '2021 - 2022',
            ],
        ];

        $publications = [
            [
                'title' => 'Effective Copywriting Strategies',
                'description' => 'Exploring modern techniques in persuasive writing.',
                'publisher' => 'Marketing Weekly',
                'year' => '2023',
            ],
            [
                'title' => 'Content Marketing in the AI Era',
                'description' => 'How AI is shaping the future of content.',
                'publisher' => 'Digital Trends Journal',
                'year' => '2022',
            ],
        ];

        $awards = [
            [
                'title' => 'Best Content Strategist',
                'description' => 'Awarded for outstanding performance in marketing campaigns.',
                'year' => '2023',
            ],
            [
                'title' => 'Top Copywriter Award',
                'description' => 'Recognized for excellence in persuasive writing.',
                'year' => '2022',
            ],
        ];

        $hobbies = [
            [
                'name' => 'Photography',
                'description' => 'Capturing moments through the lens.',
            ],
            [
                'name' => 'Traveling',
                'description' => 'Exploring new cultures and places.',
            ],
            [
                'name' => 'Gaming',
                'description' => 'Competitive and casual online gaming.',
            ],
            [
                'name' => 'Reading',
                'description' => 'Enjoying fiction & non-fiction books.',
            ],
        ];

        $references = [
            [
                'name' => 'Ankit Raj',
                'position' => 'Assistant Director',
                'company' => 'Labour Department',
                'email' => 'ankit.raj@example.com',
                'phone' => '+91 9876543210',
            ],
            [
                'name' => 'Priya Sharma',
                'position' => 'HR Manager',
                'company' => 'Creative Minds Pvt Ltd',
                'email' => 'priya.sharma@example.com',
                'phone' => '+91 9123456789',
            ],
        ];

        return view('template_4.template_4', compact('paragraph', 'image', 'skills', 'education', 'experiences', 'projects', 'volunteers', 'publications', 'hobbies', 'awards', 'references'));
    }
    public function show5()
    {
        $paragraph = "Passionate copywriter with 4+ years of experience crafting compelling content that converts. 
        I specialize in creating authentic brand voices that resonate with audiences and drive results. 
        My approach combines strategic thinking with creative storytelling to deliver copy that not only sounds great but performs even better. 
        From startups to established brands, I help businesses communicate their value clearly and persuasively. 
        When I'm not writing, you’ll find me exploring NYC’s coffee scene, reading mystery novels, or planning my next travel adventure.";

        $image = "images/about.png";

        $skills = [
            [
                'name' => 'Frontend',
                'items' => ['HTML', 'CSS', 'JavaScript', 'React', 'Bootstrap']
            ],
            [
                'name' => 'Backend',
                'items' => ['PHP', 'Laravel', 'Node.js', 'MySQL', 'REST APIs']
            ],
            [
                'name' => 'Tools & Others',
                'items' => ['Git', 'Docker', 'AWS', 'Figma', 'CI/CD']
            ],
            [
                'name' => 'Frontend',
                'items' => ['HTML', 'CSS', 'JavaScript', 'React', 'Bootstrap']
            ],
            [
                'name' => 'Backend',
                'items' => ['PHP', 'Laravel', 'Node.js', 'MySQL', 'REST APIs']
            ],
            [
                'name' => 'Tools & Others',
                'items' => ['Git', 'Docker', 'AWS', 'Figma', 'CI/CD']
            ]

        ];

        $education = [
            [
                'institution' => 'Columbia University',
                'years' => '2016-2020',
                'degree' => 'Bachelor of Arts - English Literature',
                'field' => 'English Literature',
            ],
            [
                'institution' => 'Harvard Extension School',
                'years' => '2021',
                'degree' => 'Certification - Creative Writing',
                'field' => 'Short Stories & Essays',
            ],
            [
                'institution' => 'Columbia University',
                'years' => '2016-2020',
                'degree' => 'Bachelor of Arts - English Literature',
                'field' => 'English Literature',
            ],
            [
                'institution' => 'Harvard Extension School',
                'years' => '2021',
                'degree' => 'Certification - Creative Writing',
                'field' => 'Short Stories & Essays',
            ]
        ];

        $experiences = [
            [
                'title'       => 'Senior Full-Stack Developer',
                'duration'    => 'March 2022 - Present',
                'job_type'    => 'Full-Time',
                'company'     => 'TechFlow Solutions',
                'description' => 'Lead development of enterprise-level web applications serving 50K+ daily users',
                'location'    => 'Newyork'
            ],
            [
                'title'       => 'Software Developer',
                'duration'    => 'March 2022 - Present',
                'job_type'    => 'Full-Time',
                'company'     => 'StartupHub Inc.',
                'description' => 'Lead development of enterprise-level web applications serving 50K+ daily users',
                'location'    => 'Newyork'
            ],
            [
                'title'       => 'Junior Developer',
                'duration'    => 'March 2022 - Present',
                'job_type'    => 'Full-Time',
                'company'     => 'CodeCraft Agency',
                'description' => 'Lead development of enterprise-level web applications serving 50K+ daily users',
                'location'    => 'Newyork'
            ],
        ];

        $projects = [
            [
                'id' => 1,
                'title' => 'Customer 360 Intelligence',
                'image' => asset('images/grid-blue.png'),
                'link' => 'https://github.com/yourusername/project1',
                'description' => 'A dashboard that integrates customer data across multiple sources to create a 360-degree view for better decision-making.'
            ],
            [
                'id' => 2,
                'title' => 'Behavioral Blueprint',
                'image' => asset('images/grid-blue.png'),
                'link' => 'https://github.com/yourusername/project2',
                'description' => 'Predictive analytics project for user behavior modeling and journey mapping.'
            ],
            [
                'id' => 3,
                'title' => 'Lifetime Value Predictor',
                'image' => asset('images/grid-blue.png'),
                'link' => 'https://github.com/yourusername/project3',
                'description' => 'Machine learning model that predicts the lifetime value of customers based on past activity.'
            ],
            [
                'id' => 4,
                'title' => 'Segment & Scale',
                'image' => asset('images/grid-blue.png'),
                'link' => 'https://github.com/yourusername/project4',
                'description' => 'Tool for customer segmentation and scalable marketing strategies.'
            ],
            [
                'id' => 5,
                'title' => 'Persona Data Lab',
                'image' => asset('images/grid-blue.png'),
                'link' => 'https://github.com/yourusername/project5',
                'description' => 'Data visualization lab to analyze personas and target audiences effectively.'
            ],
            [
                'id' => 6,
                'title' => 'Persona Data Lab',
                'image' => asset('images/grid-blue.png'),
                'link' => 'https://github.com/yourusername/project5',
                'description' => 'Data visualization lab to analyze personas and target audiences effectively.'
            ]
        ];
        $volunteers = [
            [
                'role' => 'Assistant Director',
                'organization' => 'Labour Department',
                'duration' => 'Jan 2022 - Dec 2022',
                'description' => 'Organized awareness campaigns and helped coordinate labor welfare programs.'
            ],
            [
                'role' => 'Community Teacher',
                'organization' => 'Local NGO',
                'duration' => 'Mar 2021 - Nov 2021',
                'description' => 'Taught underprivileged children mathematics and science on weekends.'
            ],
            [
                'role' => 'Event Coordinator',
                'organization' => 'TechFest 2020',
                'duration' => 'Aug 2020 - Feb 2021',
                'description' => 'Managed volunteer team and logistics for inter-college technical festival.'
            ],
        ];

        $publications = [
            [
                'title' => 'AI-driven Predictive Models in Healthcare',
                'authors' => 'John Doe, Jane Smith',
                'journal' => 'International Journal of AI Research',
                'year' => '2023',
                'link' => 'https://example.com/publication1'
            ],
            [
                'title' => 'Big Data Analytics for Customer Insights',
                'authors' => 'Steven Job, Alan Turing',
                'journal' => 'Data Science Conference Proceedings',
                'year' => '2022',
                'link' => 'https://example.com/publication2'
            ],
            [
                'title' => 'Machine Learning in Marketing Automation',
                'authors' => 'Michael Scott',
                'journal' => 'Journal of Business Intelligence',
                'year' => '2021',
                'link' => 'https://example.com/publication3'
            ],
        ];

        $awards = [
            [
                'title' => 'Best Innovator Award',
                'issuer' => 'TechFest 2022',
                'year' => '2022',
                'description' => 'Awarded for developing an AI-powered recommendation system.'
            ],
            [
                'title' => 'Employee of the Year',
                'issuer' => 'ABC Corp',
                'year' => '2021',
                'description' => 'Recognized for outstanding performance in software development.'
            ],
            [
                'title' => 'Top 10 Hackathon Finalist',
                'issuer' => 'National Hackathon',
                'year' => '2020',
                'description' => 'Reached the final round among 500+ teams nationwide.'
            ],
        ];

        $hobbies = [
            [
                'name' => 'Photography',
                'icon' => 'bi bi-camera', // Bootstrap Icons
                'description' => 'Capturing moments and telling stories through images.'
            ],
            [
                'name' => 'Traveling',
                'icon' => 'bi bi-geo-alt',
                'description' => 'Exploring new cultures, food, and experiences.'
            ],
            [
                'name' => 'Reading',
                'icon' => 'bi bi-book',
                'description' => 'Diving into fiction, non-fiction, and research papers.'
            ],
            [
                'name' => 'Gaming',
                'icon' => 'bi bi-controller',
                'description' => 'Playing strategy and adventure games for fun and creativity.'
            ],
        ];

        return view('template_5.template_5', compact('paragraph', 'image', 'skills', 'education', 'experiences', 'projects', 'publications', 'volunteers', 'awards', 'hobbies'));
    }
    public function show6()
    {
        $profileSummary = [
            'title' => 'About me',
            'description' => "I'm a graphic designer who believes that great design goes beyond aesthetics—it communicates, inspires, and creates connections. With over 5 years in the industry, I've had the privilege of working with diverse clients, from innovative startups to established brands. My approach combines strategic thinking with creative execution. I don't just make things look beautiful; I ensure they serve a purpose and resonate with the intended audience. Whether it's crafting a complete brand identity or designing a single poster, I'm committed to delivering work that makes an impact. When I'm not designing, you can find me exploring art galleries, experimenting with new design trends, or enjoying a good cup of coffee while sketching ideas.",
            'socials' => [
                ['icon' => 'bi bi-instagram', 'url' => 'https://instagram.com'],
                ['icon' => 'bi bi-linkedin', 'url' => 'https://linkedin.com'],
                ['icon' => 'bi bi-twitter',  'url' => 'https://twitter.com'],
            ]
        ];

        $skills = [
            [
                'name' => 'Frontend',
                'items' => ['HTML', 'CSS', 'JavaScript', 'React', 'Bootstrap']
            ],
            [
                'name' => 'Backend',
                'items' => ['PHP', 'Laravel', 'Node.js', 'MySQL', 'REST APIs']
            ],
            [
                'name' => 'Tools & Others',
                'items' => ['Git', 'Docker', 'AWS', 'Figma', 'CI/CD']
            ],
            [
                'name' => 'Frontend',
                'items' => ['HTML', 'CSS', 'JavaScript', 'React', 'Bootstrap']
            ],
            [
                'name' => 'Backend',
                'items' => ['PHP', 'Laravel', 'Node.js', 'MySQL', 'REST APIs']
            ],
            [
                'name' => 'Tools & Others',
                'items' => ['Git', 'Docker', 'AWS', 'Figma', 'CI/CD']
            ]

        ];

        $educations = [
            [
                'university' => 'Harvard University',
                'degree' => 'Bachelor of Design',
                'year' => '2009 - 2013'
            ],
            [
                'university' => 'Stanford University',
                'degree' => 'Masters in Graphic Design',
                'year' => '2013 - 2015'
            ],
            [
                'university' => 'Oxford University',
                'degree' => 'PhD in Visual Arts',
                'year' => '2015 - 2019'
            ]
        ];

        $projectsLeft = [
            ['name' => 'Dessert café identity', 'image' => 'images/bgg6.png', 'url' => '#'],
            ['name' => 'Harvest & Hearth', 'image' => 'images/bgg6.png', 'url' => '#'],
        ];

        $projectsRight = [
            ['name' => 'Artesian Bakery Identity', 'image' => 'images/bgg6.png', 'url' => '#'],
            ['name' => 'NexaTech Solutions', 'image' => 'images/bgg6.png', 'url' => '#'],
        ];

        $projectsCenter = [
            'Dessert café identity',
            'Artesian Bakery Identity',
            'Harvest & Hearth',
            'NexaTech Solutions',
        ];

        $projectsSection = [
            'title' => 'Projects',
            'projectsLeft' => $projectsLeft,
            'projectsCenter' => $projectsCenter,
            'projectsRight' => $projectsRight,
        ];

        $experiences = [
            [
                'role' => 'Senior Graphic Designer',
                'company' => 'Creative Studios Inc.',
                'duration' => '2022 - Present',
                'description' => 'Lead designer for 15+ brand identity projects, increasing client satisfaction by 30%'
            ],
            [
                'role' => 'Graphic Designer',
                'company' => 'DesignWorks Ltd.',
                'duration' => '2018 - 2022',
                'description' => 'Developed creative assets for over 50 marketing campaigns'
            ],
            [
                'role' => 'Junior Designer',
                'company' => 'ArtSpace Agency',
                'duration' => '2015 - 2018',
                'description' => 'Assisted in UI/UX design and branding projects'
            ],
        ];

        $volunteers = [
            [
                'role' => 'Community Designer',
                'organization' => 'Local Arts NGO',
                'duration' => '2021 - Present',
                'description' => 'Organized design workshops for underprivileged students'
            ],
            [
                'role' => 'Event Volunteer',
                'organization' => 'CreativeFest',
                'duration' => '2019 - 2021',
                'description' => 'Managed visual branding and stage design'
            ],
        ];

        $publications = [
            [
                'title' => 'Designing for Social Impact',
                'journal' => 'Design Journal',
                'year' => '2022',
                'summary' => 'Research on how branding influences nonprofit outreach'
            ],
            [
                'title' => 'Minimalism in Modern UI',
                'journal' => 'Creative Magazine',
                'year' => '2020',
                'summary' => 'Article exploring UI trends and their effectiveness'
            ],
        ];

        $awards = [
            [
                'title' => 'Best Graphic Designer',
                'organization' => 'Creative Awards',
                'year' => '2023',
                'description' => 'Recognized for outstanding brand identity projects.'
            ],
            [
                'title' => 'Innovator Award',
                'organization' => 'Design Expo',
                'year' => '2021',
                'description' => 'Awarded for innovative use of minimalism in UI design.'
            ],
        ];

        $hobbies = [
            [
                'name' => 'Photography',
                'description' => 'Capturing street and nature photography during travels.'
            ],
            [
                'name' => 'Sketching',
                'description' => 'Exploring new design ideas through freehand sketches.'
            ],
            [
                'name' => 'Gaming',
                'description' => 'Passionate about design-heavy games and storytelling.'
            ],
        ];
        $references = [
            [
                'name' => 'Ankit Raj',
                'position' => 'Assistant Director',
                'company' => 'Labour Department',
                'email' => 'ankit.raj@example.com',
                'phone' => '+91 98765 43210',
            ],
            [
                'name' => 'Sarah Johnson',
                'position' => 'Creative Lead',
                'company' => 'DesignHub Inc.',
                'email' => 'sarah.j@example.com',
                'phone' => '+1 234 567 890',
            ],
        ];
        return view('template_6.template_6', compact('profileSummary', 'skills', 'educations', 'projectsSection', 'experiences', 'volunteers', 'publications', 'awards', 'hobbies', 'references'));
    }
    public function show7()
    {
        $paragraph = "I'm a results-driven CEO with over 15 years of experience building and scaling high-growth companies across diverse industries. My journey began in engineering, where I developed a deep appreciation for systematic problem-solving and data-driven decision making. This technical foundation, combined with advanced business training, has enabled me to bridge the gap between innovation and execution.";

        $links = [
            'twitter' => 'https://twitter.com/yourprofile',
            'linkedin' => 'https://linkedin.com/in/yourprofile',
            'instagram' => 'https://instagram.com/yourprofile'
        ];
        $skills = [
            ['name' => 'React', 'percent' => 95],
            ['name' => 'Node.js', 'percent' => 55],
            ['name' => 'MongoDB', 'percent' => 100],
            ['name' => 'AWS', 'percent' => 45],
            ['name' => 'PostMan', 'percent' => 95],
            ['name' => 'MongoDB', 'percent' => 100],
            ['name' => 'AWS', 'percent' => 45],
            ['name' => 'PostMan', 'percent' => 95],
        ];
        $education = [
            [
                'institution' => 'Columbia University',
                'year' => '2016-2020',
                'degree' => 'Bachelor of Arts - English Literature',
                'field' => 'English - Literature',
            ],
            [
                'institution' => 'Oxford University',
                'year' => '2020-2022',
                'degree' => 'Master of Arts - Creative Writing',
                'field' => 'Creative Writing',
            ],
            [
                'institution' => 'Oxford University',
                'year' => '2020-2022',
                'degree' => 'Master of Arts - Creative Writing',
                'field' => 'Creative Writing',
            ]
        ];
        $experience = [
            [
                'position' => 'Senior Full-Stack Developer',
                'duration' => 'March 2022 - Present',
                'company' => 'TechFlow Solutions',
                'description' => 'Lead development of enterprise-level web applications serving 50K+ daily users',
                'location' => 'New York'
            ],
            [
                'position' => 'Senior Full-Stack Developer',
                'duration' => 'March 2022 - Present',
                'company' => 'TechFlow Solutions',
                'description' => 'Lead development of enterprise-level web applications serving 50K+ daily users',
                'location' => 'New York'
            ],
            [
                'position' => 'Senior Full-Stack Developer',
                'duration' => 'March 2022 - Present',
                'company' => 'TechFlow Solutions',
                'description' => 'Lead development of enterprise-level web applications serving 50K+ daily users',
                'location' => 'New York'
            ],
            [
                'position' => 'Senior Full-Stack Developer',
                'duration' => 'March 2022 - Present',
                'company' => 'TechFlow Solutions',
                'description' => 'Lead development of enterprise-level web applications serving 50K+ daily users',
                'location' => 'New York'
            ]
        ];
        $projects = [
            [
                'title' => 'Expense Tracker',
                'image' => asset('images/about.png'),
                'github' => 'https://github.com/yourusername/expense-tracker',
                'preview' => 'https://yourwebsite.com/expense-tracker'
            ],
            [
                'title' => 'Password Generator',
                'image' => asset('images/about.png'),
                'github' => 'https://github.com/yourusername/password-generator',
                'preview' => 'https://yourwebsite.com/password-generator'
            ],
            [
                'title' => 'Task Manager',
                'image' => asset('images/about.png'),
                'github' => 'https://github.com/yourusername/task-manager',
                'preview' => 'https://yourwebsite.com/task-manager'
            ],
            [
                'title' => 'Task Manager',
                'image' => asset('images/about.png'),
                'github' => 'https://github.com/yourusername/task-manager',
                'preview' => 'https://yourwebsite.com/task-manager'
            ]
        ];
        $volunteers = [
            [
                'title' => 'Community Mentor',
                'organization' => 'Tech Mentors Hub',
                'description' => 'Guided 50+ students in web development and project building.',
                'date' => 'Jan 2023 – Present',
                'link' => 'https://techmentorshub.org'
            ],
            [
                'title' => 'Event Volunteer',
                'organization' => 'CodeFest 2024',
                'description' => 'Assisted in organizing and managing coding competitions.',
                'date' => 'Oct 2024',
                'link' => 'https://codefest2024.org'
            ]
        ];

        $publications = [
            [
                'title' => 'Optimizing Full-Stack Applications',
                'publisher' => 'Tech Journal',
                'description' => 'Published an article on performance optimization techniques for scalable web apps.',
                'date' => 'June 2023',
                'link' => 'https://techjournal.com/fullstack-optimization'
            ],
            [
                'title' => 'AI in Frontend Development',
                'publisher' => 'Dev Weekly',
                'description' => 'Explored the integration of AI tools in frontend workflow automation.',
                'date' => 'March 2024',
                'link' => 'https://devweekly.com/ai-frontend'
            ]
        ];
        $awards = [
            [
                'title' => 'Best Full-Stack Developer',
                'issuer' => 'TechFlow Awards',
                'date' => 'December 2024',
                'description' => 'Recognized for exceptional contributions in building scalable web platforms.',
                'link' => 'https://techflowawards.com/certificate123'
            ],
            [
                'title' => 'Innovation Hackathon Winner',
                'issuer' => 'CodeSprint',
                'date' => 'July 2023',
                'description' => 'Won 1st place for developing an AI-powered project management tool.',
                'link' => 'https://codesprint.org/winner-list'
            ]
        ];

        $hobbies = [
            [
                'name' => 'Photography',
                'emoji' => '📸',
                'description' => 'Capturing landscapes and city life through my lens.'
            ],
            [
                'name' => 'Gaming',
                'emoji' => '🎮',
                'description' => 'Enjoy competitive and strategy games during leisure.'
            ],
            [
                'name' => 'Cycling',
                'emoji' => '🚴',
                'description' => 'Weekend rides to explore nature trails and improve endurance.'
            ],
            [
                'name' => 'Reading',
                'emoji' => '📚',
                'description' => 'Exploring fiction, tech blogs, and self-growth books.'
            ]
        ];
        $references = [
            [
                'name' => 'John Doe',
                'position' => 'Senior Software Engineer',
                'company' => 'TechCorp Pvt. Ltd.',
                'email' => 'john.doe@example.com',
                'phone' => '+1 987-654-3210'
            ],
            [
                'name' => 'Jane Smith',
                'position' => 'Project Manager',
                'company' => 'Innovate Solutions',
                'email' => 'jane.smith@example.com',
                'phone' => '+1 876-543-2109'
            ],
            [
                'name' => 'Robert Lee',
                'position' => 'CTO',
                'company' => 'FutureTech Inc.',
                'email' => 'robert.lee@example.com',
                'phone' => '+1 765-432-1098'
            ]
        ];
        $contact = [
            'email' => 'example@gmail.com',
            'whatsapp' => '+91 9876543210',
            'instagram' => '@yourhandle'
        ];

        return view('template_7.template_7', compact('paragraph', 'links', 'skills', 'education', 'experience', 'projects', 'publications', 'volunteers', 'hobbies', 'awards', 'references', 'contact'));
    }
    public function show8()
    {
        $summary = "I'm a results-driven CEO with over 15 years of experience building and scaling high-growth companies across diverse industries. My journey began in engineering, where I developed a deep appreciation for systematic problem-solving and data-driven decision making. This technical foundation, combined with advanced business training, has enabled me to bridge the gap between innovation and execution.";

        $email = "alivehire@gmail.com";
        $skills = [
            ['name' => 'Data Analytics', 'percentage' => 75],
            ['name' => 'Digital Transformation', 'percentage' => 90],
            ['name' => 'Financial Modeling', 'percentage' => 100],
            ['name' => 'Project Management', 'percentage' => 45],
            ['name' => 'Project Management', 'percentage' => 55],
        ];
        $education = [
            [
                'university' => 'Name Of The University',
                'degree'     => 'Bachelor’s',
                'year'       => '2009-15',
            ],
            [
                'university' => 'Name Of The University',
                'degree'     => 'Master’s',
                'year'       => '2016-18',
            ],
            [
                'university' => 'Another University',
                'degree'     => 'PhD',
                'year'       => '2019-23',
            ],
        ];
        $experiences = [
            [
                'year'       => '2015–16',
                'position'   => 'Senior-Software Eng.',
                'company'    => 'Netflix',
                'description' => 'Leading backend architecture for streaming platform serving 260M+ global subscribers.'
            ],
            [
                'year'       => '2016–18',
                'position'   => 'Tech Lead',
                'company'    => 'Google',
                'description' => 'Worked on scalable distributed systems for search indexing and ML.'
            ],
            [
                'year'       => '2019–23',
                'position'   => 'Engineering Manager',
                'company'    => 'Amazon',
                'description' => 'Directed a team building high-availability e-commerce systems.'
            ]
        ];
        $projects = [
            [
                'id' => 1,
                'title' => 'Expense Tracker',
                'description' => 'A web app to track daily expenses with charts.',
                'github' => 'https://github.com/username/expense-tracker',
                'image' => asset('images/grid.png')
            ],
            [
                'id' => 2,
                'title' => 'Task Manager',
                'description' => 'Manage tasks with priorities and deadlines.',
                'github' => 'https://github.com/username/task-manager',
                'image' => asset('images/grid.png')
            ],
            [
                'id' => 3,
                'title' => 'Password Generator',
                'description' => 'Secure password generator with strength indicator.',
                'github' => 'https://github.com/username/password-generator',
                'image' => asset('images/grid.png')
            ],
            [
                'id' => 4,
                'title' => 'Password Generator',
                'description' => 'Secure password generator with strength indicator.',
                'github' => 'https://github.com/username/password-generator',
                'image' => asset('images/grid.png')
            ],
        ];
        $volunteer = [
            [
                'id' => 1,
                'organization' => 'Open Source Community',
                'role' => 'Contributor',
                'year' => '2023',
                'description' => 'Contributed to open-source projects by fixing bugs and improving documentation.',
                'logo' => asset('images/frame.png')
            ],
            [
                'id' => 2,
                'organization' => 'Local NGO',
                'role' => 'Event Coordinator',
                'year' => '2022',
                'description' => 'Organized charity events and managed volunteers for community initiatives.',
                'logo' => asset('images/frame.png')
            ],
        ];
        $publications = [
            [
                'id' => 1,
                'title' => 'Deep Learning for Image Recognition',
                'publisher' => 'IEEE International Conference',
                'year' => '2023',
                'description' => 'A study on applying convolutional neural networks for medical image recognition.',
                'link' => 'https://ieeexplore.ieee.org/document/example'
            ],
            [
                'id' => 2,
                'title' => 'AI in Financial Forecasting',
                'publisher' => 'Springer Journal of Data Science',
                'year' => '2022',
                'description' => 'Exploring predictive models for stock market trends using machine learning.',
                'link' => 'https://link.springer.com/article/example'
            ],
        ];
        $awards = [
            [
                'id' => 1,
                'title' => 'Best Innovator Award',
                'organization' => 'Tech Expo 2023',
                'year' => '2023',
                'description' => 'Recognized for developing an AI-powered expense tracking system.',
                'icon' => asset('images/frame.png')
            ],
            [
                'id' => 2,
                'title' => 'Outstanding Contributor',
                'organization' => 'Open Source Community',
                'year' => '2022',
                'description' => 'Awarded for significant contributions to multiple open-source projects.',
                'icon' => asset('images/frame.png')
            ],
        ];
        $hobbies = [
            [
                'id' => 1,
                'name' => 'Photography',
                'description' => 'Capturing moments and experimenting with creative visuals.',
                'icon' => asset('images/frame.png')
            ],
            [
                'id' => 2,
                'name' => 'Reading',
                'description' => 'Exploring fiction and self-growth books for inspiration.',
                'icon' => asset('images/frame.png')
            ],
            [
                'id' => 3,
                'name' => 'Traveling',
                'description' => 'Discovering new cultures and places across the globe.',
                'icon' => asset('images/frame.png')
            ],
            [
                'id' => 4,
                'name' => 'Gaming',
                'description' => 'Enjoying strategy and adventure games in free time.',
                'icon' => asset('images/frame.png')
            ],
        ];
        $references = [
            [
                'id' => 1,
                'name' => 'Dr. John Smith',
                'position' => 'Professor of Computer Science',
                'organization' => 'ABC University',
                'email' => 'john.smith@abcuniversity.edu',
                'phone' => '+91 98765 43210'
            ],
            [
                'id' => 2,
                'name' => 'Jane Doe',
                'position' => 'Senior Software Engineer',
                'organization' => 'TechCorp Pvt Ltd',
                'email' => 'jane.doe@techcorp.com',
                'phone' => '+91 91234 56789'
            ],
        ];
        $contact = [
            'email' => 'alivehire@gmail.com',
            'phone' => '+914756997955',
            'address' => 'overseas sector 5, hhkhk, ffhgjh ghghj',
            'social' => [
                'twitter' => 'https://twitter.com/yourprofile',
                'linkedin' => 'https://linkedin.com/in/yourprofile',
                'instagram' => 'https://instagram.com/yourprofile'
            ]
        ];

        return view('template_8.template_8', compact('summary', 'email', 'skills', 'education', 'experiences', 'projects', 'volunteer', 'publications', 'awards', 'hobbies', 'references', 'contact'));
    }
}
