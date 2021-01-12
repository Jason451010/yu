- phpMyAdmin的SQL轉儲
-版本5.0.2
- https://www.phpmyadmin.net/
-
-主機：127.0.0.1
-產生時間：2020-10-19 21:01:14
-伺服器版本：10.4.14-MariaDB
- PHP版本：33年7月2日

SET SQL_MODE =  “ NO_AUTO_VALUE_ON_ZERO ” ;
開始交易;
SET time_zone =  “ +00：00 ” ;


/ *！40101 SET @OLD_CHARACTER_SET_CLIENT = @@ CHARACTER_SET_CLIENT * / ;
/ *！40101 SET @OLD_CHARACTER_SET_RESULTS = @@ CHARACTER_SET_RESULTS * / ;
/ *！40101 SET @OLD_COLLATION_CONNECTION = @@ COLLATION_CONNECTION * / ;
/ *！40101設置名稱utf8mb4 * / ;

-
-資料庫：`mydb`
-
CREATE  DATABASE  IF NOT EXISTS ` MYDB ` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
使用` MYDB ` ;

- ------------------------------------------------ --------

-
-資料表結構`bulletin`
-

DROP  TABLE IF EXISTS `公告` ;
創建 表`公告`（
  `投標`  BIGINT（ 20） NOT NULL，
  `型`  INT（ 11） NOT NULL COMMENT '（1）系上公告（2）獲獎資訊（3）徵才資訊“，
  `標題`  VARCHAR（ 200） NOT NULL，
  `內容`  VARCHAR（ 2000） NOT NULL，
  `時間` 日期 NOT NULL
）引擎= InnoDB默認字符集= utf8mb4;

-
-資料表新增資料前，先清除舊資料`bulletin`
-

TRUNCATE TABLE `公告` ;
-
-傾印資料表的資料`bulletin`
-

將值插入 “公告”（“出價”，“類型”，“標題”，“內容”，“時間”）值
（1，3，'智邦科技誠徵MIS程式設計師'，'智邦科技誠徵MIS程式設計師\ r \ n詳見https://www.104.com.tw/job/?jobno=5ezee&jo。 .. '，' 2020-10-01 '），
（2，1，'請日四技二年級同學於10/9前繳交專題指導同意書'，'請於10/9（五）前交到管217賴彥如老師辦公室或211賴彥如老師信箱專題指導同意書檔案如附件”，“ 2020-10-05 ”），
（3，2，'明新資管榮獲全國科大程式設計競賽金獎'，'明新科大資管系學生黃伃辰，葉冠暉與彭宥學，日前參加「全國科技大專校院程式設計競賽」榮獲金獎，也是唯一獲獎私立科大，展現訓練成果與實力。'，'二○二○年十月二十○日'），
（4，1，' 109-1學生申請“108-2品學兼優”獎學金相關事項'，' 109/9/25前資料請放至鄭姍姍老師信箱\ r \ n \ r \ n *名額：2名\ r \ n \ r \ n＊符合清單：加密發送\ r \ n \ r \ n＊申請資格：\ r \ n \ r \ n    學期成績平均達85分以上\ r \ n \ r \ n    所習學科學分中無不及格科目\ r \ n \ r \ n    體育，軍訓成績75分以上（無體育，軍訓成績除外）\ r \ n \ r \ n    校外實習教育者，學海惜珠，學海飛揚或教育部補助之獎學金者，不列入申請資格。\ r \ n \ r \ n *相關表格：評量表，師長推薦表，學生自述表，同'，' 2020- 10-21 '），
（5，1，' 109-1學生證照獎勵線上申請，即日起至10/30前輸入截止'，'【明新首頁-線上服務-學生專區-學生證照及畢業門檻審核系統的http：// muststdsystem .must.edu.tw /】\ r \ n系統操作手冊詳附件。\ r \ n 109-1證照獎勵金申請，以證照生效日落在【民109（2020）/ 2/1〜109民（2020 ）/ 7/31】期間的證照主體，申請時限自即日起至109/9/30繼續申請。\ r \ n無法進入系統者及新生，需先進入學生服務系統申請帳號密碼https：// sss.must.edu.tw/ \ r \ n '，' 2020-10-22 '）;

- ------------------------------------------------ --------

-
-資料表結構`user`
-

DROP  TABLE IF EXISTS `用戶` ;
創建 表`用戶`（
  ` ID `  VARCHAR（ 50）COLLATE utf8_unicode_ci NOT NULL，
  ` PWD `  VARCHAR（ 50）COLLATE utf8_unicode_ci NOT NULL
）引擎= MyISAM默認字符集= utf8集合= utf8_unicode_ci;

-
-資料表新增資料前，先清除舊資料`用戶`
-

TRUNCATE TABLE `用戶` ;
-
-傾印資料表的資料`用戶`
-

INSERT INTO  `用戶`（`編號`，` PWD `）VALUES
（' john '，' john1234 '），
（' mary '，' mary1234 '）;

-
-已傾印資料表的索引
-

-
-資料表索引`bulletin`
-
更改 表 `公告`
  ADD PRIMARY KEY（`投標`）;

-
-在傾印的資料表使用自動遞增（AUTO_INCREMENT）
-

-
-使用資料表自動遞增（AUTO_INCREMENT）`bulletin`
-
更改 表 `公告`
  MODIFY `出價`  BIGINT（20）NOT NULL AUTO_INCREMENT，AUTO_INCREMENT = 6 ;
提交;

/ *！40101 SET CHARACTER_SET_CLIENT = @ OLD_CHARACTER_SET_CLIENT * / ;
/ *！40101 SET CHARACTER_SET_RESULTS = @ OLD_CHARACTER_SET_RESULTS * / ;
/ *！40101 SET COLLATION_CONNECTION = @ OLD_COLLATION_CONNECTION * / ;
