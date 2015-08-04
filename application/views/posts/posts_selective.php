<style>
* {margin: 0; padding: 0;}
 
.div {
  margin: 20px;
}
 
.ul {
  list-style-type: none;
  width: 500px;
}
 
.h3 {
  font: bold 20px/1.5 Helvetica, Verdana, sans-serif;
}
 
.li img {
  float: left;
  margin: 0 15px 0 0;
}
 
.li p {
  font: 200 12px/1.5 Georgia, Times New Roman, serif;
}
 
.li {
  padding: 10px;
  overflow: auto;
}
 
.li:hover {
  background: #eee;
  cursor: pointer;
}
</style>

<script>
function sendpage(){
          var pagename= document.getElementById("txtpageid").value;
          window.location="<?php echo base_url("/posts/show"); ?>" +"/" + pagename ;
}
</script>
<?php
function getlink($pagename){
	echo base_url("/posts/show")."/" .$pagename ;
}
?>
	
<div class="div">
  <ul class="ul">
    <a href='<?php  getlink("facebook"); ?>'>
		<li class="li">
		  <img src="https://graph.facebook.com/facebook/picture">
		  <h3 class="h3">Facebook</h3>
		  <p>The Facebook Page celebrates how our friends inspire us, support us, and help us discover the world when we connect</p>
		</li>
	</a>
	
    <a href='<?php  getlink("youtube"); ?>'>
		<li class="li">
		  <img src="https://graph.facebook.com/youtube/picture">
		  <h3 class="h3">Youtube</h3>
		  <p>Discover new channels, watch and share your favorite videos</p>
		</li>
	</a>
	
    <a href='<?php  getlink("shakira"); ?>'>
		<li class="li">
		  <img src="https://graph.facebook.com/shakira/picture">
		  <h3 class="h3">Shakira</h3>
		  <p>New album Shakira, out now / El nuevo álbum</p>
		</li>
	</a>
	
    <a href='<?php  getlink("linkinPark"); ?>'>
		<li class="li">
		  <img src="https://graph.facebook.com/linkinPark/picture">
		  <h3 class="h3">Linkin Park</h3>
		  <p>THE HUNTING PARTY - out now - Get it on iTunes</p>
		</li>
	</a>
	
    <a href='<?php  getlink("JustinBieber"); ?>'>
		<li class="li">
		  <img src="https://graph.facebook.com/JustinBieber/picture">
		  <h3 class="h3">Justin Bieber</h3>
		  <p>www.justinbiebermusic.com </p>
		</li>
	</a>
	
    <a href='<?php  getlink("Cristiano"); ?>'>
		<li class="li">
		  <img src="https://graph.facebook.com/Cristiano/picture">
		  <h3 class="h3">Cristiano Ronaldo</h3>
		  <p>Welcome to the OFFICIAL Facebook page of Cristiano Ronaldo </p>
		</li>
	</a>
	
    <a href='<?php  getlink("TED"); ?>'>
		<li class="li">
		  <img src="https://graph.facebook.com/TED/picture">
		  <h3 class="h3">TED</h3>
		  <p>Welcome to the official page for TED.com, home of Ideas Worth Spreading! Here, find daily TED Talks, news from TED, conversations, photos and more </p>
		</li>
	</a>
	
    <a href='<?php  getlink("bestpics"); ?>'>
		<li class="li">
		  <img src="https://graph.facebook.com/bestpics/picture">
		  <h3 class="h3">Best pics</h3>
		  <p>The best pictures in the world.. </p>
		</li>
	</a>
	
    <a href='<?php  getlink("best.pic1"); ?>'>
		<li class="li">
		  <img src="https://graph.facebook.com/best.pic1/picture">
		  <h3 class="h3">Best Pictures</h3>
		  <p>collection of the best picture♥</p>
		</li>
	</a>
	
    <a href='<?php  getlink("Nice-pictures-in-the-world"); ?>'>
		<li class="li">
		  <img src="https://graph.facebook.com/Nice-pictures-in-the-world/picture">
		  <h3 class="h3">Nice Pictures In The World</h3>
		  <p>بینەری نوێترین وێنە جوانەکەنی جیهان بە لەگەڵ رونکردنەوەی پێویست لەسەریان</p>
		</li>
	</a>
	
    <a href='<?php  getlink("Funny-pictures"); ?>'>
		<li class="li">
		  <img src="https://graph.facebook.com/Funny-pictures/picture">
		  <h3 class="h3">Funny Photos</h3>
		  <p>We are posting the funniest stuff on Facebook - everyday. Click that Like button and start laughing!</p>
		</li>
	</a>
	
    <a href='<?php  getlink("funnyordie"); ?>'>
		<li class="li">
		  <img src="https://graph.facebook.com/funnyordie/picture">
		  <h3 class="h3">Funny Or Die</h3>
		  <p>funnyordie.com</p>
		</li>
	</a>
	
    <a href='<?php  getlink("fansofvines"); ?>'>
		<li class="li">
		  <img src="https://graph.facebook.com/fansofvines/picture">
		  <h3 class="h3">Funny Vines</h3>
		  <p>Vines for smiles, only at Funny Vines</p>
		</li>
	</a>
	
    <a href='<?php  getlink("Expiredbeans"); ?>'>
		<li class="li">
		  <img src="https://graph.facebook.com/Expiredbeans/picture">
		  <h3 class="h3">Funny Pictures</h3>
		  <p>We deliver funny picture to you every single day. Making your day better</p>
		</li>
	</a>
	
    <a href='<?php  getlink("301573086523408"); ?>'>
		<li class="li">
		  <img src="https://graph.facebook.com/301573086523408/picture">
		  <h3 class="h3">funny jokes & pics</h3>
		  <p>jokes and funny pictures</p>
		</li>
	</a>
	
    <a href='<?php  getlink("QOUH005"); ?>'>
		<li class="li">
		  <img src="https://graph.facebook.com/QOUH005/picture">
		  <h3 class="h3">Qoutes of Ur Heart</h3>
		  <p>Welcome to the Qoutes of Ur Heart Family
