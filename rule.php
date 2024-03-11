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
 * Plugin administration pages are defined here.
 *
 * @package     quizaccess_conquizzer
 * @category    admin
 * @copyright   2021 Brandon Jimenez <brandon.jimenez@concordia.ca>
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

require_once($CFG->dirroot . '/mod/quiz/accessrule/accessrulebase.php');

/**
 * quizaccess_conquizzer
 */
class quizaccess_conquizzer extends quiz_access_rule_base
{

    /**
     * * Information, such as might be shown on the quiz view page, relating to this restriction.
     * There is no obligation to return anything. If it is not appropriate to tell students
     * about this rule, then just return ''.
     *
     * @param quiz $quizobj
     * @param int $timenow
     * @param bool $canignoretimelimits
     * @return quiz_access_rule_base|quizaccess_proctoring|null
     */
    public static function make(quiz $quizobj, $timenow, $canignoretimelimits) {
        if (empty($quizobj->get_quiz()->landingdescription['text']) && empty($quizobj->get_quiz()->landingdescription['text'])) {
            return null;
        }
        //landingdescription
        //if (empty($quiz->landingdescription['text']))
        //quizzeroptions
        return new self($quizobj, $timenow);
    }

    /**
     * Add any fields that this rule requires to the quiz settings form. This
     * method is called from mod_quiz_mod_form::definition(), while the
     * security section is being built.
     *
     * @param mod_quiz_mod_form $quizform the quiz settings form that is being built.
     * @param MoodleQuickForm $mform the wrapped MoodleQuickForm.
     * @throws coding_exception
     */
    public static function add_settings_form_fields(mod_quiz_mod_form $quizform, MoodleQuickForm $mform) {
        global $DB,$PAGE,$CFG;

        //$PAGE->requires->js_call_amd('quizaccess_conquizzer/visuals', 'init');
        //$PAGE->requires->js(new moodle_url($CFG->wwwroot . '/mod/quiz/accessrule/conquizzer/amd/src/visuals.js'));

        $textfieldoptions = array('trusttext'=>true, 'enable_filemanagement' => false, 'maxfiles'=>0, 'maxbytes'=>0, 'context'=>null);
        
        $description = $options = '';

        if (!empty($PAGE->cm->instance)){
            $description = ($DB->record_exists('conquizz_descriptions', array('quizid' => $PAGE->cm->instance)))?$DB->get_field('conquizz_descriptions', 'description', array('quizid' => $PAGE->cm->instance)):'';
            $options = ($DB->record_exists('conquizz_options', array('quizid' => $PAGE->cm->instance)))?$DB->get_field('conquizz_options', 'options', array('quizid' => $PAGE->cm->instance)):'';
        }
        
        // -------------------------------------------------------------------------------
        $mform->insertElementBefore($mform->createElement('header', 'landingdescriptionhdr', get_string("quizzerdescription", "quizaccess_conquizzer")), 'timing');
        $mform->insertElementBefore($mform->createElement('editor', 'landingdescription', get_string("quizzerdefinition", "quizaccess_conquizzer"),null,$textfieldoptions), 'timing');
        $mform->setType('landingdescription', PARAM_RAW);
        $mform->setDefault('landingdescription',  array('text'=> $description, 'format'=>1));        
        $mform->addHelpButton('landingdescription', 'quizzerdefinition', 'quizaccess_conquizzer');
        
        // -------------------------------------------------------------------------------
        $mform->insertElementBefore($mform->createElement('header', 'landingoptionshdr', get_string("quizzeroptionshdr", "quizaccess_conquizzer")), 'timing');
        $mform->insertElementBefore($mform->createElement('editor', 'quizzeroptions', get_string("quizzeroptions", "quizaccess_conquizzer"),null,$textfieldoptions), 'timing');
        $mform->setType('quizzeroptions', PARAM_RAW);
        $mform->setDefault('quizzeroptions',  array('text'=>$options, 'format'=>1));
        $mform->addHelpButton('quizzeroptions', 'quizzeroptions', 'quizaccess_conquizzer');
        /*$options=array(); 
        $options[] =  $mform->createElement('advcheckbox', 'options[]',get_string("onlinecalculator", "quizaccess_conquizzer"), '', array('group' => 1), array('','demo1'));
        $options[] =  $mform->createElement('advcheckbox', 'options[]',get_string("physicalcalculator", "quizaccess_conquizzer"), '', array('group' => 1), array('','demo2'));
        $options[] =  $mform->createElement('advcheckbox', 'options[]',get_string("penandpaper", "quizaccess_conquizzer"), '', array('group' => 1), array('','demo3'));
        $mform->addGroup($options, 'preproceduregroup', get_string('quizzeroptions', 'quizaccess_conquizzer'),array('<br>'), false);*/
    }

