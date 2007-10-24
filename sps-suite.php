<?php
/*
Plugin Name: SPS-Suite
Plugin URI: http://www.hobbingen.de/software/
Description: Suite for Enhancing your 'static' pages and archives. Use the admin panel to activate the functions! This plugin is based on 'Sidebar Page Switcher'.'
Author: Thorsten Werner
Version: 1.3.0
Author URI: http://www.hobbingen.de/software/
*/
/*
 * This plugins enhances your sidebar and your archives.
 * Please look at the admin panel of SPS-Suite for further details.  
 * Note: This plugin is released under the GNU-license for free open-source software. Visit www.gnu.org for further information. *
 * 
 * Thanks to Volkmar Kanotor and Hermann Josef Eckl for improvements,
 * more improvements and comments are welcome!
 *  
 * Have fun with it.
 * 
 */
$standard_page = 0;
if ( "de_DE" == WPLANG ) {
	/* GERMAN - DEUTSCH  */
	$sps_lang = array (
		"DisplaySettings" => "Anzeigeeinstellungen",
		"ThisPage" => "Diese Seite in der Sidebar: ",
		"Show" => "Anzeigen",
		"Hide" => "Ausblenden",
		/* Navigation Row */
		"DecimalPoint" => ",",
		"Home" => "Startseite",
		/* List Archives */
		"NoPrefix" => "Kein Prefix",
		"Year" => "Jahr",
		"Archive" => "Archiv",
		/* Admin Pages */
		"OptionPageName" => "SPS-Suite &ndash; Funktionen f&uuml;r die Sidebar und die Archive",
		"SampleCode" => "Beispiel Code",
		"LookAtHomepage" => "Bitte schau Dir meine Homepage unter <a href=\"http://www.hobbingen.de\">www.hobbingen.de</a> an, um einen Eindruck von allen Optionen dieses Plugins zu bekommen.",
		"SPS" => "SPS - Sidebar Seiten Schalter",
		"SPSText" => "Erstens erlaubt diese Funktion das manuelle &quot;Ausblenden&quot; von Seiten aus der Sidebar, &uuml;ber einen Klick in der Optionsseite.<br />Zweitens erlaubt diese Funktion das &quot;Ausblenden&quot; aller Seiten, die nicht zu dieser Seite geh&ouml;ren oder in der Hauptebene liegen. Dies mag jedem helfen, der sein Blog mit einer Vielzahl von statischen Seiten betreibt, die sich in viele Zweige gliedern, um die &Uuml;bersicht zu wahren.",
		"SPSUsage" => "Benutze den Sidebar-Schalter",
		"SPSUsageText" => "Wenn diese Funktion aktiviert wird, dann werden versteckte Seiten ausgeblendet.",
		"SPSHierarchy" => "Benutze die Hierarchiefunktion",		
		"SPSHierarchyText" => "Es werden nur die hierarchisch notwendige Seiten und die Haupteben angezeigt.",
		"SPSMinUserLevel" => "Niedrigste Benutzerrolle",
		"SPSMinUserLevelText" => "Benutzer ein Ziffer; 5 = Herausgeber, 8 = Administrator. Dies ist eine Sicherheitsfunktion!",
		"SSP" => "SPS - Suche in Seiten",
		"SSPText" => "Die Funktion erweitert Deine Wordpress-Suche um Beitr&auml;ge <strong>und Seiten</strong> mit einem Fulltext-Index. Die gefundenen Artikel werden nach ihrer Suchrelevanz sortiert (aus MySQL-Funktionen). Diese Suchrelevanz kannst Du auch Anzeigen mit &quot;relevance&quot;. Das mag Benutzern helfen die Suchergebnisse einzuordnen.",
		"SSPUsage" => "Benutze Suche in Seiten",
		"SSPUsageText" => "<strong>Bitte nur mit MySQL 4 und h&ouml;her benutzen!</strong> Die Datenbankstruktur wird ver&auml;ndert.<br />Benutze die Funktion &quot;the_relevance()&quot;, um die Suchrelevanz des aktuellen Artikels anzuzeigen.",
		"NR" => "SPS - Navigationszeile",
		"NRText" => "Diese Funktion gibt eine Navigationszeile aus mit alle Elternsseiten der gegebenen Seite. Dies ist f&uuml;r Wordpress-Blogs mit vielen statischen Seiten in vielen Zweigen interessant, insbesondere unter Verwendung der Suche-in-Seiten-Option. Bitte nutze &quot;sps_navigation_row();&quot; um die Navigationszeile anzuzeigen. Du kannst dies mit &lt;?php if (&quot;page&quot; == get_the_type()) : ?&gt; kombinieren und folgenden Argumente &uuml;bergeben: &quot;id&quot; (PostId) and &quot;separator&quot; (Separator).",
		"NRUsage" => "Benutze Navigationszeile",
		"NRUsageText" => "Benutze die Funktion &quot;sps_navigation_row&quot; im Theme.",
		"NRStandardSeparator" => "Standard Trennzeichen",
		"NRStandardSeparatorText" => "Trennt zwei Seitenebenen ab, wenn kein anderer &quot;Separator&quot; angegeben ist.<br />Bitte vergiss die Leerzeichen nicht!",
		"LA" => "SPS - Archivliste",
		"LAText" => "Diese Funktion erweitert Deine Archivliste. Wenn Du eine Limit w&auml;hlst, dann wird das Archiv beschr&auml;nkt, aber alle Jahre werden zu&auml;tzlich angezeigt. Optional kannst Du noch ein Prefix f&uuml;r die Jahreszahlen aus&auml;hlen. Damit l&auml;sst sich eine kurze Archivliste realisieren, die trotzdem kompletten Zugriff auf alle Beitr&auml;ge erm&ouml;glicht.",
		"LAUsage" => "Benutze Archivliste",
		"LAUsageText" => "Nutze das Widget &quot;SPS - Archivliste&quot; oder ersetze &quot;wp_get_archives&quot; mit &quot;sps_get_archives&quot; im Theme.",
		"LADatePrefix" => "Archiv Jahresprefix",
		"LADatePrefixText" => "Dieses Prefix wird vor der Jahreszahl eingeblendet, w&auml;hle aus.",
		"Notes" => "Beachte: Dieses Plugin wird unter der GNU-Lizenz f&uuml;r freie offenen Software (GPL V2) ver&ouml;ffentlicht. Besuche <a href=\"http://www.gnu.org\">www.gnu.org</a> f&uuml;r weitere Informationen. <br/>Dies Plugin wurde zudem f&uuml;r die Deutsche Tolkien Gesellschaft e.V.(<a href=\"http://www.tolkiengesellschaft.de\">www.tolkiengesellschaft.de</a>) erdacht und programmiert, um eine kleine und &uuml;bersichtliche Sidebar zu erhalten. <br /> F&uuml;hle Dich frei dieses Plugin weiter zu verbessern, aber lasse mich dieses h&ouml;ren. Ich bin auch an weiteren &Uuml;bersetzungen interessiert. <br /> Dieses Plugin basiert auf SPS - Sidebar Page Switcher von Thorsten Werner, &uuml;berarbeitet von Volkmar Kantor.",
		"Update" => "Optionen aktualisieren"
		);
} else {
	/* i18n of the admin screen of sps */
	$sps_switcher_lang = array (
		"DisplaySettings" => "Display-settings",
		"ThisPage" => "This page in sidebar: ",
		"Show" => "show",
		"Hide" => "hide",
		/* Navigation Row */
		"DecimalPoint" => ".",
		"Home" => "Home",
		/* List Archives */
		"NoPrefix" => "Kein Prefix",
		"Year" => "Year",
		"Archive" => "Archive",
		/* Admin Pages */
		"OptionPageName" => "SPS-Suite &ndash; Functions for Sidebar and Archives",
		"SampleCode" => "Sample Code",
		"LookAtHomepage" => "Please look at my homepage <a href=\"http://www.hobbingen.de\">http://www.hobbingen.de</a> to get an impression of this plugin and all of its options.",
		"SPS" => "SPS - Sidebar Page Switcher",
		"SPSText" => "First, this option allows you to manually &quot;hide&quot; pages from the sidebar-pagelist by just selecting an option.<br />Second, it also allows you to &quot;hide&quot; all pages, which are not in the main level, not in the current branch or a child page of the current page. This may help anyone who wants to have his/her blog extended with many pages in many branches, so that users may not become overwhelmed by the whole list of pages.",
		"SPSUsage" => "Use Sidebar Page Switcher",
		"SPSUsageText" => "Use the function &quot;sps_list_pages([...]);&quot; to active the plugin. Use the argument &quot;page_id='.$posts[0]->ID.'&quot; to enable the 2nd option.",
		"SPSUsageText" => "If you activate this, then all hidden page are hidden.",
		"SPSHierarchy" => "Usage of the hierarchy-funktion.",		
		"SPSHierarchyText" => "If activated, WP displays only the hierarchically useful pages in the sidebar.",
		"SPSMinUserLevel" => "Minimum User Level",
		"SPSMinUserLevelText" => "Use a digit, i.e. 5 = Editor, 8 = Administrator. This is a security feature!",
		"SSP" => "SPS - Search Static Pages",
		"SSPText" => "This option extends your wordpress-search to articles <strong>and static pages</strong> with a fulltext index. The matched articles will be displayed following their relevance (using mysql-functions). You can display the &quot;relevance&quot; of the search result (given by mysql-functions). This may help you to give visitors an overview, which article or page may be useful.",
		"SSPUsage" => "Use Search Static Pages",
		"SSPUsageText" => "<strong>Please use only with MySQL 4 and above!</strong> Once activated your database will be altered.<br />Use the function &quot;the_relevance()&quot; to display the relevance of the current search result.",
		"NR" => "SPS - Navigation Row",
		"NRText" => "This option displays a navigationbar with all parent pages of the current one. It is useful for wordpress sites with many children pages ESPECIALLY with the search-static-pages option. Please use sps_navigation_row(); to display it. <br /> You may combine it with &lt;?php if (&quot;page&quot; == get_the_type()) : ?&gt;. Arguments may be &quot;id&quot; (PostId) and &quot;separator&quot; (Separator).",
		"NRUsage" => "Use Navigation Row",
		"NRUsageText" => "Use the function &quot;sps_navigation_row&quot; to display the navigation row.",
		"NRStandardSeparator" => "Row Standard Separator",
		"NRStandardSeparatorText" => "Separates two levels of child pages of no separator is given (see above).<br />Do not forget the spaces!",
		"LA" => "SPS - List Archives",
		"LAText" => "This function enhances your archives listings. If you limit your archive only the limited number of archive links are shown, but additionally all the years. Optionally you may add a prefix to the years. This may help to have a small archive-list in the sidebar, but enables your users to have accesss to all archives.",
		"LAUsage" => "Use List Archives",
		"LAUsageText" => "Use the widget &quot;SPS - Archive List&quot; or replace &quot;wp_get_archives&quot; with &quot;sps_get_archives&quot; in your theme.",
		"LADatePrefix" => "Archive Year Prefix",
		"LADatePrefixText" => "This prefix is displayed before the date, please select.",
		"Notes" => "Please note: This plugin is released under the GNU-license for free open-source software (GPL V2). Visit <a href=\"http://www.gnu.org\">www.gnu.org</a> for further information. <br />This plugin was intentionally programmed for the German Tolkien society (<a href=\"http://www.tolkiengesellschaft.de\">www.tolkiengesellschaft.de</a>) to have some convinient modifications for a small and clearly arranged sidebar. <br />Feel free to use or improve this plugin, but let me hear of it. I am also interested in new translations. <br />This plugin is based on SPS - Sidebar page Switcher by Thorsten Werner, improved by Volkmar Kantor.",
		"Update" => "Update Options"
		);
}
/* ================================================= */

