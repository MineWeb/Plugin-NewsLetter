<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title"><?= $Lang->get('NEWSLETTER__TITLE') ?></h3>
                </div>
                <div class="box-body">
                  <?= $Lang->get('NEWSLETTER__COUNT') ?> <b><?= count($usersNLetter); ?></b>
                  <hr>
                  <form method="post"  class="form-horizontal" data-ajax="true" data-redirect-url="?" action="<?= $this->Html->url(array('controller' => 'Newsletter', 'action' => 'ajax_sendmail')) ?>">
                    <label><?= $Lang->get('NEWSLETTER__OBJECT_MAIL') ?></label>
                    <input type="text" class="form-control" name="subjet_msg"><br />
                    <label><?= $Lang->get('NEWSLETTER__MESSAGE_MAIL') ?></label>
                    <?= $this->Html->script('admin/tinymce/tinymce.min.js') ?>
                    <script type="text/javascript">
                    tinymce.init({
                        selector: "textarea",
                        height : 300,
                        width : '100%',
                        language : 'fr_FR',
                        plugins: "textcolor code image link",
                        toolbar: "fontselect fontsizeselect bold italic underline strikethrough link image forecolor backcolor alignleft aligncenter alignright alignjustify cut copy paste bullist numlist outdent indent blockquote code"
                     });
                    </script>
                    <textarea id="editor" name="mail_msg" cols="30" rows="10"></textarea>
                    <hr>
                    <button class="btn btn-primary"><?= $Lang->get('GLOBAL__SUBMIT'); ?></button>
                  </form>
                </div>
            </div>
        </div>
    </div>
</section>
