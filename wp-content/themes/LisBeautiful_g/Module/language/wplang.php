<?php
class SetWpLang{

    public $optionval;

    public static function Values(){
        return (object)[
            'dir' => "/Module/language/".get_option('WPLANG')."/wplang.json"
        ];
    }

    public static function ReturnJson(){
        $fdir = get_template_directory();
        $wparr = file_get_contents($fdir.self::Values()->dir);
        $MCjson = mb_convert_encoding($wparr, 'UTF8', 'ASCII,JIS,UTF-8,EUC-JP,SJIS-WIN');
        return json_decode($MCjson,true);
    }
}
new SetWpLang();
?>