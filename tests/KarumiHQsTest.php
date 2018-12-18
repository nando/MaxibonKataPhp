<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use Eris\Generator;
use Eris\TestTrait;

final class KarumiHQsTest extends TestCase
{
  use TestTrait;

  public function testShouldStartTheDayWith10Maxibons(): void
  {
    $this->forAll(
      Generator\names()
    )
    ->then(function ( $name ) {
      $office = new KarumiHQs( $name );
      $this->assertEquals(
        10,
        $office->maxibonsLeft,
        "KarumiHQs should start the day with 10 maxibons."
      );
    });
  }

  public function testShouldKeepTheOfficeName(): void
  {
    $this->forAll(
      Generator\names()
    )
    ->then(function ( $name ) {
      $office = new KarumiHQs( $name );
      $this->assertEquals(
        $name,
        $office->getName(),
        "KarumiHQs should keep the office name (\"$name\")."
      );
    });
  }
}
