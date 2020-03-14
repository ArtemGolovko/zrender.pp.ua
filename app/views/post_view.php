<h1>Add Post</h1>
<form method="post" action="app/models/model_post.php">
<p>title</p>
<input id="0" type="text" minlength="3" maxlength="30"><br >
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
  </form>
  <script>
    $('form').submit(function(e){
      e.preventDefault();
      var data = new FormData();
      data.set("title", $(this).find('input#0').val())
      data.set("rte", tinymce.activeEditor.getContent());
      $.ajax({
        url: $(this).attr("action"),
        type: $(this).attr("method"),
        data: data,
        enctype: 'multipart/form-data',
        processData: false,
        contentType: false,
        cache: false,
        success: function (result) {
          alert(result);
        },
        error: function () {
          alert("error");
        }
      });
    });
  </script>