/* SPS - Sidebar Page Switcher */
/* Enables the hierachical display of pages
 * Only current level and parent pages as well es level 0
 * is displayed
 * */
/* Deprecated for WP >= 2.1, now a filter is used!
 * smaller, faster and more secure!
 */
function sps_list_pages($args = '')
{
	global $wp_version;
	echo "<h1>This function is deprecated!</h1>";
	if ($wp_version < "2.1") {
		echo "<h2>Please upgrade to WP 2.1 or higher</h2>";
	}
	echo "<h2>Activate function in adminscreen and use &quot;normal&quot; wp_list_pages in sidebar";
	
}
/* Modify exclusions for the SPS-function */
/* New to SPS because of WP-function in 2.0+ */
function sps_pages_2_exclude($exclusions)
{
	global $wpdb;
	global $post;
	/* Exclude pages with metadata "_sps_show_in_sidebar" = off */
	$sps_pages = $wpdb->get_results("SELECT post_id " . "FROM $wpdb->postmeta " . "WHERE meta_key = '_sps_show_in_sidebar' " . "AND meta_value = 'off' ");
	if ( (is_array($sps_pages)) && (1 == get_option("sps_sidebar_page_switcher")) ) {
		foreach ($sps_pages as $sps_page) {
			$exclusions[] = $sps_page->post_id;
		} 
	}
	/* Exclude all "unwanted" pages */
	if (1 == get_option("sps_hierarchical_display")) {
		/* Get all "wanted" pages
		 * i.e. all page of top level and all pages above current page
		 * and all pages with current page as parent page 
		 */
		$post_parent = $post->post_parent;
		$inclusions = "post_parent = '0' OR post_parent = '" . $post->ID . "'";
		
		/* Recursive from current level to top level (this is post_parent = 0) */
		while ($post_parent <> "0") {
			$inclusions .= " OR post_parent = '" . $post_parent . "'";
			$page = get_page($post_parent);
			$post_parent = $page->post_parent;
		} // while
		
		/* All pages to include */
		$sps_pages = $wpdb->get_results("SELECT ID " . "FROM $wpdb->posts " . "WHERE ".$inclusions);
		$inclusions = "";
		if (is_array($sps_pages)) {
			foreach ($sps_pages as $sps_page) {
				$inclusions .= $sps_page->ID.", ";
			} 
		} //if pages to include
		$inclusions = substr($inclusions,0,-2);
		
		/* Exclude all other pages */
		$sps_pages = $wpdb->get_results("SELECT ID " . "FROM $wpdb->posts " . "WHERE ID NOT IN (".$inclusions.")");
		if (is_array($sps_pages)) {
			foreach ($sps_pages as $sps_page) {
				$exclusions[] = $sps_page->ID;
			} 
		}//if exclusion list
		
	} //if function enabled
	
	/* Return exclusions */
	return $exclusions;
} 

