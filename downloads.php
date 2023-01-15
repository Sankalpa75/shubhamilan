<div class="img-page">
  <div class="container">
    <h1>Download Forms</h1>

  </div>
</div>



<div class="container">
  <div class="row">
    <div class="col-xs-12 col-sm-8 col-md-9">

      <button class="accordion">खाता खोल्ने फारम</button>

      <div class="panel">
        <span>
          <img src="images/pdf-icon.png">
        </span>

         <a href="pdf/forms/khata-form.pdf" target="_blank">
          <span>
            खाता खोल्ने फारम
          </span>
        </a>

        <a href="pdf/forms/khata-form.pdf" download>
          <div class="download-icon">
            <i class="fa fa-download"></i>
          </div>
        </a>
      </div>

      <button class="accordion">रीन माग फारम</button>

      <div class="panel">
        <span>
          <img src="images/pdf-icon.png">
        </span>

         <a href="pdf/forms/reen-mag.pdf" target="_blank">
          <span>
            रीन माग फारम
          </span>
        </a>

        <a href="pdf/forms/reen-mag.pdf" download>
          <div class="download-icon">
            <i class="fa fa-download"></i>
          </div>
        </a>
      </div>





      <button class="accordion">सदस्य पहिचान फारम</button>

      <div class="panel">
        <span>
          <img src="images/pdf-icon.png">
        </span>

         <a href="pdf/forms/sadasya-pahichan.pdf" target="_blank">
          <span>
            सदस्य पहिचान फारम
          </span>
        </a>

        <a href="pdf/forms/sadasya-pahichan.pdf" download>
          <div class="download-icon">
            <i class="fa fa-download"></i>
          </div>
        </a>
      </div>




      <button class="accordion">शेयर खरिदको लागि दरखास्त </button>

      <div class="panel">
        <span>
          <img src="images/pdf-icon.png">
        </span>

         <a href="pdf/forms/share-kharid.pdf" target="_blank">
          <span>
            शेयर खरिदको लागि दरखास्त 
          </span>
        </a>

        <a href="pdf/forms/share-kharid.pdf" download>
          <div class="download-icon">
            <i class="fa fa-download"></i>
          </div>
        </a>
      </div>

</div>






    <div class="col-xs-12 col-md-3 col-sm-3">
      <div class="info-box">
        <h4>Need More Info?</h4>
        <p>
          You can call, email or contact us from our website if you need any more information or incase you need our services. You can also visit our office which is located in New baneshwor, Sankhamulmarg.
        </p>
        <div class="information">
          <span>
            <h6><i class="fa fa-phone"></i>
              <strong>OUR PHONE NO.</strong></h6>
            <p>01-4782599</p>
          </span>

          <span>
            <h6><i class="fa fa-envelope"></i>
              <strong>OUR EMAIL</strong></h6>
            <p>subha.milan@gmail.com</p>
          </span>


        </div>
      </div>
    </div>



  </div>
</div>




<script type="text/javascript">
  var acc = document.getElementsByClassName("accordion");
  var i;

  for (i = 0; i < acc.length; i++) {
    acc[i].addEventListener("click", function() {
      this.classList.toggle("active");
      var panel = this.nextElementSibling;
      if (panel.style.display === "block") {
        panel.style.display = "none";
      } else {
        panel.style.display = "block";
      }
      var panel = this.nextElementSibling;
      if (panel.style.maxHeight) {
        panel.style.maxHeight = null;
      } else {
        panel.style.maxHeight = panel.scrollHeight + "px";
      }
    });
  }
</script>



<!-- <script type="text/javascript">
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight) {
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    }
  });
}
</script> -->