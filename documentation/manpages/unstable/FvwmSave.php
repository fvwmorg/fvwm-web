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
$title          = "FVWM - Man page - FvwmSave";
$heading        = "FVWM - Man page - FvwmSave";
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

<?php decoration_window_start("Manual page for FvwmSave in unstable branch (2.5.7)"); ?>

<H1>FvwmSave</H1>
Section: FVWM Modules (1)<BR>Updated: 25 April 2002<BR><A HREF="#index">This page contents</A>
 - <a href="<?php echo conv_link_target('./');?>">Return to main index</A><HR>


<A NAME="lbAB">&nbsp;</A>
<H2>NAME</H2>

FvwmSave - the FVWM desktop-layout saving module
<A NAME="lbAC">&nbsp;</A>
<H2>SYNOPSIS</H2>

FvwmSave is spawned by fvwm, so no command line invocation will work.
<P>
<A NAME="lbAD">&nbsp;</A>
<H2>DESCRIPTION</H2>

When called, this module will attempt to save your current desktop
layout into a file called new.xinitrc. Ideally, this file will look just
like .xinitrc, but in reality, you will have to edit it to get a
usable configuration, so be sure to keep a backup of your old .xinitrc.
<P>
Your applications must supply certain hints to the X window system.
Emacs, for example, does not, so FvwmSave can't get any
information from it.
<P>
Also, FvwmSave assumes that certain command line options are
globally accepted by applications, which may not be the case.
<P>
<A NAME="lbAE">&nbsp;</A>
<H2>COPYRIGHTS</H2>

The NoClutter program, and the concept for
interfacing this module to the Window Manager, are all original work
by Robert Nation
<P>
Copyright 1994, Robert Nation. No guarantees or warranties or anything
are provided or implied in any way whatsoever. Use this program at your
own risk. Permission to use this program for any purpose is given,
as long as the copyright is kept intact.
<P>
<P>
<A NAME="lbAF">&nbsp;</A>
<H2>INITIALIZATION</H2>

During initialization, <I>NoClutter</I> will eventually search a
configuration file which describes the time-outs and actions to take.
The configuration file is the same file that fvwm used during initialization.
<P>
If the NoClutter executable is linked to another name, ie ln -s
NoClutter OtherClutter, then another module called OtherClutter can be
started, with a completely different configuration than NoClutter,
simply by changing the keyword  NoClutter to OtherClutter. This way multiple
clutter-reduction programs can be used.
<P>
<A NAME="lbAG">&nbsp;</A>
<H2>INVOCATION</H2>

NoClutter can be invoked by inserting the line 'Module NoClutter' in
the .fvwm2rc file. This can be placed on a line by itself, if NoClutter
is to be spawned during fvwm's initialization, or can be bound to a
menu or mouse button or keystroke to invoke it later. Fvwm will search
directory specified in the ModulePath configuration option to attempt
to locate NoClutter.
<P>
<A NAME="lbAH">&nbsp;</A>
<H2>CONFIGURATION OPTIONS</H2>

NoClutter reads the same .fvwm2rc file as fvwm reads when it starts up,
and looks for lines similar to &quot;*NoClutter 3600 Iconify&quot;. The format
of these lines is &quot;*NoClutter [time] [command]&quot;, where command is any
fvwm built-in command, and time is the time in seconds between when a
window looses focus and when the command is executed. At most 3
actions can be specified.
<P>
<P>
<A NAME="lbAI">&nbsp;</A>
<H2>AUTHOR</H2>

Robert Nation and Mr. Per Persson
&lt;<A HREF="mailto:pp@solace.mh.se">pp@solace.mh.se</A>&gt; (Omnion on IRC)
<P>

<HR>
<A NAME="index">&nbsp;</A><H2>Index</H2>
<DL>
<DT><A HREF="#lbAB">NAME</A><DD>
<DT><A HREF="#lbAC">SYNOPSIS</A><DD>
<DT><A HREF="#lbAD">DESCRIPTION</A><DD>
<DT><A HREF="#lbAE">COPYRIGHTS</A><DD>
<DT><A HREF="#lbAF">INITIALIZATION</A><DD>
<DT><A HREF="#lbAG">INVOCATION</A><DD>
<DT><A HREF="#lbAH">CONFIGURATION OPTIONS</A><DD>
<DT><A HREF="#lbAI">AUTHOR</A><DD>
</DL>
<HR>
This document was created by
man2html,
using the manual pages.<BR>
Time: 23:02:35 GMT, May 30, 2003


<?php decoration_window_end(); ?>

<!-- Automatically generated by manpages2php on 31-May-2003 -->
