<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test/{name}/{surname}', function ($name, $surname) {
    return "Assalomu alaykum" . "<br> My name is $name" . "<br> My surname is $surname";
});

Route::get('/A', function () {
    return 'Azizbek Jo\'rayev';
});
Route::get('/Sh', function () {
    return 'Shohrux Holiqulov';
});

Route::redirect('Sh', 'A');




// Route::group(['prtefix' => 'boss/',function(){

//     Route::get('/about', function () {
//         return view('boss.about');
//     })->name('boss.about');

//     Route::get('/service', function () {
//         return view('boss.service');
//     })->name('boss.service');

// }]);





// Route::get('/client/about', function () {
//     return view('client.about');
// })->name('client.about');

// Route::get('/client/service', function () {
//     return view('client.service');
// })->name('client.service');



Route::get('/index', function () {
    return view('index');
});


Route::prefix('admin')->name('admin.')->group(function () {

    Route::get('/admin1', function () {
        return view('admin.admin1');
    })->name('index1');

    Route::view('/admin2', 'admin.admin2')->name('index2');

    Route::get('/admin3', function () {
        return view('admin.admin3');
    })->name('index3');

    Route::view('/admin4', 'admin.admin4')->name('index4');

    Route::get('/admin5', function () {
        return view('admin.admin5');
    })->name('index5');

    Route::view('/admin6', 'admin.admin6')->name('index6');

    Route::get('/admin7', function () {
        return view('admin.admin7');
    })->name('index7');

    Route::view('/admin8', 'admin.admin8')->name('index8');

    Route::get('/admin9', function () {
        return view('admin.admin9');
    })->name('index9');

    Route::view('/admin10', 'admin.admin10')->name('index10');
});






Route::prefix('boss')->name('boss.')->group(function () {

    Route::get('/boss1', function () {
        return view('boss.boss1');
    })->name('index1');

    Route::view('/boss2', 'boss.boss2')->name('index2');

    Route::get('/boss3', function () {
        return view('boss.boss3');
    })->name('index3');

    Route::view('/boss4', 'boss.boss4')->name('index4');

    Route::get('/boss5', function () {
        return view('boss.boss5');
    })->name('index5');

    Route::view('/boss6', 'boss.boss6')->name('index6');

    Route::get('/boss7', function () {
        return view('boss.boss7');
    })->name('index7');

    Route::view('/boss8', 'boss.boss8')->name('index8');

    Route::get('/boss9', function () {
        return view('boss.boss9');
    })->name('index9');

    Route::view('/boss10', 'boss.boss10')->name('index10');
});




Route::prefix('client')->name('client.')->group(function () {

    Route::get('/client1', function () {
        return view('client.client1');
    })->name('index1');

    Route::view('/client2', 'client.client2')->name('index2');

    Route::get('/client3', function () {
        return view('client.client3');
    })->name('index3');

    Route::view('/client4', 'client.client4')->name('index4');

    Route::get('/client5', function () {
        return view('client.client5');
    })->name('index5');

    Route::view('/client6', 'client.client6')->name('index6');

    Route::get('/client7', function () {
        return view('client.client7');
    })->name('index7');

    Route::view('/client8', 'client.client8')->name('index8');

    Route::get('/client9', function () {
        return view('client.client9');
    })->name('index9');

    Route::view('/client10', 'client.client10')->name('index10');
});





















////////////////////////INTEGERS 1////////////

Route::get('/int1/{L}', function ($l) {
    $x = floor($l / 100);
    return 'Berilgan uzunlik ' . $x . ' metr.';
});



////////////////////////INTEGERS 2////////////

Route::get('/int2/{k}', function ($k) {
    $y = floor($k / 1000);
    return 'Berilgan og\'irlik ' . $y . ' tonna';
});



////////////////////////INTEGERS 3////////////

Route::get('/int3/{b}', function ($b) {
    $c = floor($b / 1024);
    return 'Faylning hajmi ' . $c . ' kilobayt';
});


////////////////////////INTEGERS 4////////////

Route::get('/int4/{a}/{b}', function ($a, $b) {
    $r = floor($a / $b);
    return "B kesmani A kesmaga " . $r . " marta joylashtirish mumkin.";
});


////////////////////////INTEGERS 5////////////

Route::get('/int5/{x}/{y}', function ($x, $y) {
    $q = $x % $y;
    return "A kesmada B kesmani joylashtirganimizda " . $q . " joy oshib qoladi.";
});


////////////////////////INTEGERS 6////////////

Route::get('/int6/{n}', function ($n) {
    $bir = floor($n / 10);
    $on = $n % 10;

    return "O'nliklar: " . $bir . "<br>" . "Birliklar: " . $on;
});


