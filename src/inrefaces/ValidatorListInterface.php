<?php

namespace tan\validationByException\interfaces;

interface ValidatorListInterface extends ValidatorInterface
{
  public function add(ValidatorInterface $validator): void;
}