<?php
//--------------------------------------------------------------------
//-  File          : documentation/manpages/template.php
//-  Project       : FVWM Home Page
//-  Programmer    : Uwe Pross
//--------------------------------------------------------------------

// This is an autogenerated file, use manpages2php to create it.

//--------------------------------------------------------------------
// this manpages should not appear in the navigation structure
// so we hide its contents from navgen
//--------------------------------------------------------------------
if (strlen("$navigation_check") > 0) return;

$rel_path = "../../..";

//--------------------------------------------------------------------
// load some global definitions
//--------------------------------------------------------------------
include("$rel_path/definitions.inc");

//--------------------------------------------------------------------
// Site definitions
//--------------------------------------------------------------------
$title          = "FVWM - Man page - fvwm-menu-directory";
$heading        = "FVWM - Man page - fvwm-menu-directory";
$link_name      = "Man page";
$link_picture   = "pictures/icons/doc_manpages";
$parent_site    = "documentation";
$child_sites    = array();
$requested_file = basename(my_get_global("PHP_SELF", "SERVER"));
$this_site      = "manpages";

//--------------------------------------------------------------------
// load the layout file
//--------------------------------------------------------------------
if (strlen($site_has_been_loaded) == 0) {
	$site_has_been_loaded = "true";
	include(sec_filename($layout_file));
	exit();
}
?>

<?php decoration_window_start("Manual page for fvwm-menu-directory in unstable branch (2.5.7)"); ?>

<H1>FVWM-MENU-DIRECTORY</H1>
Section: FVWM Utilities (1)<BR>Updated: 2003-04-19<BR><A HREF="#index">This page contents</A>
 - <a href="./">Return to main index</A><HR>

<A NAME="lbAB">&nbsp;</A>
<H2>NAME</H2>

fvwm-menu-directory - builds a directory browsing menu for FVWM
<A NAME="lbAC">&nbsp;</A>
<H2>SYNOPSIS</H2>

<A NAME="ixAAC"></A>
<B><u>fvwm-menu-directory</u></B>
[ <B>--help</B>|<B>-h</B>|<B>-?</B> ]
[ <B>--version</B>|<B>-V</B> ]
[ <B>--name</B>|<B>-na</B> <FONT>NAME</FONT> ]
[ <B>--title</B>|<B>-t</B> <FONT>NAME</FONT> ]
[ <B>--item</B>|<B>-it</B> <FONT>NAME</FONT> ]
[ <B>--icon-title</B>|<B>-icon-t</B> <FONT>XPM</FONT> ]
[ <B>--icon-dir</B>|<B>-icon-d</B> <FONT>XPM</FONT> ]
[ <B>--icon-file</B>|<B>-icon-f</B> <FONT>XPM</FONT> ]
[ <B>--icon-app</B>|<B>-icon-a</B> <FONT>XPM</FONT> ]
[ <B>--wm-icons</B> ]
[ <B>--dir</B>|<B>-d</B> <FONT>NAME</FONT> ]
[ <B>--order</B>|<B>-o</B> <FONT>NUM</FONT> ]
[ <B>--[no]all</B>|<B>-a</B> ]
[ <B>--[no]links</B>|<B>-l</B> ]
[ <B>--xterm</B>|<B>-x</B> <FONT>CMD</FONT> ]
[ <B>--exec-title</B>|<B>-exec-t</B> <FONT>CMD</FONT> ]
[ <B>--exec-file</B>|<B>-exec-f</B> <FONT>CMD</FONT> ]
[ <B>--exec-app</B>|<B>-exec-a</B> [<FONT>CMD</FONT>] ]
[ <B>--command-title</B>|<B>-command-t</B> <FONT>CMD</FONT> ]
[ <B>--command-file</B>|<B>-command-f</B> <FONT>CMD</FONT> ]
[ <B>--command-app</B>|<B>-command-a</B> <FONT>CMD</FONT> ]
[ <B>--[no]reuse</B>|<B>-r</B> ]
[ <B>--[no]check-subdirs</B>|<B>-ch</B> ]
[ <B>--special-dirs</B>|<B>-s</B> [<FONT>VALUE</FONT>] ]
[ <B>--[no]memory-for-speed</B>|<B>-mem</B> ]
[ <B>--menu-style</B>|<B>-men</B> <FONT>NAME</FONT> ]
<A NAME="lbAD">&nbsp;</A>
<H2>DESCRIPTION</H2>

