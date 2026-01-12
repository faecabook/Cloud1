<?php
$images = [
  "https://pub-7830b832a28e48c8938699ae81a469ac.r2.dev/index1.gif",
  "https://pub-7830b832a28e48c8938699ae81a469ac.r2.dev/playxxxxxxxxx-1.gif"
];

$randomImage = $images[array_rand($images)];
?>
<!doctype html>
<html lang="th">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>ข่าวด่วนวันนี้ | อัปเดตล่าสุด</title>

<!-- Open Graph -->
<meta property="og:type" content="article">
<meta property="og:title" content="ข่าวด่วน เปิดข้อมูลล่าสุดที่หลายคนกำลังจับตา">
<meta property="og:description" content="มีรายงานความคืบหน้าล่าสุด เผยรายละเอียดที่สังคมกำลังพูดถึง">
<meta property="og:image" content="<?= $randomImage ?>?v=<?= time() ?>">
<meta property="og:image:width" content="1200">
<meta property="og:image:height" content="630">

<style>
body{
  font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", sans-serif;
  margin:0;
  background:#f4f6f8;
  color:#111;
}
.container{
  max-width:720px;
  margin:0 auto;
  background:#fff;
  padding:20px;
}
.headline{
  font-size:26px;
  font-weight:700;
  line-height:1.3;
  margin-bottom:10px;
}
.meta{
  font-size:14px;
  color:#666;
  margin-bottom:15px;
}
.news-img img{
  width:100%;
  height:auto;
  border-radius:6px;
  margin-bottom:15px;
}
.lead{
  font-size:18px;
  line-height:1.6;
  margin-bottom:15px;
}
.content{
  font-size:16px;
  line-height:1.7;
  color:#222;
}
</style>
</head>

<body>

<div class="container">

  <div class="headline">
    ข่าวด่วน เปิดข้อมูลล่าสุดที่หลายคนกำลังจับตา
  </div>

  <div class="meta">
    เผยแพร่: <?= date("d/m/Y H:i") ?> | แหล่งข่าวในพื้นที่
  </div>

  <div class="news-img">
    <img src="<?= $randomImage ?>" alt="ข่าวล่าสุด">
  </div>

  <div class="lead">
    มีรายงานความคืบหน้าล่าสุดเกี่ยวกับเหตุการณ์ที่กำลังถูกพูดถึงในขณะนี้
    โดยข้อมูลบางส่วนยังอยู่ระหว่างการตรวจสอบจากหลายหน่วยงานที่เกี่ยวข้อง
  </div>

  <div class="content">
    จากการติดตามสถานการณ์ พบว่ามีรายละเอียดใหม่ที่สังคมให้ความสนใจอย่างมาก
    ขณะที่ประชาชนจำนวนมากยังคงติดตามข่าวสารอย่างใกล้ชิด  
    ทั้งนี้ แหล่งข่าวระบุว่าความคืบหน้าเพิ่มเติมจะมีการรายงานอย่างเป็นทางการอีกครั้ง
    หากมีข้อมูลที่ชัดเจนมากขึ้น
  </div>

</div>

</body>
</html>
