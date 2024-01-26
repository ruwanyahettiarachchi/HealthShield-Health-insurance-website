function validate()
{
    var fullname=document.getElementById("name");
    var pNum=document.getElementById("pNum");
    var nic=document.getElementById("nic");
    var email=document.getElementById("mail");
    var premium=document.getElementById("premium");
    

    if(fullname.value.trim()=="" ||pNum.value.trim()==""|| nic.value.trim()==""||email.value.trim()==""||premium.value.trim()=="" ) 
    {
        alert("No blank values allowed");
        return false;
    }
    else
    {
        true;

    }
}