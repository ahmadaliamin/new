<?php
namespace MailPoetVendor\Symfony\Component\DependencyInjection;
if (!defined('ABSPATH')) exit;
use MailPoetVendor\Symfony\Component\DependencyInjection\Exception\RuntimeException;
interface EnvVarProcessorInterface
{
 public function getEnv($prefix, $name, \Closure $getEnv);
 public static function getProvidedTypes();
}
