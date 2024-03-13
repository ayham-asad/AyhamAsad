<?php

/**
 * If you want to add another icon, you need to modify ./source/_assets/js/global/create-simple-icons.js
 *
 * @see https://simpleicons.org/ for a list of all available icons.
 */

return [
    'production' => false,
    'baseUrl' => 'http://localhost:3000',

    'siteTitle' => 'Ayham Asad - Fullstack Developer',
    'siteName' => 'Ayham Asad Personal Site',
    'siteDescription' => 'Everything about me as a Fullstack Developer',

    'siteSections' => [
        'home' => [
            'descriptions' => [
                'Hi, there!',
                /**
                 * You must have 1 value that has class "js-typed-important".
                 *
                 * An array value having this class will be displayed immediately
                 * when the animation in the typed description is skipped.
                 */
                <<<HTML
                    <span class="js-typed-important">I'm Ayham Asad</span>
                HTML,
                'A Full Stack Developer',
                'And Tech Enthusiast',
                'Keep scrolling to know more about me!',
            ],
        ],
        'about' => [
            'image' => '\source\_assets\images\about.png',
            'content' => <<<HTML
                <span class="js-tippy" data-tippy-content="Who am I?">
                    <b>Full Stack Developer</b> who loves creating high-quality products for internal users and teams,
                </span>
                <span class="js-tippy" data-tippy-content="What experience do I have?">
                    with over one year of experience in enterprise web-based projects such as ERP (Enterprise Resource Planning), E-commerce, E-catalog, and other application related to accounting, purchasing, and marketing.
                </span>
            HTML,
        ],
        'skills' => [
            ['name' => 'PHP', 'icon' => 'php'],
            ['name' => 'Bootstrap', 'icon'=>'bootstrap'],
            ['name' => 'Laravel', 'icon' => 'laravel'],
            ['name' => 'Tailwind', 'icon' => 'tailwindcss'],
            ['name' => 'MySQL', 'icon' => 'mysql'],
            ['name' => 'Git', 'icon' => 'git'],
            ['name' => 'Alpine.js', 'icon' => 'alpinedotjs'],
            ['name' => 'GitHub Actions', 'icon' => 'github'],
            ['name' => 'JavaScript', 'icon' => 'javascript'],
            ['name' => 'NPM', 'icon' => 'npm'],
            ['name' => 'Apache', 'icon' =>'apache'],
            ['name' => 'Postman', 'icon' => 'postman'],
        ],
        'projects' => [
            [
                'title' => 'Ruwwad Service Hub',
                'description' => 'A website for users to submit problems for specialists, borrow technical items, and access a diverse course library.',
                'stacks' => ['PHP', 'Javascript', 'NestJs', 'RxJs'],
                'links' => [
                    [
                        'name' => 'GitHub',
                        'icon' => 'github',
                        'url' => 'https://github.com/sneaker01/RSH',
                    ],
                ],
            ],
            [
                'title' => 'CHirper',
                'description' => 'Social Media App to Share your thoughts and ideas and get feed back from other contributors.',
                'stacks' => ['PHP', 'Laravel', 'Javascript', 'TailwindCSS'],
                'links' => [
                    [
                        'name' => 'GitHub',
                        'icon' => 'github',
                        'url' => 'https://github.com/sneaker01/Chirper',
                    ],
                ],
            ],
            [
                'title' => 'GTFO Bins',
                'description' => 'GTFOBins is a curated list of Unix bins that can be used to bypass local security restrictions in misconfigured systems',
                'stacks' => ['Python', 'In progress'],
                'links' => [
                    [
                        'name' => 'GitHub',
                        'icon' => 'github',
                        'url' => 'https://github.com/sneaker01/GTFOBins',
                    ],
                ],
            ],
        ],
        'contacts' => [
            [
                'icon' => 'github',
                'name' => 'GitHub',
                'url' => 'https://github.com/sneaker01',
            ],
            [
                'icon' => 'stackoverflow',
                'name' => 'Stack Overflow',
                'url' => 'https://stackoverflow.com/users/23570383/ayham-asad',
            ],
            [
                'icon' => 'linkedin',
                'name' => 'LinkedIn',
                'url' => 'https://www.linkedin.com/in/ayham-asad-2541b1198/',
            ],
            [
                'icon' => 'reddit',
                'name' => 'Reddit',
                'url' => 'https://www.reddit.com/user/SNEAKER-10/',
            ]
        ],
    ],
];
