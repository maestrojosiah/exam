<?php

namespace AppBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class DownloadControllerTest extends WebTestCase
{
    public function testMydownloads()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', 'my_downloads');
    }

}
