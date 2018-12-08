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
use WBW\Bundle\CoreBundle\Model\WikiView;

/**
 * Wiki controller.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Controller
 */
class WikiController extends AbstractWikiController {

    /**
     * Get the wiki views.
     *
     * @return WikiView[] Returns the wiki views.
     */
    public static function getWikiViews() {

        // Initialize the table of contents.
        $tableContents = [];

        // Twig extensions > CSS
        $tableContents[] = new WikiView("Twig-extension", "CSS", "button", "Button");
        $tableContents[] = new WikiView("twig-extension", "CSS", "code", "Code");
        $tableContents[] = new WikiView("Twig-extension", "CSS", "grid", "Grid");
        $tableContents[] = new WikiView("Twig-extension", "CSS", "image", "Image");
        $tableContents[] = new WikiView("Twig-extension", "CSS", "typography", "Typography");

        // Twig extensions > Component
        $tableContents[] = new WikiView("Twig-extension", "Component", "alert", "Alert");
        $tableContents[] = new WikiView("Twig-extension", "Component", "badge", "Badge");
        $tableContents[] = new WikiView("Twig-extension", "Component", "glyphicon", "Glyphicon");
        $tableContents[] = new WikiView("Twig-extension", "Component", "label", "Label");
        $tableContents[] = new WikiView("Twig-extension", "Component", "progress-bar", "Progress bar");

        // Twig extensions > Utility
        $tableContents[] = new WikiView("Twig-extension", "Utility", "form-button", "Form button");
        $tableContents[] = new WikiView("Twig-extension", "Utility", "role-label", "Role label");
        $tableContents[] = new WikiView("Twig-extension", "Utility", "table-button", "Table button");

        // Twig extensions > Plugin
        $tableContents[] = new WikiView("Twig-extension", "Plugin", "font-awesome", "Font Awesome");
        $tableContents[] = new WikiView("Twig-extension", "Plugin", "jquery-inputmask", "jQuery InputMask");
        $tableContents[] = new WikiView("Twig-extension", "Plugin", "material-design-iconic-font", "Material Design Iconic Font");
        $tableContents[] = new WikiView("Twig-extension", "Plugin", "meteocons", "Meteocons");

        // Handle each wiki view.
        foreach ($tableContents as $current) {
            $current->setBundle("Bootstrap");
        }

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
        $wikiViews = self::getWikiViews();
        $wikiView  = null;

        // Find the wiki page.
        foreach ($wikiViews as $current) {
            if ($category === $current->getCategory() && $package === $current->getPackage() && $page === $current->getPage()) {
                $wikiView = $current;
                break;
            }
        }

        // Check if the wiki page exists.
        if (null === $wikiView) {

            // Set the default wiki page.
            $wikiView = $wikiViews[0];

            // Notify the user.
            $this->notifyDanger("The requested page was not found");
            $this->notifyInfo("You have been redirected to homepage");
        }

        // Set the template.
        $template = [
            "@",
            $wikiView->getBundle(),
            "/Wiki/",
            strtolower($wikiView->getCategory()),
            "/",
            strtolower($wikiView->getPackage()),
            "/",
            $wikiView->getPage(),
            ".html.twig",
        ];

        // Returns the response.
        return $this->render(implode("", $template), [
                "wikiViews"                 => $wikiViews,
                "wikiView"                  => $wikiView,
                "syntaxHighlighterConfig"   => $this->getSyntaxHighlighterConfig(),
                "syntaxHighlighterDefaults" => $this->getSyntaxHighlighterDefaults(),
                "user"                      => $this->getSampleUser(),
                "userRoleColors"            => $this->getSampleUserRoleColors(),
                "userRoleTranslations"      => $this->getSampleUserRoleTranslations(),
        ]);
    }

}
