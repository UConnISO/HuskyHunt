
<!-- begin admin head -->

<link href="<?=BASE_URL?>/admin/css/datetimepicker.min.css" rel="stylesheet">

<script src="<?=BASE_URL?>/admin/ckeditor-full/ckeditor.js"></script>
<script src="<?=BASE_URL?>/admin/ckeditor-full/adapters/jquery.js"></script>
<script src="<?=BASE_URL?>/admin/js/sprintf.js"></script>
<script src="<?=BASE_URL?>/admin/js/datetimepicker.js"></script>
<script type="text/javascript">

$(document).ready(function() {
    CKEDITOR.config.customConfig = "<?=BASE_URL?>/admin/js/ckeditor.conf.js";
    $('textarea.ckeditor').ckeditor();
});

</script>

<!-- end admin head -->
