<?php
// Deze test controleert of de HelperService 
// de juiste ontsnappingsboodschap retourneert.
// De test is geslaagd als de boodschap "Je bent ontsnapt!" 
// wordt geretourneerd.
// De test is gefaald als de boodschap niet wordt geretourneerd
// of als de geretourneerde boodschap niet gelijk is aan "Je bent ontsnapt!".
// De test is gefaald als de HelperService niet bestaat.
// De test is gefaald als de HelperService niet de juiste methode bevat.


namespace Tests\Unit;

use App\Services\HelperService;
use PHPUnit\Framework\TestCase;

class HelperServiceTest extends TestCase
{
    public function testHelperServiceReturnsEscapeMessage()
    {
        $service = new HelperService();
        $this->assertEquals("Je bent ontsnapt!", $service->helpEscape());
    }
}