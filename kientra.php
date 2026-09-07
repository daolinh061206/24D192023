<?php echo "<h2>PHẦN 1: TRẮC NGHIỆM</h2>"; echo "1. C<br>"; echo "2. B<br>"; echo "3. A<br>"; echo "4. B<br>"; echo "5. B<br>"; ?> <hr>
<?php
echo"PHẦN 2: THỰC HÀNH";
echo"Bài 1: Viết một chương trình PHP để in ra số chẵn từ 1 đến 10.<br>";
for ($i = 0; $i <=10; $i++) 
{   
    if ($i %2== 0) echo $i."";
}
?>
<br>
<?php 
echo "Bài 2: Kiểm tra một số có phải số nguyên tố không";
$a= 16;
$isprime= true;
if ($a <2)
    {
        $isprime= false;
    }
else 
    { 
        for ($i = 2; $i<=sqrt($a); $i++)
            {
                if ($a % $i == 0) 
                    {
                        $isprime = false;
                        break;
                    }
            }
    }
if ($isprime)
    {
        echo "$a là số nguyên tố";
    }
    else
    {
        echo "$a không phải là số nguyên tố";
    }
?>
<br>
<?php
echo "Bài 3: Hình chữ nhật";
function HinhChuNhat($chieuRong, $chieuCao) 
{
    for ($i = 1; $i <= $chieuCao; $i++) 
        {
            for ($j = 1; $j <= $chieuRong; $j++)
                {
                echo "*";
                }
            echo "<br>";
        }
}
HinhChuNhat(5, 3);
?>    