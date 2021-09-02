<?php

namespace tan\validationByException;

use tan\validationByException\interfaces\ValidatorInterface;
use tan\validationByException\interfaces\ValidatorListInterface;

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