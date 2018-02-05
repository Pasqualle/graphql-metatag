<?php

namespace Drupal\graphql_metatag\Plugin\GraphQL\Fields;

use Drupal\graphql\Plugin\GraphQL\Fields\FieldPluginBase;
use Youshido\GraphQL\Execution\ResolveInfo;

/**
 * The metatags html tag field.
 *
 * @GraphQLField(
 *   id = "meta_html_tag",
 *   name = "htmlTag",
 *   secure = true,
 *   type = "String",
 *   parents = {"MetaTag"},
 *   nullable = TRUE
 * )
 */
class MetaHtmlTag extends FieldPluginBase {

  /**
   * {@inheritdoc}
   */
  protected function resolveValues($value, array $args, ResolveInfo $info) {
    if (isset($value['#tag'])) {
      yield $value['#tag'];
    }
  }

}
