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
 * block_students version file
 *
 * @package   block_students
 * @copyright  2021 Richard Jones <richardnz@outlook.com>
 * @copyright  2021 G J Barnard - {@link http://moodle.org/user/profile.php?id=442195}.
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
defined('MOODLE_INTERNAL') || die();

$plugin->component = 'block_students';
$plugin->version = 2022121100;
$plugin->requires  = 2022112800.00; // 4.1 (Build: 20221128).
$plugin->supported = array(401, 401);
$plugin->release = '401.1.0';
$plugin->maturity = MATURITY_STABLE;
