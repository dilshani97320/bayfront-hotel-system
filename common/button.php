<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
</head>
<style>
  /*@import url('https://fonts.googleapis.com/css?family=Arvo');*/

.fa-chevron-right{
    margin-left: 10px;
    font-size: 15px;

}
/** end hover 4*/
/** hover 5 */
.btn{
  
  
  display:flex;
  justify-content:center;
  align-items:center;
  position:relative;
  transition:.3s all;
  border: 2px solid #262626;
  color: #262626;
  font-weight: 400px;
  padding: 10px;
  text-align: center;
  letter-spacing: 1px;
  text-transform: uppercase;
  text-decoration: none;
  font-family: 'Josefin Sans', sans-serif;
  font-size: 12px;
  margin: 20px auto;
  cursor: pointer;
  width: 180px;
}
.btn:before{
  content:'';
  position:absolute;
  width:0%;
  left:0;
  height:100%;
  background:#262626;
  transition:.3s;
  z-index:-1;
}
.btn:hover{
  color:#fff;
}
.btn:hover:before{
  width:100%;
}
/** end hover 5*/


</style>
<body>
  <a class="btn" href="#">FIND OUT MORE <i class="fa fa-chevron-right" aria-hidden="true"></i></a>
</body>
</html>