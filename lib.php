<?php
// This file is part of Moodle - https://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <https://www.gnu.org/licenses/>.

/**
 * Plugin version and other meta-data are defined here.
 *
 * @package     local_frame
 * @copyright   Jesus Vargas, jva756@gmail.com
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
defined('MOODLE_INTERNAL') || die();

function local_frame_extend_navigation(global_navigation $root) {
    $node = navigation_node::create(
       get_string('pluginname', 'local_frame'),
       new moodle_url('/local/frame/index.php'),
       navigation_node::TYPE_CUSTOM,
       null, // Key.
       null, // Icon.
       new pix_icon('i/grades', '') // Icon.
    );
    $node->showinflatnavigation = true;
    $root->add_node($node);
}