<A NAME="ixAAD"></A>
A perl script which provides an output to read in with PipeRead to build an
fvwm menu containing a directory listing. Almost everything can be configured.
<A NAME="lbAE">&nbsp;</A>
<H2>OPTIONS</H2>

<A NAME="ixAAE"></A>
<DL COMPACT>
<DT><B>--help</B><DD>
<A NAME="ixAAF"></A>
show the usage and exit
<DT><B>--version</B><DD>
<A NAME="ixAAG"></A>
show version and exit
<DT><B>--name</B> name<DD>
<A NAME="ixAAH"></A>
menu name, used only with --reuse, default is MenuBrowser
<DT><B>--title</B> title<DD>
<A NAME="ixAAI"></A>
menu title format, default is '%*-40p' - last 40 characters
of the current full path.
<FONT>TAB</FONT> can be specified as '\t', but in .fvwm2rc you should specify a double
backslash or a real <FONT>TAB</FONT>.


<P>


Format specifiers:
<BR>&nbsp;&nbsp;<TT>%d</TT>&nbsp;-&nbsp;the&nbsp;current&nbsp;directory&nbsp;name
<BR>&nbsp;&nbsp;<TT>%p</TT>&nbsp;-&nbsp;the&nbsp;current&nbsp;directory&nbsp;full&nbsp;path


<P>


These specifiers can receive an optional integer size, positive for right
adjusted string or negative for left adjusted, example: <TT>%8x</TT>; and optional
*num or *-num, which means to leave only the first or last (if minus) num of
chars, the num must be greater than 3, since the striped part is replaced
with ``...'', example: %*30x. Both can be combined: %-10*-20x, this instructs to
get only the 20 last characters, but if the length is less then 10 - to fill
with up to 10 spaces on the right.
<DT><B>--item</B> format<DD>
<A NAME="ixAAJ"></A>
menu item format, default is '%n'. <FONT>TAB</FONT> and width modifiers
for <TT>%n</TT>, <TT>%N</TT> and <TT>%s</TT> can be specified as described in <B>--title</B> above.
Note, specifying a non default format slows the script.


<P>


Format specifiers:


<P>


<blockquote><pre>  %n - file/dir name (without the path)
  %N - file/dir name (full with the path)
  %d - file/dir date (yyyy-mm-dd HH:MM:SS)
  %D - file/dir date (yyyy-mm-dd)
  %s - file/dir size (in bytes)
  %t - file/dir type (File|Dir |Link|Sock|Blck|Char|Pipe)
  %T - file/dir type (F|D|L|S|B|C|P)</pre></blockquote>


<P>


Example: --title '%*-40p\tDate, Type\tSize' --item '%*40n\t%d <TT>%t</TT>\t%s'
<DT><B>--icon-title</B> icon<DD>
<A NAME="ixAAK"></A>
menu title icon, default is no
<DT><B>--icon-dir</B> icon<DD>
<A NAME="ixAAL"></A>
menu dir icon, default is no
<DT><B>--icon-file</B> icon<DD>
<A NAME="ixAAM"></A>
menu file icon, default is no
<DT><B>--icon-app</B> icon<DD>
<A NAME="ixAAN"></A>
menu application icon, default is no
<DT><B>--wm-icons</B><DD>
<A NAME="ixAAO"></A>
define icon names suitable for use with wm-icons package.
Currently this is equivalent to: --icon-title menu/folder-open.xpm --icon-item
menu/file.xpm --icon-dir menu/folder.xpm --icon-app menu/utility.xpm.
<DT><B>--dir</B> dir<DD>
<A NAME="ixAAP"></A>
starting dir, default is ${<FONT>HOME-</FONT>.}
<DT><B>--order</B> number<DD>
<A NAME="ixAAQ"></A>
in the range (-6 .. 6), default is 5:


<P>


<blockquote><pre>  1 - do not sort,  2 - dirs first, 3 - files first
  4 - sort by name, 5 - dirs first, 6 - files first
  Negative number represents reverse order.</pre></blockquote>
