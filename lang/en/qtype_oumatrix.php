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
 * @package     qtype_oumatrix
 * @category    string
 * @copyright   2023 The Open University
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();
$string['a'] = 'A{$a}';
$string['addmoreblanks'] = 'Blanks for {no} more {$a}';
$string['answermode'] = 'Answer mode';
$string['answermodesingle'] = 'Single';
$string['answermodemultiple'] = 'Multiple';
$string['answermode_desc'] = 'Answer mode can be either \'Single choice\' or \'Multiple response\' for each row in the matrix table.';
$string['answermodemultiple'] = 'Multiple response';
$string['answermodesingle'] = 'Single choice';
$string['columnshdr'] = 'Matrix columns (answers)';
$string['grademethod'] = 'Marking mode';
$string['grademethod_desc'] = 'Standard (subpoints): each correct response in the body cells is worth one point, so students score a percentage of the total correct responses. 
All or nothing: students must get every response correct, otherwise they score zero.';
$string['grademethod_help'] = 'Standard (subpoints): each correct response in the body cells is worth one point, so students score a percentage of the total correct responses.

All or nothing: students must get every response correct, otherwise they score zero.';
$string['gradepartialcredit'] = 'Give partial credit';
$string['gradeallornothing'] = 'All-or-nothing';
$string['notenoughquestions'] = 'This type of question requires at least {$a} word';
$string['pluginname'] = 'oumatrix';
$string['pluginname_help'] = 'Creating a matrix question requires you to specify column headings (values) to row headings (items). For example, you might ask students to classify an item as animal, vegetable, or mineral using Single Choice. You can use Multiple Response so that several values may apply to an item.';
$string['pluginnameadding'] = 'Adding a Matrix question';
$string['pluginnameediting'] = 'Editing a Matrix question';
$string['pluginnamesummary'] = 'A multi-row table that can use single choice or multiple response inputs.';
$string['r'] = 'Row{$a}';
$string['rowshdr'] = 'Matrix rows (questions)';
$string['rowanswerlist'] = 'Select answers';
$string['rowx'] = 'Row{$a})';
$string['shuffleanswers'] = 'Shuffle the items?';
$string['shuffleanswers_desc'] = 'Whether options should be randomly shuffled for each attempt by default.';
$string['shuffleanswers_help'] = 'If enabled, the order of the row items is randomly shuffled for each attempt, provided that "Shuffle within questions" in the activity settings is also enabled.';
$string['updateform'] = 'Update the response matrix';