/* Prints edit_page selector */
function sps_admin_edit_page ()
{
	global $wpdb;
	global $user_level;
	global $post_ID;
	global $sps_lang;
	if ( $user_level >= get_option("sps_minimum_user_level") ) {
		/* Get metda for current post */
		$show = true;
		/* NEW by Volkmar Kantor */
        if($post_ID!='') {
            $metadata = has_meta($post_ID);
			if (is_array($metadata)) {
				foreach ($metadata as $data) {
					if ("_sps_show_in_sidebar" == $data["meta_key"]) {
						if ("off" == $data["meta_value"]) {
							$show = false;
						} 
					} 
				} 
			}
        } else {
        	$disabled = "disabled=\"disabled\"";
        }
		print '
<fieldset id="pageswitcher">
	<legend>' . $sps_lang["DisplaySettings"] . '</legend>
	<strong>' . $sps_lang["ThisPage"] . '</strong>
	<select name="sps_show_page" ' . $disabled . '>';
		if (($post_ID > 0) && (false == $show)) {
			print'<option value="on">' . $sps_lang["Show"] . '</option><option value="off" selected >' . $sps_lang["Hide"] . '</option>';
		} else {
			print'<option value="on" selected >' . $sps_lang["Show"] . '</option><option value="off" >' . $sps_lang["Hide"] . '</option>';
		} 
		print'
	</select>
</fieldset>';
	} 
} 
/* Inserts or updates meta_data for SPS */
	function sps_manage_meta_data ($postId)
	{
		global $wpdb;
		/* manage only if POST-value is available */
		if (array_key_exists("sps_show_page", $_POST)) {
			$sql = "";
			$pages = $wpdb->get_results("SELECT meta_id, meta_value " . "FROM $wpdb->postmeta " . "WHERE post_id = '$postId' " . "AND meta_key = '_sps_show_in_sidebar' ");
			if (!empty($pages)) {
				$sql = "UPDATE $wpdb->postmeta SET " . "post_id = '$postId', " . "meta_key = '_sps_show_in_sidebar', " . "meta_value = '" . $_POST["sps_show_page"] . "' " . "WHERE meta_id = '" . $pages[0]->meta_id . "' ";
			} else {
				if ("off" == $_POST["sps_show_page"]) {
					$sql = "INSERT INTO $wpdb->postmeta " . "(meta_id, post_id, meta_key, meta_value) " . "VALUES (NULL, '$postId', '_sps_show_in_sidebar', '" . $_POST["sps_show_page"] . "')";
				} 
			} 
			if ($sql != "") {
				$result = $wpdb->query($sql);
			}
		} 
	}
