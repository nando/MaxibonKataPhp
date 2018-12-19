<?php
declare(strict_types=1);

final class Developer
{
  protected $name;
  protected $maxibonsToGrab;

  public function __construct
  ( $in_name, $in_maxibonsToGrab )
  {
    $this->name = $in_name;
    $this->maxibonsToGrab = $in_maxibonsToGrab;
  }

  public function __destruct()
  {
  }

  public function getName()
  {
    return $this->name;
  }

  public function getMaxibonsToGrab()
  {
    return $this->maxibonsToGrab;
  }
}
