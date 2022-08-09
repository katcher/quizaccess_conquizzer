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
 * @copyright   2021 Brandon Jimenez <brandon.jimenez@concordia.ca>
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['pluginname'] = 'Concordia Quizzer';

$string['quizzerdescription'] = 'Concordia Exam Instructions';
$string['quizzerdefinition'] = 'Exam Instructions';
$string['quizzerdefinition_help'] = 'Add the Instructions you would like to give your students regarding the exam. These will appear on the exam landing page.';

$string['quizzeroptionshdr'] = 'Concordia Allowed Materials';
$string['quizzeroptions'] = 'Allowed Materials';
$string['quizzeroptions_help'] = 'List materials that are permissible and those that are not (Eg. calculators, formula sheets, etc.). These will appear below the exam instructions.';

$string['onlinecalculator'] = 'Online Calculator';
$string['physicalcalculator'] = 'Physical Calculator';
$string['penandpaper'] = 'Pen and Paper';

$string['copyright'] = "The present exam and the contents thereof are the property and copyright of the professor(s) who prepared this exam at Concordia University. No part of the present exam may be used for any purpose other than research or teaching purposes at Concordia University. Furthermore, no part of the present exam may be sold, reproduced, republished or re-disseminated in any manner or form without the prior written permission of its owner and copyright holder.";
$string['termsandconditions'] = '<p>You are about to enter into an online exam environment. If you are taking a proctored exam, you must have your Concordia ID card or, failing that, government issued ID readily accessible.</p>
<p>Before you access the exam, you must make sure that you meet all technological and logistical requirements. Read the FAQ about online exams without proctoring or the FAQ about online exams with proctoring, depending on the exam you are about to take. They contain important information and you are strongly encouraged to review that information prior to your exam.</p>
<p>The academic integrity standards applicable to you during this exam are identical to those applicable in an in-person exam. If it is suspected that you did not respect those standards, you may be charged under the Academic Code of Conduct. It is your responsibility to ensure that you remove anything from your exam environment that can be perceived to be unauthorized materials during the exam. Material that you are allowed to use during the exam are mentioned above.</p>
<p>By entering the exam, you represent and warrant that you are the person whose name is associated with the login used in COLE. You affirm that you have had the opportunity to review and that you understand the Academic Code of Conduct.</p>
<p>If you require support during the exam, please call 1-888-202-8615 as soon as possible.</p>';
$string['technicaldifficultieshdr'] = "Technical difficulty?";
$string['technicaldifficulties'] = "Use the <strong>Exam Support</strong> chat button on the right of your screen to contact COLE support or call the toll free number at the bottom of the page.";
$string['proctorioissueshdr'] = "Proctorio issues?";
$string['proctorioissues'] = "First use the <strong>Exam Support</strong> chat button on the right of your screen to contact COLE support. If they direct you to Proctorio support, click the Proctorio shield icon in your browser (upper right) to access Proctorio live chat.";
$string['questionsinstructorhdr'] = "Questions for your instructor";
$string['questionsinstructor'] = "Use the <strong>Exam Support</strong> chat button on the right of your screen to contact COLE support. They will connect you with your instructor.";
$string['acsdaccomodationshdr'] = "ACSD accommodations";
$string['acsdaccomodations'] = "If you are eligible for extended time, your exam time has been configured and verified by the COLE exam team and ACSD.";
$string['chinaoriranhdr'] = "Writing from China or Iran";
$string['chinaoriran'] = "If your exam is proctored, make sure you are not connected with VPN. VPN is not compatible with proctored exams.";

//titles
$string['support'] = "Support";
$string['examinstr'] = "Exam Instructions";
$string['examinfo'] = "Exam Information";

//checkboxes
$string['instructions'] = "I have read the instructions completely";
$string['copyrightnotice'] = 'I understand the <a href="#" data-toggle="modal" data-target="#copyright-modal">Copyright notice</a> and <a href="#" data-toggle="modal" data-target="#terms-modal">Terms and Conditions</a>';
$string['supportphone'] = 'Call <a href="tel:+18882028615">1-888-202-8615</a> for support';
$string['obligatoryapproval'] = 'You must approve both checkboxes';

$string['question'] = 'Question';

//quiz info
$string['testdate']     = 'Date';
$string['testopen']     = 'Exam Opens';
$string['testduration'] = 'Duration';
$string['testnotset']   = 'Not yet available';