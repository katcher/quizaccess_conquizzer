![Concordia logo](https://www.concordia.ca/etc/designs/concordia/clientlibs/img/logo-concordia-university-montreal.png)

# Concordia Quizzer #

Creates additional settings for the quiz in order to show Concordia-specific
information, including quiz information and materials allowed.

## Features: ##
v 0.1.0
1. Concordia Exam Instructions for specific instructions to our students
2. Allowed Materials to display a list of approved materials for the current exam
3. Customized info on the Exam
4. ~~Customized checkboxes for the Copyright notice and the Terms and conditions~~ (moved to the theme)

### Changes: ###
v 0.2.0
- [x] CQ1. Review Database structure
- - [x] CQ11 conquizz_notes table has been removed from the XMLDB since it was never used
- - [x] CQ12 upgrade.php file reflects that dropping when upgrading
- ~~- [ ] CQ13 review options table according to UI/UX review (deemed not necessary)~~
- ~~- [ ] CQ14 upgrade.php file changes to options (if needed) (deemed not necessary)~~
- [x] CQ2. Enhance settings page
- [x] CQ3. ~~Move renderers that are inherent to the plugin from the old theme~~ renderer file created
      (added helper classes to provide specific functionalities and to be calle by theme's renderer)
- [x] CQ4. Create templates for displaying
- [x] CQ5. Check classes for Bootstrap 4 ~~compatibility~~
- ~~CQ6. Add second verification for Copyright notice and Terms and conditions checkboxes (part of the theme, not the plugin)~~
- [x] CQ7. Language files
- - [x] CQ71 Cleanup
- - [x] CQ72 Translation (fr and fr_ca)
- [x] CQ8. Refactor Jquery as an AMD JS module (removed the files altogether)
- [x] CQ9. Added Privacy classes for Moodle compliance

### TODO LIST: ###

## Installing via uploaded ZIP file ##

1. Log in to your Moodle site as an admin and go to _Site administration >
   Plugins > Install plugins_.
2. Upload the ZIP file with the plugin code. You should only be prompted to add
   extra details if your plugin type is not automatically detected.
3. Check the plugin validation report and finish the installation.

## Installing manually ##

The plugin can be also installed by putting the contents of this directory to

    {your/moodle/dirroot}/mod/quiz/accessrule/conquizzer

Afterwards, log in to your Moodle site as an admin and go to _Site administration >
Notifications_ to complete the installation.

Alternatively, you can run

    $ php admin/cli/upgrade.php

to complete the installation from the command line.

## License ##

2021 Brandon Jimenez <brandon.jimenez@concordia.ca> on behalf of Concordia University

This program is free software: you can redistribute it and/or modify it under
the terms of the GNU General Public License as published by the Free Software
Foundation, either version 3 of the License, or (at your option) any later
version.

This program is distributed in the hope that it will be useful, but WITHOUT ANY
WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A
PARTICULAR PURPOSE.  See the GNU General Public License for more details.

You should have received a copy of the GNU General Public License along with
this program.  If not, see <https://www.gnu.org/licenses/>.
