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
 * @copyright   2024 onwards Brandon Jimenez <brandon.jimenez@concordia.ca> in behalf of Concordia University
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['pluginname'] = 'Concordia Quizzer';

$string['quizzerdescription'] = "Concordia - Instructions pour l'examen";
$string['quizzerdefinition'] = $string['examinstr'] = "Instructions pour l'examen";
$string['quizzerdefinition_help'] = "Ajoutez les instructions que vous souhaitez donner à vos étudiants concernant l'examen. Celles-ci apparaîtront sur la page d'accueil de l'examen.";

$string['quizzeroptionshdr'] = 'Concordia - Matériels autorisés';
$string['quizzeroptions']  = $string['examallowed'] = 'Matériels autorisés';
$string['quizzeroptions_help'] = "Dressez la liste du matériel autorisé et de celui qui ne l'est pas (par exemple, calculatrices, feuilles de formules, etc.). Cette liste apparaîtra sous les instructions de l'examen.";
$string['quizzerforbidden'] = 'Matériels non autorisés';

//allowed materials
$string['onlinecalculator'] = 'Calculatrice en ligne';
$string['physicalcalculator'] = 'Calculatrice physique';
$string['penandpaper'] = 'Stylo et papier';
$string['openbook'] = 'Livre ouvert';
$string['instructorsheets'] = "Feuilles de formules fournies par l'enseignant";
$string['studentsheets'] = "Notes ou feuilles créées par l'élève";
$string['scratchpaper'] = "Papier brouillon - non téléchargé";
$string['blanksheets'] = 'Feuilles vierges pour écrire les réponses et télécharger';
$string['dictionary'] = 'Dictionnaire/thésaurus imprimé anglais-anglais.';
$string['oxford'] = '<a href="https://www-oed-com.lib-ezproxy.concordia.ca/">Oxford English Dictionary (OED)</a> - nom d\'utilisateur et mot de passe Concordia requis.</p>';
    
//forbidden materials
$string['translation'] = "Vous n'êtes pas autorisé à utiliser des outils de traduction ou de vérification grammaticale.";
$string['additionalresources'] = "Aucune autre ressource ou matériel ne peut être utilisé pendant l'examen.";

$string['question'] = 'Question'; //not sure where this is going

$string['privacy:metadata'] = "Le plugin Concordia Quizzer quiz access rule ne stocke aucune donnée personnelle.";