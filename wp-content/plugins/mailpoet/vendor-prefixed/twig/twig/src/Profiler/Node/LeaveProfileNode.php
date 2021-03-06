<?php
namespace MailPoetVendor\Twig\Profiler\Node;
if (!defined('ABSPATH')) exit;
use MailPoetVendor\Twig\Compiler;
use MailPoetVendor\Twig\Node\Node;
class LeaveProfileNode extends Node
{
 public function __construct(string $varName)
 {
 parent::__construct([], ['var_name' => $varName]);
 }
 public function compile(Compiler $compiler)
 {
 $compiler->write("\n")->write(\sprintf("\$%s->leave(\$%s);\n\n", $this->getAttribute('var_name'), $this->getAttribute('var_name') . '_prof'));
 }
}
\class_alias('MailPoetVendor\\Twig\\Profiler\\Node\\LeaveProfileNode', 'MailPoetVendor\\Twig_Profiler_Node_LeaveProfile');
