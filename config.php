<?php
require __DIR__ . '/database.php';

$fallbackProfile = [
    'full_name' => 'G7tech',
    'email' => 'hello@g7tech.com',
    'phone' => '+63 912 345 6789',
    'address' => 'Philippines',
    'about_me' => 'We are G7tech, a creative studio focused on turning ideas into playful, impactful digital experiences.',
    'profile_picture' => 'assets/images/hero-character.svg',
    'education' => [
        'Bachelor of Science in Information Technology',
        'Diploma in Web Development',
    ],
    'skills' => [
        ['name' => 'Toon Boom Harmony', 'icon' => 'fa-solid fa-film'],
        ['name' => 'Adobe After Effects', 'icon' => 'fa-solid fa-wand-magic-sparkles'],
        ['name' => 'Adobe Animate', 'icon' => 'fa-solid fa-palette'],
        ['name' => 'Adobe Photoshop', 'icon' => 'fa-solid fa-pen-ruler'],
        ['name' => 'Blender', 'icon' => 'fa-solid fa-cubes'],
        ['name' => 'Premiere Pro', 'icon' => 'fa-solid fa-video'],
    ],
    'projects' => [
        'Portfolio Website',
        'Student Information System',
        'E-Commerce Landing Page',
    ],
    'work_experience' => [
        'Frontend Developer',
        'UI/UX Designer',
        'Content Creator',
    ],
    'social_links' => [
        'instagram' => 'https://instagram.com',
        'youtube' => 'https://youtube.com',
        'google' => 'https://google.com',
        'facebook' => 'https://facebook.com',
        'github' => 'https://github.com',
        'linkedin' => 'https://linkedin.com',
    ],
    'website_links' => [
        'website' => 'https://www.g7tech.com',
        'github' => 'https://github.com',
        'linkedin' => 'https://linkedin.com',
    ],
];

$portfolioProfile = getPortfolioProfile($fallbackProfile);

$siteName = !empty(trim((string) ($portfolioProfile['full_name'] ?? ''))) ? trim((string) $portfolioProfile['full_name']) : 'G7tech';
$siteTitle = $siteName . ' | Creative Portfolio';
$siteDescription = !empty(trim((string) ($portfolioProfile['about_me'] ?? ''))) ? trim((string) $portfolioProfile['about_me']) : 'Creative portfolio and motion design studio website for G7tech.';
$siteUrl = 'http://www.g7tech.com';
$siteEmail = $portfolioProfile['email'];
$siteLocation = $portfolioProfile['address'];

$socialLinks = $portfolioProfile['social_links'];

$navItems = [
    ['label' => 'Home', 'url' => 'index.php'],
    ['label' => 'Projects', 'url' => 'projects.php'],
    ['label' => 'About', 'url' => 'about.php'],
    ['label' => 'Contact', 'url' => 'contact.php'],
    ['label' => 'Database Info', 'url' => 'database-info.php'],
    ['label' => 'Manage', 'url' => 'manage-portfolio.php'],
];

$projects = [
    [
        'title' => 'WEB SYSTEM TECHNOLOGIES',
        'category' => 'Learning Resource',
        'image' => 'assets/images/project1.svg',
        'url' => 'https://www.w3schools.com/php/default.asp',
    ],
    [
        'title' => 'INFORMATION MANAGEMENT',
        'category' => 'Learning Resource',
        'image' => 'assets/images/project2.svg',
        'url' => 'https://www.w3schools.com/sql/default.asp',
    ],
    [
        'title' => 'HUMAN-COMPUTER INTERACTION',
        'category' => 'Learning Resource',
        'image' => 'assets/images/project3.svg',
        'url' => 'https://w3computing.com/systemsanalysis/human-computer-interaction-intro/',
    ],
];

$skills = $portfolioProfile['skills'];

$portfolioFacts = [
    ['label' => 'Years Experience', 'value' => '6+'],
    ['label' => 'Projects Delivered', 'value' => '100+'],
    ['label' => 'Client Satisfaction', 'value' => '96%'],
];
