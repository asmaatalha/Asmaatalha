var btn = document.getElementById("submitBtn");

var msg = document.getElementById("message");

btn.onclick = function(ele) {
    ele.preventDefault();
    var inputValuee = msg.value;
    if(msg.value === '') {
        console.log("Empty");
    } else {
        msg.value = '';
        document.getElementById("name").innerHTML = "Hello" + " " + inputValuee;

    }

}