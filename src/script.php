<script type="text/javascript">
let values={};

function move_on(k,v){
  if(typeof(v)=="string"){
    var text=document.getElementById(v);
    v=parseInt(text.value) || 0;
  }
  values[k]=v;
  let pages=document.querySelectorAll(".page");
  for(var a=0;a<pages.length;a++){
    if(pages[a].style.display=="block"){
      pages[a].style.display="none";
      pages[a+1].style.display="block";
      if(a+1==pages.length-1){
        let lbs=getCarbon();
        let tons=Math.round((lbs/2000)*100)/100;
        let dollars=Math.round(getDollars(tons)*100)/100;
        let trees=Math.floor(Math.ceil(dollars)/5)*5;
        document.getElementById("results-tons").innerHTML=tons;
        document.getElementById("results-dollars").innerHTML=dollars;
        document.getElementById("results-trees").innerHTML=trees;
      }
      break;
    }
  }
}

document.querySelector(".page").style.display="block";

</script>
