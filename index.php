  <script>
    function getLinkJSONpt2() {
        var a,b,c;
        a = document.getElementById("inputa").value;
        b = document.getElementById("inputb").value;
        c = document.getElementById("inputc").value;
        window.open("api.php/ktrptbac2/"+a+"/"+b+"/"+c);
    }
    function getLinkJSONyear() {
        var a;
        a = document.getElementById("inputyear").value;
        window.open("api.php/ktrnamnhuan/"+a);
    }
    function getData()
    {
        document.getElementById("txt_apijsonpt2").innerHTML = window.location.host +"/THCNTT3/api.php/ktrptbac2/a/b/c";
        document.getElementById("txt_apijsonyear").innerHTML = window.location.host +"/THCNTT3/api.php/ktrnamnhuan/year";
    }
</script>

<!DOCTYPE html>
<html lang="vi" xmlns="http://www.w3.org/1999/xhtml">
<html>
<head>
    <title>THCNTT3-ChinhApp</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<h1>Giải phương trình bậc 2</h1>
<a>ax² + bx + c = 0</a>
<form>
    <label for="fname">a</label>
    <input type="number" id="inputa" name="fname"><br>
    <label for="lname">b</label>
    <input type="number" id="inputb" name="lname"><br>
    <label for="lname">c</label>
    <input type="number" id="inputc" name="lname"><br>
    <input type ="button" name="OKE" value="Result" onclick="getLinkJSONpt2()">
</form>
<h3>Api json pt2: </h3><h4 id="txt_apijsonpt2"></h4>
<h1>Kiểm tra năm nhuần</h1>
<form>
    <label for="lname">Nhập năm</label><br>
    <input type="number" id="inputyear" name="lname"><br>
    <input type ="button" name="OKE" value="Result" onclick="getLinkJSONyear()">
</form>
<h3>Api json pt2: </h3><h4 id="txt_apijsonyear"></h4>
<script>getData();</script>
</body>
</html>
