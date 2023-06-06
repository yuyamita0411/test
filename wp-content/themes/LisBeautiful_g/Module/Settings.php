<?php
    class Settings{
        static $FontAnimation = array(
            'none'   => 'なし',
            'Typewriter1'   => 'タイプライター風1',
            'Typewriter2'   => 'タイプライター風2',
            'Typewriter3'   => 'タイプライター風3',
            'Fadein1'   => 'フェードイン1',
            'Fadein2'   => 'フェードイン2',
            'Fadein3'   => 'フェードイン3'
        );

        static $MultiFontAnimation = array(
            'none'   => 'なし',
            'MultiTypewriter1'   => 'タイプライター風1',
            'MultiTypewriter2'   => 'タイプライター風2',
            'MultiTypewriter3'   => 'タイプライター風3',
            'MultiFadein1'   => 'フェードイン1',
            'MultiFadein2'   => 'フェードイン2',
            'MultiFadein3'   => 'フェードイン3'
        );
        static $MultiFClickAnimation = array(
            'none'   => 'なし',
            'MultiClickTypewriter1'   => 'タイプライター風1',
            'MultiClickTypewriter2'   => 'タイプライター風2',
            'MultiClickTypewriter3'   => 'タイプライター風3',
            'MultiClickFadein1'   => 'フェードイン1',
            'MultiClickFadein2'   => 'フェードイン2',
            'MultiClickFadein3'   => 'フェードイン3'
        );
        static $ElementAnimation = array(
            'none'   => 'なし',
            'ElemFadein1'   => 'フェードイン1',
            'ElemFadein2'   => 'フェードイン2',
            'ElemFadein3'   => 'フェードイン3',
            'ElemFadein4'   => 'フェードイン4',
            'ElemFadein5'   => 'フェードイン5'
        );
        static $contentpadding =  array(
            '1.5rem'   => '1.5文字分',
            '.5rem'   => '0.5文字分',
            '1rem'   => '1文字分',
            '2rem'   => '2文字分',
            '2.5rem'   => '2.5文字分',
            '0px'   => 'なし'
        );
        static $sidecolumnpadding =  array(
            '.5rem'   => '0.5文字分',
            '1rem'   => '1文字分',
            '1.5rem'   => '1.5文字分',
            '2rem'   => '2文字分',
            '2.5rem'   => '2.5文字分',
            '0px'   => 'なし'
        );
        static $sidecolumnmargin =  array(
            '0px'   => 'なし',
            '.5rem'   => '0.5文字分',
            '1rem'   => '1文字分',
            '1.5rem'   => '1.5文字分',
            '2rem'   => '2文字分',
            '2.5rem'   => '2.5文字分'
        );
        static $maincolumtitlecontentnmargin =  array(
            '.2rem'   => '0.2文字分',
            '.1rem'   => '0.1文字分',
            '.3rem'   => '0.3文字分',
            '.4rem'   => '0.4文字分',
            '.5rem'   => '0.5文字分',
            '1rem'   => '1文字分',
            '1.5rem'   => '1.5文字分',
            '2rem'   => '2文字分',
            '2.5rem'   => '2.5文字分',
            '0px'   => 'なし',
        );
        static $sidecolumtitlecontentnmargin =  array(
            '.2rem'   => '0.2文字分',
            '.1rem'   => '0.1文字分',
            '.3rem'   => '0.3文字分',
            '.4rem'   => '0.4文字分',
            '.5rem'   => '0.5文字分',
            '1rem'   => '1文字分',
            '1.5rem'   => '1.5文字分',
            '2rem'   => '2文字分',
            '2.5rem'   => '2.5文字分',
            '0px'   => 'なし',
        );
        static $maincolumntitlepadding =  array(
            '.5rem'   => '0.5文字分',
            '1rem'   => '1文字分',
            '1.5rem'   => '1.5文字分',
            '2rem'   => '2文字分',
            '2.5rem'   => '2.5文字分',
            '0px'   => 'なし'
        );
        static $sidecolumntitlepadding =  array(
            '.5rem'   => '0.5文字分',
            '1rem'   => '1文字分',
            '1.5rem'   => '1.5文字分',
            '2rem'   => '2文字分',
            '2.5rem'   => '2.5文字分',
            '0px'   => 'なし'
        );
        static $maincolumncontentpadding =  array(
            '.5rem'   => '0.5文字分',
            '1rem'   => '1文字分',
            '1.5rem'   => '1.5文字分',
            '2rem'   => '2文字分',
            '2.5rem'   => '2.5文字分',
            '0px'   => 'なし'
        );
        static $sidecolumncontentpadding =  array(
            '.5rem'   => '0.5文字分',
            '1rem'   => '1文字分',
            '1.5rem'   => '1.5文字分',
            '2rem'   => '2文字分',
            '2.5rem'   => '2.5文字分',
            '0px'   => 'なし'
        );
        static $ArticleListLayout = array(
            'pt1'   => 'サイズ:画面幅×1/3 上半分：画像、下半分：タイトル・日付・カテゴリー名',
            'pt2'   => 'サイズ:画面幅×1/2 上半分：画像、下半分：タイトル・日付・カテゴリー名',
            'pt3'   => 'サイズ:画面幅×1/4 上半分：画像、下半分：タイトル・日付・カテゴリー名',
            'pt4'   => 'サイズ:画面幅 左半分(1/2)：画像、右半分(1/2)：タイトル・日付・カテゴリー名',
            'pt5'   => 'サイズ:画面幅 左半分(1/3)：画像、右半分(2/3)：タイトル・日付・カテゴリー名',
            'pt6'   => 'サイズ:画面幅 左半分(1/6)：画像、右半分(5/6)：タイトル・日付・カテゴリー名',
            'pt7'   => 'サイズ:画面幅×1/3 サムネイル画像上にタイトル、日付、カテゴリー名',
            'pt8'   => 'サイズ:画面幅×1/2 サムネイル画像上にタイトル、日付、カテゴリー名',
            'pt9'   => 'サイズ:画面幅×1/4 サムネイル画像上にタイトル、日付、カテゴリー名'
        );
        static $ArticleListSPLayout = array(
            'pt1'   => 'サイズ:画面幅 上半分：画像、下半分：タイトル・日付・カテゴリー名',
            'pt2'   => 'サイズ:画面幅×1/2 上半分：画像、下半分：タイトル・日付・カテゴリー名',
            'pt3'   => 'サイズ:画面幅 左半分(1/2)：画像、右半分(1/2)：タイトル・日付・カテゴリー名',
            'pt4'   => 'サイズ:画面幅 左半分(1/3)：画像、右半分(2/3)：タイトル・日付・カテゴリー名',
            'pt5'   => 'サイズ:画面幅 左半分(1/4)：画像、右半分(3/4)：タイトル・日付・カテゴリー名',
            'pt6'   => 'サイズ:画面幅 サムネイル画像上にタイトル、日付、カテゴリー名',
            'pt7'   => 'サイズ:画面幅×1/2 サムネイル画像上にタイトル、日付、カテゴリー名'
        );
        static $SideColumnPCLayout = array(
            'pt1'   => '上: 画像-正方形, 下: タイトル・日付',
            'pt2'   => '上: 画像-長方形, 下: タイトル・日付',
            'pt3'   => '正方形画像 + タイトル・日付',
            'pt4'   => '長方形画像 + タイトル・日付',
            'pt5'   => '1/2画像 1/2タイトル',
            'pt6'   => '1/3画像 2/3タイトル',
            'pt7'   => '1/4画像 3/4タイトル'
        );
        static $SideColumnSPLayout = array(
            'pt1'   => '上: 画像-正方形, 下: タイトル・日付',
            'pt2'   => '上: 画像-長方形, 下: タイトル・日付',
            'pt3'   => '正方形画像 + タイトル・日付',
            'pt4'   => '長方形画像 + タイトル・日付',
            'pt5'   => '1/2画像 1/2タイトル',
            'pt6'   => '1/3画像 2/3タイトル',
            'pt7'   => '1/4画像 3/4タイトル'
        );

        static $PCMainCLimit = array(
            'pt1' => 0,
            'pt2' => 0,
            'pt3' => 0,
            'pt4' => 200,
            'pt5' => 200,
            'pt6' => 80,
            'pt7' => 0
        );
        static $SPMainCLimit = array(
            'pt1' => 0,
            'pt2' => 0,
            'pt3' => 150,
            'pt4' => 100,
            'pt5' => 50,
            'pt6' => 0,
            'pt7' => 0
        );

        static $HDMenu = array(
            'pt1' => array(
                'hbmenuwraapper' => 'position-fixed hbclose zm2 w-100',
                'menu_class' => 'gmenueinner mb-0 col-8 float-right',
                'add_li_class' => 'w-100 float-right text-left text-md-center mb-md-0',
                'add_a_class' => 'menufont font-weight-bold position-relative d-inline-block w-100 overflow-hidden',
                'hbmenuwraappercover' => 'd-none'
            ),
            'pt2' => array(
                'hbmenuwraapper' => 'position-fixed hbclose zm2 col-8',
                'menu_class' => 'gmenueinner mb-0 col-8 float-right d-inline-block',
                'add_li_class' => 'bgmain w-100 float-right text-left text-md-center mb-md-0 ml-1',
                'add_a_class' => 'menufont font-weight-bold position-relative d-inline-block w-100 overflow-hidden',
                'hbmenuwraappercover' => 'd-none'
            ),
            'pt3' => array(
                'hbmenuwraapper' => 'position-fixed hbclose zm2 col-6',
                'menu_class' => 'gmenueinner mb-0 col-8 float-right',
                'add_li_class' => 'w-100 float-right text-left text-md-center mb-md-0',
                'add_a_class' => 'br-white1 menufont font-weight-bold position-relative d-inline-block w-100 overflow-hidden',
                'hbmenuwraappercover' => 'd-none'
            ),
            'pt4' => array(
                'hbmenuwraapper' => 'position-fixed hbclose zm2 w-100 h-100',
                'menu_class' => 'gmenueinner mb-0 col-8 float-right',
                'add_li_class' => 'w-100 float-right text-left text-md-center mb-md-0',
                'add_a_class' => 'br-white1 menufont font-weight-bold position-relative d-inline-block w-100 overflow-hidden',
                'hbmenuwraappercover' => 'position-fixed hbclose zm2 col-12 h-100'
            ),
            'pt5' => array(
                'hbmenuwraapper' => 'position-fixed hbclose zm2 col-8',
                'menu_class' => 'gmenueinner mb-0 col-8 float-right',
                'add_li_class' => 'w-100 float-right text-left text-md-center mb-md-0',
                'add_a_class' => 'br-white1 menufont font-weight-bold position-relative d-inline-block w-100 overflow-hidden',
                'hbmenuwraappercover' => 'position-fixed hbclose zm2 col-8 h-100'
            ),
            'pt6' => array(
                'hbmenuwraapper' => 'position-fixed hbclose zm2 col-6',
                'menu_class' => 'gmenueinner mb-0 col-8 float-right',
                'add_li_class' => 'w-100 float-right text-left text-md-center mb-md-0',
                'add_a_class' => 'br-white1 menufont font-weight-bold position-relative d-inline-block w-100 overflow-hidden',
                'hbmenuwraappercover' => 'position-fixed hbclose zm2 col-6 h-100'
            ),
            'pt7' => array(
                'hbmenuwraapper' => 'position-fixed hbclose zm2 col-8',
                'menu_class' => 'gmenueinner mb-0 col-8 float-right',
                'add_li_class' => 'w-100 float-right text-left text-md-center mb-md-0',
                'add_a_class' => 'br-white1 menufont font-weight-bold position-relative d-inline-block w-100 overflow-hidden',
                'hbmenuwraappercover' => 'position-fixed hbclose zm2 w-100 h-100'
            ),
            'pt8' => array(
                'hbmenuwraapper' => 'position-fixed hbclose zm2 col-6',
                'menu_class' => 'gmenueinner mb-0 col-8 float-right',
                'add_li_class' => 'w-100 float-right text-left text-md-center mb-md-0',
                'add_a_class' => 'br-white1 menufont font-weight-bold position-relative d-inline-block w-100 overflow-hidden',
                'hbmenuwraappercover' => 'position-fixed hbclose zm2 w-100 h-100'
            )
        );

        public static function Fsize(){
            $arr = [];
            $arr['16px'] = __( '16px' );
            for($i=10; $i <= 40; $i++){
                if($i != 16){
                    $arr[$i.'px'] = __( $i.'px' );
                }
            }
            return $arr;
        }
        public static function ArFsize(){
            $arr = [];
            $arr['30px'] = __( '30px' );
            for($i=10; $i <= 40; $i++){
                if($i != 30){
                    $arr[$i.'px'] = __( $i.'px' );
                }
            }
            return $arr;
        }
        public static function ArNum(){
            $arr = [];
            $arr[5] = __( '5つ' );
            for($i=1; $i <= 10; $i++){
                if($i != 5){
                    $arr[$i] = __( $i.'つ' );
                }
            }
            return $arr;
        }
        public static function Num0To1(){
            $arr = [];
            $arr['0.5'] = __( '0.5' );
            for($i=1; $i <= 10; $i++){
                if($i != 5){
                    $arr[strval($i*0.1)] = __(strval($i*0.1));
                }
            }
            return $arr;
        }
        public static function ShadowFormat($flag, $value){
            $Wshadow = 'box-shadow: none;';
            if($flag == 'true'){
                $Wrval = $value;
                $Wshadow = 'box-shadow: 0 0.16rem 0.36rem 0 rgb(0, 0, 0, '.$Wrval.'), 0 0.03rem 0.09rem 0 rgb(0, 0, 0, '.$Wrval.');';
            }
            return $Wshadow;
        }
        public static function BorderRadius(){
            $arr = [];
            $arr['0px'] = __( '0px' );
            for($i=0; $i <= 100; $i++){
                if($i != 0){
                    $arr[$i.'px'] = __( $i.'px' );
                }
            }
            return $arr;
        }
    }
    new Settings();
?>