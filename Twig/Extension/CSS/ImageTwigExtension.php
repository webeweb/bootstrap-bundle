<?php

/*
 * This file is part of the bootstrap-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\BootstrapBundle\Twig\Extension\CSS;

use SplFileObject;
use Symfony\Component\HttpKernel\Kernel;
use Symfony\Component\Serializer\Normalizer\DataUriNormalizer;
use Twig_Environment;
use Twig_SimpleFunction;
use WBW\Library\Core\Argument\ArrayHelper;

/**
 * Image Twig extension.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Twig\Extension\CSS
 * @link https://getbootstrap.com/docs/3.3/css/#images
 */
class ImageTwigExtension extends AbstractImageTwigExtension {

    /**
     * Service name.
     *
     * @var string
     */
    const SERVICE_NAME = "webeweb.bootstrap.twig.extension.css.image";

    /**
     * Constructor.
     *
     * @param Twig_Environment $twigEnvironment The Twig environment.
     */
    public function __construct(Twig_Environment $twigEnvironment) {
        parent::__construct($twigEnvironment);
    }

    /**
     * Encode an URI into base 64.
     *
     * @param string $uri The URI.
     * @return string Returns the URI encoded into base 64.
     */
    private function base64Encode($uri) {

        if (null === $uri) {
            return null;
        }

        $splFileObject = new SplFileObject($uri);

        if (30100 < Kernel::VERSION_ID) {
            return (new DataUriNormalizer())->normalize($splFileObject);
        }

        $data = "";
        while (false === $splFileObject->eof()) {
            $data .= $splFileObject->fgets();
        }

        return sprintf("data:%s;base64,%s", mime_content_type($uri), base64_encode($data));
    }

    /**
     * Displays a Bootstrap image "Base 64".
     *
     * @param array $args The arguments.
     * @return string Returns the Bootstrap base 64 image.
     */
    public function bootstrapImageBase64Function(array $args = []) {

        $src = $this->base64Encode(ArrayHelper::get($args, "src"));

        return $this->bootstrapImage($src, ArrayHelper::get($args, "alt"), ArrayHelper::get($args, "width"), ArrayHelper::get($args, "height"), ArrayHelper::get($args, "class"), ArrayHelper::get($args, "usemap"));
    }

    /**
     * Get the Twig functions.
     *
     * @return array Returns the Twig functions.
     */
    public function getFunctions() {
        return [
            new Twig_SimpleFunction("bootstrapImageBase64", [$this, "bootstrapImageBase64Function"], ["is_safe" => ["html"]]),
            new Twig_SimpleFunction("bsImageBase64", [$this, "bootstrapImageBase64Function"], ["is_safe" => ["html"]]),
        ];
    }
}
