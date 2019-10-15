$(function() {
  $("#pic").change(function(e) {
    //$(".pic2").slideDown("slow");
    //画像プレビュー
    //formの内容が変わったら発火。eはelementのe。ファイルの内容が入る。
    var file = e.target.files[0];
    var roader = new FileReader();
    var $prev = $(".prev");
    if (file.type.indexOf("image") < 0) {
      return false;
    }
    roader.onload = (function(file) {
      $prev.empty(); //前回のデータを空にする
      return function(e) {
        $prev.append(
          $("<img>").attr({
            src: e.target.result,
            width: "150px",
            height: "150px",
            class: "preview",
            title: file.name
          })
        );
      };
    })(file);
    roader.readAsDataURL(file);
  });

  /*$(".pic2").change(function(e) {
    //プレビュー二つ目
    $(".pic3").slideDown("slow");
    //画像プレビュー
    //formの内容が変わったら発火。eはelementのe。ファイルの内容が入る。
    var file = e.target.files[0];
    var roader = new FileReader();
    var $prev2 = $(".prev2");
    if (file.type.indexOf("image") < 0) {
      return false;
    }
    roader.onload = (function(file) {
      $prev2.empty(); //前回のデータを空にする
      return function(e) {
        $prev2.append(
          $("<img>").attr({
            src: e.target.result,
            width: "150px",
            height: "150px",
            class: "preview",
            title: file.name
          })
        );
      };
    })(file);
    roader.readAsDataURL(file);
  });*/
});
