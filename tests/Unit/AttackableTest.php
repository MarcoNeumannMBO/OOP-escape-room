<?php

// deze te testen class moet je zelf nog maken
// zorg ervoor dat de class de Attackable interface implementeert
// de attack methode moet de naam van de speler en "valt aan!" retourneren
// de class moet een constructor hebben die de naam, sterkte en gezondheid van de speler opslaat
// de class moet de eigenschappen name, strength en health hebben

namespace Tests\Unit;

use App\Models\Character;
use App\Interfaces\Attackable;
use PHPUnit\Framework\TestCase;

class AttackableTest extends TestCase
{
    public function testCharacterImplementsAttackable()
    {
        $character = new Character("Warrior", 10, 100);
        $this->assertInstanceOf(Attackable::class, $character);
        $this->assertEquals("Warrior valt aan!", $character->attack());
    }
}