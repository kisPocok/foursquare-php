<?php

class TheTwelve_Foursquare_HttpClient_SymfonyHttpClientTest
    extends PHPUnit_Framework_TestCase
{

    public function testRedirect()
    {

        $client = new \TheTwelve\Foursquare\HttpClient\SymfonyHttpClient();
        $result = $client->redirect('http://google.ca');

        $this->assertTrue($result instanceof \Symfony\Component\HttpFoundation\RedirectResponse);

    }

}
