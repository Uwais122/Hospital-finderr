function fillit()
{
    var fill="";
    var fname=document.getElementById('fname').value;
    var mnumber=document.getElementById('mnumber').value;
    var note=document.getElementById('note').value;

    if(fname=="")
    {
        fill +=" fname";
    }
    if(mnumber=="")
    {
        fill +=" mnumber";
    }
    if(note=="")
    {
        fill +=" note";
    }
    if(document.getElementById('mygender').checked == true) {   

        alert("radio button is selected");   
} 
else {  
    alert("radio button is not selected");   
}  
    alert (fill+ " these field are empty");
}