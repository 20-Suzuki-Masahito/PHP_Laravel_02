<?php
$calendar_2018 =[
  "January" => "1月",
  "February" => "2月",
  "March" => "3月",
  "April" => "4月",
  "May" => "5月",
  "June" => "6月",
  "July" => "7月",
  "August" => "8月",
  "September" => "9月",
  "October" => "10月",
  "November" => "11月",
  "December" => "12月"
];

// 12月を表示する
echo $calendar_2018["December"];

//修正点まとめ
// 1.phpの開始宣言がなされてなかったので「<?php」を追加
// 2.「$2018_calendar」を「$calendar_2018」に修正（1文字目に数字が使用されている状況を修正）
// 3. 波カッコを角カッコに修正
// 4."2月"の後ろが「、（読点）」になっていたので「,（カンマ）」に修正
// 5.「"June" =」を「"June" =>」に修正
// 6.「10月」をダブルクオートで括るように修正
// 7.echo部分の「December」をダブルクオートで括るように修正