/* ================================================= */

/* SPS - Search Static Pages */
/* Alter database to add a fulltext index over the posts */
function sps_add_fulltext_index()
{
	global $wpdb;
	$sql = "ALTER TABLE $wpdb->posts " 
		. "ADD  FULLTEXT `sps_search static pages` " 
		. "(`post_title`, `post_content`)";
	if ($sql != "") {
		$result = $wpdb->query($sql);
	}
}
/* Change the search query to display pages and add "relevance" */
function sps_ssp_change_request($text)
{
	global $wp_query;
	global $wp_version;

	if (($wp_query->is_search) && (1 == get_option("sps_search_static_pages"))) {
		/* STATIC PAGES */
		if ($wp_version >= "2.1") {
			$text = str_replace("post_type = 'post'", "(post_type = 'post' OR post_type = 'page')", $text);
		} else {
			$text = str_replace("AND post_status != 'static'", "OR post_status = 'static'", $text);
		}
		/* ORDER BY */
		$text = str_replace("post_date DESC", "post_relevance DESC, post_date DESC", $text);
		/* BUILD "MATCH AGAINST"*/
		$q = $wp_query->query_vars;
		$match = "MATCH (post_title, post_content) AGAINST ('".$q["s"]."')";
		/* RELEVANCE ROW */
		$text = str_replace("*", "*, ".$match." AS post_relevance", $text);
		/* REPLACE WHERE */
		$strFind = "(((post_title LIKE '%".$q["s"]."%') OR (post_content LIKE '%".$q["s"]."%')) OR (post_title LIKE '%".$q["s"]."%') OR (post_content LIKE '%".$q["s"]."%'))";
		$text = str_replace($strFind, $match, $text);
		/* HELPING OUTPUT
		echo $text; 
		//*/
	}
	return $text;
}
/* Get type of (current) post */ 
function get_the_type( $id = 0 ) {
	global $wp_version;
	$post = &get_post($id);
	if ($wp_version >= "2.1") {
		return apply_filters('get_the_type', $post->post_type);
	} else {
		/* Before WP 2.1 there was no "post_type" */
		if ("static" == $post->post_status) {
			return apply_filters('get_the_type', "page");
		} else {
			return apply_filters('get_the_type', "post");
		}
	}
}
function the_type( $id = 0 ) {
	echo get_the_type($id);
}
/* Get relevance of search for (current) post */
function get_the_relevance( $id = 0 ) {
	$post = &get_post($id);
	return apply_filters('get_the_relevance', $post->post_relevance);
}
function the_relevance( $id = 0 ) {
	global $sps_lang;
	echo (str_replace(".",$sps_lang["DecimalPoint"],sprintf('%1.2f', get_the_relevance($id))));
}
/* ================================================= */

