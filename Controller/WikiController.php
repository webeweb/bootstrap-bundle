<?php

/**
 * This file is part of the bootstrap-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\BootstrapBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use WBW\Bundle\BootstrapBundle\Model\WikiPage;

/**
 * Wiki controller.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Controller
 */
class WikiController extends AbstractWikiController {

    /**
     * Get the wiki pages.
     *
     * @return WikiPage[] Returns the wiki pages.
     */
    public static function getWikiPages() {

        // Initialize the table of contents.
        $tableContents = [];

        // Twig extensions > CSS
        $tableContents[] = new WikiPage("Twig-extension", "CSS", "button", "Button");
        $tableContents[] = new WikiPage("twig-extension", "CSS", "code", "Code");
        $tableContents[] = new WikiPage("Twig-extension", "CSS", "grid", "Grid");
        $tableContents[] = new WikiPage("Twig-extension", "CSS", "image", "Image");
        $tableContents[] = new WikiPage("Twig-extension", "CSS", "typography", "Typography");

        // Twig extensions > Component
        $tableContents[] = new WikiPage("Twig-extension", "Component", "alert", "Alert");
        $tableContents[] = new WikiPage("Twig-extension", "Component", "badge", "Badge");
        $tableContents[] = new WikiPage("Twig-extension", "Component", "glyphicon", "Glyphicon");
        $tableContents[] = new WikiPage("Twig-extension", "Component", "label", "Label");
        $tableContents[] = new WikiPage("Twig-extension", "Component", "progress-bar", "Progress bar");

        // Twig extensions > Plugin
        $tableContents[] = new WikiPage("Twig-extension", "Plugin", "font-awesome", "Font Awesome");
        $tableContents[] = new WikiPage("Twig-extension", "Plugin", "jquery-inputmask", "jQuery InputMask");
        $tableContents[] = new WikiPage("Twig-extension", "Plugin", "material-design-iconic-font", "Material Design Iconic Font");
        $tableContents[] = new WikiPage("Twig-extension", "Plugin", "meteocons", "Meteocons");

        // Twig extensions > Utility
        $tableContents[] = new WikiPage("Twig-extension", "Utility", "form-button", "Form button");
        $tableContents[] = new WikiPage("Twig-extension", "Utility", "role-label", "Role label");
        $tableContents[] = new WikiPage("Twig-extension", "Utility", "table-button", "Table button");

        // Return the table of contents.
        return $tableContents;
    }

    /**
     * Displays a wiki page.
     *
     * @param Request $request The request.
     * @param string $category The category.
     * @param string $package The parent.
     * @param string $page The page.
     * @return Response Returns the response.
     */
    public function indexAction(Request $request, $category, $package, $page) {

        // Initialize.
        $wikiPages = self::getWikiPages();
        $wikiPage  = null;

        // Find the wiki page.
        foreach ($wikiPages as $current) {
            if ($category === $current->getCategory() && $package === $current->getPackage() && $page === $current->getPage()) {
                $wikiPage = $current;
                break;
            }
        }

        // Check if the wiki page exists.
        if (null === $wikiPage) {

            // Set the default wiki page.
            $wikiPage = $wikiPages[0];

            // Notify the user.
            $this->notifyDanger("The requested page was not found");
            $this->notifyInfo("You have been redirected to homepage");
        }

        // Set the template.
        $template = [
            "@",
            $wikiPage->getBundle(),
            "/Wiki/",
            strtolower($wikiPage->getCategory()),
            "/",
            strtolower($wikiPage->getPackage()),
            "/",
            $wikiPage->getPage(),
            ".html.twig",
        ];

        // Returns the response.
        return $this->render(implode("", $template), [
                "wikiPage"                  => $wikiPage,
                "wikiPages"                 => $wikiPages,
                "syntaxHighlighterConfig"   => $this->getSyntaxHighlighterConfig(),
                "syntaxHighlighterDefaults" => $this->getSyntaxHighlighterDefaults(),
                "user"                      => $this->getSampleUser(),
                "userRoleColors"            => $this->getSampleUserRoleColors(),
                "userRoleTranslations"      => $this->getSampleUserRoleTranslations(),
        ]);
    }

}
