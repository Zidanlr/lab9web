
<?= $this->include('template/admin_header'); ?>
<link rel="stylesheet" href="<?= base_url('/style.css'); ?>">
<div class="add">
  <div class="title">
    <h2><?= $title; ?></h2>
  </div>
  <form action="" method="POST">
    <p>
      <input type="text" name="judul" placeholder="">
    </p>
    <p>
      <textarea name="isi" id="isi" cols="50" rows="10" placeholder=""></textarea>
    </p>
    <p><input type="submit" value="kirim" class="btn btn-large"></p>
  </form>
</div>

<?= $this->include('template/admin_footer'); ?>