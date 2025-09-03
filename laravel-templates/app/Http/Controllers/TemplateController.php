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
}
