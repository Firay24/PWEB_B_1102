<!DOCTYPE html>
<html lang="='en">
<head>
    <title>Dasar PHP</title>
</head>
<body>
    <?php for($i = 0; $i < 5; $i++):?>
        <?php if($i % 2 == 0): ?>
            <h2>Hello World</h2>
        <?php else: ?>
            <h1>hello</h1>
        <?php endif; ?>
    <?php endfor; ?>
    <?php
        echo 'fira';
        $contoh_str = 'hlsk'; // variabel ditambah tanda $
        $contoh_int = 1;
        $contoh_double =1.1;
    ?>
    <?php
        $str_satu = 'pemograman';
        $str_dua = 'website';

        echo $str_satu . $str_dua;
    ?>
    <?php
        $myarray = ['pemograman', 'PWEB'];
        var_dump($myarray);
    ?>
    <?php
        foreach($myarray as $value) {
            echo $value . " ";
        }
        // for($i = 0; $i < cont($myarray); $i)
    ?>
</body>




</html>
