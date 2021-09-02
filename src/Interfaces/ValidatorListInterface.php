<?php

namespace Tatarinov\ValidationByException\Interfaces;

interface ValidatorListInterface extends ValidatorInterface
{
  public function add(ValidatorInterface $validator): void;
}