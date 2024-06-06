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
 * Helper class for quizaccess_conquizzer.
 *
 * @package    quizaccess_conquizzer
 * @copyright  2024 Brandon Jimenez <brandon.jimenez@concordia.ca> on behalf of Concordia University
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

 namespace quizaccess_conquizzer;

 //defined('MOODLE_INTERNAL') || die();

 class helper_rules {
    public static function quiz_description($quiz) {
        global $DB;
        $sql = "SELECT 'record' AS resultrecord,q.id,
                       COALESCE(czdesc.description,'No description available') as conquizz_description,
                       COALESCE(czopts.options,'No authorized materials') as conquizz_options
                  FROM {quiz} q
             LEFT JOIN {conquizz_descriptions} czdesc ON czdesc.quizid = q.id 
             LEFT JOIN {conquizz_options} czopts ON czopts.quizid = q.id
                 WHERE q.id = :qid";
        $records = $DB->get_records_sql($sql, array('qid'=>$quiz->id));
        return $records;
    }

    public static function little_html_test () : string {
        return "<p>this is my little html test function</p>";
    }
 }