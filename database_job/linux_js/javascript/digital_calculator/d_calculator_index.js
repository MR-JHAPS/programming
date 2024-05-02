/* document.getElementById("key").onclick = function a(){
    document.getElementById("diss").innerHTML= "1";
} */

document.getElementById("key").onclick = function a(){
    /* alert(document.getElementById("diss").value); */
    let key = document.getElementById("key").value;
    key = key+1;
    
    document.getElementById("diss").value = key;
    
}