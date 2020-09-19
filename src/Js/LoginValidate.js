function Validate(){
    var uname = document.getElementsByName("username").values;
    if (uname == "") {
      document.getElementById("errUsername").innerHTML = "errrro";
    }
}