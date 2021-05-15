<?php
// This file is part of Moodle - http://moodle.org/
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
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * block_modals main file
 *
 * @package   block_modals
 * @copyright  2021 Richard Jones <richardnz@outlook.com>
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
use \block_modals\local\course_users;
defined('MOODLE_INTERNAL') || die();

/**
 * Class modals minimal required block class.
 *
 */

class block_modals extends block_base {
    /**
     * Initialize our block with a language string.
     */
    public function init() {
        $this->title = get_string('pluginname', 'block_modals');
    }

    public function get_content() {
        global $OUTPUT;
        // Do we have any content?
        if ($this->content !== null) {
            return $this->content;
        }

        if (empty($this->instance)) {
            $this->content = '';
            return $this->content;
        }

        // OK let's add some content.
        $this->content = new stdClass();
        $this->content->footer = '';
        $header = get_string('listing', 'block_modals');

        // returns html from class and template of same name.
        $this->content->text = $OUTPUT->render(new course_users($header, $this->page->course->id));

        return $this->content;
    }
    /**
     * This is a list of places where the block may or
     * may not be added.
     */
    public function applicable_formats() {
        return ['all' => false, 'course-view' => true];
    }
    /**
     * Dis-allow multiple instances of the block.
     */
    public function instance_allow_multiple() {
        return false;
    }

    /**
     * No block configuration.
     */
    function has_config() {
        return false;
    }
}
