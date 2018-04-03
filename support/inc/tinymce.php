<script src="<?php  echo plugin_url; ?>tinymce/tinymce.min.js"></script>
<script>
 tinymce.init({
  selector: 'textarea',
  height: 300,
  theme: 'modern',
   plugins: [
       'codesample imagetools',
  'advlist autolink lists link image charmap print preview anchor textcolor',
  'searchreplace visualblocks code fullscreen',
  'insertdatetime media table contextmenu paste code help'
  ],
  toolbar: 'insert | undo redo |  styleselect | bold italic forecolor backcolor  | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | removeformat | help | fontsizeselect ',
  content_css: [
    '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
    '//www.tinymce.com/css/codepen.min.css']
  });
</script>