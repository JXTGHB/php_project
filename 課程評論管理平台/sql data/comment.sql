-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1:3306
-- 產生時間： 
-- 伺服器版本： 10.4.10-MariaDB
-- PHP 版本： 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `class_comment`
--

-- --------------------------------------------------------

--
-- 資料表結構 `comment`
--

DROP TABLE IF EXISTS `comment`;
CREATE TABLE IF NOT EXISTS `comment` (
  `cID` int(11) NOT NULL AUTO_INCREMENT,
  `classname` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `pressure` enum('die','halfdie','soso','easy','cool') CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `teacher` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `teach_way` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `final` enum('die','halfdie','soso','easy','cool') CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`cID`)
) ENGINE=MyISAM AUTO_INCREMENT=67 DEFAULT CHARSET=latin1;

--
-- 傾印資料表的資料 `comment`
--

INSERT INTO `comment` (`cID`, `classname`, `pressure`, `teacher`, `teach_way`, `final`) VALUES
(1, '程式設計二', 'die', '林基成', '老師的教學不太好，雖然教得很認真，但說的東西跟PPT上基本上不一樣，所以很難去連結內容，建議同學要自己認真看一下PPT。', 'halfdie'),
(2, '程式設計二', 'halfdie', '葉亦成', 'asdfasdf', 'soso'),
(3, '程式設計二', 'halfdie', '林基成', 'asdfsadf', 'soso'),
(4, '程式設計二', 'halfdie', '葉亦成', '你是狗', 'soso'),
(5, '程式設計二', 'soso', '林基成', '基哥教得真的很好，非常認真在教學的老師，投影片還會配合動畫來讓你看懂。', 'soso'),
(6, '電子電路', 'cool', '曾王道', '王道真的教得很好，上課還會講很多幹畫，可以適當放鬆心情', 'cool'),
(7, '演算法概論', 'easy', '張經略', '經略雖然幹話多多，但是教得其實很好，值得一修再修！', 'easy'),
(8, '程式設計二', 'halfdie', '陳柏豪', 'dasdasdasd', 'die'),
(10, '組合語言與計算機組織', 'halfdie', '陳昱祈', 'oh no, don\'t try to choose his class', 'die'),
(11, '程式設計二', 'cool', '陳柏豪', 'iuoiyiiuyiuyiu', 'cool'),
(13, '程式設計一', 'soso', '林基成', '如果你之前沒有程式的基礎，或是只有接觸一點點，那麼會建議你選基哥的課，以下會以上課方式和作業來做簡介：上課部份，每堂課教授會稍微提到上堂課結尾的部份，好讓大家進入狀況，而教授上課的進度是按照課本的章節來上，講解的部份算滿詳細的，因此有認真上課的話，將能吸收到很多知識，而需注意的是，沒有特殊原因的話，儘量不要翹課，因為老師對於每個章節都會講解的滿深入的，因此少聽一堂課就有可能漏掉許多東西。接著是作業部份，平均每兩週會有一個作業，也就是一學期約會有 9 ~ 10 個作業，作業內容都會跟教授上課的內容有關，教授也都會對作業內容做初步的講解，因此再次強調，別翹課呀~此外，作業一定要自己寫，千萬不可抄襲，系上會出作業的教授都一定是很重視作業的，千萬別抱著僥倖的心態，只要被抓到抄襲，那就一定是明年再來了，目前還沒聽過有例外的狀況。最後，不會就要去問，不管是問教授或是問同學，只要不懂，就去問，不要擔心自己問的問題很蠢，每個人都是從無到有的，你遇過的問題，別人也可能經歷過，只有互相討論，方能進步！', 'soso'),
(16, '程式設計一', 'halfdie', '葉亦成', '老師上課會寫出一個範例程式，作業就從上課的程式改進。 上課講的比較淺，需要課後多查資料或問大神。 通常一個禮拜一個作業，期中期末考中沒作業，這學期總共十個。 上機考除了期中和期末都有題庫，多練習就可以拿不錯的分數。', 'soso'),
(15, '程式設計二', 'halfdie', '林基成', '對於沒有程式設計基礎的人來說，我覺得老師的課可能會好點，好點的原因在於老師上課進度也不會說太快，每堂上課也通常的會講一下上堂上課的內容，作業的部分只要你有抓住老師問，我相信都會很樂意跟你回答\r\n此外，雖說吳昇老師的課步調稍微好點，但剛踏入這門我建議還是先把一些基本的指令搞清楚，第一、二次上課後的作業幾乎就都要用到了，因為老師前期不會很深入去講解每個基本指令的語法、使用方式，盡量都自己去看熟較好。\r\n另外不要翹課、作業盡量準時交、不會的問助教、老師、同學和學長姐都可以，寫程式唯有大家同心協力才能進步，絕對不要孤軍奮戰!', 'easy'),
(17, '演算法概論', 'halfdie', '林基成', '修課前請三思，會當人，分數不甜，沒時間就別想了，作業還超級多= =', 'die'),
(18, '程式設計一', 'cool', '葉亦成', '佛爆 輕鬆兩學期100', 'easy'),
(19, '程式設計一', 'soso', '林基成', '要記住，兇殘的不是老師 而是身後的助教們', 'easy'),
(20, '程式設計二', 'easy', '林基成', '主要內容大致上是字串處理、資料結構(linkedlist, binary search tree, hashing)、還有web，老師在資料結構的部分講的真的很好，認真聽可以先了解很多資結的知識，上機考試的話基本上都很簡單一下子就能寫完的那種，不過筆試就比較難了，出題範圍就是老師上課講的，所以要認真上。', 'soso'),
(21, '程式設計二', 'halfdie', '陳柏豪', '一週三到四題程式題目，一個學期7個project，簡單來說就是用題目砸死你，上課就是在提點大家這些題目需要哪些必要知識與方法，跟不上就真的死亡了，因為上機考的題目都是從平時的作業中出，完全一樣，無半點更動，與其搭配的實習課，其實多半是大家一起寫題目(作業)的時間。', 'soso'),
(22, '程式設計一', 'halfdie', 'aasa', 'sadsadasd', 'soso'),
(33, '數位系統概論', 'die', '陳勇志', '能不能求求老師高抬貴手放學生一馬 不要讓學生那麼焦慮可以嗎 不管正課還是實驗課，修這位老師的課都一樣焦慮到想撞牆', 'halfdie'),
(34, '數位系統概論', 'die', '陳勇志', '大家快點來!! 我需要有人陪葬', 'die'),
(35, '數位系統概論', 'halfdie', '陳勇志', '這門課號稱是系上最難過的課，每年有那麽多人被當，真的是因爲那麽多學生都不努力嗎？有沒有想過是老師的問題？ 笑死，老師還以當人率爲榮，這種老師還有良心嗎？之前修過其他老師的課，他們如果當人比較多都會自己難過反省，這種才是正常的老師吧？ 這門課就不能多請一個老師來開嗎？這位教授還曾經在班上洋洋得意地説，就算這學期被當或棄選，之後重修也還是只能選他的課，因爲系上這幾年都不會再請其他老師來開這門課？ 還好計算機組織還有另一位教授的課可以選，DD和實驗課學生大概就只能年復一年循環被折磨了。 老師不放學生一條活路，學生只能天天在家偷哭，真的是太可憐了。', 'die'),
(29, '機率與統計', 'halfdie', '蔡侑庭', '老師上課會有點嚴格，但講解得非常清楚。 會不定期點名，總共考三次考試(兩次期中一次期末)。 小考是不定期考，多熟練老師勾選的題目，就能拿高分。', 'halfdie'),
(30, '機率與統計', 'soso', '黃毅然', '老師上課有他的要求，所以上課品質很好，作業要把握，三次考試幾乎都從課本裡面出，熟練題目的話要高分並不困難，另外會不定時點名當昨額外加分。', 'easy'),
(31, '機率與統計', 'halfdie', '蔡侑庭', '授課速度稍快，稍微失神可以整堂課就都聽不懂了，作業有越出越難的趨勢，記得提醒老師要作業的答案，因為期中期末考會從作業跟例題裡面出(占60%)，考試中偏易，有把握好作業跟例題就可以拿到高分，因為連數字都不會改。', 'soso'),
(27, '程式設計二', 'halfdie', '陳柏豪', '教授比較偏向演算法以及程式競賽導向為教學目標，會講授這個程式題目應該以什麼方法解出，哪一種方法效率較佳，每週會有三到四題的程式題目要求同學回去作答並且上傳評判系統評判，教授幽默風趣，頗喜歡講資工人才聽得懂的笑話，上課會有錄影，沒聽清楚可以上網看，但是不建議因為這樣翹課，因為畫質頗差，看不到黑板寫啥，這門算是頗有挑戰的課程，歡迎有野心的同學挑戰！', 'halfdie'),
(28, '機率與統計', 'soso', '黃毅然', '三次考試(75%)，有作業跟小考(25%)，期末不調分，所以一開始皮要繃緊一點，前面的作業跟考試一定要好好把握，不然到學期末就會知道甚麼叫做絕望，因為老師不調分，上課一定要去，點名分數到最後很補，還滿常點名的，點一次加總分一分，老師上課無從挑剔，投影片做的很棒，考試的重點和準備方向會交代得很清楚，唯一要注意的就是老師只要一進教室，要馬上安靜，不然老師會生氣。', 'halfdie'),
(26, '程式設計二', 'die', '陳柏豪', '老師從開學到期末結束，幾乎每一周就這樣3題4題的指派題目，加上上課的解題分析，一個學期下來腦袋活絡許多! 能把基本的東西，經過一些巧思進而拿來解題目，真的很有成就感! 為了搶bonus，常常周四晚上都死守電腦前隨時準備解新一周的題目。學期的7個project每一個都很實用，畢竟一個project就是一個主題，每一次的project都讓我對C語言有著更深一層的認識，像說刻一個可以自己傳compare function 的 qsort，拿去丟題目還可以AC，就特別有成就感XD。雖然有時候會因為一個很白癡的bug搞7、8個小時，但是沒有摔過就不會知道痛，也不會知道以後要如何避免掉。為了這堂課的作業debug，已經不知道幾次燃燒青春到午夜啦!', 'halfdie'),
(36, '電子電路', 'die', '陳勇志', '如果你和誰有仇，建議他選這堂課就對了。', 'die'),
(37, '數位系統概論', 'halfdie', '陳勇志', '剛好是選課期間就順便來講講去年心得，個人認為老師講課教的中規中矩，要過這堂必修課有幾點要注意 第一勤作筆記是必須的，一來加深印象，二來方便課後複習，且老師給的pdf大多是概述較簡陋，沒做筆記上課又恍神之後複習會很困難，我推薦準備一本筆記本用來畫和寫老師板書的電路，同時準備一台筆電用來打字記錄整理老師口說的課程重要內容(打字速度較快，若覺得用寫字會更有效率也可全都紙本記錄無妨) 第二是考古題和小考題目弄熟，老師考出來的東西大多是他認為重要的，基本上題型就那幾類變來變去而已，寫熟考古題有助於面對陌生題型，多加熟悉考試時才能寫得出來。 其他的話就上課有不懂的或覺得講太快的記得發問，會得到更詳細的解釋，實驗課的作業內容要弄熟，考試會出現的大概就verilog部分，我這屆考出來的verilog大多是不會超出實驗課作業範圍，所以verilog覺得有障礙看是要自己看網路資料熟悉或纏助教問問題皆可，弄懂就對了。 基本上照這上面的做，我個人除了期末考沒準備好搞砸了之外orz，前面小考期中大多能維持前幾名的分數，僅供參考。 (題外話: 其實我覺得小考不難，因為變化性較小，但前提是要弄懂上課教的東西，然後細心點就行了，當然多做題目有利無害。話說我一直很好奇樓下下那個留言智障的到底是誰呀……)', 'soso'),
(38, '數位系統概論', 'soso', '陳勇志', '個人認為這堂課不難，如果認真聽課，將會發現老師不停的在為了班上大部分沒認真聽課而露出疑惑表情的同學們重複講解。 但是請注意，這堂不是能翹的課，翹一堂後面全掰，因為教授的投影片不是給你讀的，你應該在他上課時做筆記（通常他都會說哪邊會考） 某些天生神力的大大們這邊可以忽略 小考很難，就算你完全懂了上課所教的，沒辦法做到變通就是輕鬆拿20~40，還是那種送分題（考過的），當然考古題很重要就是了，請用盡所有辦法去生出來。 我小考都在80~100間，沒寫考古題，方法很簡單就是想辦法教你身旁那些不讀書的智障，為啥說人家智障？ 因為這堂不讀書你肯定明年再來啊 藉由教導各種智障之後，會對所學更熟稔，進而發現老師出題真的很佛，可以激發大家腦袋進而避免常說的填鴨式教學。', 'soso'),
(39, '數位系統概論', 'halfdie', '陳勇志', '很奇妙的一堂課 不認真讀一定死，認真讀有很高機率死 不想死請翻閱考古題，考古題看老師心情提供 上課當下能聽得懂又跟得上的人不是學霸就是天生神力\r\n小考若沒考古題，能考個40分左右就是高手，屌打六七成的人 有時候小考完，老師會在臉書社團上開群體嘲諷 反正要修的人也逃不掉 如果你跟我一樣是邊緣人，要不到考古題 那就自求多福吧', 'soso'),
(40, '數位系統概論', 'die', '陳勇志', '上課一定要認真聽 只看PPT絕對看不懂(絕對!) 他的PPT根本是給自己看得 然後 考試基本上也跟PPT沒關係 要念考古題 或是他上課說過會考的(一定會考) 期中 期末幾乎都考verilog 但是他上課幾乎都沒教....', 'die'),
(41, '資訊概論', 'soso', '賴國華', '系主任課真的上的很好然後很認真每教完一個章節就會有教學活動那就是考驗你對這章節熟不熟的時候到了不過教學活動蠻吃隊友的隊友強 你們分數會很高相對的 隊友不CARRY你們分數就低還有作業認真做 你就會發現在期末考前分數就破60了', 'easy'),
(42, '資訊概論', 'easy', '賴國華', '推認真的系主任，系主任上課講話有條有理，講解有方，其實有認真聽一定會聽懂，另外經過幾堂正課會有教學活動，就是一堂助教帶領課堂活動的一堂課，很多教學活動都非常有意思，能夠讓我們熟練一些必要技能，另外學期末會有一項報告，分組後尋找近代科技的發展，然後將他理解後上台報告，其實這項報告非常有趣，可以讓你知道目前世界上正在崛起的新科技，段考時課本讀熟並理解要拿高分其實並不困難，在點名上面頗重視，一次沒到分數會扣非常的重，課後作業必須要寫。', 'soso'),
(43, '資訊概論', 'soso', '賴國華', '安安向來重點名，任何他的課沒點到都是扣15分，簡單來講你沒點到3次保證你不會過。相對補課點名是加分(1~5分不等)。作業為最易得分管道，拿的好你期末考前可能已經過了。', 'soso'),
(44, '資訊概論', 'soso', '賴國華', '高中的課程對於電腦內部的介紹實在是極其簡陋，但是靠著自己平時沒事讀的網路科技報導，陸陸續續吸收到的新知也不少。透過這門課，剛剛好做個全盤的統整。這門課是系主任上的，他超級認真! 對於資訊概論，雖然每個禮拜都只有短短的兩小時可以講課，但是它帶給我們對電腦的架構的基本認識卻是非常扎實的。他的講解總是非常的切中要點，也搭配許多實例來輔助，讓理論具體化。教學活動算是滿吃隊友的，但是我覺得也是一種不錯的方法，逼迫大家一定要跟上教學進度，也多認識同學。', 'easy'),
(45, '離散數學', 'halfdie', '許大偉', '課偏硬 比較難理解 比較適合資工系修', 'halfdie'),
(46, '離散數學', 'easy', '許大偉', '涼課，作業量很少，老師講的也不差，考試也不會太難。 跟三年前的評論差很多，感覺過了幾個學期老師改進了很多', 'cool'),
(47, '離散數學', 'halfdie', '許大偉', '作業一大堆，每堂課必小考。上課很厲害，可以照投影片一字不漏念下去，老師一定懂只是不善於怎麼講而已XDD', 'halfdie'),
(48, '資料通訊概論', 'soso', '黃依賢', '老師教得還不錯，如果不想聽課也能自己讀 常點名，會傳簽到單 作業不難，能輕鬆拿100 考試偏簡單，只要看過幾遍投影片就穩了', 'easy'),
(49, '資料通訊概論', 'easy', '黃依賢', '老師很認真地講授，有缺課也會以影片方式補課 就如同課程名稱，課程內容詳細度是概論的等級 所以如果要更深入了解可能要自己研讀或者修其他門課 但對於網路領域不熟的是一門入學的課程', 'easy'),
(50, '資料結構', 'halfdie', '林基成', '四個作業，兩次大考(期中期末)，點名加分，作業負載很重，如果C不穩會很痛苦，老師有時候上課會比較快，不敢舉手講就用slido跟老師講一下，老師就會上更快，最經典的就是老師的冷笑話，全部都是廢到笑，算是上課的精神糧食(吧)，以下提供參考，我四個作業繳了三個，平均拿80，兩次考試平均65，期末有ITSA加分，最後總分80，結論，喜歡被用C虐待的同學，可以選來玩看看。', 'halfdie'),
(51, '資料結構', 'easy', '劉如生', '完整地從頭教起，不用怕銜接問題(C語言學的亂七八糟除外 老師人很好，雖然不調分，但是得分與加分管道很多。 不過預警標準很怪就是了...... 作業很重要，考試算平易近人。', 'easy'),
(52, '線性代數', 'soso', '林啟芳', '老師的課為投影片教導，但我個人認為步調算是有點快的，上課切換投影片有時候 眼睛要跟好，有時候轉換的太快會有點反應不過來； 老師人很好，沒有作業，偶爾點名，但考試成績占很重； 此外，上課會參雜一些英文，如果沒有用心聽講有時候會一恍神就有點接連不上了； 要避免這種情況最好就是先預習下往後章節專有名詞的念法，否則教授在台上講你在台下查字典真的有可能跟不太上。', 'soso'),
(53, '線性代數', 'soso', '林啟芳', '教授教得不錯雖然他教的可能有點慢但卻讓人很好理解還有不定時的叫人上台解題當點名一學期大約點3~5次考試題目不會太難 不過課本勾的習題要做小考題目都是直接拿習題來改或完全一樣', 'easy'),
(54, '作業系統概論', 'soso', '葉亦成', '老師上課很認真，備課備得很用心，投影片做得很棒很有份量，上課不點名，四次作業，兩次大考（期中期末），沒有小考，作業稍有難度（若有同學靠，作業到底哪裡難笑死），考試滿難的，期末會調分，然後老師笑起來很可愛，推。', 'soso'),
(55, '作業系統概論', 'soso', '葉亦成', '老師上課認真，教學影片會放在youtube上，上課基本上跟著恐龍本走，作業有4個，主要是改一些Linux的Source code ，都不會很難，評分就期中期末各35%，作業30%，考試有點難，不過若熟讀恐龍本+認真重複聽老師的影片應該還是可以拿高分的', 'easy'),
(56, '資料庫系統', 'easy', '劉興民', '老師幽默有趣，時常講一些生動的例子、故事給大家，幫助理解，聽他的課很輕鬆，又能學到很多東西。 老師是重視概念、思考的人，上課會著重釐清概念。作業偏難，同樣也大多都要思考許久。 基本上老師的原則是，考試就由老師親自監考並親自閱卷，作業則由助教負責。 但老師有點固執，因為老師是重視概念的人，老師在考試的時候喜歡出題考概念，甚至會故意出現陷阱題，確保你的概念是清晰的。 但問題出在於，有時候題目不是那麼容易出，當老師刻意要考概念、細節，但又不願意透露太多細節，以免把答案暴露時，就造成題目模稜兩可（甚至題目其實沒有模稜兩可，但老師自己對題目的理解不同）。 最後檢討考卷時，老師無法接受學生理解的題意與老師不同，即便對學生說的理由覺得合理，也只是覺得學生沒有理解題目給訂的條件，最後只是說句「很可惜」、「很抱歉」等。 （此事在我修老師的另一堂課時也有發生，檢討期中考卷後的下課都會有學生去找老師辯論 ） 這堂課完全可以輕鬆地聽，可以聽得很快樂又學到東西，但至於是否修這堂課，希望看完後各位能有心理準備。', 'easy'),
(57, '資料庫系統', 'soso', '劉興民', '老師不但是國外畢業的博士，還有多年國外工作經驗。所以上課的形式偏歐美的學校。上課的風格，會大大有別於其他中正的的老師。如果中正其他課以實作為主。這門課會是概念和實作並重，作業量不會很大，而且作業的針對性很好，讓你剛好地學到要學的重點，十分考慮學生。老師會把概念理清，會說明哪些重點，所以真的會學到老師那一套工程師思維，考慮每個query需要的成本，而不只是單純熟於sql語法，你會學到很多比細節更重要的觀念。這門課很適合準備到歐美讀研究所、工作的同學，也適合以後到外商工作的同學。 至於考試，可能需要你足夠的理解，才能答對。不是你理解了就能答對，你還要理解對。所以老師是十分重你懂不懂，而不是單純背書，考sql語法。這門課需要思考，需要理解。總括而言，老師真的很用心地去教，老師的口才和表達能力一級棒！想輕鬆過，還是想學到很多，都可以來修這門課。單純聽課，你也會感受到老師的有趣～ 另外，興民老師的另一門課也很棒。', 'easy'),
(58, '組合語言與計算機組織', 'soso', '陳昱祈', '作業很重要，期中期末佔總分比例不高，所以隨便準備就好。', 'easy'),
(59, '組合語言與計算機組織', 'soso', '陳昱祈', '作業很重要，code寫完但是README沒有寫得很詳細，分數會很難看。 不定期點名，期中期末看考古題就穩了，挺容易的。 作業一定要寫!!', 'soso'),
(63, '資料結構', 'halfdie', '陳增益', '教得不好，英語授課不太好懂', 'halfdie');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
