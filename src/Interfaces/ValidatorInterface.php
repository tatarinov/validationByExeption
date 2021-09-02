<?php

namespace Tatarinov\ValidationByException\Interfaces;

use Tatarinov\ValidationByException\Exceptions\ValidateException;

interface ValidatorInterface
{
  /**
   * @param mixed $data
   * @throws ValidateException
   */
  public function validate($data): void;
}