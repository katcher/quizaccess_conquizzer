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
 * Plugin strings are defined here.
 *
 * @package     quizaccess_conquizzer
 * @category    string
 * @copyright   2021 onwards Brandon Jimenez <brandon.jimenez@concordia.ca> in behalf of Concordia University
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['pluginname'] = 'Concordia Quizzer';

$string['quizzerdescription'] = 'Concordia Exam Instructions';
$string['quizzerdefinition'] = $string['examinstr'] = 'Exam Instructions';
$string['quizzerdefinition_help'] = 'Add the Instructions you would like to give your students regarding the exam. These will appear on the exam landing page.';

$string['quizzeroptionshdr'] = 'Concordia Allowed Materials';
$string['quizzeroptions']  = $string['examallowed'] = 'Allowed Materials';
$string['quizzeroptions_help'] = 'List materials that are permissible and those that are not (e.g. calculators, formula sheets, etc.). These will appear below the exam instructions.';
$string['quizzerforbidden'] = 'Forbidden Materials';

//allowed materials
$string['onlinecalculator'] = 'Online Calculator';
$string['physicalcalculator'] = 'Physical Calculator';
$string['penandpaper'] = 'Pen and Paper';
$string['openbook'] = 'Open Book';
$string['instructorsheets'] = 'Instructor provided formulae sheets';
$string['studentsheets'] = 'Student created notes or sheets';
$string['scratchpaper'] = 'Scratch paper - not uploaded';
$string['blanksheets'] = 'Blank sheets to write answers and upload';
$string['dictionary'] = 'English-English print dictionary/thesaurus.';
$string['oxford'] = '<a href="https://www-oed-com.lib-ezproxy.concordia.ca/">Oxford English Dictionary (OED)</a> - Concordia username and password required.</p>';

//forbidden materials
$string['translation'] = 'You are not allowed to use any translation or grammar checking tools.';
$string['additionalresources'] = 'No other resources or materials may be used during the exam.';

$string['question'] = 'Question'; //not sure where this is going

$string['privacy:metadata'] = 'The Concordia Quizzer quiz access rule plugin does not store any personal data.';