<?php

namespace Drupal\graphql_metatag\Plugin\GraphQL\Types;

use Drupal\graphql\Plugin\GraphQL\Types\TypePluginBase;
use Youshido\GraphQL\Execution\ResolveInfo;

/**
 * The GraphQL type representing metatags
 *
 * @GraphQLType(
 *   id = "meta_meta",
 *   name = "MetaMeta",
 *   interfaces = {"MetaTag"}
 * )
 */
class MetaMeta extends TypePluginBase {
  /**
   * {@inheritdoc}
   */
  public function applies($value, ResolveInfo $info = NULL) {
    return $value['#tag'] == 'meta';
  }
}