/* SPS - Navigation Row */
/* Get navigation row */
function sps_navigation_row($args = '') {
	
	$r=0;
	parse_str($args, $r);
	if (!isset($r['id'])) {
		global $id;
	} else {
		$id = $r['id'];
	}
	if (!isset($r['separator'])) {
		$separator = get_option("sps_standard_separator");
	} else {
		$separator = $r['separator'];
	}
	$pages = &sps_navi_parent_pages($id);
	//print_r($pages);
	echo sps_format_navi_row($pages, $separator);
}

function &sps_navi_parent_pages($page_id) {
	$page_list = array();
	$post_parent = $page_id;
	while (0 != $post_parent) {
		$page = get_page($post_parent);
		$page_list[] = $page;
		$post_parent = $page->post_parent;
	}
	$page_list = array_reverse($page_list);
	return $page_list;
}


/* Format output string */
function sps_format_navi_row($pages, $separator) {
	global $sps_lang;
	global $wp_version;
	$output = "";
	foreach ($pages as $page) {
		if ( (($wp_version >= "2.1") && ("page" == $page->post_type)) || (($wp_version < "2.1") && ("static" == $page->post_status)) ) {
			$output .= '<a href="'.get_page_link($page->ID).'" title="'.$page->post_title.'">'.$page->post_title.'</a>'.$separator;
		} else {
			$output .= '<a href="'.get_settings('home').'" title="'.$sps_lang["Home"].'">'.$sps_lang["Home"].'</a>'.$separator;
		}
	}
	$output = substr($output,0,-strlen($separator));
	return $output;
}
/* ================================================= */

