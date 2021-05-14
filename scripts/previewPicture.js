function previewFile(input){
    var file = $("input[type=file]").get(0).files[0];

    if(file){
      var reader = new FileReader();

      reader.onload = function(){
        $("#previewImgDiv").attr("style", "background-image:url("+reader.result+");");
      }

      reader.readAsDataURL(file);
    }
}