Follow Us On Twitter :- www.twitter.com/MrrQoute
</p>
		</li>
	</a>
	
    <a href='<?php  getlink("Quoter"); ?>'>
		<li class="li">
		  <img src="https://graph.facebook.com/Quoter/picture">
		  <h3 class="h3">Qoutes &nd Sayings</h3>
		  <p>Through your smile I find my strength..
LIKE & Share This Page if you LIKE it . ✔ Help us for Grow . Like ✔ Tag ✔ Share ✔</p>
		</li>
	</a>
	
    <a href='<?php  getlink("bbcworldnews"); ?>'>
		<li class="li">
		  <img src="https://graph.facebook.com/bbcworldnews/picture">
		  <h3 class="h3">BBC World News</h3>
		  <p>BBC World News is the BBC's commercially funded, international 24-hour news channel, broadcast in English in more than 200 countries</p>
		</li>
	</a>
	
    <a href='<?php  getlink("funnycatpictureslady"); ?>'>
		<li class="li">
		  <img src="https://graph.facebook.com/funnycatpictureslady/picture">
		  <h3 class="h3">Funny Cat Pictures</h3>
		  <p>Hi Funny Cat Pictures was started by my daughter Megan.The idea came from me</p>
		</li>
	</a>
	
    <a href='<?php  getlink("fitn3ss"); ?>'>
		<li class="li">
		  <img src="https://graph.facebook.com/fitn3ss/picture">
		  <h3 class="h3">Fitness</h3>
		  <p>www.dailyfit.me |Need #Motivation and #Advice for #Bodybuilding #Fitness or #Food? make LOVE & FITNESS! ❤+▪█───█▪</p>
		</li>
	</a>
	
    <a href='<?php  getlink("FitnessMotivation123"); ?>'>
		<li class="li">
		  <img src="https://graph.facebook.com/FitnessMotivation123/picture">
		  <h3 class="h3">Fitness Girls</h3>
		  <p>Fitness Motivation</p>
		</li>
	</a>
	
	
    <a href='<?php  getlink("trollface.ragefaces"); ?>'>
		<li class="li">
		  <img src="https://graph.facebook.com/trollface.ragefaces/picture">
		  <h3 class="h3">Troll Face</h3>
		  <p>www.memecenter.com</p>
		</li>
	</a>
	
    <a href='<?php  getlink("Caricature"); ?>'>
		<li class="li">
		  <img src="https://graph.facebook.com/Caricature/picture">
		  <h3 class="h3">Caricature (‎كاريكاتور وطني‎)</h3>
		  <p>وطني في كاريكاتور مع الصحافة العربية</p>
		</li>
	</a>
	
    <a href='<?php  getlink("brilliantbooks.awesome"); ?>'>
		<li class="li">
		  <img src="https://graph.facebook.com/brilliantbooks.awesome/picture">
		  <h3 class="h3">Recommended books</h3>
		  <p>This page is for brilliant books that everyone can look at, it will also involve reviews and acting out scenes</p>
		</li>
	</a>
	
	
    <a href='<?php  getlink("PCWorld"); ?>'>
		<li class="li">
		  <img src="https://graph.facebook.com/PCWorld/picture">
		  <h3 class="h3">PCWorld</h3>
		  <p>PCWorld helps you navigate the PC ecosystem to find the products you want and the advice you need to get the job done. (We are not the UK retail store.)</p>
		</li>
	</a>
	
  </ul>
</div>


<br />
