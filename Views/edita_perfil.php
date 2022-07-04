<div class="container">
  <h1>Editar perfil</h1>
  <form actin="" method="post" enctype="multipart/form-data">
    <div class="row">
      <div class="col">
        <label for="email">Email</label>
        <input id="email" name="email" type="text" value="<?php echo $user['email'] ?>" />
      </div>
    </div>
    <div class="row">
      <div class="col">
        <label for="imatge">Imatge</label>
        <input id="imatge" name="imatge" type="file" />
      </div>
      <?php if ($user['image_name']) : ?>
        <div class="col">
          <p class="content">Imatge actual</p>
          <img src="<?php echo ImageHelper::getInstance()->imageUrl($user['image_name']) ?>">
        </div>
      <?php endif: ?>
    </div>
    <div class="row">
      <div class="col">
        <button>Desar</button>
      </div>
    </div>
  </form>
</div>
