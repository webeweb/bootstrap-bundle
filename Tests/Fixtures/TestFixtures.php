<?php

/**
 * This file is part of the bootstrap-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\BootstrapBundle\Tests\Fixtures;

use WBW\Bundle\BootstrapBundle\Navigation\NavigationInterface;
use WBW\Bundle\BootstrapBundle\Navigation\NavigationItem;
use WBW\Bundle\BootstrapBundle\Navigation\NavigationNode;
use WBW\Bundle\BootstrapBundle\Navigation\NavigationTree;

/**
 * Test fixtures.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Tests\Fixtures\App
 * @final
 */
final class TestFixtures {

    /**
     * Get a navigation tree.
     *
     * GitHub
     * |- AdminBSB Material Design bundle
     * |- Bootstrap bundle
     * |- EDM bundle
     * |- Highcharts bundle
     * |- jQuery DataTables bundle
     * |- jQuery QueryBuilder bundle
     * |- SyntaxHighlighter bundle
     * |- Core library
     * |- cURL library
     * |- FTP library
     * |- fPDF library
     * |- SkiData library
     * |- sMsmode library
     *
     * @return NavigationTree Returns the navigation tree.
     */
    public static function getNavigationTree() {

        // Initialize the tree.
        $tree = new NavigationTree("tree");

        $tree->addNode(new NavigationNode("GitHub", null, NavigationInterface::NAVIGATION_HREF_DEFAULT));

        $tree->getLastNode()->addNode(new NavigationNode("AdminBSB Material Design bundle", null, "https://github.com/webeweb/adminbsb-material-design-bundle"));
        $tree->getLastNode()->addNode(new NavigationNode("Bootstrap bundle", null, "https://github.com/webeweb/bootstrap-bundle"));
        $tree->getLastNode()->addNode(new NavigationNode("EDM bundle", null, "https://github.com/webeweb/edm-bundle"));
        $tree->getLastNode()->addNode(new NavigationNode("Highcharts bundle", null, "https://github.com/webeweb/highcharts-bundle"));
        $tree->getLastNode()->addNode(new NavigationNode("jQuery DataTables bundle", null, "https://github.com/webeweb/jquery-datatables-bundle"));
        $tree->getLastNode()->addNode(new NavigationNode("jQuery QueryBuilder bundle", null, "https://github.com/webeweb/jquery-querybuilder-bundle"));
        $tree->getLastNode()->addNode(new NavigationNode("OpenData bundle", null, "https://github.com/webeweb/opendata-bundle"));
        $tree->getLastNode()->addNode(new NavigationNode("SyntaxHighlighter bundle", null, "https://github.com/webeweb/syntaxhighlighter-bundle"));
        $tree->getLastNode()->addNode(new NavigationNode("Core library", null, "https://github.com/webeweb/core-library"));
        $tree->getLastNode()->addNode(new NavigationNode("cURL library", null, "https://github.com/webeweb/curl-library"));
        $tree->getLastNode()->addNode(new NavigationNode("FTP library", null, "https://github.com/webeweb/ftp-library"));
        $tree->getLastNode()->addNode(new NavigationItem("fPDF library", null, "https://github.com/webeweb/fpdf-library"));
        $tree->getLastNode()->addNode(new NavigationNode("SkiData library", null, "https:\/\/github.com\/webeweb\/skidata-library", NavigationInterface::NAVIGATION_MATCHER_REGEXP));
        $tree->getLastNode()->addNode(new NavigationNode("sMsmode library", null, "https://github.com/webeweb/smsmode-library", NavigationInterface::NAVIGATION_MATCHER_ROUTER));

        // Return the tree.
        return $tree;
    }

}
