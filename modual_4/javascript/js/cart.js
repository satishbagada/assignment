function addcart() {
    var p = document.getElementById("qty").value;
    var q = document.getElementById("pr").value;
    var t = p * q;
    document.getElementById("tot").innerHTML = t;
}
// print bill
function pp() {
    document.getElementById("btn").style = "display:none";
    window.print();

}