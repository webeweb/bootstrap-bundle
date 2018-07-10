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

        // Twig extensions > Code
        $tableContents[] = new WikiPage("twig-extension", "code", "basic-block", "Basic block");
        $tableContents[] = new WikiPage("twig-extension", "code", "inline", "Inline");
        $tableContents[] = new WikiPage("twig-extension", "code", "sample-output", "Sample output");
        $tableContents[] = new WikiPage("twig-extension", "code", "user-input", "User input");
        $tableContents[] = new WikiPage("twig-extension", "code", "variable", "Variable");

        // Twig extensions > Component
        $tableContents[] = new WikiPage("twig-extension", "component", "alert", "Alert");
        $tableContents[] = new WikiPage("twig-extension", "component", "badge", "Badge");
        $tableContents[] = new WikiPage("twig-extension", "component", "button", "Button");
        $tableContents[] = new WikiPage("twig-extension", "component", "glyphicon", "Glyphicon");
        $tableContents[] = new WikiPage("twig-extension", "component", "label", "Label");
        $tableContents[] = new WikiPage("twig-extension", "component", "progress-bar", "Progress bar");

        // Twig extensions > Form
        $tableContents[] = new WikiPage("twig-extension", "form", "button", "Button");

        // Twig extensions > Grid
        $tableContents[] = new WikiPage("twig-extension", "grid", "grid", "Grid");

        // Twig extensions > Image
        $tableContents[] = new WikiPage("twig-extension", "image", "base64", "Base 64");

        // Twig extensions > Plugin
        $tableContents[] = new WikiPage("twig-extension", "plugin", "font-awesome", "Font Awesome");
        $tableContents[] = new WikiPage("twig-extension", "plugin", "jquery-inputmask", "jQuery InputMask");
        $tableContents[] = new WikiPage("twig-extension", "plugin", "material-design-iconic-font", "Material Design Iconic Font");
        $tableContents[] = new WikiPage("twig-extension", "plugin", "meteocons", "Meteocons");

        // Twig extensions > Table
        $tableContents[] = new WikiPage("twig-extension", "table", "button", "Button");

        // Twig extensions > Typography
        $tableContents[] = new WikiPage("twig-extension", "typography", "bold", "Bold");
        $tableContents[] = new WikiPage("twig-extension", "typography", "deleted", "Deleted");
        $tableContents[] = new WikiPage("twig-extension", "typography", "heading", "Heading");
        $tableContents[] = new WikiPage("twig-extension", "typography", "inserted", "Inserted");
        $tableContents[] = new WikiPage("twig-extension", "typography", "italic", "Italic");
        $tableContents[] = new WikiPage("twig-extension", "typography", "marked", "Marked");
        $tableContents[] = new WikiPage("twig-extension", "typography", "small", "Small");
        $tableContents[] = new WikiPage("twig-extension", "typography", "strikethrough", "Strikethrough");
        $tableContents[] = new WikiPage("twig-extension", "typography", "underlined", "Underlined");

        // Twig extensions > Utility
        $tableContents[] = new WikiPage("twig-extension", "utility", "role-label", "Role label");

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
            $wikiPage->getCategory(),
            "/",
            $wikiPage->getPackage(),
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
                "user"                      => $this->getUser(),
                "userRoleColors"            => $this->getUserRoleColors(),
                "userRoleTranslations"      => $this->getUserRoleTranslations(),
        ]);
    }

}
