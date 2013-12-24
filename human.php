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
        echo '--------------------------------------';
        ?>
    </body>
</html>
