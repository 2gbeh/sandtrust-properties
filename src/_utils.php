<?php
require_once 'lib/jrad-min/php/master.php';
require_once 'lib/jrad-min/php/mysql.php';
require_once 'lib/jrad-min/php/widget.php';

if (isset($_GET['logout'])) {
    session_destroy();
    echo '<script type="text/javascript">location.assign("' . $ctx_login_url . '");</script>';
}

if (isset($_SESSION['user'])) {
    $whois = (object) $_SESSION['user'];
    $ctx_trail = 'user.php';
} else if (isset($_SESSION['admin'])) {
    $whois = (object) $_SESSION['admin'];
    $ctx_trail = 'admin.php';
} else {
    $oauth = ['index.php', 'login.php', 'forgot.php'];
    if (! in_array($ctx_this_page, $oauth)) {
        ctx_goto($ctx_login_url);
    }
}

$conn = connect_db($ctx_db_user, $ctx_db_psw, $ctx_db);
$tb_user = 'user';
$tb_admin = 'admin';
$dir_uploads = 'uploads/';

class Main
{
    private static $table = 'user';

    public static function user($id)
    {
        global $conn, $tb_user;
        $res = sql_select_id($conn, $tb_user, $id);
        if (is_array($res)) {
            $res['photo_f'] = strlen($res['photo']) == 10? $res['photo']: 'default.png';
            $res['names_f'] = ucwords($res['names']);
            $res['names_ff'] = strtoupper($res['names']);            
            $res['sex'] = sex_f($res['sex']);
            $res['sex_f'] = gender_f($res['sex']);
            $res['dob_f'] = is_null($res['dob'])? 'Not stated': date_f($res['dob']);
            $res['email_f'] = mailto_f($res['email']);
            $res['phone_f'] = $res['phone'] ?: 'N/A';
            $res['tel_f'] = tel_f('+'.$res['phone']);
            $res['state_f'] = enum_f(Lists::STATE, $res['state']);
            $res['username_f'] = ucwords($res['username']);
            $res['username_ff'] = strtoupper($res['username']);
            $res['password_f'] = mask_f($res['password']);
            $res['bank_f'] = enum_f(Lists::BANK, $res['bank']);
            $res['acct_name_f'] = strtoupper($res['acct_name']);
            $res['ref_my_q'] = '?k='. $res['ref_my'];
            $res['ref_my_n'] = self::refs_of($res['ref_my'], true);
            $res['ref_by_q'] = '?k='. $res['ref_by'];
            $res['date_t'] = date_t($res['DATE']);
            $res['time_t'] = time_t($res['DATE']);
            $res['bio_f'] = ucfirst($res['username']) . '#' . $res['ref_my'];
            return $res;
        }
    }

    public static function admin($id)
    {
        global $conn, $tb_admin;
        $res = sql_select_id($conn, $tb_admin, $id);
        if (is_array($res)) {
            $res['username_f'] = ucwords($res['username']);
            $res['username_ff'] = strtoupper($res['username']);
            $res['email_f'] = mailto_f($res['email']);
            $res['phone_f'] = $res['phone'] ?: 'N/A';
            $res['tel_f'] = tel_f('+'.$res['phone']);            
            $res['password_f'] = mask_f($res['password']);
            $res['status_f'] = enum_f(Lists::ADMIN, $res['STATUS']);
            $res['date_t'] = date_t($res['DATE']);
            $res['time_t'] = time_t($res['DATE']);
            $res['bio_f'] = ucfirst($res['username']);
            return $res;
        }
    }    

    public static function refs($as_n = false)
    {
        global $conn, $tb_user;
        $res = sql_select_all($conn, $tb_user);
        rsort($res);
        return $as_n == false? $res: money_f(count($res));
    }
    
    public static function refs_of($ref_my, $as_n = false)
    {
        global $conn, $tb_user;
        $res = sql_select($conn, $tb_user, 'ref_by', $ref_my);
        rsort($res);
        return $as_n == false? $res: money_f(count($res));
    }
}

var_dump(
    // $whois, 
    // Main::user($whois->ID),
    //Main::admin($whois->ID),
    // Main::refs(), 
    // Main::refs(true),
    // Main::refs_of($whois->ref_my), 
    // Main::refs_of($whois->ref_my, true)    
);

$user_id = $whois->ID;
$user_row = Main::user($whois->ID);
$user_bio = $user_row['bio_f'];
$user_bio = $user_row['username_f'];
$user_refs = Main::refs_of($whois->ref_my, true);

$admin_id = $whois->ID;
$admin_row = Main::admin($whois->ID);
$admin_bio = $admin_row['bio_f'];
$admin_refs = Main::refs(true);
 
