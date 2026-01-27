<?php

namespace App\Filters;

use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;

class VerifyApiRequest implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
       // Check for the presence of the 'Authorization' header
       $authorizationHeader = $request->getHeader('Authorization');

       if (empty($authorizationHeader)) {
           // API key is missing, return an error response
           $response = service('response');
           $response->setStatusCode(401); // Unauthorized
           $response->setJSON(['error' => 'Invalid Authorisation']);
           return $response;
       }

       // Extract the API key from the Authorization header
       $apiKey = $this->extractApiKey($authorizationHeader);

       // Validate the API key (You may need to implement your own validation logic)
       if (!$this->isValidApiKey($apiKey)) {
           // Invalid API key, return an error response
           $response = service('response');
           $response->setStatusCode(401); // Unauthorized
           $response->setJSON(['error' => 'Invalid Authorisation']);
           return $response;
       }

       // API key is valid, you can store it or use it as needed
       // For example: $request->apiKey = $apiKey;

       // Continue with the request
       return $request;
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // Code to be executed after the controller method
        // You can modify the response or perform other actions here
    }

    protected function extractApiKey($authorizationHeader)
    {   
        
        // Assuming the header is in the format: 'Bearer API_KEY'
        $apiKey = explode(' ', $authorizationHeader);
        return $apiKey[2];
    }

    // Helper method to validate the API key (you may implement your own validation logic)
    protected function isValidApiKey($apiKey)
    {

        if($apiKey !== 'Zlf?m4ily4X-Fgf7UHHRuGFI4auRrz5=-CK8Vy8dPPdp0PvLo!6ZexBFtEG-zMwI'){
            return false;
        }

        
        // Implement your API key validation logic here
        // For example, check against a database or a predefined list of valid keys
        // Return true if the key is valid, false otherwise
        return true;
    }
}
