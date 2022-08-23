<?php
class AirConditioner {
    
    /*
    モード (冷房,暖房,除湿　のみ、それ以外の文字列が入らないこと)
    一般的なリモコンを想定し、それぞれのモードを切り替える関数を定義すること
    */
    private $mode;
    
    /* 
    温度 (18～30)
    一般的なリモコンを想定し、1度づつ上下させる関数を定義すること
    */
    private $temperature;
    
    /* 
    風量 (1～5) 
    一般的なリモコンを想定し、1づつ上下させる関数を定義すること
    */
    private $power;
    
    /*
    コンストラクタ
    */
    function __construct($mode ,$temperature ,$power) {
        // 初期設定は冷房モードとすること
        // 温度・風量は引数で受け取ること
        $this->mode = $mode;
        $this->temperature = $temperature;
        $this->power = $power;
    }
    
    
    
    /* 現在設定を表示 */
    function showStatus() {
        echo "======現在の設定======\n";
        echo "モード: $this->mode\n";
        echo "設定温度: $this->temperature\n";
        echo "風量: $this->power\n";
    }
}
?>