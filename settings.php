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
 * Block time settings.
 *
 * @package     block_time
 * @copyright   2021 Safat Shahin <safatshahin@gmail.com>
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die;

if ($ADMIN->fulltree) {
    //select clock type (coming soon)
//    $clocktype = array(
//        '0' => get_string('analog', 'block_time'),
//        '1' => get_string('digital', 'block_time')
//    );
//    $name = 'block_time/clocktype';
//    $title = get_string('clocktype', 'block_time');
//    $description = get_string('clocktype_desc', 'block_time');
//    $setting = new admin_setting_configselect($name, $title, $description, 0, $clocktype);
//    $settings->add($setting);

    //enable or disable date to be displayed with the clock
    $name = 'block_time/enabledate';
    $title = get_string('enabledate', 'block_time');
    $description = get_string('enabledate_desc', 'block_time');
    $setting = new admin_setting_configcheckbox($name, $title, $description, 0);
    $settings->add($setting);
}
