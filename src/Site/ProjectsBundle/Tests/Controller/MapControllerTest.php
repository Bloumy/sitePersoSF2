<?php

namespace Site\ProjectsBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class MapControllerTest extends WebTestCase
{
    public function testShowmap()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/showMap');
    }

}
