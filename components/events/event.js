function getInner() {
    var id_div = event.target.id;
    var div = document.getElementById(id_div);
    console.log(div);
    var inner_div = div.innerHTML;
    console.log(inner_div);
    document.getElementById("overlay").innerHTML = '<div id="text">' + inner_div + '</div>';
    document.getElementById("overlay").style.display = "block";


}