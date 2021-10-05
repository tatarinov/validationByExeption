<?php

namespace Tatarinov\ValidationByException;

use Tatarinov\ValidationByException\Interfaces\ValidatorInterface;
use Tatarinov\ValidationByException\Interfaces\ValidatorListInterface;

class ValidatorList implements ValidatorListInterface
{
  protected $list = [];

  public function validate($data): void
  {
    $args = func_get_args();
    array_walk($this->list, function (ValidatorInterface $item) use($args) {
      call_user_func_array([$item, 'validate'], $args);
    });
  }

  public function add(ValidatorInterface $validator): void
  {
    $this->list[] = $validator;
  }
}