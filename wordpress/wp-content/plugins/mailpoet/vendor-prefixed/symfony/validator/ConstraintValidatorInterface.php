<?php
 namespace MailPoetVendor\Symfony\Component\Validator; if (!defined('ABSPATH')) exit; use MailPoetVendor\Symfony\Component\Validator\Context\ExecutionContextInterface; interface ConstraintValidatorInterface { public function initialize(\MailPoetVendor\Symfony\Component\Validator\Context\ExecutionContextInterface $context); public function validate($value, \MailPoetVendor\Symfony\Component\Validator\Constraint $constraint); } 