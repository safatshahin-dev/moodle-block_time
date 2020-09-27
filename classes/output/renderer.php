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
 * Block time renderer.
 *
 * @package     block_time
 * @copyright   2020 Your Name <safatshahin@gmail.com>
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

namespace block_time\output;

defined('MOODLE_INTERNAL') || die;

class renderer extends \plugin_renderer_base {
    /**
     * Throws in a call to the JS for AJAX etc.
     *
     * @return string html for the page
     */
    public function __construct() {
        global $PAGE;
        parent::__construct($PAGE, RENDERER_TARGET_GENERAL);
    }

    public function render_time() {
        $this->page->requires->css('/blocks/time/assets/css/block_time.css');
        $this->page->requires->js('/blocks/time/assets/js/time.js');
        $data = array();
        return parent::render_from_template('block_time/clock', $data);
    }

}