////////////////////////INTEGERS 7////////////

Route::get('/int7/{m}', function ($m) {
    $x = floor($m / 10);
    $y = $m % 10;
    $sum = $x + $y;
    return "Raqamlar yig'indisi: " . $sum;
});


////////////////////////INTEGERS 8////////////

Route::get('/int8/{k}', function ($k) {
    $q = floor($k / 10);
    $p = $k % 10;

    $stakan = $q;
    $q = $p;
    $p = $stakan;


    return "Xosil bo'lgan son: " . $q . $stakan;
});


////////////////////////INTEGERS 9////////////

Route::get('/int9/{t}', function ($t) {
    $hun = floor($t / 100);

    return "Berilgan sonning yuzlar xonasi: " . $hun;
});


////////////////////////INTEGERS 10////////////

Route::get('/int10/{j}', function ($j) {
    $bir = $j % 10;

    $on = ($j % 100);
    $on1 = floor($on / 10);

    return "Birliklar: " . $bir . "<br>" . "O'nliklar: " . $on1;
});



////////////////////////IF 1////////////

Route::get('/if1/{w}', function ($w) {
    if ($w > 0) {
        $w += 1;
        return "Berilgan son musbat:" . $w;
    } else
        return "Berilgan son manfiy:" . $w;
});


////////////////////////IF 2////////////

Route::get('/if2/{u}', function ($u) {
    if ($u > 0) {
        $u += 1;
        return "Berilgan son musbat:" . $u;
    } else
        return "Berilgan son manfiy:" . $u -= 2;
});


////////////////////////IF 3////////////

Route::get('/if3/{h}', function ($h) {
    if ($h > 0) {
        $h += 1;
        return "Berilgan son musbat:" . $h;
    } elseif ($h < 0) {
        return "Berilgan son manfiy:" . $h -= 2;
    } else
        return "Berilgan son nolga teng:" . $h = 10;
});


////////////////////////IF 4////////////

Route::get('/if4/{a}/{b}/{c}', function ($a, $b, $c) {
    $counter = 0;

    if ($a > 0) {
        $counter += 1;
    }

    if ($b > 0) {
        $counter += 1;
    }

    if ($c > 0) {
        $counter += 1;
    }

    if ($a <= 0 & $b <= 0 & $c <= 0) {
        return "Hamma sonlar manfiy";
    }

    return "Berilgan sonlarda " . $counter . " ta musbat son bor";
});


////////////////////////IF 5////////////

Route::get('/if5/{x}/{y}/{z}', function ($x, $y, $z) {
    $pcounter = 0;
    $mcounter = 0;

    if ($x > 0) {
        $pcounter += 1;
    } else $mcounter += 1;


    if ($y > 0) {
        $pcounter += 1;
    } else $mcounter += 1;


    if ($z > 0) {
        $pcounter += 1;
    } else $mcounter += 1;

    return "Berilgan sonlarda " . $pcounter . " ta musbat son bor" . "<br>" . "Berilgan sonlarda " . $mcounter . " ta manfiy son bor";
});


////////////////////////IF 6////////////

Route::get('/if6/{x}/{y}', function ($x, $y) {
    $max = 0;

    if ($x > $y) {
        $max = $x;
    } else $max = $y;

    return "Katta son: " . $max;
});


////////////////////////IF 7////////////

Route::get('/if7/{s}/{d}', function ($s, $d) {
    $order = 0;
    $min = 0;

    if ($s > $d) {
        $min = $d;
        $order = 2;
    } else   $min = $s;
    $order = 1;

    return "Kichik son: " . $min . "<br>" . "Uning tartib raqami esa: " . $order;
});


////////////////////////IF 8////////////

Route::get('/if8/{g}/{h}', function ($g, $h) {
    $max = 0;
    $min = 0;

    if ($g > $h) {
        $max = $g;
        $min = $h;
    } elseif ($g < $h) {
        $min = $g;
        $max = $h;
    } else
        return "Sonlar o'zaro teng";


    return "Katta son: " . $max . "<br>" . "Kichik son esa: " . $min;
});


////////////////////////IF 9////////////

Route::get('/if9/{a}/{b}', function ($a, $b) {
    $a = $a - $b;
    $b = $a + $b;

    return "A: " . $a . "<br>" . "B: " . $b;
});


////////////////////////IF 10////////////

Route::get('/if10/{v}/{b}', function ($v, $b) {

    $sum = $v + $b;
    if ($v != $b) {
        $v = $sum;
        $b = $sum;
    } else {
        $v = 0;
        $b = 0;
    }

    return "A: " . $v . "<br>" . "B: " . $b;
});
