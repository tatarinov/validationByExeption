<?php

namespace tan\validationByException\interfaces;

use tan\validationByException\exceptions\ValidateException;

interface ValidatorInterface
{
  /**
   * @param $data
   * @throws ValidateException
   */
  public function validate($data): void;
}