<h1>Add Post</h1>
<p>title</p>
<input type="text" minlength="3" maxlength="30"><br >
<p>Post</p>
<script src="https://cdn.tiny.cloud/1/qchczas9416wvzdylwj28yi7pni19ct013xq7vlf0di7g6bi/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
<textarea>
    Welcome to your TinyMCE premium trial!
  </textarea>
  <script>
    tinymce.init({
    selector: 'textarea',
      plugins: 'a11ychecker advcode casechange formatpainter linkchecker lists checklist media mediaembed pageembed permanentpen powerpaste table advtable tinycomments tinymcespellchecker',
      toolbar: 'a11ycheck addcomment showcomments casechange checklist code formatpainter pageembed permanentpen table',
      toolbar_drawer: 'floating',
      tinycomments_mode: 'embedded',
      tinycomments_author: 'Author name',
    });
  </script>