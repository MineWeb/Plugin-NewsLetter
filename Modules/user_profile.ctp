<div class="plugin-newsletter">
  <hr>
  <h3>NewsLetter</h3>
  <form method="post"  data-ajax="true" data-redirect-url="?" action="<?= $this->Html->url(array('controller' => 'newsletter', 'action' => 'ajax_updateluser')) ?>">
    <div class="form-group">
      <label><?= $Lang->get('NEWSLETTER__PROFIL_ABOUT') ?></label>
      <br>
      <small><?= $Lang->get('NEWSLETTER__PROFIL_ABOUT_EXPLAIN') ?></small>
      <div class="radio">
        <input style="margin:0;" id="nl-true" type="radio" name="newsletter-value" value="true" <?= ($user['newsletter-state'] == 'true') ? 'checked=""' : 'checked' ?>>
        <label for="nl-false"><?= $Lang->get('GLOBAL__ENABLE') ?></label>
      </div>
      <div class="radio">
        <input style="margin:0;" id="nl-false" type="radio" name="newsletter-value" value="false" <?= ($user['newsletter-state'] == 'false') ? 'checked=""': '' ?>>
        <label for="nl-false"><?= $Lang->get('GLOBAL__DISABLE') ?></label>
      </div>
    </div>
    <button type="submit" class="btn btn-primary"><?= $Lang->get('GLOBAL__SUBMIT'); ?></button>
  </form>
</div>
</br>
