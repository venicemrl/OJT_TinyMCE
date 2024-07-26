<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center">TinyMCE - Laravel</h1><br> 
                <form method="post" action="{{ route('store.content') }}" class="form form-horizontal">               
                @csrf
                    <div class="form-group">
                        <label>Title</label>
                        <input type="text" name="title" class="form-control"/>
                    </div>  
                    <div class="form-group">
                        <label>Description</label>
                        <textarea name="description" rows="5" cols="40" class="form-control tinymce-editor"></textarea>
                    </div>    
                    <div class="form-group">
                        <input type="submit" value="Submit" class="btn btn-primary"/>
                    </div> 
                </form>             
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="https://cdn.tiny.cloud/1/kcv3b6w5oy38x36ptoeegqi16kc7zsc1k8v79iafcoxv8g17/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>  
    <script type="text/javascript">
  tinymce.init({
  selector: 'textarea.tinymce-editor',
  height: 500,
  menubar: false,
  plugins: [
    'advlist autolink lists link image charmap print preview anchor',
    'searchreplace visualblocks code fullscreen',
    'insertdatetime media table paste code help wordcount'
  ],
  toolbar: 'undo redo | formatselect | ' +
  'bold italic backcolor | alignleft aligncenter ' +
  'alignright alignjustify | bullist numlist outdent indent | ' +
  'removeformat | help',
  content_css: '//www.tiny.cloud/css/codepen.min.css'
});
    </script>
</body>
</html>