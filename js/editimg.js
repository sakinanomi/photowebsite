

function check()
{
  if(img==null)
    {
      
      alert('image not loaded');
      return 0;
      
    }
  else
    {
     
    return 1;
    }
}

function makeRed()
{
   
   if(check())
   {
      for (var pixel of img.values())
      {
         pixel.setRed(255);
      }
      img.drawTo(canvas);
   }
   

}

function greyscale()
{
   
   if(check())
    {
      for (var pix of img.values())
        {
          var avg=(pix.getRed()+pix.getBlue()+pix.getGreen())/3;
          pix.setRed(avg);
          pix.setBlue(avg);
          pix.setGreen(avg);
        
        }
      img.drawTo(canvas);
    }

}



function section()
{
  var h=img.getHeight();
  for(pix of img.values())
    {
      var y=pix.getY();
     
      if(y<=h/7)
        {
          rainbow(148,0,211);
        }
      if(y>h/7&&y<=2*h/7)
        {
          rainbow(75,0,130);
        }
      if(y>2*h/7&&y<=3*h/7)
         {
         rainbow(0,0,255);
         }
  if(y>3*h/7&&y<=4*h/7)
    {
      rainbow(0,255,0);
    }
      if(y>4*h/7&&y<=5*h/7)
        {
          rainbow(255,255,0);
        }
      if(y>5*h/7&&y<=6*h/7)
        {
          rainbow(255,127,0);
        }
      if(y>6*h/7&&y<h)
        {
          rainbow(255,0,0);
        }
    }
  img.drawTo(canvas);
}
function rainbow(r,g,b)
{
   var avg=(pix.getBlue()+pix.getRed()+pix.getGreen())/3;
  var red,blue,green;
  if(avg<128)
    {
      red=r/127.5*avg;
      green=g/127.5*avg;
      blue=b/127.5*avg;
      pix.setRed(red);
      pix.setBlue(blue);
      pix.setGreen(green);
    }
  else
    {
      red=(2-r/127.5)*avg+2*r-255;
      green=(2-g/127.5)*avg+2*g-255;
      blue=(2-b/127.5)*avg+2*b-255;
      pix.setRed(red);
      pix.setBlue(blue);
      pix.setGreen(green);
    }
}

function addBorder()
{
   
   var h=img.getHeight();
   var w=img.getWidth();
   if(h<320 || w<320)
   {
      for(pix of img.values())
      {
        if((pix.getY()<=10||pix.getY()>=(h-10))||pix.getX()<=10||pix.getX()>=(w-10))
        {
            pix.setRed(0);
            pix.setBlue(0);
            pix.setGreen(0);
        }
      }
   }
   
   else{
      for(pix of img.values())
      {
        if((pix.getY()<=80||pix.getY()>=(h-80))||pix.getX()<=80||pix.getX()>=(w-80))
        {
            pix.setRed(0);
            pix.setBlue(0);
            pix.setGreen(0);
        }
      }
   }
   img.drawTo(canvas);

}

function reset()
{
   if(check())
   {
     
      img=copy;
      img.drawTo(canvas);
      
   }
  
   
}

var button = document.getElementById('download');
function down()
{
  if(check())
    {
        var dataURL = canvas.toDataURL('image/png');
        button.href = dataURL;

    }
}
/*function save()
{
   copy=img;
   
}






function chooseColor()
{
   var colorinput=document.getElementById('color');
   color=colorinput.value;
   console.log(color);
}*/