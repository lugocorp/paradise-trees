<script>
  let thumbnails=document.querySelectorAll(".gallery .thumbnails > div");
  for(var a=0;a<thumbnails.length;a++){
    thumbnails[a].onclick=function(){
      let target=document.querySelector(".gallery .background");
      target.style["background-image"]=this.style["background-image"];
      if(this.children.length){
        let desc=this.children[0].innerHTML;
        document.querySelector(".gallery .desc").innerHTML=desc;
      }
    }
  }
</script>
