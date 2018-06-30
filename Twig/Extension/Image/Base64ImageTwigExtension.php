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
use Symfony\Component\HttpKernel\Kernel;
use Symfony\Component\Serializer\Normalizer\DataUriNormalizer;
use Twig_SimpleFunction;
use WBW\Library\Core\Utility\Argument\ArrayUtility;

/**
 * Base64 image Twig extension.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Twig\Extension\Image
 */
class Base64ImageTwigExtension extends AbstractImageTwigExtension {

    /**
     * Service name.
     *
     * @var string
     */
    const SERVICE_NAME = "webeweb.bootstrapbundle.twig.extension.image.base64";

    /**
     * Constructor.
     */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Encode an URI into base 64.
     *
     * @param string $uri The URI.
     * @return string Returns the URI encoded into base 64.
     */
    private function base64Encode($uri) {

        // Check the URI.
        if (null === $uri) {
            return null;
        }

        // Initialize a SPL file object.
        $splFileObject = new SplFileObject($uri);

        // Check the Kernel version.
        if (30100 < Kernel::VERSION_ID) {

            // Use a Data URI normalizer.
            return (new DataUriNormalizer())->normalize($splFileObject);
        }

        // Read the SPL file object.
        $data = "";
        while (false === $splFileObject->eof()) {
            $data .= $splFileObject->fgets();
        }

        // Encode into base 64.
        return sprintf("data:%s;base64,%s", mime_content_type($uri), base64_encode($data));
    }

    /**
     * Displays a Bootstrap base 64 image.
     *
     * @param array $args The arguments.
     * @return string Returns the Bootstrap base 64 image.
     */
    public function bootstrapBase64ImageFunction(array $args = []) {

        // Initialize the src.
        $src = $this->base64Encode(ArrayUtility::get($args, "src"));

        // Return the Bootstrap image.
        return $this->bootstrapImage($src, ArrayUtility::get($args, "alt"), ArrayUtility::get($args, "width"), ArrayUtility::get($args, "height"), ArrayUtility::get($args, "class"), ArrayUtility::get($args, "usemap"));
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
