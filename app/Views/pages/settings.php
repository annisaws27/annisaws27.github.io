<?= $this->extend("templates/siswa/index"); ?>
<?= $this->section("content"); ?>
<div class="container d-flex text-center justify-content-center align-items-center" style="height: 90vh;">
  <div class="modal-content fw-bold fs-1">
    <div class="modal-header my-2 mx-5">
      <a href="<?= base_url(); ?><?= $_SESSION['role'] == 'siswa' ? "/siswa" : "/admin"; ?>" class="m-3">
        <img src="<?= base_url(); ?>/img/back.png" class="me-auto" style="width: 75px;">
      </a>
      <h5 class="modal-title fs-1 fw-bold mx-auto" id="settings">Setting</h5>
    </div>
    <div class="modal-body mx-5">
      <div class="mb-0 row">
        <label for="volume" class="col-md-3 col-form-label text-start">Volume</label>
        <div class="col-md-7">
          <input type="range" class="form-range" name="volume" id="volume" value="50">
        </div>
        <div class="col-md-2" id="volumeValue">50</div>
      </div>
      <div class="mb-3 row d-flex align-items-center">
        <label for="language" class="col-md-3 col-form-label text-start">Language</label>
        <div class="d-flex align-items-center col-md-7 text-center">
          <i class="bi bi-caret-left-fill panah"></i>
          <select class="form-select form-select-sm bg-dark text-light" aria-label="language">
            <option value="en" selected>English</option>
            <option value="id">Indonesia</option>
          </select>
          <i class="bi bi-caret-right-fill panah"></i>
        </div>
      </div>
    </div>
  </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
<script>
  // settings

  const sliderVolume = document.querySelector("#volume");
  const volumeValue = document.querySelector("#volumeValue");

  sliderVolume.addEventListener("input", function() {
    volumeValue.innerHTML = sliderVolume.value;
  });

  $(document).ready(function() {
    $("#volume").on("input", function() {
      localStorage.setItem("volume", this.value);
    });

    var volume = localStorage.getItem("volume");
    if (volume) {

      $("#volume").val(volume);
      $("#volumeValue").html(volume);
    }

    $("#volume").on("input", function() {
      localStorage.setItem("volume", this.value);
    });

    var audioElement = new Audio("<?= base_url(); ?>/music/backsound.mp3");
    audioElement.volume = 0.5;

    $("#volume").on("input", function() {
      audioElement.volume = this.value / 100;
      $("#volumeValue").text(this.value);
    });
  });
</script>
<?= $this->endSection(); ?>