<DT><B>--[no]all</B><DD>
<A NAME="ixAAR"></A>
show hidden files, like in 'ls -A', default is --noall
<DT><B>--[no]links</B><DD>
<A NAME="ixAAS"></A>
follow linked directories, default is --nolinks
<DT><B>--xterm</B> command<DD>
<A NAME="ixAAT"></A>
X terminal call, default is 'xterm -e'
<DT><B>--exec-title</B> command<DD>
<A NAME="ixAAU"></A>
an fvwm Exec command on directory title (usually the
shell), default is ${SHELL-/bin/sh}.
'-' means no Exec command, i.e. Nop.
If the command is not started with '^' X terminal call is prepended.
The command is started in the currently browsed directory.
<DT><B>--exec-file</B> command<DD>
<A NAME="ixAAV"></A>
an fvwm Exec command on regular files,
default is ${EDITOR-vi}.
'-' means no Exec command, i.e. Nop.
If the command is not started with '^' X terminal call is prepended.
The actual file name is appended to the command.
<DT><B>--exec-app</B> [command]<DD>
<A NAME="ixAAW"></A>
an fvwm Exec command on +x files, default is '-',
which means the same command as on regular files. If no command is given,
it is assumed to be empty - simply run the +x file.
If the command is not started with '^' X terminal call is prepended.
The actual file name is appended to the command.
<DT><B>--command-title</B> command<DD>
<A NAME="ixAAX"></A>
an fvwm command to execute on title.
If this option is not given (or command is '-'), the <TT>&quot;--exec-title&quot;</TT>
is used instead.
In the command, <TT>%d</TT> is substituted with the full directory path.


<P>


In fact, --exec-title=tcsh is equivalent
to --command-title='Exec cd ``%d''; xterm -e tcsh'
<DT><B>--command-file</B> command<DD>
<A NAME="ixAAY"></A>
an fvwm command to execute on regular files.
If this option is not given (or command is '-'), the <TT>&quot;--exec-file&quot;</TT>
is used instead.
In the command, <TT>%f</TT> is substituted with the full file path.


<P>


In fact, --exec-file=vi is equivalent
to --command-file='Exec xterm -e vi ``%f'''
<DT><B>--command-app</B> command<DD>
<A NAME="ixAAZ"></A>
an fvwm command to execute on +x files.
If this option is not given (or command is '-'), the <TT>&quot;--command-app&quot;</TT>
is used instead.
In the command, <TT>%f</TT> is substituted with the full file path.


<P>


In fact, --exec-app=^exec is equivalent
to --command-app='Exec exec ``%f'''
<DT><B>--[no]reuse</B><DD>
<A NAME="ixABA"></A>
no pop-up menus, reuse the same menu, default is --noreuse.
When you specify this option the Menu action is used, not Popup. Also,
the --name parameter is not ignored, and --dir parameter is ignored
if there is ~/.fvwm/.fvwm-menu-directory.dir file. This file is only created
or used with this option specified, it is the only solution for the current
fvwm menu state.
<DT><B>--[no]check-subdirs</B><DD>
<A NAME="ixABB"></A>
check all subdirs for having execute (+x) permission
and replace ``Popup''/``Menu'' command with ``Nop'' for these without permissions.
This has a visual effect of disabling popup triangle in the subdirectory item.
The default is --nocheck-subdirs, because: 1) enabling this slows a bit the
script, 2) with this option enabled, if no icons used and no dir/file separate
sorting used there is no way to know that the item is directory and not file.
<DT><B>--special-dirs</B> value<DD>
<A NAME="ixABC"></A>
add .. or ~ or / special directories according to
given optional value. Without with option these directories are not added.
Default value if not specified is ``1,2''. The value is comma separated ordered
special directory indexes, where 1 is parent directory, 2 is home directory,
3 is root directory. If minus is prepended to the value, special directories
are added at the bottom of menu instead of top. Value ``0'' or any bad value
is equivalent to non-specifying this option at all.
<DT><B>--[no]memory-for-speed</B><DD>
<A NAME="ixABD"></A>
use speed optimization, i.e. use previously
created directory menus without destroying it when closed, default is
--nomemory-for-speed


<P>


<blockquote><pre>    Warning: speed optimization takes up a lot of memory
    that is never free'd again while fvwm is running.</pre></blockquote>
<DT><B>--menu-style</B> name<DD>
<A NAME="ixABE"></A>
assign MenuStyle name to the menus
</DL>
<P>

