<?php
declare(strict_types=1);

final class KarumiHQs
{
  protected $name;
  public $maxibonsLeft = 10;
  public function __construct
  ( $in_name )
  { $this->name = $in_name;
  }
  public function __destruct()
  {
  }
  public function getName()
  {
    return $this->name;
  }
}
