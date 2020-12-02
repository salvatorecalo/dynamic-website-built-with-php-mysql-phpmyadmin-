</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" id="">
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

<div class="jumbotron mx-5">
<form class="newsletter my-3 col-4 mx-auto" method="post" id="contact_modal_form" onsubmit="return false;">
    <h3 class="text-center mb-3">Ricevi news su nuovi corsi, eventi</h3>
    <input type="email" name="news_email" id="news_email"  class="form-control" placeholder="Your Email Address" value="">
    <div class="text-center">
    <button type="button" class="my-3 btn btn-outline-success" data-toggle="modal" data-target="#exampleModal">
     ISCRIVITI
     </button>
    </div>
</form>
</div>

<footer class="py-4" style="background:#333;">
<div class="col-12 text-center copyright">
    <p class="mb-0 mt-1 text-white" style="font-size: 16px;">
        &copy; <?php echo date("Y");?> <span class="read-more">Salvo Ripetizioni</span> - Tutti i diritti Riseravati
    </p>
</div>
</footer>
<script>
    $("#contact_modal_form").submit(function(){
        var news_email = $.trim($("#news_email").val());
        if(news_email == ""){
            document.querySelector("modal-body").innerHTML = "inserisci una mail";
        } else {
        var form = $(this);
        $.ajax({
            type: form.attr('method'),
            url: 'http://localhost/website/ripetizioni/inc/ajax/form.php',
            data: form.serialize(),
            dataType: 'script'
        });
    }
});
</script>

<script>
function sub() {
    var alert = document.querySelector("alert");
    alert.style.display = "block";
    alert.innerHTML = "Submitted";
}
</script>
</body>
</html>