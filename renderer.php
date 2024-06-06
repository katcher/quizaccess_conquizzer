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
 * @package     quizaccess_conquizzer
 * @copyright   2024 onwards Brandon Jimenez <brandon.jimenez@concordia.ca> on behalf of Concordia University
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die;

include_once($CFG->dirroot . "/mod/quiz/renderer.php");

class quizaccess_conquizzer_mod_quiz_renderer extends mod_quiz_renderer {
    /**
     * Generates the data to be sent to the description
     * 
     * @param object $quiz the quiz settings.
     * @return array with the info of the description and options.
     */
    /*public function quiz_description($quiz) {
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
    }*/

    /*
     * View Page
     */
    /**
     * Generates the view page
     *
     * @param stdClass $course the course settings row from the database.
     * @param stdClass $quiz the quiz settings row from the database.
     * @param stdClass $cm the course_module settings row from the database.
     * @param context_module $context the quiz context.
     * @param mod_quiz_view_object $viewobj
     * @return string HTML to display
     */
    /*public function view_page($course, $quiz, $cm, $context, $viewobj) {
        $output = '';

        $output .= $this->view_page_tertiary_nav($viewobj);
        //$output .= $this->render_from_template('quizaccess_conquizzer/description', $this->quiz_description($quiz));
        $test = quizaccess_conquizzer\helper_rules::quiz_description($quiz);
        $output .= $this->render_from_template('quizaccess_conquizzer/description', $test);
        $output .= quizaccess_conquizzer\helper_rules::little_html_test();
        $output .= $this->view_information($quiz, $cm, $context, $viewobj->infomessages);
        $output .= $this->view_table($quiz, $context, $viewobj);
        $output .= $this->view_result_info($quiz, $context, $cm, $viewobj);
        $output .= $this->box($this->view_page_buttons($viewobj), 'quizattempt');
        return $output;
    }*/
}