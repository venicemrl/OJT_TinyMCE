<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TinyMCE in Laravel</title>
    <script src="https://cdn.tiny.cloud/1/kcv3b6w5oy38x36ptoeegqi16kc7zsc1k8v79iafcoxv8g17/tinymce/7/tinymce.min.js" referrerpolicy="origin"></script>
        <script>
        tinymce.init({
            selector: 'textarea#myeditorinstance', // Replace this CSS selector to match the placeholder element for TinyMCE
            plugins: 'code table lists',
            toolbar: 'undo redo | blocks | bold italic | alignleft aligncenter alignright | indent outdent | bullist numlist | code | table'
        });
        </script>
    <x-head.tinymce-config/>
  </head>
  <body>
    <h1>TinyMCE in Laravel</h1>
    <form method="post">
            <textarea id="myeditorinstance">Hello, World!</textarea>
    </form>
    <x-forms.tinymce-editor/>
  </body>
</html>