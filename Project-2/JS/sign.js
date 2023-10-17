function fillit()
{
    var fill="";
    var fname=document.getElementById('fname').value;
    var lname=document.getElementById('lname').value;
    var email=document.getElementById('email').value;
    var pass=document.getElementById('pass').value;

    if(fname=="")
    {
        fill +=" fname";
    }
    if(lname=="")
    {
        fill +=" lname";
    }
    if(email=="")
    {
        fill +=" email";
    }
    if(pass=="")
    {
        fill +=" pass";
    }
    alert (fill+ " these field are empty");
}