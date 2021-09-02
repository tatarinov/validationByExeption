<?php

namespace Tatarinov\ValidationByException;

use Tatarinov\ValidationByException\Interfaces\ValidatorInterface;
use Tatarinov\ValidationByException\Interfaces\ValidatorListInterface;

class ValidatorList implements ValidatorListInterface
{
  protected $list = [];

  public function validate($data): void
  {
    array_walk($this->list, "validate");
  }

  public function add(ValidatorInterface $validator): void
  {
    $this->list[] = $validator;
  }
}