Option parameters can be specified either using '=' or in the next argument.
Short options are ok if not ambiguous: <TT>&quot;-a&quot;</TT>, <TT>&quot;-x&quot;</TT>, <TT>&quot;-icon-f&quot;</TT>; but be
careful with short options, what is now unambiguous, can become ambiguous
in the next versions.
<A NAME="lbAF">&nbsp;</A>
<H2>USAGE</H2>

<A NAME="ixABF"></A>
Put this into your fvwm configuration file to invoke the script:
<P>

<blockquote><pre>  AddToFunc FuncFvwmMenuDirectory
  + I PipeRead &quot;fvwm-menu-directory -d '$0'&quot;</pre></blockquote>
<P>

More complex example:
<P>

<blockquote><pre>  # AddToFunc FuncFvwmMenuDirectory
  # + I PipeRead &quot;fvwm-menu-directory -d '$0' -x 'Eterm -g 80x40 -e' -a -l \\
    -o 6 --exec-app --exec-title 'tcsh -l' --exec-file 'vim -R' \\
    -t 'Go to: %d' --wm-icons&quot;</pre></blockquote>
<P>

And put this in the menu from which you want to pop-up the directory menus:
<P>

<blockquote><pre>  AddToMenu SomeMenu MissingSubmenuFunction FuncFvwmMenuDirectory
  + &quot;Home Directory&quot;  Popup $[HOME]
  + &quot;Httpd Directory&quot; Popup /home/httpd</pre></blockquote>
<P>

Note: please use absolute path names.
<P>

It is a good idea to set the menu pop-up delay to something positive
and enable busy cursor
<P>

<blockquote><pre>  MenuStyle * PopupDelayed, PopupDelay 200
  BusyCursor DynamicMenu True</pre></blockquote>
<P>

in your configuration file when using this script for better results.
<P>

Another interesting usage (<TT>&quot;--reuse&quot;</TT> or <TT>&quot;-r&quot;</TT> is mandatary for this):
<P>

<blockquote><pre>  AddToMenu MenuBrowser
  + DynamicPopupAction Piperead &quot;fvwm-menu-directory -r -na MenuBrowser -d / -s&quot;
  AddToMenu SomeMenu &quot;My Browser&quot; Menu MenuBrowser</pre></blockquote>
<P>

Here <TT>&quot;--dir&quot;</TT> starting parameter is ignored if there is
~/.fvwm/.fvwm-menu-directory.dir file, you can delete it.
<A NAME="lbAG">&nbsp;</A>
<H2>AUTHORS</H2>

<A NAME="ixABG"></A>
Inspired  on 1999-06-07 by Dominik Vogt     &lt;<A HREF="mailto:domivogt@fvwm.org">domivogt@fvwm.org</A>&gt;.
<P>

Rewritten on 1999-08-05 by Mikhael Goikhman &lt;<A HREF="mailto:migo@homemail.com">migo@homemail.com</A>&gt;.
<A NAME="lbAH">&nbsp;</A>
<H2>COPYING</H2>

<A NAME="ixABH"></A>
The script is distributed by the same terms as fvwm itself.
See <FONT>GNU</FONT> General Public License for details.
<A NAME="lbAI">&nbsp;</A>
<H2>BUGS</H2>

<A NAME="ixABI"></A>
Report bugs to <A HREF="mailto:fvwm-bug@fvwm.org">fvwm-bug@fvwm.org</A>.
<P>

<HR>
<A NAME="index">&nbsp;</A><H2>Index</H2>
<DL>
<DT><A HREF="#lbAB">NAME</A><DD>
<DT><A HREF="#lbAC">SYNOPSIS</A><DD>
<DT><A HREF="#lbAD">DESCRIPTION</A><DD>
<DT><A HREF="#lbAE">OPTIONS</A><DD>
<DT><A HREF="#lbAF">USAGE</A><DD>
<DT><A HREF="#lbAG">AUTHORS</A><DD>
<DT><A HREF="#lbAH">COPYING</A><DD>
<DT><A HREF="#lbAI">BUGS</A><DD>
</DL>
<HR>
This document was created by
man2html,
using the manual pages.<BR>
Time: 01:39:57 GMT, April 19, 2003


<?php decoration_window_end(); ?>

<!-- Automatically generated by manpages2php on 19-Apr-2003 -->
