


<style>

@import url("https://fonts.googleapis.com/css?family=Lato:400,400i,700");

* {
  font-family: Lato, sans-serif;
  padding: 0;
  margin: 0;
  box-sizing: border-box;
}

body {
  background-color: #EEEEEE;
  display: flex;
  justify-content: center;
  align-items: center;
  flex-direction: column;
  margin: 50px 0;
}

.wrapper {
  width: 60%;
  width: 60%;
    margin: 100px 0px;
}

h1 {
  margin-bottom: 20px;
}

.container1 {
  background-color: white;
  color: black;
  border-radius: 20px;
  box-shadow: 0 5px 10px 0 rgb(0,0,0,0.25);
  margin: 20px 0;
}

.question {
  font-size: 1.2rem;
  font-weight: 600;
  padding: 20px 80px 20px 20px;
  position: relative;
  display: flex;
  align-items: center;
  cursor: pointer;
}

.question::after {
  content: "\002B";
  font-size: 2.2rem;
  position: absolute;
  right: 20px;
  transition: 0.2s;
}

.question.active::after {
  transform: rotate(45deg);
}

.answercont {
  max-height: 0;
  overflow: hidden;
  transition: 0.3s;
}

.answer {
  padding: 0 20px 20px;
  line-height: 1.5rem;
}

.question.active + .answercont {
}

@media screen and (max-width: 790px){
  html {
    font-size: 14px;
  }
  .wrapper {
  width: 80%;
  padding:50px 0px;
}
}
</style>
<?php  include_once("includes/head.php")?>

<body class="home-3">
    <!-- preloader start here -->
    <div class="preloader">
        <div class="preloader-inner">
            <div class="preloader-icon">
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <!-- preloader ending here -->



    <!-- ===============// header section start here \\================= -->
    <?php  include_once("includes/header.php")?>
    <!-- ===============//header section end here \\================= -->







    



<div class="wrapper">
<h1 style="text-align:center; margin:10px 0px;">F.A.Q</h1>
  <div class="container1">
    <div class="question">
    How Many Colony's NFTs are there
    </div>
    <div class="answercont">
      <div class="answer">
      There will be 10,000 uniquely generated NFTs of colony's with over 200 special traits and custom designs
    </div>
  </div>
  
    <div class="container1">
    <div class="question">
     What is The Mint Price
    </div>
    <div class="answercont">
      <div class="answer">
      As of now, the mint price is going to be 0.1 ETH per NFT.
      </div>
    </div>
  </div>
  
      <div class="container1">
    <div class="question">
      When Lunch
    </div>
    <div class="answercont">
      <div class="answer">
        colony will officially launch on 01/01/2022. Minting will initially be open for our whitelist members through our website for 48 hours before the public sale. Public sale will commence on 04/20. The collection will be revealed on Opensea 24 hours after the conclusion of the public sale.
      </div>
    </div>
  </div>
 
  <div class="container1">
    <div class="question">
      How to Whitelisted Aside from Weekly riffles
    </div>
    <div class="answercont">
      <div class="answer">
      There will be a ranking system implemented to reward XP points to our active discord members. Helping the community and spreading positive vibes, sharing our videos and tweets on social media, and inviting friends/family to our server will grant you “XP” points to reach level 20 for a WL role.
   
      </div>
    </div>
  </div>
  
  <div class="container1">
    <div class="question">
      What are forks?
    </div>
    <div class="answercont">
      <div class="answer">
        A fork is a complete copy of a Pen or Project that you can save to your own account and modify. Your forked copy comes with everything the original author wrote, including all of the code and any dependencies.<br><br>


      </div>
    </div>
  </div>
  
</div>




    

<?php  include_once("includes/footer.php")?>
<?php include_once("includes/script.php")?>
<script type="text/javascript">
    let question = document.querySelectorAll(".question");

question.forEach(question => {
  question.addEventListener("click", event => {
    const active = document.querySelector(".question.active");
    if(active && active !== question ) {
      active.classList.toggle("active");
      active.nextElementSibling.style.maxHeight = 0;
    }
    question.classList.toggle("active");
    const answer = question.nextElementSibling;
    if(question.classList.contains("active")){
      answer.style.maxHeight = answer.scrollHeight + "px";
    } else {
      answer.style.maxHeight = 0;
    }
  })
})

</script>
