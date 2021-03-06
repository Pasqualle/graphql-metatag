<?php

namespace Drupal\graphql_metatag\Plugin\GraphQL\Types;

use Drupal\graphql\Plugin\GraphQL\Types\TypePluginBase;
use Youshido\GraphQL\Execution\ResolveInfo;

/**
 * The GraphQL type representing meta link.
 *
 * @GraphQLType(
 *   id = "meta_link",
 *   name = "MetaLink",
 *   interfaces = {"MetaTag"}
 * )
 */
class MetaLink extends TypePluginBase {
  /**
   * {@inheritdoc}
   */
  public function applies($value, ResolveInfo $info = NULL) {
    return $value['#tag'] == 'link';
  }
}
