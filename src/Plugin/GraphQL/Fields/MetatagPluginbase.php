<?php

namespace Drupal\graphql_metatag\Plugin\GraphQL\Fields;

use Drupal\Core\Entity\ContentEntityInterface;
use Drupal\graphql\Plugin\GraphQL\Fields\FieldPluginBase;

/**
 * Base class for metatag plugins.
 */
class MetatagPluginBase extends FieldPluginBase {
  /**
   * {@inheritdoc}
   */
  public function getAllMetatags(ContentEntityInterface $entity) {
    /** @var \Drupal\metatag\MetatagManager $metatag_manager */
    $metatag_manager = \Drupal::service('metatag.manager');
    $metatags = $metatag_manager->tagsFromEntityWithDefaults($entity);
    $tags = $metatag_manager->generateRawElements($metatags, $entity);

    return $tags;
  }
}

