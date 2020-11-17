<script>
  let thumbnails=document.querySelectorAll(".gallery .thumbnails .icon");
  for(var a=0;a<thumbnails.length;a++){
    thumbnails[a].onclick=function(){
      let target=document.querySelector(".gallery .background");
      target.style["background-image"]=this.style["background-image"];
      if(this.children.length){
        let title=this.children[0].querySelector(".title");
        let content=this.children[0].querySelector(".content");
        document.querySelector(".gallery .desc.title").innerHTML=title.outerHTML;
        document.querySelector(".gallery .desc.content").innerHTML=content.outerHTML;
      }
    }
  }
</script>
