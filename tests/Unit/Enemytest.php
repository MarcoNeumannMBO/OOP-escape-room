<?php

// Deze test controleert of de Enemy klasse de
// Character klasse uitbreidt en de Attackable interface implementeert.
// De Enemy klasse moet een eigenschap attackPower hebben en
// een methode attack die de naam van de vijand en de attackPower retourneert.


namespace Tests\Unit;

use App\Models\Enemy;
use PHPUnit\Framework\TestCase;

class EnemyTest extends TestCase
{
    public function testEnemyExtendsCharacter()
    {
        $enemy = new Enemy("Orc", 12, 80, 15);
        $this->assertEquals("Orc", $enemy->name); // De naam van de vijand is Orc
        $this->assertEquals(12, $enemy->strength); // De sterkte van de vijand is 12
        $this->assertEquals(80, $enemy->health); // De gezondheid van de vijand is 80
        $this->assertEquals(15, $enemy->attackPower); // De aanvalskracht van de vijand is 15
    }
}
