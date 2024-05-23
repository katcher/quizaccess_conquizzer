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
 * @package    mod_quizaccess_conquizzer
 * @copyright  2024 onwards Brandon Jimenez in behalf of Concordia University
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

function xmldb_quizaccess_conquizzer_upgrade($oldversion) {
    global $CFG, $DB;
    $dbman = $DB->get_manager();
    $result = TRUE;


    if ($oldversion < 2021032200) {

        // Define table conquizz_options to be dropped.
        $table = new xmldb_table('conquizz_notes');

        // Conditionally launch drop table for conquizz_notes.
        if ($dbman->table_exists($table)) {
            $dbman->drop_table($table);
        }

        // Conquizzer savepoint reached.
        upgrade_plugin_savepoint(true, 2021032200, 'quizaccess', 'conquizzer');
    }

    return $result;
}