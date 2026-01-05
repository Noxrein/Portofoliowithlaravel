<?php

namespace App\Http\Controllers;

use App\Models\Project;

class HomeController extends Controller
{
    public function index()
    {
        $featuredProjects = Project::featured()
            ->ordered()
            ->limit(4)
            ->get();

        $skills = [
            [
                'name' => 'Vue.js',
                'logo' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/vuejs/vuejs-original.svg',
            ],
            [
                'name' => 'React',
                'logo' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/react/react-original.svg',
            ],
            [
                'name' => 'JavaScript',
                'logo' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/javascript/javascript-original.svg',
            ],
            [
                'name' => 'Tailwind CSS',
                'logo' => 'https://upload.wikimedia.org/wikipedia/commons/d/d5/Tailwind_CSS_Logo.svg',
            ],
            [
                'name' => 'Laravel',
                'logo' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/laravel/laravel-original.svg',
            ],
            [
                'name' => 'Node.js',
                'logo' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/nodejs/nodejs-original.svg',
            ],
            [
                'name' => 'C#',
                'logo' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/csharp/csharp-original.svg',
            ],
            [
                'name' => 'Python',
                'logo' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/python/python-original.svg',
            ],
            [
                'name' => 'Git',
                'logo' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/git/git-original.svg',
            ],
            [
                'name' => 'MySQL',
                'logo' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/mysql/mysql-original.svg',
            ],
            [
                'name' => 'REST API',
                'logo' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/fastapi/fastapi-original.svg',
            ],
            [
                'name' => 'Docker',
                'logo' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/docker/docker-original.svg',
            ],
        ];

        return view('home', compact('featuredProjects', 'skills'));
    }
}

// <?php

// namespace App\Http\Controllers;

// use Illuminate\Http\Request;
// use App\Models\Project;

// class HomeController extends Controller
// {
//     public function index()
//     {
//         $featuredProjects = Project::featured()
//                                 ->ordered()
//                                 ->limit(4)
//                                 ->get();

//         $skills = [
//             ['Vue.js', 'text-green-400', 'bg-green-500/10'],
//             ['React', 'text-blue-400', 'bg-blue-500/10'],
//             ['JavaScript', 'text-yellow-400', 'bg-yellow-500/10'],
//             ['TypeScript', 'text-blue-300', 'bg-blue-500/10'],
//             ['Tailwind CSS', 'text-cyan-400', 'bg-cyan-500/10'],
//             ['Vue.js', 'text-gray-300', 'bg-gray-500/10'],
//             ['Laravel', 'text-red-400', 'bg-red-500/10'],
//             ['Node.js', 'text-green-300', 'bg-green-500/10'],
//             ['Git', 'text-gray-300', 'bg-gray-500/10'],
//             ['MySQL', 'text-orange-400', 'bg-orange-500/10'],
//             ['REST API', 'text-purple-400', 'bg-purple-500/10'],
//             ['Docker', 'text-blue-400', 'bg-blue-500/10'],
//         ];

//         return view('home', compact( 'featuredProjects', 'skills'));
//     }
// }
