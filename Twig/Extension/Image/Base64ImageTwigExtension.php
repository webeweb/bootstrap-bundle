<?php

/**
 * This file is part of the bootstrap-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\BootstrapBundle\Twig\Extension\Image;

use SplFileObject;
use Symfony\Component\Serializer\Normalizer\DataUriNormalizer;
use Twig_SimpleFunction;
use WBW\Library\Core\Utility\ArrayUtility;

/**
 * Base64 image Twig extension.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Twig\Extension\Image
 * @final
 */
final class Base64ImageTwigExtension extends AbstractImageTwigExtension {

    /**
     * Service name.
     *
     * @var string
     */
    const SERVICE_NAME = "webeweb.bundle.bootstrapbundle.twig.extension.image.base64";

    /**
     * Constructor.
     */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Displays a Bootstrap base 64 image.
     *
     * @param array $args The arguments.
     * @return string Returns the Bootstrap base 64 image.
     */
    public function bootstrapBase64ImageFunction(array $args = []) {

        // Initialize the URI.
        $uri = ArrayUtility::get($args, "src");

        // Initialize the src.
        $src = [];
        if (null !== $uri) {
            $src = (new DataUriNormalizer())->normalize(new SplFileObject($uri));
        }

        // Return the Bootstrap image.
        return $this->bootstrapImage($src, ArrayUtility::get($args, "alt"), ArrayUtility::get($args, "width"), ArrayUtility::get($args, "height"), ArrayUtility::get($args, "class"));
    }

    /**
     * Get the Twig functions.
     *
     * @return array Returns the Twig functions.
     */
    public function getFunctions() {
        return [
            new Twig_SimpleFunction("bootstrapBase64Image", [$this, "bootstrapBase64ImageFunction"], ["is_safe" => ["html"]]),
        ];
    }

}
