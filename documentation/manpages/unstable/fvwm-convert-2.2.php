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
$title          = "FVWM - Man page - fvwm-convert-2.2";
$heading        = "Man page - fvwm-convert-2.2";
$link_name      = "Man page";
$link_picture   = "pictures/icons/doc_manpages";
$parent_site    = "documentation";
$child_sites    = array();
$requested_file = basename(my_get_global("PHP_SELF", "SERVER"));

// Since manpages shall not apear in the navigation structure this
// page must identify itself with another name. It says here that
// it's name is manpages which belongs actually to the table of
// content page for all man pages. The layout file will therefore
// mark the navigation entry for the toc file as choosen althought
// it is actually not choosen.
$this_site      = "manpages";

//--------------------------------------------------------------------
// load the layout file
//--------------------------------------------------------------------
if (strlen($site_has_been_loaded) == 0) {
	$site_has_been_loaded = "true";
	if (strlen($layout) > 0) {
		$file = "$rel_path/layout_$layout.inc";
		if (file_exists($file)) $layout_file = $file;
	}
	include(sec_filename($layout_file));
	exit();
}
?>

<?php decoration_window_start("Manual page for fvwm-convert-2.2"); ?>

<H1>FVWM-CONVERT-2.2</H1>
Section: User Commands  (1)<BR><A HREF="#index">This page contents</A>
 - <a href="./">Return to main index</A><HR>

<A NAME="lbAB">&nbsp;</A>
<H2>NAME</H2>

fvwm-convert-2.2 - convert FVWM 1.xx configuration file to FVWM 2.xx style
<A NAME="lbAC">&nbsp;</A>
<H2>SYNOPSIS</H2>

<B><u>fvwm-convert-2.2</u></B>

[<I>source</I>]

[<I>dest</I>]

<A NAME="lbAD">&nbsp;</A>
<H2>DESCRIPTION</H2>

<B><u>fvwm-convert-2.2</u></B>

is a simple program that tries to convert an FVWM 1.xx configuration
file into an FVWM 2.xx compatible format.  It is not perfect,
especially with regards to Mouse and Key commands, but it provides a
basically-working <I>.fvwm2rc</I> file which can be further modified at
leisure.
<P>

By default, the program will convert <I>~/.fvwmrc</I>, saving the
results in <I>~/.fvwm2rc</I>.  Different source and destination files
may be given, with a destination of `-' meaning standard output.  If
the destination file already exists, it will be backed up first to
<I>~/.fvwm2rc.bak</I> (with whatever the destination file is called
replacing <I>~/.fvwm2rc</I>).
<A NAME="lbAE">&nbsp;</A>
<H2>COMPATIBILITY</H2>

In the past this utility was called
<I>fvwmrc_convert</I>.

<A NAME="lbAF">&nbsp;</A>
<H2>AUTHOR</H2>

This manual page was written by Julian Gilbey &lt;<A HREF="mailto:jdg@debian.org">jdg@debian.org</A>&gt;.
<P>

<HR>
<A NAME="index">&nbsp;</A><H2>Index</H2>
<DL>
<DT><A HREF="#lbAB">NAME</A><DD>
<DT><A HREF="#lbAC">SYNOPSIS</A><DD>
<DT><A HREF="#lbAD">DESCRIPTION</A><DD>
<DT><A HREF="#lbAE">COMPATIBILITY</A><DD>
<DT><A HREF="#lbAF">AUTHOR</A><DD>
</DL>
<HR>
This document was created by
<A HREF="./">man2html</A>,
using the manual pages.<BR>
Time: 02:56:55 GMT, April 17, 2003


<?php decoration_window_end(); ?>

<!-- Automatically generated by manpages2php on 17-Apr-2003 05:56:47 -->