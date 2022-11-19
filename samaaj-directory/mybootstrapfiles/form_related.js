
function letteronly(input){
    var regex=/[^a-z]/gi;
   if(input.value=input.value.replace(regex,""))
   {
       return true;
   }
   else{
       document.getElementById("letter1").innerHTML="* Please Enter Alphabets Only.";
       document.getElementById("letter2").innerHTML="* Please Enter Alphabets Only.";
       document.getElementById("letter3").innerHTML="* Please Enter Alphabets Only.";
   }
}
function textonly(input){
    var regex=/[^a-z," "]/gi;
    if(input.value=input.value.replace(regex,""))
    {
         return true;
    }
    else{
       document.getElementsByClassName("mfname")[0].innerHTML="* Please Enter Alphabet's Only";
       document.getElementsByClassName("mfname")[1].innerHTML="* Please Enter Alphabet's Only";
       document.getElementsByClassName("mfname")[2].innerHTML="* Please Enter Alphabet's Only";
      }
}
function numberonly(input){
  var regex=/[^0-9]/gi;
    if(input.value=input.value.replace(regex,""))
    {
        return true;
    }
    else{
        document.getElementById("number").innerHTML="* Please Enter Number Only";
        document.getElementById("mobilenumber").innerHTML="* Please Enter Number Only";
        document.getElementById("pin").innerHTML="* Please Enter Number Only";
    }
}
function dateofbirth(input){
  var regex=/[^0-9,-]/gi;
  if(input.value=input.value.replace(regex,""))
  {
    return true;
  }
  else{
    document.getElementById("d_o_b").innerHTML="* please enter in yy-mm-dd Format e.g- 2020-03-23";
  }
}
function create(input){
  document.getElementById("c_d_t").innerHTML="* please enter in yy-mm-dd hh:mm:ss Format e.g- 2020-03-23 12:15:12";
}