/* SPS - List Archives */
function sps_get_archives($args = '') {
	global $wpdb;
	global $sps_lang;
	$r = "";
	parse_str($args, $r);
	/* Use SPS function */
	if ( (isset($r['limit'])) && (1 == get_option("sps_list_archives")) && isset($r['type'])) {
		/* Standard function with limit */
		wp_get_archives($args);
		/* Now write the archives in years, 
		 * with "Archive" as additional text */ 
		$args = str_replace("type=".$r['type'], "type=yearly", $args);
		$r = "";
		parse_str($args, $r);
		$limit = '';
		if ( !isset($r['format']) ) { $format = 'html'; }
			else { $format = $r['format']; }
		if ( !isset($r['before']) ) { $before = '';	}
			else { $before = $r['before']; }
		if ( !isset($r['after']) ) { $after = ''; } 
			else { $after = $r['after']; }
		if ( !isset($r['show_post_count']) ) { $show_post_count = false; }
			else { $show_post_count = $r['show_post_count']; }
		$now = current_time('mysql');
		$arcresults = $wpdb->get_results("SELECT DISTINCT YEAR(post_date) AS `year`, count(ID) as posts FROM $wpdb->posts WHERE post_date < '$now' AND post_date != '0000-00-00 00:00:00' AND post_status = 'publish' GROUP BY YEAR(post_date) ORDER BY post_date DESC");
		if ( $arcresults ) {
			if ( ("" == get_option("sps_date_prefix")) || (0 == get_option("sps_date_prefix")) ) {
				$sps_prefix = "";
			} elseif (1 == get_option("sps_date_prefix")) {
				$sps_prefix = $sps_lang["Archive"];
			} elseif (2 == get_option("sps_date_prefix")) {
				$sps_prefix = $sps_lang["Year"];
			}
			foreach ( $arcresults as $arcresult ) {
				$url	= get_year_link($arcresult->year);
				if ( $show_post_count ) {
					$afterafter = $after;
					$text = sprintf('%s %d', $sps_prefix, $arcresult->year);
					$after = '&nbsp;('.$arcresult->posts.')' . $afterafter;
				} else {
					$text = sprintf('%s %d', $sps_prefix,$arcresult->year);
				}
				echo get_archives_link($url, $text, $format, $before, $after);
			}
		}
	} else {
		/* Standard function */
		wp_get_archives($args);
	}
	
}
/* ================================================= */

/* Page display for admin page */
function sps_adminpage() {
	global $sps_lang;
    // Add a new menu under Options:
    if (function_exists('add_options_page')) add_options_page($sps_lang["OptionPageName"], 'SPS-Suite', 10, __FILE__, 'sps_options');
}