    /**
     * Save any submitted settings when the quiz settings form is submitted. This
     * is called from quiz_after_add_or_update() in lib.php.
     *
     * @param object $quiz the data from the quiz form, including $quiz->id
     *      which is the id of the quiz being saved.
     * @throws dml_exception
     */
    public static function save_settings($quiz) {
        global $DB;

        $text     = $quiz->landingdescription['text'];
        /*we have to do the procedure for both fields separately*/
        if (empty($quiz->landingdescription['text'])) {
            $DB->delete_records('conquizz_descriptions', array('quizid' => $quiz->id));
        } else {
            $record = new stdClass();
            $record->quizid = $quiz->id;
            $record->description = $text;
            if (!$DB->record_exists('conquizz_descriptions', array('quizid' => $quiz->id))) {
                $DB->insert_record('conquizz_descriptions', $record);
            }
            else{
                $record->id = $DB->get_field('conquizz_descriptions', 'id', array('quizid' => $quiz->id));
                $DB->update_record('conquizz_descriptions', $record);
            }
        }

        $text     = $quiz->quizzeroptions['text'];
        /*------------------------------------*/
        if (empty($quiz->quizzeroptions['text'])) {
            $DB->delete_records('conquizz_options', array('quizid' => $quiz->id));
        } else {
            $record = new stdClass();
            $record->quizid = $quiz->id;
            $record->options = $text;
            if (!$DB->record_exists('conquizz_options', array('quizid' => $quiz->id))) {
                $DB->insert_record('conquizz_options', $record);
            }
            else{
                $record->id = $DB->get_field('conquizz_options', 'id', array('quizid' => $quiz->id));
                $DB->update_record('conquizz_options', $record);
            }
        }
    }

    /**
     * Delete any rule-specific settings when the quiz is deleted. This is called
     * from quiz_delete_instance() in lib.php.
     *
     * @param object $quiz the data from the database, including $quiz->id
     *      which is the id of the quiz being deleted.
     * @throws dml_exception
     */
    public static function delete_settings($quiz) {
        global $DB;
        $DB->delete_records('conquizz_descriptions', array('quizid' => $quiz->id));
        $DB->delete_records('conquizz_options', array('quizid' => $quiz->id));
    }

    /**
     * Return the bits of SQL needed to load all the settings from all the access
     * plugins in one DB query. The easiest way to understand what you need to do
     * here is probalby to read the code of quiz_access_manager::load_settings().
     *
     * If you have some settings that cannot be loaded in this way, then you can
     * use the get_extra_settings() method instead, but that has
     * performance implications.
     *
     * @param int $quizid the id of the quiz we are loading settings for. This
     *     can also be accessed as quiz.id in the SQL. (quiz is a table alisas for {quiz}.)
     * @return array with three elements:
     *     1. fields: any fields to add to the select list. These should be alised
     *        if neccessary so that the field name starts the name of the plugin.
     *     2. joins: any joins (should probably be LEFT JOINS) with other tables that
     *        are needed.
     *     3. params: array of placeholder values that are needed by the SQL. You must
     *        used named placeholders, and the placeholder names should start with the
     *        plugin name, to avoid collisions.
     */
    public static function get_settings_sql($quizid) {
        return array(
            'czdesc.description as conquizz_description, czopts.options as conquizz_options',
            'LEFT JOIN {conquizz_descriptions} czdesc ON czdesc.quizid = quiz.id 
             LEFT JOIN {conquizz_options} czopts ON czopts.quizid = quiz.id',
            array());
    }

    /**
     * Information, such as might be shown on the quiz view page, relating to this restriction.
     * There is no obligation to return anything. If it is not appropriate to tell students
     * about this rule, then just return ''.
     *
     * @return mixed a message, or array of messages, explaining the restriction
     *         (may be '' if no message is appropriate).
     * @throws coding_exception
     */
    public function description() {
        return '';
    }

}