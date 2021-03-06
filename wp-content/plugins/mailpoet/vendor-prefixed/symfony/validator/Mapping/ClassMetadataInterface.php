<?php
namespace MailPoetVendor\Symfony\Component\Validator\Mapping;
if (!defined('ABSPATH')) exit;
interface ClassMetadataInterface extends MetadataInterface
{
 public function getConstrainedProperties();
 public function hasGroupSequence();
 public function getGroupSequence();
 public function isGroupSequenceProvider();
 public function hasPropertyMetadata($property);
 public function getPropertyMetadata($property);
 public function getClassName();
}