function sps_options() {
	global $sps_lang;
	global $wp_version;
  ?>
  <div class="wrap">
    <h2><?php print $sps_lang["OptionPageName"]; ?></h2>
    <?php print $sps_lang["LookAtHomepage"]; ?>
    <br />&nbsp;
    <?php
    $sps_sidebar_page_switcher = 0;
    $sps_hierarchical_display = 0;
    $sps_minimum_user_level = 8;
    $sps_search_static_pages = 0;
    $sps_navigation_row = 1;
    $sps_standard_separator = "&nbsp;<strong>&raquo;</strong>&nbsp;";
    $sps_list_archives = 1;
    $sps_date_prefix = 0;
    
    $sps_options = array (
    	"sps_sidebar_page_switcher",
    	"sps_hierarchical_display",
    	"sps_minimum_user_level",
    	"sps_search_static_pages",
    	"sps_navigation_row",
    	"sps_standard_separator",
    	"sps_list_archives",
    	"sps_date_prefix");
    /* Try to fetch a submit!
     * and update all the options afterwards
     */
    if ( (isset($_POST["action"])) && ("update" == $_POST["action"]) ) {
		foreach($sps_options as $option) {
    		$option_value = $_POST[$option];
    		/* Check if option has a value */
    		if ("" == $option_value) {
        			$option_value = 0;
        	}
        	/* Check if value exists then update or add option */
        	if ("" == get_option($option)) {
        		add_option($option, $option_value, 'SPS-Suite: '.$option);
        		if ("sps_search_static_pages" == $option) {
        			sps_add_fulltext_index();
        		}
        	} else {
        		update_option($option, $option_value);
        	}	
    	} //foreach	
    }
    /* Now get all options from the database
     * and print them in to the form */
    foreach($sps_options as $option) {
    	if ("" <> get_option($option)) {
        	$$option = get_option($option);
    	}
    }
    ?>
    <form name="sps-suite" method="post" action="">
	  <input type="hidden" name="action" value="update" />
	    <fieldset class="options">
		<legend><?php print $sps_lang["SPS"]; ?></legend>
		<?php print $sps_lang["SPSText"]; ?><br />  
	    <table cellspacing="2" cellpadding="5" class="editform">
	      <tr valign="baseline">
			<th scope="row"><?php print $sps_lang["SPSUsage"]; ?>:</th>
			<td>
				<input name="sps_sidebar_page_switcher" type="checkbox" value="1" align="right" <?php if (1 == $sps_sidebar_page_switcher) {echo "checked";}?> />
			    <?php print $sps_lang["SPSUsageText"]; ?>
			</td>
	      </tr>
	      <tr valign="baseline">
	      	<th scope="row"><?php print $sps_lang["SPSMinUserLevel"]; ?>:</th>
			<td>
				<input name="sps_minimum_user_level" type="text" value="<?php echo $sps_minimum_user_level; ?>" size="1" align="right" />
				<?php print $sps_lang["SPSMinUserLevelText"]; ?>
		    </td>
	      </tr>
		  <tr valign="baseline">			
			<th scope="row"><?php print $sps_lang["SPSHierarchy"]; ?>:</th>
			<td>
				<input name="sps_hierarchical_display" type="checkbox" value="1" align="right" <?php if (1 == $sps_hierarchical_display) {echo "checked";}?> />
			    <?php print $sps_lang["SPSHierarchyText"]; ?>
			</td>
		  </tr>
		</table>
	  </fieldset>
	  
	  <p class="submit">
	      <input type="submit" name="sps_update" value="<?php print $sps_lang["Update"]; ?> &raquo;">
	  </p>
	  
	  <fieldset class="options">
	    <legend><?php print $sps_lang["SSP"]; ?></legend>
		<?php print $sps_lang["SSPText"]; ?>
		<table cellspacing="2" cellpadding="5" class="editform">
	      <tr valign="baseline">
			<th scope="row"><?php print $sps_lang["SSPUsage"]; ?>:</th>
			<td>
				<input name="sps_search_static_pages" type="checkbox" value="1" align="right" <?php if (1 == $sps_search_static_pages) {echo "checked";}?> />
			    <?php print $sps_lang["SSPUsageText"]; ?>
			</td>
	      </tr>
	    </table>
	  </fieldset>
	  
	  <p class="submit">
	      <input type="submit" name="sps_update" value="<?php print $sps_lang["Update"]; ?> &raquo;">
	  </p>
	  
	  <fieldset class="options">
	    <legend><?php print $sps_lang["NR"]; ?></legend>
	    <?php print $sps_lang["NRText"]; ?><br />
		<strong><?php print $sps_lang["SampleCode"]; ?>:</strong> &lt;?php sps_navigation_row("separator= &lt;strong&gt;/&lt;/strong&gt; "); ?&gt;
	    <table cellspacing="2" cellpadding="5" class="editform">
	      <tr valign="baseline">
			<th scope="row"><?php print $sps_lang["NRUsage"]; ?>:</th>
			<td>
				<input name="sps_navigation_row" type="checkbox" value="1" align="right" <?php if (1 == $sps_navigation_row) {echo "checked";}?> />
			    <?php print $sps_lang["NRUsageText"]; ?>
			</td>
	      </tr>
	    </table>
	    <table cellspacing="2" cellpadding="5" class="editform">
	      <tr valign="baseline">
			<th scope="row"><?php print $sps_lang["NRStandardSeparator"]; ?>:</th>
			<td>
				<input name="sps_standard_separator" type="text" value="<?php echo $sps_standard_separator; ?>" size="35" align="right"  />
			    <?php print $sps_lang["NRStandardSeparatorText"]; ?>
			</td>
	      </tr>
	    </table>
	  </fieldset>
	  
	  <p class="submit">
	      <input type="submit" name="sps_update" value="<?php print $sps_lang["Update"]; ?> &raquo;">
	  </p>
	  
	  <fieldset class="options">
	    <legend><?php print $sps_lang["LA"]; ?></legend>
	    <?php print $sps_lang["LAText"]; ?><br />
	    <strong><?php print $sps_lang["SampleCode"]; ?>:</strong> &lt;?php sps_get_archives('type=monthly&limit=3'); ?&gt;
	    <table cellspacing="2" cellpadding="5" class="editform">
	      <tr valign="baseline">
			<th scope="row"><?php print $sps_lang["LAUsage"]; ?>:</th>
			<td>
				<input name="sps_list_archives" type="checkbox" value="1" align="right" <?php if (1 == $sps_list_archives) {echo "checked";}?> />
		    	<?php print $sps_lang["LAUsageText"]; ?> 
			</td>
	      </tr>
	    </table>
	    <table cellspacing="2" cellpadding="5" class="editform">
	      <tr valign="baseline">
			<th scope="row"><?php print $sps_lang["LADatePrefix"]; ?>:</th>
			<td>
				<select name="sps_date_prefix">
					<option value="0" <?php if (0 == $sps_date_prefix) {echo "selected";}?>><?php echo $sps_lang["NoPrefix"]; ?></option>
					<option value="1" <?php if (1 == $sps_date_prefix) {echo "selected";}?>><?php echo $sps_lang["Archive"]; ?></option>
					<option value="2" <?php if (2 == $sps_date_prefix) {echo "selected";}?>><?php echo $sps_lang["Year"]; ?></option>
				</select>
		    	<?php print $sps_lang["LADatePrefixText"]; ?>  
			</td>
	      </tr>
	    </table>
	  </fieldset>
	  <p class="submit">
	      <input type="submit" name="sps_update" value="<?php print $sps_lang["Update"]; ?> &raquo;">
	  </p>
	</form>
    <small>
    	<?php print $sps_lang["Notes"]; ?>
    </small>
    <p><a href="http://www.hobbingen.de/software">Plugin Homepage</a> <a href="http://wordpress.org/extend/plugins/sps-suite-121/">Wordpress.org-Plugins</a></p>
  </div>
  <?php
}

