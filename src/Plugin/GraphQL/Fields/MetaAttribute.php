<?php

namespace Drupal\graphql_metatag\Plugin\GraphQL\Fields;

use Drupal\Component\Utility\NestedArray;
use Drupal\graphql\Plugin\GraphQL\Fields\FieldPluginBase;
use Youshido\GraphQL\Execution\ResolveInfo;

/**
 * The metatag key field.
 *
 * @GraphQLField(
 *   id = "meta_attribute",
 *   name = "attribute",
 *   secure = true,
 *   type = "String",
 *   parents = {"MetaTag"},
 *   nullable = TRUE,
 *   arguments = {
 *     "key" = "String"
 *   }
 * )
 */
class MetaAttribute extends FieldPluginBase {

  /**
   * {@inheritdoc}
   */
  protected function resolveValues($value, array $args, ResolveInfo $info) {
    $options = $value['#attributes'];
    $key = $args['key'];
    if (isset($options[$key])) {
      yield $options[$key];
    }
  }

}
