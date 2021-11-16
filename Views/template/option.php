<select name="kategori" id="kategori">
    <?php foreach($kategori as $key =>$value):?>
    <option value="<?= $value['idkategori'] ?>i"><?= $value['kategori'] ?></option>
    <?php endforeach; ?>
</select>