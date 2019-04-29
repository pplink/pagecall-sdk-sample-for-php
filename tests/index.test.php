<?php

declare(strict_types=1);

class IndexTest extends \PHPUnit\Framework\TestCase
{

    private $http;
    private $endPoint = 'http://localhost:8000';

    public function setUp()
    {
        $this->http = new GuzzleHttp\Client(['base_uri' => $this->endPoint]);
    }

    public function tearDown()
    {
        $this->http = null;
    }

    public function testGetDefaultViaew()
    {
        $response = $this->http->request('GET');

        $this->assertEquals(200, $response->getStatusCode());
        $this->assertEquals(file_get_contents('./form.html'), $response->getBody());
    }

    public function testIfNotSetPairKeys()
    {
        $response = $this->http->request('POST', '/canvas', [
            'http_errors' => false
        ]);

        $this->assertEquals(400, $response->getStatusCode());
        $this->assertEquals('Required "AccessKey" key not supplied in config and could not find fallback environment variable', $response->getBody());
    }
}
