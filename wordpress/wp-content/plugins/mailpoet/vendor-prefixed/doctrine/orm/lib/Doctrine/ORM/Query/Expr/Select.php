<?php
 namespace MailPoetVendor\Doctrine\ORM\Query\Expr; if (!defined('ABSPATH')) exit; class Select extends \MailPoetVendor\Doctrine\ORM\Query\Expr\Base { protected $preSeparator = ''; protected $postSeparator = ''; protected $allowedClasses = [\MailPoetVendor\Doctrine\ORM\Query\Expr\Func::class]; public function getParts() { return $this->parts; } } 