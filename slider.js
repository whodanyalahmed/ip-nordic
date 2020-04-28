// $(document).ready(
//     function()
//     {
//         var d = document.getElementById("playerLimit").value;
//         document.getElementById("showcase").innerText = d;
//         console.log(d)
//     });
var ramslider = document.getElementById("ramAmount");
var slider = document.getElementById("playerLimit");
var player = document.getElementById("playerLimitValue");
var ram = document.getElementById("playerLimitRamAmount");
var diskslider = document.getElementById("diskSpace");

player.innerText = slider.value;

slider.oninput = function () {

  if (this.value < 25) {
    document.getElementById("playerLimitRamAmount").innerText = 2;
    document.getElementById("ramAmountValue").innerHTML = 2;
    document.getElementById("ramAmount").value = 2;

    document.getElementById("ramPrice").innerText = 5.00;
  }
  else if (this.value < 35) {
    document.getElementById("playerLimitRamAmount").innerText = 3;
    document.getElementById("ramAmountValue").innerHTML = 3;

    document.getElementById("ramAmount").value = 3;

    document.getElementById("ramPrice").innerText = 7.50;
  }
  else if (this.value < 45) {
    document.getElementById("playerLimitRamAmount").innerText = 4;
    document.getElementById("ramAmountValue").innerHTML = 4;

    document.getElementById("ramAmount").value = 4;

    document.getElementById("ramPrice").innerText = 10.00;
  }
  else if (this.value < 55) {
    document.getElementById("playerLimitRamAmount").innerText = 5;
    document.getElementById("ramAmountValue").innerHTML = 5;

    document.getElementById("ramAmount").value = 5;

    document.getElementById("ramPrice").innerText = 12.50;
  }
  else if (this.value < 65) {
    document.getElementById("playerLimitRamAmount").innerText = 6;
    document.getElementById("ramAmountValue").innerHTML = 6;

    document.getElementById("ramAmount").value = 6;
    document.getElementById("ramPrice").innerText = 15.00;

  }
  else if (this.value < 75) {
    document.getElementById("playerLimitRamAmount").innerText = 7;
    document.getElementById("ramAmountValue").innerHTML = 7;

    document.getElementById("ramAmount").value = 7;
    document.getElementById("ramPrice").innerText = 17.50;

  }
  else if (this.value < 85) {
    document.getElementById("playerLimitRamAmount").innerText = 8;
    document.getElementById("ramAmountValue").innerHTML = 8;

    document.getElementById("ramAmount").value = 8;
    document.getElementById("ramPrice").innerText = 20.00;

  }
  else if (this.value < 95) {
    document.getElementById("playerLimitRamAmount").innerText = 9;
    document.getElementById("ramAmountValue").innerHTML = 9;

    document.getElementById("ramAmount").value = 9;
    document.getElementById("ramPrice").innerText = 22.50;

  }
  else {
    document.getElementById("ramAmountValue").innerHTML = 10;
    document.getElementById("playerLimitRamAmount").innerText = 10;

    document.getElementById("ramAmount").value = 10;
    document.getElementById("ramPrice").innerText = 25.00;

  }
  player.innerText = this.value;
}


ramslider.oninput = function () {
  if(this.value == 1){
    document.getElementById("ramAmountValue").innerHTML = 1;
    
    document.getElementById("ramPrice").innerText = 2.50;
    
  }
  else if (this.value == 2) {
    document.getElementById("ramAmountValue").innerHTML = 2;
    
    document.getElementById("ramPrice").innerText = 5.00;
  }
  else if (this.value == 3) {
    
    document.getElementById("ramAmountValue").innerHTML = 3;


    document.getElementById("ramPrice").innerText = 7.50;
  }
  else if (this.value== 4) {
    
    document.getElementById("ramAmountValue").innerHTML = 4;


    document.getElementById("ramPrice").innerText = 10.00;
  }
  else if (this.value == 5) {
    
    document.getElementById("ramAmountValue").innerHTML = 5;


    document.getElementById("ramPrice").innerText = 12.50;
  }
  else if (this.value == 6) {
    
    document.getElementById("ramAmountValue").innerHTML = 6;

    document.getElementById("ramPrice").innerText = 15.00;

  }
  else if (this.value == 7) {
    
    document.getElementById("ramAmountValue").innerHTML = 7;

    document.getElementById("ramPrice").innerText = 17.50;

  }
  else if (this.value ==  8) {
    
    document.getElementById("ramAmountValue").innerHTML = 8;

    document.getElementById("ramPrice").innerText = 20.00;

  }
  else if (this.value == 9) {
    
    document.getElementById("ramAmountValue").innerHTML = 9;

    document.getElementById("ramPrice").innerText = 22.50;

  }
  else {
    document.getElementById("ramAmountValue").innerHTML = 10;
    

    document.getElementById("ramPrice").innerText = 25.00;

  }
}


diskslider.oninput = function () {
  if(this.value == 10){
    document.getElementById("diskValue").innerHTML = 10;
    
    document.getElementById("diskPrice").innerText = 0;
    
  }
  else if (this.value == 20) {
    document.getElementById("diskValue").innerHTML = 20;
    
    document.getElementById("diskPrice").innerText = 2.50;
  }
  else if (this.value == 300) {
    
    document.getElementById("diskValue").innerHTML = 30;


    document.getElementById("diskPrice").innerText = 5.00;
  }
  else if (this.value== 40) {
    
    document.getElementById("diskValue").innerHTML = 40;


    document.getElementById("diskPrice").innerText = 7.50;
  }
  else {
    document.getElementById("diskValue").innerHTML = 50;
    

    document.getElementById("diskPrice").innerText = 10.00;

  }
}
