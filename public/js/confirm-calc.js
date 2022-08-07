$(document).ready(function(){
   
  // プルダウンのoption内容をコピー
  var pd1 = $("#lv1Pulldown option").clone();
  var pd2 = $("#lv2Pulldown option").clone();
  var pd3 = $("#lv3Pulldown option").clone();
  var pd4 = $("#lv4Pulldown option").clone();
  var pd5 = $("#lv5Pulldown option").clone();
  var pd6 = $("#lv6Pulldown option").clone();
  var pd7 = $("#lv7Pulldown option").clone();
  var pd8 = $("#lv8Pulldown option").clone();
  var pd9 = $("#lv9Pulldown option").clone();
  var pd11 = $("#lv11Pulldown option").clone();
  var lv4Val = $("#lv4Pulldown").val();

  // if (lv4Val == 99 ) {
  //   $("#lv5Pulldown option").remove();
  //   $("#lv5Pulldown").append($("<option>").val("0").text("紙の種類").prop("selected", true).prop("disabled", true));
  //   $(function() {$("#paperWeight2Area").css("opacity", "0.4");});
  // }
  
  var paperSize = 0;
  var paperChanged = 0;
  
  // 1→3連動、1→5連動
  $("#lv1Pulldown").change(function () {
    // lv1のvalue取得
    var lv1Val = $("#lv1Pulldown").val();
    var lv2Val = $("#lv2Pulldown").val();
    var lv4Val = $("#lv4Pulldown").val();

    
    $("#lv2Pulldown").removeAttr("disabled");
    $("#lv4Pulldown").removeAttr("disabled");

    if (lv1Val != 99 ) { // 用紙サイズが「その他」以外の時
      paperChanged = Math.abs(paperSize * 1 - lv1Val * 1);
      paperSize = lv1Val;
    }
    else { // 用紙サイズが「その他」の時
      paperChanged = lv1Val;
      paperSize = lv1Val;
    }
      
    if (paperChanged > 1) {// 用紙サイズがA版→B版へ変化した時（A4→B5等）

        // lv2,lv4Pulldownのdisabled解除

        // 一旦、v2,v4Pulldownのoptionを削除
        // $("#lv2Pulldown option").remove();
        // $("#lv4Pulldown option").remove();

        // (コピーしていた)元のv2,v4Pulldownを表示
        // $(pd2).appendTo("#lv2Pulldown");
        // $(pd4).appendTo("#lv4Pulldown");

        // 選択値以外のクラスのoptionを削除
        // $("#lv2Pulldown option[class != p"+lv1Val+"]").remove();
        // $("#lv4Pulldown option[class != p"+lv1Val+"]").remove();

        // lv3,lv5Pulldown disabled処理
        // $("#lv3Pulldown").attr("disabled", "disabled");
        $("#lv3Pulldown option").remove();
        // $("#lv5Pulldown").attr("disabled", "disabled");
        $("#lv5Pulldown option").remove();

        // 「選択」optionを先頭に表示
        // $("#lv2Pulldown").prepend('<option value="0" selected="selected" disabled="disabled">選択して下さい</option>');

        if (lv1Val == 1 || lv1Val == 2) { // A4、A5を選択時
        // lv3Pulldownのdisabled解除
        $("#lv3Pulldown").removeAttr("disabled");
          if (lv2Val == 5) { //「表紙」が「上質」の時
            $("#lv3Pulldown").append($("<option>").val("0").text("紙の厚さ").prop("selected", true).prop("disabled", true));
            $("#lv3Pulldown").append($("<option>").val("31").text("31（28.5）"));
            $("#lv3Pulldown").append($("<option>").val("38").text("38（35）"));
            $("#lv3Pulldown").append($("<option>").val("48.5").text("48.5（44.5）"));
            $("#lv3Pulldown").append($("<option>").val("62.5").text("62.5（57.5）"));
            $("#lv3Pulldown").append($("<option>").val("76.5").text("76.5（70.5）"));
            $("#lv3Pulldown").append($("<option>").val("93.5").text("93.5（86.5）"));
            $("#lv3Pulldown").append($("<option>").val("125").text("125（ー）"));
          }
          else if (lv2Val == 6) { //「表紙」が「マットコート」の時
            $("#lv3Pulldown").append($("<option>").val("0").text("紙の厚さ").prop("selected", true).prop("disabled", true));
            $("#lv3Pulldown").append($("<option>").val("48.5").text("48.5（44.5）"));
            $("#lv3Pulldown").append($("<option>").val("62.5").text("62.5（57.5）"));
            $("#lv3Pulldown").append($("<option>").val("76.5").text("76.5（70.5）"));
            $("#lv3Pulldown").append($("<option>").val("93.5").text("93.5（86.5）"));
          }
          else if (lv2Val == 7) { //「表紙」が「マットポスト」の時
            $("#lv3Pulldown").append($("<option>").val("0").text("紙の厚さ").prop("selected", true).prop("disabled", true));
            $("#lv3Pulldown").append($("<option>").val("104").text("104（ー）"));
            $("#lv3Pulldown").append($("<option>").val("125").text("125（ー）"));
            $("#lv3Pulldown").append($("<option>").val("153").text("153（ー）"));
          }
          else if (lv2Val == 8) { //「表紙」が「コート」の時
            $("#lv3Pulldown").append($("<option>").val("0").text("紙の厚さ").prop("selected", true).prop("disabled", true));
            $("#lv3Pulldown").append($("<option>").val("47").text("47（43.5）"));
            $("#lv3Pulldown").append($("<option>").val("50.5").text("50.5（46.5）"));
            $("#lv3Pulldown").append($("<option>").val("62.5").text("62.5（57.5）"));
            $("#lv3Pulldown").append($("<option>").val("76.5").text("76.5（70.5）"));
            $("#lv3Pulldown").append($("<option>").val("93.5").text("93.5（86.5）"));
            $("#lv3Pulldown").append($("<option>").val("125").text("125（ー）"));
          }
          else {
            $("#lv3Pulldown").append('<option value="0" selected="selected" disabled="disabled">紙の厚さ</option>');
          }

          $("#lv5Pulldown").removeAttr("disabled");
          if (lv4Val == 5) { //「本文」が「上質」の時
            $("#lv5Pulldown").append($("<option>").val("0").text("紙の厚さ").prop("selected", true).prop("disabled", true));
            $("#lv5Pulldown").append($("<option>").val("31").text("31（28.5）"));
            $("#lv5Pulldown").append($("<option>").val("38").text("38（35）"));
            $("#lv5Pulldown").append($("<option>").val("48.5").text("48.5（44.5）"));
            $("#lv5Pulldown").append($("<option>").val("62.5").text("62.5（57.5）"));
            $("#lv5Pulldown").append($("<option>").val("76.5").text("76.5（70.5）"));
            $("#lv5Pulldown").append($("<option>").val("93.5").text("93.5（86.5）"));
            $("#lv5Pulldown").append($("<option>").val("125").text("125（ー）"));
          }
          else {
            $("#lv5Pulldown").append('<option value="0" selected="selected" disabled="disabled">紙の厚さ</option>');
          }
        }
        else if (lv1Val == 4 || lv1Val == 5) { // B5、B6を選択時
        // lv3Pulldownのdisabled解除
        $("#lv3Pulldown").removeAttr("disabled");
          if (lv2Val == 5) { //「表紙」が「上質」の時
            $("#lv3Pulldown").append($("<option>").val("0").text("紙の厚さ").prop("selected", true).prop("disabled", true));
            $("#lv3Pulldown").append($("<option>").val("45").text("45（43.5）"));
            $("#lv3Pulldown").append($("<option>").val("55").text("55（53）"));
            $("#lv3Pulldown").append($("<option>").val("70").text("70（67.5）"));
            $("#lv3Pulldown").append($("<option>").val("90").text("90（ー）"));
            $("#lv3Pulldown").append($("<option>").val("110").text("110（ー）"));
            $("#lv3Pulldown").append($("<option>").val("135").text("135（ー）"));
            $("#lv3Pulldown").append($("<option>").val("180").text("180（ー）"));
          }
          else if (lv2Val == 6) { //「表紙」が「マットコート」の時
            $("#lv3Pulldown").append($("<option>").val("0").text("紙の厚さ").prop("selected", true).prop("disabled", true));
            $("#lv3Pulldown").append($("<option>").val("70").text("70（ー）"));
            $("#lv3Pulldown").append($("<option>").val("90").text("90（ー）"));
            $("#lv3Pulldown").append($("<option>").val("110").text("110（ー）"));
            $("#lv3Pulldown").append($("<option>").val("135").text("135（ー）"));
          }
          else if (lv2Val == 7) { //「表紙」が「マットポスト」の時
            $("#lv3Pulldown").append($("<option>").val("0").text("紙の厚さ").prop("selected", true).prop("disabled", true));
            $("#lv3Pulldown").append($("<option>").val("150").text("150（ー）"));
            $("#lv3Pulldown").append($("<option>").val("180").text("180（ー）"));
            $("#lv3Pulldown").append($("<option>").val("220").text("220（ー）"));
          }
          else if (lv2Val == 8) { //「表紙」が「コート」の時
            $("#lv3Pulldown").append($("<option>").val("0").text("紙の厚さ").prop("selected", true).prop("disabled", true));
            $("#lv3Pulldown").append($("<option>").val("68").text("68（ー）"));
            $("#lv3Pulldown").append($("<option>").val("73").text("73（70.5）"));
            $("#lv3Pulldown").append($("<option>").val("90").text("90（ー）"));
            $("#lv3Pulldown").append($("<option>").val("110").text("110（ー）"));
            $("#lv3Pulldown").append($("<option>").val("135").text("135（ー）"));
            $("#lv3Pulldown").append($("<option>").val("180").text("180（ー）"));
          }
          else {
            $("#lv3Pulldown").append('<option value="0" selected="selected" disabled="disabled">紙の厚さ</option>');
          }

          $("#lv5Pulldown").removeAttr("disabled");
          if (lv4Val == 5) { //「本文」が「上質」の時
            $("#lv5Pulldown").append($("<option>").val("0").text("紙の厚さ").prop("selected", true).prop("disabled", true));
            $("#lv5Pulldown").append($("<option>").val("45").text("45（43.5）"));
            $("#lv5Pulldown").append($("<option>").val("55").text("55（53）"));
            $("#lv5Pulldown").append($("<option>").val("70").text("70（67.5）"));
            $("#lv5Pulldown").append($("<option>").val("90").text("90（ー）"));
            $("#lv5Pulldown").append($("<option>").val("110").text("110（ー）"));
            $("#lv5Pulldown").append($("<option>").val("135").text("135（ー）"));
            $("#lv5Pulldown").append($("<option>").val("180").text("180（ー）"));
          }
          else {
            $("#lv5Pulldown").append('<option value="0" selected="selected" disabled="disabled">紙の厚さ</option>');
          }
        }
        else { // 用紙サイズで「その他」を選択時
          $("#lv3Pulldown").prepend('<option value="0" selected="selected" disabled="disabled">紙の厚さ</option>');
          $("#lv5Pulldown").prepend('<option value="0" selected="selected" disabled="disabled">紙の厚さ</option>');
        }
        // $("#lv4Pulldown").prepend('<option value="0" selected="selected" disabled="disabled">選択して下さい</option>');
    }
  });

  // 2→3連動
  $("#lv2Pulldown").change(function () {

    // lv1、lv2のvalue取得
      var lv1Val = $("#lv1Pulldown").val();
      var lv2Val = $("#lv2Pulldown").val();
      
  if (lv1Val != 99) { // 用紙サイズが「その他」以外の時
      // lv3Pulldownのdisabled解除
      $("#lv3Pulldown").removeAttr("disabled");

      // 一旦、lv3Pulldownのoptionを削除
      $("#lv3Pulldown option").remove();

      if (lv2Val == 5) { //「表紙」が「上質」の時
        if (lv1Val == 1 || lv1Val == 2) { // A4、A5を選択時
          $("#lv3Pulldown").append($("<option>").val("0").text("紙の厚さ").prop("selected", true).prop("disabled", true));
          $("#lv3Pulldown").append($("<option>").val("31").text("31（28.5）"));
          $("#lv3Pulldown").append($("<option>").val("38").text("38（35）"));
          $("#lv3Pulldown").append($("<option>").val("48.5").text("48.5（44.5）"));
          $("#lv3Pulldown").append($("<option>").val("62.5").text("62.5（57.5）"));
          $("#lv3Pulldown").append($("<option>").val("76.5").text("76.5（70.5）"));
          $("#lv3Pulldown").append($("<option>").val("93.5").text("93.5（86.5）"));
          $("#lv3Pulldown").append($("<option>").val("125").text("125（ー）"));
        } 
        else if (lv1Val == 4 || lv1Val == 5) { // B5、B6を選択時)
          $("#lv3Pulldown").append($("<option>").val("0").text("紙の厚さ").prop("selected", true).prop("disabled", true));
          $("#lv3Pulldown").append($("<option>").val("45").text("45（43.5）"));
          $("#lv3Pulldown").append($("<option>").val("55").text("55（53）"));
          $("#lv3Pulldown").append($("<option>").val("70").text("70（67.5）"));
          $("#lv3Pulldown").append($("<option>").val("90").text("90（ー）"));
          $("#lv3Pulldown").append($("<option>").val("110").text("110（ー）"));
          $("#lv3Pulldown").append($("<option>").val("135").text("135（ー）"));
          $("#lv3Pulldown").append($("<option>").val("180").text("180（ー）"));
        }
        else {
          $("#lv3Pulldown").append('<option value="0" selected="selected" disabled="disabled">紙の厚さ</option>');
        }
      }
      else if (lv2Val == 6) { //「表紙」が「マットコート」の時
        if (lv1Val == 1 || lv1Val == 2) { // A4、A5を選択時
          $("#lv3Pulldown").append($("<option>").val("0").text("紙の厚さ").prop("selected", true).prop("disabled", true));
          $("#lv3Pulldown").append($("<option>").val("48.5").text("48.5（44.5）"));
          $("#lv3Pulldown").append($("<option>").val("62.5").text("62.5（57.5）"));
          $("#lv3Pulldown").append($("<option>").val("76.5").text("76.5（70.5）"));
          $("#lv3Pulldown").append($("<option>").val("93.5").text("93.5（86.5）"));
        }
        else if (lv1Val == 4 || lv1Val == 5) { // B5、B6を選択時)
          $("#lv3Pulldown").append($("<option>").val("0").text("紙の厚さ").prop("selected", true).prop("disabled", true));
          $("#lv3Pulldown").append($("<option>").val("70").text("70（ー）"));
          $("#lv3Pulldown").append($("<option>").val("90").text("90（ー）"));
          $("#lv3Pulldown").append($("<option>").val("110").text("110（ー）"));
          $("#lv3Pulldown").append($("<option>").val("135").text("135（ー）"));
        }
      }
      else if (lv2Val == 7) { //「表紙」が「マットポスト」の時
        if (lv1Val == 1 || lv1Val == 2) { // A4、A5を選択時
          $("#lv3Pulldown").append($("<option>").val("0").text("紙の厚さ").prop("selected", true).prop("disabled", true));
          $("#lv3Pulldown").append($("<option>").val("104").text("104（ー）"));
          $("#lv3Pulldown").append($("<option>").val("125").text("125（ー）"));
          $("#lv3Pulldown").append($("<option>").val("153").text("153（ー）"));
        }
        else if (lv1Val == 4 || lv1Val == 5) { // B5、B6を選択時)
          $("#lv3Pulldown").append($("<option>").val("0").text("紙の厚さ").prop("selected", true).prop("disabled", true));
          $("#lv3Pulldown").append($("<option>").val("150").text("150（ー）"));
          $("#lv3Pulldown").append($("<option>").val("180").text("180（ー）"));
          $("#lv3Pulldown").append($("<option>").val("220").text("220（ー）"));
        }
      }
      else if (lv2Val == 8) { //「表紙」が「コート」の時
        if (lv1Val == 1 || lv1Val == 2) { // A4、A5を選択時
          $("#lv3Pulldown").append($("<option>").val("0").text("紙の厚さ").prop("selected", true).prop("disabled", true));
          $("#lv3Pulldown").append($("<option>").val("47").text("47（43.5）"));
          $("#lv3Pulldown").append($("<option>").val("50.5").text("50.5（46.5）"));
          $("#lv3Pulldown").append($("<option>").val("62.5").text("62.5（57.5）"));
          $("#lv3Pulldown").append($("<option>").val("76.5").text("76.5（70.5）"));
          $("#lv3Pulldown").append($("<option>").val("93.5").text("93.5（86.5）"));
          $("#lv3Pulldown").append($("<option>").val("125").text("125（ー）"));
        }
        else if (lv1Val == 4 || lv1Val == 5) { // B5、B6を選択時)
          $("#lv3Pulldown").append($("<option>").val("0").text("紙の厚さ").prop("selected", true).prop("disabled", true));
          $("#lv3Pulldown").append($("<option>").val("68").text("68（ー）"));
          $("#lv3Pulldown").append($("<option>").val("73").text("73（70.5）"));
          $("#lv3Pulldown").append($("<option>").val("90").text("90（ー）"));
          $("#lv3Pulldown").append($("<option>").val("110").text("110（ー）"));
          $("#lv3Pulldown").append($("<option>").val("135").text("135（ー）"));
          $("#lv3Pulldown").append($("<option>").val("180").text("180（ー）"));
        }
      }
      else {
        $("#lv3Pulldown").append($("<option>").val("0").text("紙の厚さ").prop("selected", true).prop("disabled", true));
      }
    }
  });

  // 4→5連動
  $("#lv4Pulldown").change(function () {
    // lv1、lv4のvalue取得
    var lv1Val = $("#lv1Pulldown").val();
    var lv4Val = $("#lv4Pulldown").val();

    // lv5Pulldownのdisabled解除
    $("#lv5Pulldown").removeAttr("disabled");

    // 一旦、lv5Pulldownのoptionを削除
    $("#lv5Pulldown option").remove();

    if (lv4Val == 5) { //「本文」が「上質」の時
      if (lv1Val == 1 || lv1Val == 2) { // A4、A5を選択時
        $("#lv5Pulldown").append($("<option>").val("0").text("紙の厚さ").prop("selected", true).prop("disabled", true));
        $("#lv5Pulldown").append($("<option>").val("31").text("31（28.5）"));
        $("#lv5Pulldown").append($("<option>").val("38").text("38（35）"));
        $("#lv5Pulldown").append($("<option>").val("48.5").text("48.5（44.5）"));
        $("#lv5Pulldown").append($("<option>").val("62.5").text("62.5（57.5）"));
        $("#lv5Pulldown").append($("<option>").val("76.5").text("76.5（70.5）"));
        $("#lv5Pulldown").append($("<option>").val("93.5").text("93.5（86.5）"));
        $("#lv5Pulldown").append($("<option>").val("125").text("125（ー）"));
      } 
      else if (lv1Val == 4 || lv1Val == 5) { // B5、B6を選択時)
        $("#lv5Pulldown").append($("<option>").val("0").text("紙の厚さ").prop("selected", true).prop("disabled", true));
        $("#lv5Pulldown").append($("<option>").val("45").text("45（43.5）"));
        $("#lv5Pulldown").append($("<option>").val("55").text("55（53）"));
        $("#lv5Pulldown").append($("<option>").val("70").text("70（67.5）"));
        $("#lv5Pulldown").append($("<option>").val("90").text("90（ー）"));
        $("#lv5Pulldown").append($("<option>").val("110").text("110（ー）"));
        $("#lv5Pulldown").append($("<option>").val("135").text("135（ー）"));
        $("#lv5Pulldown").append($("<option>").val("180").text("180（ー）"));
      }
      else {
        $("#lv5Pulldown").append('<option value="0" selected="selected" disabled="disabled">紙の厚さ</option>');
      }
    }
    else {
      $("#lv5Pulldown").append($("<option>").val("0").text("紙の厚さ").prop("selected", true).prop("disabled", true));
    }
  });

   // 6→7連動 6→9連動
  $("#lv6Pulldown").change(function () {
    // lv6のvalue取得
    var lv6Val = $("#lv6Pulldown").val();

      // lv7Pulldownのdisabled解除
      $("#lv7Pulldown").removeAttr("disabled");
      
      // 一旦、lv7Pulldownのoptionを削除
      $("#lv7Pulldown option").remove();

      // (コピーしていた)元のlv7Pulldownを表示
      $(pd7).appendTo("#lv7Pulldown");

      // 選択値以外のクラスのoptionを削除
      $("#lv7Pulldown option[class != p"+lv6Val+"]").remove();

      if (lv6Val == "1") {
      // 「▼選択」optionを先頭に表示
      $("#lv7Pulldown").prepend('<option value="0" selected="selected" disabled="disabled">選択して下さい</option>');
    } else {
      // 「ー」optionを先頭に表示、またバリデーション用にvalue="10"を付与
      $("#lv7Pulldown").prepend('<option value="10" selected="selected" disabled="disabled">ー</option>');
      $("#lv9Pulldown option").remove(); // 「表紙カラー」を変化させた時に「表紙特殊加工」を一旦削除し、下記の要素を追加
      $("#lv9Pulldown").append($("<option>").val("0").text("選択して下さい").prop("selected", true).prop("disabled", true));
      $("#lv9Pulldown").append($("<option>").val("1").text("なし"));
      $("#lv9Pulldown").append($("<option>").val("2").text("PP加工"));
      $("#lv9Pulldown").append($("<option>").val("3").text("PP加工（両面）"));
      $("#lv9Pulldown").append($("<option>").val("4").text("マットPP加工"));
      $("#lv9Pulldown").append($("<option>").val("5").text("マットPP加工（両面）"));
      $("#lv9Pulldown").append($("<option>").val("6").text("その他"));
      // $("#lv9Pulldown").attr("disabled", "disabled"); //「表紙カラー」が変化しただけでは「表紙特殊加工」は非活性にしておくが、上記要素を準備しておく必要あり。
    }

  });

  // 7→9連動
  // var preFrontBack = 1;

  // $("#frontBack").change(function () {
    
  //   $("#lv9Pulldown").removeAttr("disabled"); // lv9Pulldownのdisabled解除
  //   // lv7、lv9のvalue取得
  //   var coverColor = $("#frontBack").val();
  //   var frontBackChanged = 0;

  //   frontBackChanged = preFrontBack * coverColor; // 表紙カラーの「表・裏」の前選択値×今回選択値（7の倍数かどうか）
  //   preFrontBack = coverColor; // 今回値に置き換え
  //   if (frontBackChanged % 7 == 0) { //表紙カラーの「表・裏」が前回値又は今回値が「裏なし」(val=7)の時

  //     $("#lv9Pulldown option").remove(); // 一旦、lv9Pulldownのoptionを削除
  //       //表紙カラーの「表・裏」が「裏なし」以外の時
  //     if ( $("#frontBack1").checked ) {
  //       $("#lv9Pulldown").append($("<option>").val("0").text("選択して下さい").prop("selected", true).prop("disabled", true));
  //       $("#lv9Pulldown").append($("<option>").val("1").text("なし"));
  //       $("#lv9Pulldown").append($("<option>").val("2").text("PP加工"));
  //       $("#lv9Pulldown").append($("<option>").val("3").text("PP加工（両面）"));
  //       $("#lv9Pulldown").append($("<option>").val("4").text("マットPP加工"));
  //       $("#lv9Pulldown").append($("<option>").val("5").text("マットPP加工（両面）"));
  //       $("#lv9Pulldown").append($("<option>").val("6").text("その他"));
  //     } else { // lv7Val == 7（裏なし）の時 
  //       $("#lv9Pulldown").append($("<option>").val("0").text("選択して下さい").prop("selected", true).prop("disabled", true));
  //       $("#lv9Pulldown").append($("<option>").val("1").text("なし"));
  //       $("#lv9Pulldown").append($("<option>").val("2").text("PP加工"));
  //       $("#lv9Pulldown").append($("<option>").val("4").text("マットPP加工"));
  //       $("#lv9Pulldown").append($("<option>").val("6").text("その他"));
  //     }
  //   }
  // });



$('#noteCalcBtn').on('click', function () {

  var paperSize = $("#lv1Pulldown").val();
  var copies = $("#copies").val();
  var pages = $("#pages").val();
  var binding = $("#lv11Pulldown").val();
  var paperType1 = $("#lv2Pulldown").val();
  var paperWeight1 = $("#lv3Pulldown").val();
  var coverColor = $("#coverColorInput").val();
  var paperType2 = $("#lv4Pulldown").val();
  var paperWeight2 = $("#lv5Pulldown").val();
  var contentColor = $("#contentColorInput").val();
  var process = $("#proccessInput").val();
  var proofreading = $("#proofreading").val();

  if ( paperSize == 0 || copies == 0 || pages == 0 || binding == 0 || paperType1 == 0 || paperWeight1 == 0 || coverColor == 0 || paperType2 == 0 || paperWeight2 == 0 || contentColor == 0 || process == 0 || proofreading == 0 ) {
    $(window).scrollTop($('#validation-text').position().top); 
  }
  else {
    $(window).scrollTop($('#isKadomaru').position().top);
  }
  });

});
