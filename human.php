<html>
    <head>
        <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    </head> 
    <?php
    include("/humanclass.php");
    include("/connectDB_1.php");
    ?>
    <body>
        <?php
        $somsak = new human();
        $somsak->name = 'Somsak';
        $somsak->sex = '2';
        $somsak->height = '1';
        $somsak->weight = 65;
        $somsak->age = 28;
        echo 'Name : ' . $somsak->showName() . '';
        echo 'Sex : ' . $somsak->showSex() . '';
        echo 'Height : ' . $somsak->showHeight() . '';
        echo 'Weight : ' . $somsak->showWeight() . '';
        echo 'Age : ' . $somsak->showAge() . '';
        echo '--------------------------------------<br>';
        echo ($somsak->showprovice()).'<br>';
         echo '--------------------------------------<br>';
        $kanjana = new women();
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
        echo '--------------------------------------<br>';
        $men = new men();
        $men->name ='men2';
        $men->sex = 2;
        $men->height = 200;
        $men->weight = 65;
        $men->age = 28;
        echo 'Name : ' . $men->showName() . '';
        echo 'Sex : ' . $men->showSex() . '';
        echo 'Height : ' . $men->showHeight() . '';
        echo 'Weight : ' . $men->showWeight() . '';
        echo 'Age : ' . $men->showAge() . '';
        echo '--------------------------------------';
        ?>
        
    </body>
</html>
