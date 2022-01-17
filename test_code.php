<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>[อรรถพล สีชา]โปรแกรมเมอร์</title>
</head>
<body>
    <form method="post">
        <?php 
echo "1.  บริษัท Tesla ขายรถ Tesla มีรถจำนวนทั้งหมด 3 รุ่น (a,b,c) ในปีที่ผ่านมาขายไปได้ดังนี้ <br>
รุ่น a ขายได้  ";?>
        <input type="number" name="a" maxlength="2" style="width:60px;" /> <?php echo " คัน
<br>รุ่น b ขายได้  ";?>
        <input type="number" name="b" maxlength="2" style="width:60px;" /> <?php echo " คัน<br>
รุ่น c ขายได้  ";?>
        <input type="number" name="c" maxlength="2" style="width:60px;" /> <?php echo " คัน<br>
 	จงหาว่าปีที่ผ่านมาขายแต่ละรุ่นไปเป็นจำนวนกี่ % จากยอดขายรถทั้งหมด
";
?>
        <br>
        <input type="submit" name="sum" value="คำนวณ">
        <br>
    </form>
    <?php
if(isset($_POST['sum'])){
    $tesla[] = array(
        'a' => $_POST['a'],
        'b' =>  $_POST['b'],
        'c' => $_POST['c']);
}else{
    $tesla[] = array(
        'a' => '1200',
        'b' =>  '95',
        'c' => '115');
}
echo "รุ่น a\n".number_format($tesla[0]['a'])."คัน\n";
echo "<br>รุ่น b\n".number_format($tesla[0]['b'])."คัน\n";
echo "<br>รุ่น c \n".number_format($tesla[0]['c'])."คัน\n<br>";
$tesla_sum = $tesla[0]['a'] + $tesla[0]['b'] + $tesla[0]['c'];
echo "<br>วิธีทำ";
echo "<br/>รวม\n".number_format($tesla_sum)."\nคัน\n หาร 100 เพื่อหาค่าอัตราส่วนใน 1 % จะได้ = ".number_format($tesla_sum/100)."\nคันต่อ 1%<br>";
echo "<br>หมายความว่า รุ่น a ".number_format($tesla[0]['a'])." คัน ยอดขายอยู่ที่\n".number_format($tesla[0]['a']/($tesla_sum/100))."%คัน";
echo "<br>รุ่น b ".number_format($tesla[0]['b'])." คัน ยอดขายอยู่ที่\n".number_format($tesla[0]['b']/($tesla_sum/100))."%คัน";
echo "<br>และ รุ่น a ".number_format($tesla[0]['c'])." คัน ยอดขายอยู่ที่\n".number_format($tesla[0]['c']/($tesla_sum/100))."%คัน";
?>
<hr>
5. จงเขียนโปรแกรมเพื่อหาคำตอบของจำนวนบวกต่อเนื่องกันตั้งแต่ n ถึง m โดยโจทย์จะกำหนดตัวแปร n และ m มาให้<br>
ตัวอย่างเช่น<br>
 
n =1,m =5 คือการหาผลรวมของ 1, 2, 3, 4,5  ผลลัพธ์คือ 15 <br>
n=3, m=5 คือการหาผลรวมของ 3, 4,5  ผลลัพธ์เท่ากับ 12  จงเขียนโปรแกรมเพื่อหาผลลัพธ์ต่อไปนี้<br>
c.	n=1 		m =99<br>
d.	n = 446 	m = 779<br>
e.	n=3 		m=1,099<br>
f.	n=34		 m= 1,000,000<br>

    <form method="post">
        <input type="number" name="n"maxlength="2" style="width:100px;" placeholder="กรอกค่า n" required/ ><br>
        <input type="number" name="m"maxlength="2" style="width:100px;" placeholder="กรอกค่า m"  required /><br>
        <input type="submit" name="sum_2" value="คำนวณผลบวกอนุกรมเลขคณิต
">
    </form>
<?php 
    if(isset($_POST['sum_2'])){
     $n = $_POST['n'];
     $m = $_POST['m'];
        if($n > $m){
            echo "ผลลัพธ์คือ\n".number_format(($n+$m)*((($n-$m)+1)/2));
            
        }elseif($n < $m){
            echo "ผลลัพธ์คือ\n".number_format(($n+$m)*((($m-$n)+1)/2));
        }
        else{
            echo "ผลลัพธ์คือ\n".number_format($n);
        }
    }
?>

</body>

</html>