/* Widget for Archive-Function of SPS */
///*
function sps_widget_archives($args) {
	extract($args);
	$options = get_option('sps_widget_archives');
	$c = $options['count'] ? '1' : '0';
	$l = empty($options['limit']) ? '0' : $options['limit'];
	$title = empty($options['title']) ? __('Archives') : $options['title'];
?>
		<?php echo $before_widget; ?>
			<?php echo $before_title . $title . $after_title; ?>
			<ul>
			<?php sps_get_archives("type=monthly&limit=$l&show_post_count=$c"); ?>
			</ul>
		<?php echo $after_widget; ?>
<?php
}

function sps_widget_archives_control() {
	$options = $newoptions = get_option('sps_widget_archives');
	if ( $_POST["sps-archives-submit"] ) {
		$newoptions['count'] = isset($_POST['sps-archives-count']);
		$newoptions['limit'] = $_POST['sps-archives-limit'];
		$newoptions['title'] = strip_tags(stripslashes($_POST["sps-archives-title"]));
	}
	if ( $options != $newoptions ) {
		$options = $newoptions;
		update_option('sps_widget_archives', $options);
	}
	$count = $options['count'] ? 'checked="checked"' : '';
	$limit = $options['limit'];
	$title = htmlspecialchars($options['title'], ENT_QUOTES);
?>
			<p><label for="sps-archives-title"><?php _e('Title:'); ?> <input style="width: 250px;" id="archives-title" name="sps-archives-title" type="text" value="<?php echo $title; ?>" /></label></p>
			<p style="text-align:right;margin-right:40px;"><label for="sps-archives-count">Show post counts <input class="checkbox" type="checkbox" <?php echo $count; ?> id="sps-archives-count" name="sps-archives-count" /></label></p>
			<p><label for="sps-archives-limit">Limit display to <input class="text" type="text" value="<?php echo $limit; ?>" id="sps-archives-limit" name="sps-archives-limit" /></label></p>
			<input type="hidden" id="sps-archives-submit" name="sps-archives-submit" value="1" />
<?php
}

function sps_load_widgets() {
global $sps_lang;
if ( function_exists('register_sidebar_widget') ) {
	register_sidebar_widget($sps_lang['LA'], 'sps_widget_archives');
}	
if ( function_exists('register_widget_control') ) {
	register_widget_control($sps_lang['LA'], 'sps_widget_archives_control', 300, 110);
}
}
/* Actions and Filters for Wordpress */
/* Sidebar Page Switcher */
add_action('edit_page_form', 'sps_admin_edit_page');
add_action('edit_post', 'sps_manage_meta_data');
add_filter('wp_list_pages_excludes', 'sps_pages_2_exclude', 1);
/* Search Static Pages */
add_filter('posts_request', 'sps_ssp_change_request', 1);
/* Administration Form */
add_action('admin_menu', 'sps_adminpage');
/* Load widgets after all plugins are loaded! */
add_action('plugins_loaded', 'sps_load_widgets');



?>