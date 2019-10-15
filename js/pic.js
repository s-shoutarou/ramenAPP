$(function() {
  var imgWidth = $(".pic").width();
  var picnum = 0;
  //画像の分だけwidthを広げる
  var imglen = $(".image").length;
  var slideRange = imglen * imgWidth;

  $(".img-width").width(slideRange);

  //クリックでスライドさせる
  //右

  $(".right").on("click", function() {
    picnum = picnum + imgWidth;
    if (picnum < slideRange) {
      console.log(picnum);
      $(".pic").animate({
        right: picnum
      });
    }
  });

  //左
  $(".left").on("click", function() {
    if (picnum > 0) {
      picnum = picnum - imgWidth;
      console.log(picnum);
      $(".pic").animate({
        right: picnum
      });
    }
  });
});
