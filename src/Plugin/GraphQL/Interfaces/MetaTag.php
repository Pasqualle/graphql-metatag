<?php

namespace Drupal\graphql_metatag\Plugin\GraphQL\Interfaces;

use Drupal\graphql\Plugin\GraphQL\Interfaces\InterfacePluginBase;

/**
 * The GraphQL interface for metatags.
 *
 * @GraphQLInterface(
 *   id = "meta_tag",
 *   name = "MetaTag",
 *   description = @Translation("Common interface for metatags.")
 * )
 */
class MetaTag extends InterfacePluginBase {

}
