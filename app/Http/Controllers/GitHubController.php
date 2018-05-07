<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use function GuzzleHttp\json_decode;
use GuzzleHttp\Client as Guzzle;
use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\Exception\RequestException;

class GitHubController extends Controller
{
   


    private $tokens;

    public function __construct()
    {
        $this->token = '9b25570447e89ae0ab5a86b472177cc0c353787d';

    }

    public function getUser($username)
    {

        $guzzle = new Guzzle;

        $response = $guzzle->request('GET',env('GITHUB_URL') . "users/{$username}", [

            'headers' => [
                'Authorization' => "Bearer {$this->token}",
            ],

        ]);


        return $response->getBody();

        //$products = json_decode($response->getBody())->data;

        //return view('tests-api.products.index', compact('products', 'title'));

    }




}
