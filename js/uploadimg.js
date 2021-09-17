var img,canvas;
var width,height;
var width_ori,height_ori;
var btn_setter=document.getElementById("resize");
var btn_status=0;
var copy;
var file;
function upload()
{
  file=document.getElementById("file");
  img=new SimpleImage(file);
  copy=new SimpleImage(file);
  
  
  canvas=document.getElementById("can");
  canvas.classList.add("afterUpload");

  

  var delayInMilliseconds = 500; 

    setTimeout(function() {
     

       width_ori = img.getWidth();
       height_ori = img.getHeight();

       


      width=width_ori;
      height=height_ori;

     

      if(width_ori>800)
      {
        btn_setter.classList.remove("setter");
        width=800;
      }
      if(height_ori>600)
      {
        btn_setter.classList.remove("setter");
        height=600;
      }

      width=String(width)+"px";
      height=String(height)+"px";
      width_ori=String(width_ori)+"px";
      height_ori=String(height_ori)+"px";

      canvas.style.width=width;
      canvas.style.height=height;
      console.log(width);
      console.log(height);
      img.drawTo(canvas);
      
    }, delayInMilliseconds);
  
}

function resize()
{
  if(btn_status==0)
  {
    btn_setter.innerHTML="resize to fit";
    
    canvas.style.width=width_ori;
    canvas.style.height=height_ori;

    
    btn_status=1;
    
  }
  else{
    btn_setter.innerHTML="See in original size";

    
    
    canvas.style.width=width;
    canvas.style.height=height;

    

    btn_status=0;

  }

  
}