function restar() {

    var a = Number(document.getElementById('carga').value);
    var b = Number(document.getElementById('indi1').value);
    var c = a - b;
    document.getElementById('error').value = c;


    var d = Number(document.getElementById('carga').value);
    var e = Number(document.getElementById('indi2').value);
    var f = d - e;
    document.getElementById('error2').value = f;

    var g = Number(document.getElementById('carga').value);
    var h = Number(document.getElementById('indi3').value);
    var i = g - h;
    document.getElementById('error3').value = i;



    var j = Number(document.getElementById('carga').value);
    var k = Number(document.getElementById('indi4').value);
    var l = j - k;
    document.getElementById('error4').value = l;


    var m = Number(document.getElementById('carga').value);
    var n = Number(document.getElementById('indi5').value);
    var o = m - n;
    document.getElementById('error5').value = o;
}