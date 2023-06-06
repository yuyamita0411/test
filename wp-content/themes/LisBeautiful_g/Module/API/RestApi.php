<?php
    class RestApi {
        public function __construct() {
            add_action('rest_api_init', array( $this,'endpoints'));
            add_action('init', array( $this,'handle_preflight'));
            add_action('rest_authentication_errors', array( $this,'rest_filter_incoming_connections'));
        }

        public function Register($dir, $method, $function){
            //API endpoint {top page url}?rest_route=/wp/custom/optionData
            register_rest_route( 'wp/custom', $dir, array(
                'methods' => $method,
                'callback' => array($this, $function),
            ));
        }

        public function endpoints(){
            self::Register('/setEasyDesignPattern', 'GET', 'setEasyDesignPattern');
            self::Register('/getEasyDesignProp', 'GET', 'getEasyDesignProp');
            self::Register('/GetCatColor', 'GET', 'GetCatColor');
            self::Register('/EditCatColor', 'POST', 'EditCatColor');
            self::Register('/GetWpUsers', 'GET', 'GetWpUsers');
            self::Register('/GetWpUsersSelected', 'GET', 'GetWpUsersSelected');
        }
        //SELECT * FROM `wp_options` WHERE option_name = 'Format' or option_name = 'SetBaseColor'  or option_name = 'SetMainColor'  or option_name = 'SetAccentColor';
        public function setEasyDesignPattern($return){
            $Format = $_GET['Format'];
            $SetBaseColor = $_GET['SetBaseColor'];
            $SetMainColor = $_GET['SetMainColor'];
            $SetAccentColor = $_GET['SetAccentColor'];

            $object = (object)[
                'Format' => $Format,
                'SetBaseColor' => $SetBaseColor,
                'SetMainColor' => $SetMainColor,
                'SetAccentColor' => $SetAccentColor
            ];

            update_option('Format', $Format);
            update_option('SetBaseColor', $SetBaseColor);
            update_option('SetMainColor', $SetMainColor);
            update_option('SetAccentColor', $SetAccentColor);

            return $object;
        }

        public function getEasyDesignProp() {
            get_option("Format") ? get_option("Format") : update_option("Format", 1);
            get_option("SetBaseColor") ? get_option("SetBaseColor") : update_option("SetBaseColor", '#ffff');
            get_option("SetMainColor") ? get_option("SetMainColor") : update_option("SetMainColor", '#06357c');
            get_option("SetAccentColor") ? get_option("SetAccentColor") : update_option("SetAccentColor", '#ff7575');

            return (object)[
                'Format' => get_option("Format"),
                'SetBaseColor' => get_option("SetBaseColor"),
                'SetMainColor' => get_option("SetMainColor"),
                'SetAccentColor' => get_option("SetAccentColor")
            ];
        }

        public function GetCatColor() {
            $results = SubQuery::GetColorCode();
            return $results;
        }

        public function EditCatColor() {
            $returnObj = [];
            foreach($_POST["colorcodes"] as $eachInfo) {
                $eacharr = [];
                update_option($eachInfo["catname"], $eachInfo["colorcode"]);
                $eacharr["catname"] = $eachInfo["catname"];
                $eacharr["colorcode"] = $eachInfo["colorcode"];
                array_push($returnObj, $eacharr);
            }
            return (object)$returnObj;
        }

        public function GetWpUsers() {
            $returnObj = [];
            foreach (get_users() as $user) {
                $eacharr = [];
                $eacharr["user_login"] =$user->user_login;
                $eacharr["ID"] =$user->ID;
                array_push($returnObj, $eacharr);
            }
            return (object)$returnObj;
        }
        public function GetWpUsersSelected() {
            $ID = $_GET['ID'];

            $returnObj = [];
            $returnObj["display_name"] = get_the_author_meta("display_name", $ID);

            $returnObj["user_description"] = get_the_author_meta("user_description", $ID);
            $returnObj["user_email"] = get_the_author_meta("user_email", $ID);

            $returnObj["Instagram"] = get_the_author_meta("instagram", $ID);
            $returnObj["LINE"] = get_the_author_meta("line", $ID);
            $returnObj["Facebook"] = get_the_author_meta("facebook", $ID);
            $returnObj["Twitter"] = get_the_author_meta("twitter", $ID);
            $returnObj["Feedly"] = get_the_author_meta("feedly", $ID);
            $returnObj["YouTube"] = get_the_author_meta("youtube", $ID);

            $returnObj["profurl"] = get_the_author_meta("profurl", $ID);
            $returnObj["backgroundurl"] = get_the_author_meta("backgroundurl", $ID);

            $returnObj["user_registered"] = get_the_author_meta("user_registered", $ID);
            return (object)$returnObj;
        }

        //↓↓↓↓ security
        public function handle_preflight() {
            $origin = get_http_origin();
            $url = explode('/', get_home_url());

            header("Access-Control-Allow-Origin: ".$url[2]);
            header("Access-Control-Allow-Methods: POST, GET, OPTIONS, PUT, DELETE");
            header("Access-Control-Allow-Credentials: true");
            header('Access-Control-Allow-Headers: Origin, X-Requested-With, X-WP-Nonce, Content-Type, Accept, Authorization');
            if ('OPTIONS' == $_SERVER['REQUEST_METHOD']) {
                status_header(200);
                exit();
            }
        }
        public function rest_filter_incoming_connections($errors) {
            $request_server = $_SERVER['REMOTE_ADDR'];
            $origin = get_http_origin();
      
            $ref = explode('/', $_SERVER["HTTP_REFERER"]);
            $fromUrl = $ref[0].'//'.$ref[2];
      
            if ($fromUrl !== get_home_url()) return new WP_Error('forbidden_access', $origin, array(
                'status' => 403 
            ));
            return $errors;
        }
    }
    new RestApi();
?>