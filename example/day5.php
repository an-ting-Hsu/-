<?php
$hero_name          // 角色的名稱
$hero_stats_hp      // 角色生命力數值
$hero_stats_mp      // 角色法力數值
$hero_stats_atk     // 角色攻擊力數值
$hero_stats_def     // 角色防禦力數值
$hero_skill_1       // 角色第一招技能
$hero_skill_2       // 角色第二招技能
$hero_skill_3       // 角色第三招技能
$hero_skill_4       // 角色第四招技能
$hero_article       // 角色玩法文章
class Hero {
    public $name;          // 角色的名稱
    public $stats_hp;      // 角色生命力數值
    public $stats_mp;      // 角色法力數值
    public $stats_atk;     // 角色攻擊力數值
    public $stats_def;     // 角色防禦力數值
    public $skill_1;       // 角色第一招技能
    public $skill_2;       // 角色第二招技能
    public $skill_3;       // 角色第三招技能
    public $skill_4;       // 角色第四招技能
    public $article;       // 角色玩法文章
    calss=物件
    public 是指外部可以直接透過 -> 這個語法取用
    $heroBox = new Hero();
// 這行的意思是我要把『英雄』依照『class 說明書』，
// 組裝起來成為『object 物件』放到變數 $heroBox 裡面
$heroBox->name = "Valhein"; // 設定角色名稱為 凡恩
$heroBox->stats_hp = 100;   // 設定生命力數值為 100
$heroBox->stats_mp = 80;    // 設定法力數值為 80
$heroBox->stats_akt = 40;   // 設定攻擊力數值為 40
$heroBox->stats_def = 20;   // 設定防禦力數值為 20
// 這幾行的意思都是把 資料塞到 這個物件裡面
//... 下略
這個變數 $heroBox 可以任意改名字因為他只是個箱子 可以改叫 $hero 或 $box 都可以
後方的 new Hero(); 就不能亂改了， new 是把『說明書』組裝成『物件』的語法 Hero 是剛剛的 class
$heroBox->name 這邊有個 -> 意思是『指向』這個『物件』肚子裡面的變數 name 的意思
順帶一題，如果改變數名字把 heroBox 改 hero，使用起來會像下面例子：
$hero = new Hero();
$hero->name = "Valhein"; // 設定角色名稱為 凡恩
$hero->stats_hp = 100;   // 設定生命力數值為 100
$hero->stats_mp = 80;    // 設定法力數值為 80
$hero->stats_akt = 40;   // 設定攻擊力數值為 40
$hero->stats_def = 20;   // 設定防禦力數值為 20
$hero->skill_1;       // 角色第一招技能
$hero->skill_2;       // 角色第二招技能
$hero->skill_3;       // 角色第三招技能
$hero->skill_4;       // 角色第四招技能
$hero->article;       // 角色玩法文章
再進階一點，我們也看到很多的 stats 跟 skill 這個可不可以也抓出來呢？
沒錯！為了同一個目標，這樣設計是可以的：設計圖內是可以再放設計圖。

首先我們要另外開一個新的 stats 設計圖(class 類別），並加到 hero 裡面
	class Stats {
   public $hp;  // 生命值
   public $mp;  // 法力值
   public $atk; // 攻擊力
   public $def; // 防禦力
   public function __construct($sourceHp, $sourceMp,$sourceAtk, $sourceDef){
        $this->hp = $sourceHp; // 組裝時，把 生命力數值 傳進物件內
        $this->mp = $sourceMp; // 組裝時，把 法力數值 傳進物件內
        $this->atk = $sourceAtk; // 組裝時，把 攻擊力數值 傳進物件內
        $this->def = $sourceDef; // 組裝時，把 防禦力數值 傳進物件內
   }
}
class Skill {
   public $name;        // 技能名稱
   public $description; // 技能描述
   function __construct($sourceName, $sourceDescription){
        $this->name = $sourceName;
        $this->description = $sourceDescription;
   }
}
class Hero {
   public $name;    // 預備裝 角色名稱字串變數
   public $stats;   // 準備裝『數值物件』的變數
   public $skills;  // 準備裝『技能物件』的陣列變數
   public $article; // 預備來裝 教學文章 變數
   function __construct($sourceName, $sourceStats, $sourceSkills, $sourceArticle){
        $this->name = $sourceName;
        $this->stats = $sourceStats;
        $this->skills = $sourceSkills;
        $this->article = $sourceArticle;
   }
}
// 使用的方法是這樣
$sourceStats = new Stats(100, 80, 40, 20);
$sourceSkills[] = new Skill("獵手","...說明略...");
$sourceSkills[] = new Skill("血腥獵殺","...說明略...");
$sourceSkills[] = new Skill("送葬詛咒","...說明略...");
$sourceSkills[] = new Skill("水銀彈幕","...說明略...");
$sourceArticle = "文章略";
$hero = new Hero("凡恩",$sourceStats, $sourceSkills, $sourceArticle);
// 這樣就得到 一隻凡恩英雄物件(object)了，
// 亦可以這樣取出資料
echo $hero->stats->hp."\n";
echo $hero->stats->atk."\n";
echo $hero->skills[0]->name."\n";
echo $hero->article."\n";
解釋一下新的東西 下面這行叫做『建構子』、或『建構式』
function __construct( /*這裏放傳進來的資料*/ ) {
   // 這裏放要執行的事情
	它是在組裝 class 說明書類別成為 object 物件時，必須先執行的事情
這行 $this->name = $sourceName; 意思是把 new Hero("這裏的字串"); 轉存到物件內
因為，物件內是不能直接使用外面變數的，內外不共通，一定要透過這個 -> 語法才能變更
?>

