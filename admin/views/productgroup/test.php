<title>Image Upload with preview and Delete option - Javascript / Jquery</title>
    <script data-minify="1" src="https://www.pakainfo.com/wp-content/cache/min/1/ajax/libs/jquery/2.1.1/jquery.min.js?ver=1708940044"></script>
<style>
input[type="file"] {
  display: block;
}
.imageThumb {
  max-height: 400px;
  max-width: 400px;
  border: 2px solid;
  padding: 1px;
  cursor: pointer;
}
.pip {
  display: inline-block;
  margin: 10px 10px 0 0;
}
.img-delete {
  display: block;
  background: red;
  border: 1px solid black;
  color: white;
  text-align: center;
  cursor: pointer;
}
.img-delete:hover {
  background: white;
  color: black;
}
</style>




<div class="field" align="left">
  <h3><span class="ez-toc-section" id="Upload_your_images"></span>Upload your images<span class="ez-toc-section-end"></span></h3>
  <input type="file" id="multiple_files" name="files[]" multiple="">
</div>

 <script>
$(document).ready(function() {
  if (window.File && window.FileList && window.FileReader) {
    $("#multiple_files").on("change", function(e) {
      var multiple_files = e.target.files,
        filesLength = multiple_files.length;
      for (var i = 0; i < filesLength; i++) {
        var f = multiple_files[i]
        var fileReader = new FileReader();
        fileReader.onload = (function(e) {
          var file = e.target;
          $("<span class=\"pip\">" +
            "<img class=\"imageThumb\" src=\"" + e.target.result + "\" title=\"" + file.name + "\"/>" +
            "<br/><span class=\"img-delete\">Remove</span>" +
            "</span>").insertAfter("#multiple_files");
          $(".img-delete").click(function(){
            $(this).parent(".pip").remove();
          });
        });
        fileReader.readAsDataURL(f);
      }
    });
  } else {
    alert("|Sorry, | Your browser doesn't support to File API")
  }
});
</script>