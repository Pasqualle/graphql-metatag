<?php

namespace Drupal\graphql_metatag\Plugin\GraphQL\Fields;

use Drupal\Core\Entity\ContentEntityInterface;
use Youshido\GraphQL\Execution\ResolveInfo;

/**
 * GraphQL field resolving metatags on entities.
 *
 * @GraphQLField(
 *   id = "metatags",
 *   name = "metatags",
 *   type = "MetaTag",
 *   parents = {"Entity"},
 *   multi = TRUE,
 *   secure = TRUE,
 * )
 */
class Metatags extends MetatagPluginBase {

  /**
   * {@inheritdoc}
   */
  public function resolveValues($value, array $args, ResolveInfo $info) {
    if ($value instanceof ContentEntityInterface) {
      $tags = $this->getAllMetatags($value);
      foreach ($tags as $name => $tag) {
        yield $tag;
      }
    }
  }

}
