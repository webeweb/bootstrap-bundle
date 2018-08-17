<?php

/**
 * This file is part of the bootstrap-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\BootstrapBundle\Model\Layout;

/**
 * Email layout model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Model\Layout
 */
class EmailLayout {

    /**
     * Account settings URL.
     *
     * @var string
     */
    private $accountSettingsURL;

    /**
     * Best regards.
     *
     * @var string
     */
    private $bestRegards;

    /**
     * Company logo.
     *
     * @var string
     */
    private $companyLogo;

    /**
     * Company name.
     *
     * @var string
     */
    private $companyName;

    /**
     * Company URL.
     *
     * @var string
     */
    private $companyURL;

    /**
     * Support email.
     *
     * @var string
     */
    private $supportEmail;

    /**
     * Support name.
     *
     * @var string
     */
    private $supportName;

    /**
     * Support phone.
     *
     * @var string
     */
    private $supportPhone;

    /**
     * Unsubscribe URL.
     *
     * @var string
     */
    private $unsubscribeURL;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO.
    }

    /**
     * Get the account settings URL.
     *
     * @return string Returns the account settings URL.
     */
    public function getAccountSettingsURL() {
        return $this->accountSettingsURL;
    }

    /**
     * Get the best regards.
     *
     * @return string Returns the best regards.
     */
    public function getBestRegards() {
        return $this->bestRegards;
    }

    /**
     * Get the company logo.
     *
     * @return string Returns the company logo.
     */
    public function getCompanyLogo() {
        return $this->companyLogo;
    }

    /**
     * Get the company name.
     *
     * @return string Returns the company name.
     */
    public function getCompanyName() {
        return $this->companyName;
    }

    /**
     * Get the company URL.
     *
     * @return string Returns the company URL.
     */
    public function getCompanyURL() {
        return $this->companyURL;
    }

    /**
     * Get the support email.
     *
     * @return string Returns the support email.
     */
    public function getSupportEmail() {
        return $this->supportEmail;
    }

    /**
     * Get the support name.
     *
     * @return string Returns the support name.
     */
    public function getSupportName() {
        return $this->supportName;
    }

    /**
     * Get the support phone.
     *
     * @return string Returns the support phone.
     */
    public function getSupportPhone() {
        return $this->supportPhone;
    }

    /**
     * Get the unsuscribe URL.
     *
     * @return string Returns the unsuscribe URL.
     */
    public function getUnsubscribeURL() {
        return $this->unsubscribeURL;
    }

    /**
     * Set the account settings URL.
     *
     * @param string $accountSettingsURL The account settings URL.
     * @return EmailLayout Returns this email layout.
     */
    public function setAccountSettingsURL($accountSettingsURL) {
        $this->accountSettingsURL = $accountSettingsURL;
        return $this;
    }

    /**
     * Set the best regards.
     *
     * @param string $bestRegards The best regards.
     * @return EmailLayout Returns this email layout.
     */
    public function setBestRegards($bestRegards) {
        $this->bestRegards = $bestRegards;
        return $this;
    }

    /**
     * Set the company logo.
     *
     * @param string $companyLogo The company logo.
     * @return EmailLayout Returns this email layout.
     */
    public function setCompanyLogo($companyLogo) {
        $this->companyLogo = $companyLogo;
        return $this;
    }

    /**
     * Set the company name.
     *
     * @param string $companyName The company name.
     * @return EmailLayout Returns this email layout.
     */
    public function setCompanyName($companyName) {
        $this->companyName = $companyName;
        return $this;
    }

    /**
     * Set the company URL.
     *
     * @param string $companyURL The company URL.
     * @return EmailLayout Returns this email layout.
     */
    public function setCompanyURL($companyURL) {
        $this->companyURL = $companyURL;
        return $this;
    }

    /**
     * Set the support email.
     *
     * @param string $supportEmail The support email.
     * @return EmailLayout Returns this email layout.
     */
    public function setSupportEmail($supportEmail) {
        $this->supportEmail = $supportEmail;
        return $this;
    }

    /**
     * Set the support name.
     *
     * @param string $supportName The support name.
     * @return EmailLayout Returns this email layout.
     */
    public function setSupportName($supportName) {
        $this->supportName = $supportName;
        return $this;
    }

    /**
     * Set the support phone.
     *
     * @param string $supportPhone The support phone.
     * @return EmailLayout Returns this email layout.
     */
    public function setSupportPhone($supportPhone) {
        $this->supportPhone = $supportPhone;
        return $this;
    }

    /**
     * Set the unsuscribe URL.
     *
     * @param string $unsubscribeURL The unsuscribe URL.
     * @return EmailLayout Returns this email layout.
     */
    public function setUnsubscribeURL($unsubscribeURL) {
        $this->unsubscribeURL = $unsubscribeURL;
        return $this;
    }

}
