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
use Symfony\Component\Serializer\Exception\ExceptionInterface;
use Symfony\Component\Serializer\Normalizer\DataUriNormalizer;
use Twig\TwigFunction;
use WBW\Library\Core\Argument\Helper\ArrayHelper;

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
    const SERVICE_NAME = "wbw.bootstrap.twig.extension.css.image";

    /**
     * Encode an URI into base 64.
     *
     * @param string|null $uri The URI.
     * @return string Returns the URI encoded into base 64.
     * @throws ExceptionInterface Throws an exception if an error occurs
     */
    private function base64Encode(?string $uri): string {

        if (null === $uri) {
            return "";
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
     * @throws ExceptionInterface Throws an exception if an error occurs
     */
    public function bootstrapImageBase64Function(array $args = []): string {

        $src = $this->base64Encode(ArrayHelper::get($args, "src"));

        return $this->bootstrapImage($src, ArrayHelper::get($args, "alt"), ArrayHelper::get($args, "width"), ArrayHelper::get($args, "height"), ArrayHelper::get($args, "class"), ArrayHelper::get($args, "usemap"));
    }

    /**
     * Get the Twig functions.
     *
     * @return TwigFunction[] Returns the Twig functions.
     */
    public function getFunctions(): array {
        return [
            new TwigFunction("bootstrapImageBase64", [$this, "bootstrapImageBase64Function"], ["is_safe" => ["html"]]),
            new TwigFunction("bsImageBase64", [$this, "bootstrapImageBase64Function"], ["is_safe" => ["html"]]),
        ];
    }
}
