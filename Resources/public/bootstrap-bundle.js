/**
 * This file is part of the bootstrap-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 * Displays a SweetAlert "Error".
 *
 * @param {String} message The message.
 * @returns {undefined}
 */
function bbSweetAlertError(message) {
    swal({
        icon: "error",
        text: message
    });
} // bbSweetAlertError

/**
 * Displays a SweetAlert "Success".
 *
 * @param {String} message The message.
 * @returns {undefined}
 */
function bbSweetAlertSuccess(message) {
    swal({
        icon: "success",
        text: message
    });
} // bbSweetAlertError
