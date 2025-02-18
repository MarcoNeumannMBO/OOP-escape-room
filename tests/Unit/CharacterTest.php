<?php

// deze test controleert of de Character klasse de juiste eigenschappen heeft
// de test is geslaagd als de eigenschappen name, strength en health correct zijn
// de test is gefaald als de eigenschappen niet correct zijn of als de Character klasse niet bestaat
// de test is gefaald als de eigenschappen niet correct zijn of als de Character klasse niet bestaat

namespace Tests\Unit;

use App\Models\Character;
use PHPUnit\Framework\TestCase;

class CharacterTest extends TestCase
{
    public function testCharacterHasCorrectProperties()
    {
        $character = new Character("Warrior", 10, 100); // De naam van de speler is Warrior, de sterkte is 10 en de gezondheid is 100
        $this->assertEquals("Warrior", $character->name); // De naam van de speler is Warrior
        $this->assertEquals(10, $character->strength); // De sterkte van de speler is 10
        $this->assertEquals(100, $character->health); // De gezondheid van de speler is 100
    }
}
