<?php

namespace Drupal\graphql_metatag\Plugin\GraphQL\Fields;

use Drupal\Core\Entity\ContentEntityInterface;
use Youshido\GraphQL\Execution\ResolveInfo;

/**
 * GraphQL field resolving an Entity's language.
 *
 * @GraphQLField(
 *   id = "metatag_by_name",
 *   name = "metatagByName",
 *   type = "MetaTag",
 *   parents = {"Entity"},
 *   multi = TRUE,
 *   secure = TRUE,
 *    arguments = {
 *     "name" = "String"
 *    }
  * )
 */
class MetatagByName extends MetatagPluginBase {

  /**
   * {@inheritdoc}
   */
  public function resolveValues($value, array $args, ResolveInfo $info) {
    if ($value instanceof ContentEntityInterface) {
      $tags = $this->getAllMetatags($value);

      foreach ($tags as $name => $tag) {
        if (isset($tag['#attributes']['name']) && $tag['#attributes']['name'] == $args['name']) {
          yield $tag;
        }
      }
    }
  }

}
