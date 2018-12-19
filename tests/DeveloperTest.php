<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use Eris\Generator;
use Eris\TestTrait;

final class DeveloperTest extends TestCase
{
  use TestTrait;

  public function testShouldAlwaysGrabAPositiveNumberOfMaxibons(): void
  {
    $this->forAll(
      Generator\names(),
      Generator\int()
    )
    ->then(function ( $name, $number ) {
      $developer = new Developer( $name, $number );
      $this->assertGreaterThanOrEqual(
        0,
        $developer->getMaxibonsToGrab(),
        "Developer should grab always a positive number of maxibons."
      );
    });
  }
}
