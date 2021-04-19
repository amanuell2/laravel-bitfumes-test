<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;

class GithubRepository extends Controller
{

    public function fetchRepository($query)
    {

        $url = "https://api.github.com/search/repositories";
        $response = Http::get($url, [
            'q' => $query,
            [
                '&page' => 1,
                'per_page' => 20,
            ]
        ]);
        return $response->getBody();
    }
}
