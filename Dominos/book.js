function toggle3(){
    var y = document.getElementById("pd");
    if(y.style.display == "block"){
      y.style.display = "none";
    }
    else{
      y.style.display = "block";
    }
}

function toggle2(){
    var y = document.getElementById("stay");
    var z = document.getElementById("check");
    if(y.style.display == "block"){
      z.style.color = "white";
      y.style.display = "none";
    }
    else{
      z.style.color = "#FF5F1F";
      y.style.display = "block";
    }
  }