<html>
    <head>
        <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    </head> 
    <?php
    include("/humanclass.php");
    ?>
    <body>
        <?php
        $somsak = new human();
        $somsak->name = 'Somsak';
        $somsak->sex = '1';
        $somsak->height = '1';
        $somsak->weight = 65;
        $somsak->age = 28;
        echo 'Name : ' . $somsak->showName() . '';
        echo 'Sex : ' . $somsak->showSex() . '';
        echo 'Height : ' . $somsak->showHeight() . '';
        echo 'Weight : ' . $somsak->showWeight() . '';
        echo 'Age : ' . $somsak->showAge() . '';
        echo '--------------------------------------<br>';
        $kanjana = new human();
        $kanjana->name ='Kanjana';
        $kanjana->sex = 2;
        $kanjana->height = 158;
        $kanjana->weight = 65;
        $kanjana->age = 28;
        echo 'Name : ' . $kanjana->showName() . '';
        echo 'Sex : ' . $kanjana->showSex() . '';
        echo 'Height : ' . $kanjana->showHeight() . '';
        echo 'Weight : ' . $kanjana->showWeight() . '';
        echo 'Age : ' . $kanjana->showAge() . '';
        echo '--------------------------------------';
        ?>
    </body>
</html>
