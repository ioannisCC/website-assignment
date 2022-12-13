var ΠΛ,ΑΜ,ΕΤΟΣ,Σ=0,max=0,max1=" ",ΠΛ2=0;

var diag=[];
var tmp = 0;

function GO()
{
  ΠΛ=document.getElementById('plithos').value;
  one=parseInt(ΠΛ);
  two=parseInt(ΕΤΟΣ);

  for (var i=0; i<ΠΛ; i++)
  {
      diag[i]=[];
      diag[i][0]=window.prompt("εισάγετε το ψευδώνυμο","0");
      ΕΤΟΣ=window.prompt("εισάγετε το έτος γέννησης","0");
      two=parseInt(ΕΤΟΣ);
      diag[i][1]=two;
      Σ=(Σ+two);

    if (two==2003)
    {
       ΠΛ2+=1;
       max=two;
    }
  }
}

function PL()
{
  contents = "<html><head><link rel='shortcut icon' type='x-icon' href='weeknd.png'><title>Αποτελέσματα</title></head><body style='text-align:center;color:#fff;font-family:Comfortaa;font-size:20;'bgcolor='#4700b3';><h2><marquee scrollamount='5' direction='left' behavior='alternate'>Αποτελέσματα</marquee></h2>" + "<em>Πλήθος συμμετεχόντων γεννημένοι το 2003: </em><strong>" + ΠΛ2 + "</strong></body></html>";
  options = "toolbar=0,status=0,scrllbars=0,resizable=0;,width=500,height=350,menubar=no";
  newwindow = window.open("","mywindow",options);
  newwindow.document.write(contents);
  newwindow.document.close();
}

function MAX()
{
  for (var i=0; i<ΠΛ; i++)
  {
    tmp += 1
    if(diag[i][1]==max)
    {
      max1=diag[i][0];
     var myWindow = window.open("", "MAX", "toolbar=0,status=0,scrllbars=0,resizable=0;,width=500,height=350,menubar=no");
     myWindow.document.write("<html><head><link rel='shortcut icon' type='x-icon' href='weeknd.png'><title>Αποτελέσματα</title></head><body style='text-align:center;color:#fff;font-family:Comfortaa;font-size:20;'bgcolor='#4700b3';>" + "<em>" + tmp + ")Ψευδώνυμο: </em><strong>" + max1 + "<br><br></strong></body></html>");
    }
  }
}
