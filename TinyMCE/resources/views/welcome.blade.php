<!DOCTYPE html>
<html>
<head>
  <script
    type="text/javascript"
    src='https://cdn.tiny.cloud/1/kcv3b6w5oy38x36ptoeegqi16kc7zsc1k8v79iafcoxv8g17/tinymce/7/tinymce.min.js'
    referrerpolicy="origin">
  </script>
  <script type="text/javascript">
  tinymce.init({
    selector: 'textarea#default-editor',
    width: 1675,
    height: 400,
    plugins: [
      'advlist', 'autolink', 'link', 'image', 'lists', 'charmap', 'preview', 'anchor', 'pagebreak',
      'searchreplace', 'wordcount', 'visualblocks', 'visualchars', 'code', 'fullscreen', 'insertdatetime',
      'media', 'table', 'emoticons', 'help'
    ],
    toolbar:'undo redo | styles | bold italic | alignleft aligncenter alignright alignjustify | ' +
      'bullist numlist outdent indent | link image | print preview media fullscreen | ' +
      'forecolor backcolor emoticons | help',
    menubar: 'favs file edit view insert format tools table help',
    content_css: 'css/content.css'
    
  });
  </script>
</head>

<body>
  <h1 align="center"> TinyMCE Editor in Laravel 10 </h1>
  <form id="posts" name="posts" method="post">
	<div>
    <textarea id="default-editor"></textarea><br>	
	  <input type="hidden" name="action" id="action" value="save" />
	  <button type="submit" name="submit" class="btn btn-info saveButton">Submit</button>
  </div>
  </form>
</body>
</html>


