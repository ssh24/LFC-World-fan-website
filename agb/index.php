<?php
$include_path = dirname(__FILE__);
require_once $include_path."/admin/config.inc.php";
require_once $include_path."/lib/$DB_CLASS";
require_once $include_path."/lib/image.class.php";
require_once $include_path."/lib/template.class.php";

if (IS_MODULE) {

	if (!eregi("modules.php", $_SERVER['PHP_SELF'])) {
	    die ("You can't access this file directly...");
	}
	
	$ModName = basename(dirname( __FILE__ ));
	
	ob_start();
	include("header.php");
	
	$GB_PG["base_url"] .= "/modules/$ModName";
	
	$GB_SELF = basename($_SERVER['PHP_SELF']);
	$GB_PG["index"]    = "$GB_SELF?op=modload&name=$ModName&file=index";
	$GB_PG["admin"]    = "$GB_SELF?op=modload&name=$ModName&file=index&agbook=admin";
	$GB_PG["comment"]  = "$GB_SELF?op=modload&name=$ModName&file=index&agbook=comment";
	$GB_PG["addentry"] = "$GB_SELF?op=modload&name=$ModName&file=index&agbook=addentry";
	
	if (!isset($agbook)) {
	    $agbook = '';
	}
	
	switch ($agbook) {
	
	    case "admin":
	        require_once $include_path."/lib/session.class.php";
	        $gb_auth = new gb_session($include_path);
	        $AUTH = $gb_auth->checkSessionID();
	        $VARS = $gb_auth->fetch_array($gb_auth->query("SELECT * FROM ".$gb_auth->table['cfg']));
	        $gb_auth->free_result($gb_auth->result);
	        $template = new gb_template($include_path);
	        if (isset($_COOKIE['lang']) && !empty($_COOKIE['lang'])) {
	            $template->set_lang($_COOKIE['lang']);
	        } else {
	            $template->set_lang($VARS['lang']);
	        }
	        $LANG = $template->get_content();
	        $gb_auth->close_db();
	        $enter_html = "";
	        if (!$AUTH) {
	            $message = (isset($username) || isset($password)) ? $LANG["PassMess2"] : $LANG["PassMess1"];
	            eval("\$enter_html = \"".$template->get_template($GB_TPL['header'])."\";");
	            eval("\$enter_html .= \"".$template->get_template($GB_TPL['adm_enter'])."\";");
	            eval("\$enter_html .= \"".$template->get_template($GB_TPL['footer'])."\";");
	            echo $enter_html;
	        } else {
	            $GB_PG["admin"] = $GB_PG["base_url"]."/admin.php?username=$username&password=$password&enter=1";
	            header("Location: $GB_PG[admin]");
	            exit();
	        }
	        break;
	
	    case "comment":
	        require_once $include_path."/lib/vars.class.php";
	        require_once $include_path."/lib/comment.class.php";
	        $gb_com = new gb_comment($include_path);
	        $gb_com->id = (isset($_GET["gb_id"])) ? $_GET["gb_id"] : '';
	        $gb_com->id = (isset($_POST["gb_id"])) ? $_POST["gb_id"] : $gb_com->id;
	        $gb_com->id = intval($gb_com->id);
	        $gb_com->comment = (isset($_POST["comment"])) ? $_POST["comment"] : '';
	        $gb_com->user = (isset($_POST["gb_user"])) ? $_POST["gb_user"] : '';
	        $gb_com->pass_comment = (isset($_POST["pass_comment"])) ? $_POST["pass_comment"] : '';
	        $gb_com->gb_captcha = (isset($_POST["gb_captcha"])) ? $_POST["gb_captcha"] : '';
	        $gb_action = (isset($_POST["gb_comment"])) ? $_POST["gb_comment"] : '';
	        $gb_com->comment_action($gb_action);
	        $gb_com->db->close_db();
	        break;
	
	    case "addentry":
	        require_once $include_path."/lib/vars.class.php";
	        require_once $include_path."/lib/add.class.php";
	        require_once $include_path."/lib/phrase.class.php";
	        $gb_post = new addentry($include_path);
	        if (isset($_POST["gb_action"])) {
	            $gb_post->name = (isset($_POST["gb_name"])) ? $_POST["gb_name"] : '';
				$gb_post->email = (isset($_POST["gb_email"])) ? $_POST["gb_email"] : '';
				$gb_post->url = (isset($_POST["gb_url"])) ? $_POST["gb_url"] : '';
				$gb_post->comment = (isset($_POST["gb_comment"])) ? $_POST["gb_comment"] : '';
				$gb_post->location = (isset($_POST["gb_location"])) ? $_POST["gb_location"] : '';
				$gb_post->icq = (isset($_POST["gb_icq"])) ? $_POST["gb_icq"] : 0;
				$gb_post->aim = (isset($_POST["gb_aim"])) ? $_POST["gb_aim"] : '';
				$gb_post->gender = (isset($_POST["gb_gender"])) ? $_POST["gb_gender"] : '';
				$gb_post->userfile = (isset($_FILES["userfile"]["tmp_name"]) && $_FILES["userfile"]["tmp_name"] != "") ? $_FILES : '';
				$gb_post->user_img = (isset($_POST["gb_user_img"])) ? $_POST["gb_user_img"] : '';
				$gb_post->preview = (isset($_POST["gb_preview"])) ? 1 : 0;
				$gb_post->private = (isset($_POST["gb_private"])) ? 1 : 0;
				$gb_post->token = (isset($_POST["gb_token"])) ? $_POST["gb_token"] : '';
				$gb_post->gb_captcha = (isset($_POST["gb_captcha"])) ? $_POST["gb_captcha"] : '';
				echo $gb_post->process($_POST["gb_action"]);
	        } else {
	            echo $gb_post->process();
	        }
	        $gb_post->db->close_db();
	        break;
	
	    default:
	        require_once $include_path."/lib/vars.class.php";
	        require_once $include_path."/lib/gb.class.php";
	        $gb = new guestbook($include_path);
	        $entry = (isset($_GET["entry"])) ? $_GET["entry"] : 0;
	        $entry = (isset($_POST["entry"])) ? $_POST["entry"] : $entry;
	        echo $gb->show_entries(intval($entry));
	        $gb->db->close_db();
	}
	
	ob_end_flush();
	$base_path = dirname(dirname($include_path));
	chdir("$base_path");
	include("$base_path/footer.php");

} else {

	require_once $include_path."/lib/vars.class.php";
	require_once $include_path."/lib/gb.class.php";
	$gb = new guestbook($include_path);
	$entry = (isset($_GET["entry"])) ? $_GET["entry"] : 0;
	$entry = (isset($_POST["entry"])) ? $_POST["entry"] : $entry;
	echo $gb->show_entries(intval($entry));
}

?>