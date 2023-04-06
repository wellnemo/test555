	<script src="https://code.jquery.com/jquery-1.11.3.js"></script>
	Фильтр<br/>
<a id="id1" href="#">По городу Жилье</a><br/>
<a id="id2" href="#">По объектам Екатиринбург</a>
<br/>

<style>img{width:100px;height:100px;}</style>
<div id="gorod">
<img src="https://penoterm.ru/UPLOAD/2020/07/09/44-aeroport-koltsovo-612.jpg"/>
<img src="https://penoterm.ru/UPLOAD/2020/07/09/77-zhiloy-dom-na-grebenshikova-6-1-139.jpg"/>
<img src="https://penoterm.ru/UPLOAD/2020/07/09/48-zhk-tatishevskiy-27.jpg"/>
<img src="https://penoterm.ru/UPLOAD/2019/08/27/zhk-sozvezdie-292.jpg"/><br/>
</div>

<div style='display:none' id="obect">
<img src="https://penoterm.ru/UPLOAD/2019/08/27/zhk-sozvezdie-292.jpg"/>
<img src="https://penoterm.ru/UPLOAD/2019/08/27/zhk-sozvezdie-292.jpg"/>
<img src="https://penoterm.ru/UPLOAD/2019/08/27/zhk-sozvezdie-292.jpg"/>
<img src="https://penoterm.ru/UPLOAD/2019/08/27/zhk-sozvezdie-292.jpg"/><br/>
</div>

<script>

$( document ).ready(function() {


$( "#id1" ).click(function() { 
  $( "#gorod" ).css({"display":"block"});
  $( "#obect" ).css({"display":"none"});
});
$( "#id2" ).click(function() {
  $( "#gorod" ).css({"display":"none"});
  $( "#obect" ).css({"display":"block"});
});

});
</script>