<?php

return [
    'sitename' => 'Tushar Joshi',
    'navlinks' => [
        [
            'id' => 'college',
            'name' => 'College',
            'url' => '/projects/college',
            'image' => 'images/college.jpeg',
        ],
        [
            'id' => 'technology',
            'name' => 'Technology',
            'url' => '/projects/technology',
            'image' => 'images/technology.jpeg',
        ],
        [
            'id' => 'events',
            'name' => 'Events',
            'url' => '/projects/events',
            'image' => 'images/events.jpeg',
        ],
    ],
    'pagelinks' => [
        [
            'name' => 'Home',
            'url' => '/',
        ],
        [
            'name' => 'About',
            'url' => '/about',
        ],
        [
            'name' => 'Projects',
            'url' => '/projects',
        ],
        [
            'name' => 'Blog',
            'url' => '/blog',
        ],
    ],
    'footerlinks' => [
        [
            'name' => 'Home',
            'url' => '/',
        ],
        [
            'name' => 'About',
            'url' => '/about',
        ],
        [
            'name' => 'Contact',
            'url' => '/contact',
        ],
    ],
    'sociallinks' => [
        [
            'title' => 'Twitter',
            'name' => 'icons.twitter',
            'url' => 'https://x.com/tusharvjoshi',
        ],
        [
            'title' => 'Facebook',
            'name' => 'icons.facebook',
            'url' => 'https://facebook.com/tusharvjoshi',
        ],
        [
            'title' => 'Instagram',
            'name' => 'icons.instagram',
            'url' => 'https://www.instagram.com/tusharvjoshi',
        ],
        [
            'title' => 'Linkedin',
            'name' => 'icons.linkedin',
            'url' => 'https://www.linkedin.com/in/tusharvjoshi',
        ],
    ],
    'taglist' => [
        [
            'id' => 'trends',
            'name' => 'Trends',
        ],
        [
            'id' => 'tips',
            'name' => 'Tips',
        ],
        [
            'id' => 'ideas',
            'name' => 'Ideas',
        ],
        [
            'id' => 'security',
            'name' => 'Security',
        ],
        [
            'id' => 'gaming',
            'name' => 'Gaming',
        ],
        [
            'id' => 'climate',
            'name' => 'Climate',
        ],
        [
            'id' => 'gear',
            'name' => 'Gear',
        ],
        [
            'id' => 'reviews',
            'name' => 'Reviews',
        ],
    ],
    'routes' => [
        [
            'name' => 'welcome',
            'path' => '/',
            'view' => 'welcome',
        ],
        [
            'name' => 'about',
            'path' => '/about',
            'view' => 'about',
        ],
        [
            'name' => 'blog',
            'path' => '/blog/{articleId?}',
            'view' => 'blog',
        ],
        [
            'name' => 'projects',
            'path' => '/projects/{category?}',
            'view' => 'projects',
        ],
        [
            'name' => 'tag',
            'path' => '/tag',
            'view' => 'tag',
        ],
        [
            'name' => 'tushar',
            'path' => '/tushar',
            'view' => 'tushar',
        ],
    ],
    'articles' => [
        [
            'id' => '1',
            'title' => 'Ramdeobaba University',
            'image' => 'images/featured-article-01.jpeg',
            'description' => 'Welcome to Ramdeobaba University (RBU), where innovation meets tradition, and excellence is a way of life. Established with a vision to nurture talent, foster creativity, and promote holistic development, RBU stands as a beacon of quality education in India. With a rich history dating back to its inception, the university has continually evolved to meet the ever-changing needs of the educational landscape while upholding its core values of integrity, excellence, and inclusivity.',
            'category' => 'Technology',
            'duration' => '6 mins',
            'date' => 'Aug 9, 2024',
        ],
        [
            'id' => '2',
            'title' => 'Ramdeobaba University2',
            'image' => 'images/featured-article-01.jpeg',
            'description' => 'Welcome to Ramdeobaba University (RBU), where innovation meets tradition, and excellence is a way of life. Established with a vision to nurture talent, foster creativity, and promote holistic development, RBU stands as a beacon of quality education in India. With a rich history dating back to its inception, the university has continually evolved to meet the ever-changing needs of the educational landscape while upholding its core values of integrity, excellence, and inclusivity.',
            'category' => 'Technology',
            'duration' => '6 mins',
            'date' => 'Aug 9, 2024',
        ],
        [
            'id' => '3',
            'title' => 'Ramdeobaba University3',
            'image' => 'images/featured-article-01.jpeg',
            'description' => 'Welcome to Ramdeobaba University (RBU), where innovation meets tradition, and excellence is a way of life. Established with a vision to nurture talent, foster creativity, and promote holistic development, RBU stands as a beacon of quality education in India. With a rich history dating back to its inception, the university has continually evolved to meet the ever-changing needs of the educational landscape while upholding its core values of integrity, excellence, and inclusivity.',
            'category' => 'Technology',
            'duration' => '6 mins',
            'date' => 'Aug 9, 2024',
        ],
        [
            'id' => '4',
            'title' => 'Ramdeobaba University4',
            'image' => 'images/featured-article-01.jpeg',
            'description' => 'Welcome to Ramdeobaba University (RBU), where innovation meets tradition, and excellence is a way of life. Established with a vision to nurture talent, foster creativity, and promote holistic development, RBU stands as a beacon of quality education in India. With a rich history dating back to its inception, the university has continually evolved to meet the ever-changing needs of the educational landscape while upholding its core values of integrity, excellence, and inclusivity.',
            'category' => 'Technology',
            'duration' => '6 mins',
            'date' => 'Aug 9, 2024',
        ],
        [
            'id' => '5',
            'title' => 'Ramdeobaba University5',
            'image' => 'images/featured-article-01.jpeg',
            'description' => 'Welcome to Ramdeobaba University (RBU), where innovation meets tradition, and excellence is a way of life. Established with a vision to nurture talent, foster creativity, and promote holistic development, RBU stands as a beacon of quality education in India. With a rich history dating back to its inception, the university has continually evolved to meet the ever-changing needs of the educational landscape while upholding its core values of integrity, excellence, and inclusivity.',
            'category' => 'Technology',
            'duration' => '6 mins',
            'date' => 'Aug 9, 2024',
        ],
        [
            'id' => '6',
            'title' => 'Ramdeobaba University6',
            'image' => 'images/featured-article-01.jpeg',
            'description' => 'Welcome to Ramdeobaba University (RBU), where innovation meets tradition, and excellence is a way of life. Established with a vision to nurture talent, foster creativity, and promote holistic development, RBU stands as a beacon of quality education in India. With a rich history dating back to its inception, the university has continually evolved to meet the ever-changing needs of the educational landscape while upholding its core values of integrity, excellence, and inclusivity.',
            'category' => 'Technology',
            'duration' => '6 mins',
            'date' => 'Aug 9, 2024',
        ],
    ],
];
