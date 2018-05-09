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
        $this->token = '182bf904a83102f1f3cdee43a4f4919d33706113';

    }

    /*
    |-------------------------------------------------------
    | Index Functio
    |-------------------------------------------------------
    |
    | Here you will be bach at homepage of Aplication
    |
    */
    public function index(){

        return view('github');

    }


    /*
    |--------------------------------------------------------------------------
    | getUser Function
    |--------------------------------------------------------------------------
    |
    | Here you be bringin all datas of user u will send via GET
    | You will put the on URL
    |
    */

    public function getUser($username)
    {

        $guzzle = new Guzzle;

        try{

            $response = $guzzle->request('GET',env('GITHUB_URL') . "users/{$username}", [

                'headers' => [
                    'Authorization' => "Bearer {$this->token}",
                ],
    
            ]);
    
            //return $response->getBody();
    
            $user = $response->getBody();
    
                return view('gitusers', compact('user'));

        }catch(ClientException $e){

            $responseBody = $e->getResponse();
            
            dd($responseBody);
        }catch (RequestException $e) {
            $responseBody = $e->getResponse();
            
            dd($responseBody);
        }

    }


    /*
    |--------------------------------------------------------------------------
    | getPostUser Function
    |--------------------------------------------------------------------------
    |
    | Here you be bringin all datas of user u will send via POST
    | U will send de the user name on input inside in one FORM with method POST
    |
    */
    public function getPostUser(Request $request)
    {

        $guzzle = new Guzzle;
    
        try{

            $this->validate($request, [
                'username' => 'required'
            ]);
    
            $newUsername = $request->username;
        
            $response = $guzzle->request('GET',env('GITHUB_URL') . "users/{$newUsername}", [
    
                'headers' => [
                    'Authorization' => "Bearer {$this->token}",
                ],
    
            ]);
        
            //return $response->getBody();
    
            $user = json_decode($response->getBody());
    
            //dd($user);
                return view('gitusers', compact('user'));

        }catch(ClientException $e){

            $responseBody = $e->getResponse();
            
            dd($responseBody);
        }catch (RequestException $e) {
            $responseBody = $e->getResponse();
            
            dd($responseBody);
        }

    }


}
