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
$title          = "FVWM - Man page - fvwm-config";
$heading        = "FVWM - Man page - fvwm-config";
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

<?php decoration_window_start("Manual page for fvwm-config in unstable branch (2.5.7)"); ?>

<H1>FVWM-CONFIG</H1>
Section: FVWM Utilities (1)<BR>Updated: 25 April 2002<BR><A HREF="#index">This page contents</A>
 - <a href="<?php echo conv_link_target('./');?>">Return to main index</A><HR>


<A NAME="lbAB">&nbsp;</A>
<H2>NAME</H2>

fvwm-config - query an existing FVWM installation
<A NAME="lbAC">&nbsp;</A>
<H2>SYNOPSIS</H2>

<B><u>fvwm-config</u></B>

[<I>--help</I>]

[<I>--version</I>]

[<I>--info</I>]

[<I>--prefix</I>]

[<I>--exec-prefix</I>]

[<I>--bindir</I>]

[<I>--datadir</I>]

[<I>--libexecdir</I>]

[<I>--sysconfdir</I>]

[<I>--mandir</I>]

[<I>--localedir</I>]

[<I>--fvwm-moduledir</I>]

[<I>--fvwm-datadir</I>]

[<I>--fvwm-perllibdir</I>]

[<I>--default-imagepath</I>]

[<I>--default-userdir</I>]

[<I>--fvwm-exe</I>]

[<I>--supports</I>]

[<I>--supports-&lt;feature&gt;</I>]

[<I>--is-final</I>]

[<I>--is-stable</I>]

[<I>--release-date</I>]

<A NAME="lbAD">&nbsp;</A>
<H2>DESCRIPTION</H2>

<B><u>fvwm-config</u></B>

is a shell script that provides an information about the FVWM version,
installation directories, built-in paths and supported features.
<A NAME="lbAE">&nbsp;</A>
<H2>OPTIONS</H2>

<B><u>fvwm-config</u></B>

prints to the standard output in all options.
Both short and long GNU-like option names may be used.
<DL COMPACT>
<DT><B>-h --help -?</B>

<DD>
prints the short usage
<DT><B>-v --version -V</B>

<DD>
prints the version
<DT><B>-i --info</B>

<DD>
prints the full info page
<DT><B>-P --prefix</B>

<DD>
prints the installation prefix
<DT><B>-E --exec-prefix</B>

<DD>
prints the installation exec-prefix
<DT><B>-B --bindir</B>

<DD>
prints the installation bindir
<DT><B>-D --datadir</B>

<DD>
prints the installation datadir
<DT><B>-L --libexecdir</B>

<DD>
prints the installation libexecdir
<DT><B>-S --sysconfdir</B>

<DD>
prints the installation sysconfdir
<DT><B>-M --mandir</B>

<DD>
prints the installation mandir
<DT><B>-O --localedir</B>

<DD>
prints the installation localedir
<DT><B>-m --fvwm-moduledir</B>

<DD>
prints FVWM_MODULEDIR, where the modules are installed
<DT><B>-d --fvwm-datadir</B>

<DD>
prints FVWM_DATADIR, where the system wide configs are installed
<DT><B>-p --fvwm-perllibdir</B>

<DD>
prints FVWM_PERLLIBDIR, where the perl library is installed
<DT><B>-I --default-imagepath</B>

<DD>
prints the built-in ImagePath
<DT><B>-U --default-userdir</B>

<DD>
prints the default FVWM_USERDIR, note: $HOME is not expanded
<DT><B>-e --fvwm-exe</B>

<DD>
prints the fvwm executable name (in bindir)
<DT><B>-s --supports</B>

<DD>
lists all supported features, one per line
<DT><B>--supports-</B><I>&lt;feature&gt;</I>

<DD>
prints nothing, returns: 0 if the
<I>&lt;feature&gt;</I>

is supported, 100 if not, 200 if unknown.
All or supported feature names may be found using
<I>--info</I> or <I>--supports</I>

respectivelly.
<DT><B>--is-final</B>

<DD>
prints &quot;yes&quot; for final releases and &quot;no&quot; for cvs snapshots
<DT><B>--is-stable</B>

<DD>
prints &quot;yes&quot; for the stable branch and &quot;no&quot; otherwise
<DT><B>--release-date</B>

<DD>
prints the release date if the release is final
</DL>
<A NAME="lbAF">&nbsp;</A>
<H2>USAGE</H2>

Here are some real life usages.
<P>
Checks for xft support:


<P>


<blockquote><PRE>if fvwm-config --supports-xft;
  then echo 1; else echo 0; fi</PRE></blockquote>
<P>



<P>
<I>fvwm-themes</I>

package checks for the correct
<I>fvwm</I>

version installed using:


<P>


<blockquote><PRE>fvwm-config --version</PRE></blockquote>
<P>



and tries to use the same installation directories:


<P>


<blockquote><PRE>fvwm-config --bindir --mandir --fvwm-datadir</PRE></blockquote>
<P>



<P>
A way to find the full path to the fvwm executable:


<P>


<blockquote><PRE>echo `fvwm-config --bindir`/`fvwm-config --fvwm-exe`</PRE></blockquote>
<P>



<P>
A way to start modules in perl:


<P>


<blockquote><PRE>use lib `fvwm-config -p | tr -d '`;
use FVWM::Module;</PRE></blockquote>
<P>



<P>
For a more human readable output, try:


<P>


<blockquote><PRE>fvwm-config --info</PRE></blockquote>
<P>



<A NAME="lbAG">&nbsp;</A>
<H2>COPYING</H2>

<B><u>fvwm-config</u></B>

is a part of fvwm package and distributed by the same terms, see GNU GPL.
<A NAME="lbAH">&nbsp;</A>
<H2>AUTHOR</H2>

Mikhael Goikhman &lt;<A HREF="mailto:migo@homemail.com">migo@homemail.com</A>&gt;
<P>

<HR>
<A NAME="index">&nbsp;</A><H2>Index</H2>
<DL>
<DT><A HREF="#lbAB">NAME</A><DD>
<DT><A HREF="#lbAC">SYNOPSIS</A><DD>
<DT><A HREF="#lbAD">DESCRIPTION</A><DD>
<DT><A HREF="#lbAE">OPTIONS</A><DD>
<DT><A HREF="#lbAF">USAGE</A><DD>
<DT><A HREF="#lbAG">COPYING</A><DD>
<DT><A HREF="#lbAH">AUTHOR</A><DD>
</DL>
<HR>
This document was created by
man2html,
using the manual pages.<BR>
Time: 23:02:36 GMT, May 30, 2003


<?php decoration_window_end(); ?>

<!-- Automatically generated by manpages2php on 31-May-2003 -->
