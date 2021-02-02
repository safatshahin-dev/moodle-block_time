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
 * Block time js.
 *
 * @package     block_time
 */

define(['jquery', 'core/ajax', 'core/str', 'core/config', 'core/notification', 'core/templates'],
    function($, AJAX, str, mdlcfg, notification, templates) {
    var time = {
        init: function(enableDate) {
            time.setPointer(enableDate);
            setInterval(time.setPointer, 1000);
        },
        setPointer: function (enableDate) {
            const currentDate = new Date();
            const secondsRatio = currentDate.getSeconds() / 60;
            const minutesRatio = (secondsRatio + currentDate.getMinutes()) / 60;
            const hoursRatio = (minutesRatio + currentDate.getHours()) / 12;
            time.setRotation($('#data-second-hand'), secondsRatio);
            time.setRotation($('#data-minute-hand'), minutesRatio);
            time.setRotation($('#data-hour-hand'), hoursRatio);
            if (enableDate) {
                time.setDate(currentDate.getDay(), currentDate.getMonth(), currentDate.getFullYear());
            }
        },
        setRotation: function (selector, value) {
            selector.css('--rotation', value * 360);
        },
        setDate: function (day, month, year) {
            str.get_strings([
                {'key': 'date1', component: 'block_time'},
                {'key': 'date2', component: 'block_time'},
                {'key': 'date3', component: 'block_time'},
                {'key': 'date4', component: 'block_time'},
                {'key': 'date5', component: 'block_time'},
                {'key': 'date6', component: 'block_time'},
                {'key': 'date7', component: 'block_time'},
                {'key': 'date8', component: 'block_time'},
                {'key': 'date9', component: 'block_time'},
                {'key': 'date10', component: 'block_time'},
                {'key': 'date11', component: 'block_time'},
                {'key': 'date12', component: 'block_time'},
                {'key': 'date', component: 'block_time'}
            ]).done(function (s) {
                var date = s[12] + ' ' + day + ' ' + s[month] + ' ' + year;
                $('#block-time-date-text').text(date);
            });
        }
    };
    return time;
});
