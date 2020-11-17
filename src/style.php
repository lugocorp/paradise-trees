<style type="text/css">

:root{
  --white:#ffffff;
  --coal:#363636;
  --main:#deb540;
  position:relative;
  height:100%;
}
body{
  background-color:var(--white);
  font-family:sans-serif;
  position:relative;
  color:var(--coal);
  overflow:hidden;
  height:100%;
  padding:0;
  margin:0;
}

/* Header */
.header{
  background-color:var(--main);
  color:var(--white);
  margin-bottom:25px;
  padding:10px 25px;
}
.header h1{
  text-align:center;
  font-size:35px;
  margin:0;
}

/* Progress bar */
.progress{
  transform:translateX(-50%);
  position:absolute;
  bottom:10px;
  left:50%;
}
.progress > div{
  background-color:var(--coal);
  border:solid 2px var(--coal);
  display:inline-block;
  border-radius:7px;
  position:relative;
  margin:0 25px;
  height:10px;
  width:10px;
}
.progress .active{
  background-color:var(--main);
}

/* Quiz */
.page{
  height:calc(100% - 110px);
  position:relative;
  display:none;
}
.page p{
  text-align:center;
  padding-top:35px;
  margin:45px 12%;
  margin-top:0;
}
.page p .bold{
  font-weight:bold;
}
.entity{
  background-color:var(--main);
  width:calc(100% - 30px);
  color:var(--white);
  text-align:center;
  position:relative;
  font-weight:bold;
  font-size:25px;
  padding:15px 0;
  margin:15px 0;
  display:block;
  border:none;
  left:15px;
}
.entity:hover{
  cursor:pointer;
}
.option{
  border:solid 2px var(--main);
  width:calc(100% - 70px);
  position:relative;
  font-weight:bold;
  padding:5px 15px;
  margin:15px 0;
  left:15px;
}
.option input[type=text]{
  max-width:calc(100% - 200px);
  border-radius:0;
  border:none;
  width:100%;
}
.option button{
  background-color:var(--main);
  border-radius:15px;
  font-weight:bold;
  padding:5px 15px;
  border:none;
}

/* Footer */
.footer{
  background-color:var(--coal);
  color:var(--white);
  text-align:center;
  font-weight:bold;
  font-size:15px;
  padding:5px 0;
}
.footer a{
  text-decoration:none;
  color:var(--main);
}
.footer a:hover{
  text-decoration:underline;
}

</style>
