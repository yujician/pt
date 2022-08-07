const ADJUSTMENT_CONST_COVER1 = 1;
const ADJUSTMENT_CONST_COVER2 = 1;
const ADJUSTMENT_CONST_CONTENT1 = 0.7;
const A_COLOR_PRINTING = 3000; // 印刷代：カラー＝3000
const A_MONO_PRINTING = 800; // 印刷代：モノクロ＝800
const B_COLOR_PRINTING = 3000; // 印刷代：カラー＝3000
const B_MONO_PRINTING = 700; // 印刷代：モノクロ＝700
const GOOD_QUALITY = 165; // 上質
const MATTE_COAT = 175; // マットコート
const MATTE_POST = 175; // マットポスト
const COAT = 175; // コート
const A_SIZE = 38;
const B_SIZE = 55;
// const CONTENT_INI_VAL = 165; // 𝐵𝐵：単価（初期値165）
const SPACE = "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"
const CARDBOARD_BOX = 1000;
const A4_AREA = 297 / 1000 * 210 / 1000;
const A5_AREA = 210 / 1000 * 148 / 1000;
const B5_AREA = 257 / 1000 * 182 / 1000;
const B6_AREA = 182 / 1000 * 128 / 1000;
const A_31 = 52.3;
const A_38 = 64;
const A_48_5 = 81.4;
const A_62_5 = 104.7;
const A_76_5 = 127.9;
const A_93_5 = 157;
const A_125 = 209.3;
const B_45 = 52.3;
const B_55 = 64;
const B_70 = 81.4;
const B_90 = 104.7;
const B_110 = 127.9;
const B_135 = 157;
const B_180 = 209.3;
const CONSUMPTION_TAX = 0.10;

// let coverDesign = document.getElementsByName('coverDesign');
let isCoverExisting = document.getElementById('isCoverExisting');
let isCoverOriginal = document.getElementById('isCoverOriginal');
let originalCoverFile = document.getElementById('originalCoverFile');
let originalCoverName = '';
let originalContentName = '';
let coverVali = document.getElementById('coverVali');
let contentVali = document.getElementById('contentVali');
let coverContainer = document.getElementById('coverContainer');
let covers = document.getElementById('covers');
let coverSelect1 = document.getElementById('coverSelect1');
let coverSelect2 = document.getElementById('coverSelect2');
let coverSelect3 = document.getElementById('coverSelect3');
let coverSelect4 = document.getElementById('coverSelect4');
let coverSelect5 = document.getElementById('coverSelect5');
let coverSelect6 = document.getElementById('coverSelect6');
let isContentExisting = document.getElementById('isContentExisting');
let isContentOriginal = document.getElementById('isContentOriginal');
let originalContentFile = document.getElementById('originalContentFile');
let contentContainer = document.getElementById('contentContainer');
let contents = document.getElementById('contents');
let contentSelect1 = document.getElementById('contentSelect1');
let contentSelect2 = document.getElementById('contentSelect2');
let contentSelect3 = document.getElementById('contentSelect3');
let contentSelect4 = document.getElementById('contentSelect4');
let contentSelect5 = document.getElementById('contentSelect5');
let contentSelect6 = document.getElementById('contentSelect6');
let noteCalcBtn = document.getElementById('noteCalcBtn');
let copies = document.getElementById('copies');
let pages = document.getElementById('pages');
let paperSize = document.getElementById('lv1Pulldown');
let paperType1 = document.getElementById('lv2Pulldown');
let paperWeight1 = document.getElementById('lv3Pulldown');
let paperType2 = document.getElementById('lv4Pulldown');
let paperWeight2 = document.getElementById('lv5Pulldown');
// let coverColor = document.getElementById('lv6Pulldown');
// let coverColor = document.getElementsByName('frontBack');
let frontBack = document.getElementById('frontBack');
let frontBack1 = document.getElementById('frontBack1');
let frontBack2 = document.getElementById('frontBack2');
let frontBack3 = document.getElementById('frontBack3');
let frontBack4 = document.getElementById('frontBack4');
let frontBack5 = document.getElementById('frontBack5');
let contentColor = document.getElementById('lv8Pulldown');
let Processing = document.getElementById('lv9Pulldown');
let proofreading = document.getElementById('proofreading');
let binding = document.getElementById('lv11Pulldown'); 
let SpecialPPFee = document.getElementById('SpecialProcessingVali');
let paperSizeAlert = document.getElementById('paperSizeAlert');
let coverPaperVali = document.getElementById('coverPaperVali');
let contentPaperVali = document.getElementById('contentPaperVali');
let coverColorVali = document.getElementById('coverColorVali');
let contentColorVali = document.getElementById('contentColorVali');
let paperWeight1Area = document.getElementById("paperWeight1Area");
let paperWeight2Area = document.getElementById("paperWeight2Area");
let proccessOptionVali = document.getElementById('proccessOptionVali');
let bindingVali = document.getElementById('bindingVali');
let pagesVali1 = document.getElementById('pagesVali1');
let pagesVali2 = document.getElementById('pagesVali2');
let copiesAlert = document.getElementById('copiesAlert');
let pagesAlert = document.getElementById('pagesAlert');
// let optionProccess = document.getElementById('optionProccess')
let coverPaper = document.getElementById('coverPaper');
let contentPaper = document.getElementById('contentPaper');
let optionPP = document.getElementById('optionPP');
let frontBackArea = document.getElementById('frontBackArea');
let isKadomaru = document.getElementById('isKadomaru');
let isHolds = document.getElementById('isHolds')
let numberHolds = document.getElementById('numberHolds')
let coverOrContent = document.getElementsByName('coverOrContent');
let coverProof = document.getElementById('coverProof');
let contentProof = document.getElementById('contentProof');
let numberHoldsVali = document.getElementById('numberHoldsVali');
let numberHoldsArea = document.getElementById('numberHoldsArea');
let proofreadingVali = document.getElementById('proofreadingVali');
let proofreadingArea = document.getElementById('proofreadingArea');
let coverProofArea = document.getElementById('coverProofArea');
let isProofcheckedVali = document.getElementById('isProofcheckedVali');
let isPart = document.getElementById('isPart');
let wholeOrPartArea = document.getElementById('wholeOrPartArea');
let wholeOrPartVali = document.getElementById('wholeOrPartVali');
let isWhole = document.getElementById('isWhole');
let numberPartsArea = document.getElementById('numberPartsArea');
let numberParts = document.getElementById('numberParts');
let calcResult = document.getElementById('calcResult');
let printingAmount = document.getElementById('printingFee');
let printingFeeArea1 = document.getElementById('printingFeeArea1');
let printingFeeArea2 = document.getElementById('printingFeeArea2');
let printingFeeArea3 = document.getElementById('printingFeeArea3');
let printingFeeArea4 = document.getElementById('printingFeeArea4');
let printingFeeArea5 = document.getElementById('printingFeeArea5');
let processFee = document.getElementById('processFee');
let processFeeArea1 = document.getElementById('processFeeArea1');
let processFeeArea2 = document.getElementById('processFeeArea2');
let proofreadingFee = document.getElementById('proofreadingFee');
let proofreadingFeeInt = document.getElementById('proofreadingFeeInt');
let proofreadingFeeArea1 = document.getElementById('proofreadingFeeArea1');
let proofreadingFeeArea2 = document.getElementById('proofreadingFeeArea2');
let NumberOfDelivery = document.getElementById('NumberOfDelivery');
let postageFee = document.getElementById('postageFee');
// let postageFeeArea1 = document.getElementById('postageFeeArea1');
let postageFeeArea2 = document.getElementById('postageFeeArea2');
let subtotal = document.getElementById('subtotal');
let subtotalFee = document.getElementById('subtotalFee');
let subtotalArea = document.getElementById('subtotalArea');
let consumptionTax = document.getElementById('consumptionTax');
let consumptionTaxArea = document.getElementById('consumptionTaxArea');
let totalAmountFee = document.getElementById('totalAmountFee');
let showtotalFee = document.getElementById('showtotalFee');
let totalAmountFeeArea = document.getElementById('totalAmountFeeArea');
let confirmBtn = document.getElementById('confirm');
let selectPageMessage = document.getElementById('selectPageMessage');

// window.onload = function(){
//   // ページ読み込み時に実行したい処理
//   if ( paperSize.value == 0 ) {
//     coverPaper.style.opacity = 0.4;
//     contentPaper.style.opacity = 0.4;
//     paperWeight1Area.style.opacity = 0.4;
//     paperWeight2Area.style.opacity = 0.4;
//   }
// }


// 「計算する」ボタンをクリック時 ------------------------------------------------------------------
noteCalcBtn.addEventListener('click', function() {

  // オリジナル表紙ファイルを選択時にファイル名取得
  if ( originalCoverFile.value ) { // 表紙でオリジナルファイルが選択されていたら
    originalCoverName = document.getElementById("originalCoverFile").files[0]
    originalCoverFileInput.value = originalCoverName.name; // ファイル名
  }
  else {
    originalCoverFileInput.value = '';
  }

  // オリジナル本文ファイルを選択時にファイル名取得
  if ( originalContentFile.value ) { // 本文でオリジナルファイルが選択されていたら
    originalContentName = document.getElementById("originalContentFile").files[0]
    originalContentFileInput.value = originalContentName.name; // ファイル名
  }
  else {
    originalContentFileInput.value = '';
  }
  
  let printTotalFee = 0;
  // calcResult.innerHTML = '<p>再計算する</p>';
  calcResult.style.display = 'block';
  confirmOrderTrue();
  coverPaperVali.style.display = 'none';
  contentPaperVali.style.display = 'none';
  coverColorVali.style.display = 'none';
  contentColorVali.style.display = 'none';

  if ( paperSize.value == 0 ) {// 用紙サイズが未選択の時
    paperSizeAlert.style.display = 'block';
    paperSizeAlert.innerHTML = "<span class=text-danger>※はじめに用紙サイズを選択して下さい</span>";
    calcResult.style.display = 'none';
    confirmOrderFalse();
  }
  else {// 用紙サイズが選択されている時
    paperSizeAlert.style.display = 'none';

    if ( copies.value == 0 ) { // 部数が未入力の時
      copiesAlert.style.display = 'block';
      copiesAlert.innerHTML = "<span class=text-danger>※部数を入力して下さい</span>";
      calcResult.style.display = 'none';
      confirmOrderFalse();
    } else {
      copiesAlert.style.display = 'none';
    }

    if ( pages.value == 0 ) { // 本文ページ数が未入力の時
      pagesAlert.style.display = 'block';
      pagesAlert.innerHTML = "<span class=text-danger>※本文のページ数を入力して下さい</span>";
      calcResult.style.display = 'none';
      confirmOrderFalse();
    } 
    else {
      pagesAlert.style.display = 'none';
        if ( pages.value % 2 != 0 ) { // 偶数でない時
          pagesVali1.style.color ='#b22222'; //「※偶数でご入力ください」を強調表示
          pagesVali1.style.fontSize = '1.0rem';
          calcResult.style.display = 'none';
          confirmOrderFalse();
          }
        else { // 偶数の時
          pagesVali1.style.color = '#2f4f4f';
          pagesVali1.style.fontSize = '0.9rem';
          // 製本で「中綴じ」が選択されたかどうか
          if ( binding.value == 3 ) {// 製本で「中綴じ」が選択されている時
            if ( pages.value % 4 != 0 ) {// ページ数が4の倍数でない時
              pagesVali1.style.color ='#2f4f4f'; //「※偶数でご入力ください」を通常表示
              pagesVali1.style.fontSize = '0.9rem';
              pagesVali2.style.color ='#b22222'; //「「製本」欄が「中綴じ」の場合は次の4の倍数に繰り上げて計算され、仕上がりも4の倍数になります。」を表示
              pagesVali2.style.fontSize = '1.0rem';
              }
          }
        }
    }

    // 表紙代の計算
    let val1 = 0;
    let val1in = 0;
    if ( paperSize.value == 99 ) { // 用紙サイズが「その他」の時
      val1in = 0;
      if ( paperType1.value == 0 ) { // 表紙の紙質が未選択時
        coverPaperVali.innerHTML = "<span class=text-danger>※表紙の紙質を選択して下さい</span>";
        coverPaperVali.style.display = 'block';
      }
      else { coverPaperVali.style.display = 'none'; }
    }
    else { // 用紙サイズが「その他」以外の時
      if ( paperType1.value != 99 ) { // 表紙の紙質が「その他」以外を選択時
        if ( paperType1.value == 0 || paperWeight1.value == 0 ) {
          coverPaperVali.style.display = 'block';
          coverPaperVali.innerHTML = "<span class=text-danger>※表紙の紙質又は紙の厚さを選択して下さい</span>";
          calcResult.style.display = 'none';
          confirmOrderFalse();
        } 
        // else if ( paperType1.value == 5 ) {
        //   val1in = GOOD_QUALITY * 4/8000 * copies.value;
        // } 
        else {
          let coverType = '';
          switch ( paperSize.value ) {
            case ("1"): coverType = "4"; break;
            case ("2"): coverType = "8"; break;
            case ("4"): coverType = "8"; break;
            case ("5"): coverType = "16"; break;
          }
          let PaperUnitPrice = '';
          switch ( paperType1.value ) {
            case ("5"): PaperUnitPrice = GOOD_QUALITY; break; // 170
            case ("6"): PaperUnitPrice = MATTE_COAT; break; // 185
            case ("7"): PaperUnitPrice = MATTE_POST; break; // 185
            case ("8"): PaperUnitPrice = COAT; break; // 185
          }
          val1in = (( paperWeight1.value * PaperUnitPrice ) / ( coverType * 1000 )) * copies.value; // 表紙紙代
        }
      }
      else { // 用紙サイズで「その他」を選択時
        val1in = 0;
      }
    }

    val1 = Math.round(val1in);

    // coverPaperVali.innerHTML = "表紙"+ SPACE + val1.toLocaleString() + "&nbsp;円"; // Math.round(val).toLocaleString()は整数で3桁カンマ区切り
    printTotalFee += val1;

    // 本文紙代の計算
    let pagesVal = pages.value; // 製本が中綴じの時、本文ページ数を4の倍数に繰り上げる
    let val2 = 0;
    
    if ( paperSize.value == 99 ) { // 用紙サイズが「その他」の時
      if ( paperType2.value == 0 ) { // 本文の紙質が未選択時
        contentPaperVali.innerHTML = "<span class=text-danger>※本文の紙質を選択して下さい</span>";
        contentPaperVali.style.display = 'block';
        calcResult.style.display = 'none';
        confirmOrderFalse();
      }
      else { contentPaperVali.style.display = 'none'; }
    }
    else { // 用紙サイズが「その他」以外の時
      if ( paperType2.value != 99 ) { // 本文の紙質で「その他」以外を選択時
        if ( paperWeight2.value == 0 ) { // 厚さが「選択」の時
          contentPaperVali.style.display = 'block';
          contentPaperVali.innerHTML = "<span class=text-danger>※本文の紙質又は紙の厚さを選択して下さい</span>";
          calcResult.style.display = 'none';
          confirmOrderFalse();
        }
        else { // 厚さが「選択」以外の時;
          if ( binding.value == 3 ) {
            if ( pages.value % 4 == 1 ) { pagesVal = pages.value * 1 + 3; }
            else if ( pages.value % 4 == 2 ) { pagesVal = pages.value * 1 + 2; }
            else if ( pages.value % 4 == 3 ) { pagesVal = pages.value * 1 + 1; }
            else { pagesVal = pagesVal }
          }
          else { pagesVal = pagesVal }
        }

        let DING = '';
        switch ( paperSize.value ) {
          case ("1"): DING = "16"; break; // A4の時
          case ("2"): DING = "32"; break; // A5の時
          case ("4"): DING = "32"; break; // B5の時
          case ("5"): DING = "64"; break; // B6の時
        }

        let PaperUnitPrice = '';
        switch ( paperType2.value ) {
          case ("5"): PaperUnitPrice = GOOD_QUALITY; break; // 170
        }

        let MUSEN_BINDING = '';
        switch ( binding.value ) { // 製本
          case ("1"): MUSEN_BINDING = "0"; break; // なしの時
          case ("2"): MUSEN_BINDING = copies.value * 3; break; // 無線綴じの時
          case ("3"): MUSEN_BINDING = "0"; break; // 中綴じの時
        }

        let val =0;
        // 本文紙代
        if ( paperSize.value == 1 || paperSize.value == 2 ) { // A判の時
          val = (( A_MONO_PRINTING * 1 + copies.value * 1 ) * pages.value - ( copies.value * pages.value / DING ) * 
          ( paperWeight2.value * PaperUnitPrice / 1000 )) * ADJUSTMENT_CONST_CONTENT1 + MUSEN_BINDING * 1;
        }
        else if ( paperSize.value == 4 || paperSize.value == 5 ) {
          val = (( B_MONO_PRINTING * 1 + copies.value * 1 ) * pages.value - ( copies.value * pages.value / DING ) * 
          ( paperWeight2.value * PaperUnitPrice / 1000 )) * ADJUSTMENT_CONST_CONTENT1 + MUSEN_BINDING * 1;
        }

        val2 = Math.round(val);

            // if ( paperSize.value == 1 | paperSize.value == 2 ) { // A4、A5版の時
            //   if ( paperWeight2.value - A_SIZE > 0 ) { // 厚さが基準値38より大きい値の時
            //     if (paperSize.value == 1 ) { // A4版の時
            //       val = ( paperWeight2.value - A_SIZE ) * CONTENT_INI_VAL * pagesVal / 16000 * copies.value;
            //     } else { // A5版の時
            //       val = ( paperWeight2.value - A_SIZE ) * CONTENT_INI_VAL * pagesVal / 32000 * copies.value;
            //     }
            //   } else { // 厚さが基準値38より小さい値の時
            //     if (paperSize.value == 1 ) { // A4版の時
            //       val = 1 * CONTENT_INI_VAL * pagesVal / 16000 * copies.value;
            //     } else { // A5版の時
            //       val = 1 * CONTENT_INI_VAL * pagesVal / 32000 * copies.value;
            //     }
            //   }
            // }
            // else  { // B5、B6版の時 かつ ( paperSize.value == 4 | paperSize.value == 5 )
            //   if ( paperWeight2.value - 55 > 0 ) { // 厚さが基準値55より大きい値の時
            //     if (paperSize.value == 4 ) { // B5版
            //       val = ( paperWeight2.value - 55 ) * CONTENT_INI_VAL * pagesVal / 32000 * copies.value;
            //     } else { // paperSize.value == 5の時 (B6版)
            //       val = ( paperWeight2.value - 55 ) * CONTENT_INI_VAL * pagesVal / 64000 * copies.value;
            //     }
            //   } else { // 厚さが基準値55より小さい値の時
            //     if (paperSize.value == 4 ) { // B5版
            //       val = 1 * CONTENT_INI_VAL * pagesVal / 32000 * copies.value;
            //     } else { // paperSize.value == 5の時 (B6版)
            //       val = 1 * CONTENT_INI_VAL * pagesVal / 64000 * copies.value;
            //     }
            //   }
            // }
          // contentPaperVali.innerHTML = "本文"+ SPACE + val2.toLocaleString() + "&nbsp;円";
      }
      if ( paperSize.value == 99 ) { // 本文の紙質で「その他」を選択時
        contentPaperVali.style.display = 'none';
        val2 = 0;
      }
    }

    printTotalFee += val2;
    // 表紙カラー代の計算
    let val3 = 0;
    let val3in = 0;

    if ( frontBack1.checked == false && frontBack2.checked == false && frontBack3.checked == false && frontBack4.checked == false && frontBack5.checked == false ) {
      coverColorVali.style.display = 'block';
      coverColorVali.innerHTML = "<span class=text-danger>※表紙カラー選択して下さい</span>";
      calcResult.style.display = 'none';
      confirmOrderFalse();
    }
    if ( paperSize.value == 1 || paperSize.value == 2 ) { // A判の時
      if ( frontBack1.checked == true ) { //「表紙カラー」で「両面カラー」が選択されている時
        val3in = ( A_COLOR_PRINTING * 1 + copies.value * 1 ) * 4 * ADJUSTMENT_CONST_COVER1;// 表紙カラー代
      }
      else { // 「両面カラー」以外が選択されている時
        val3in = ( A_COLOR_PRINTING * 1 + copies.value * 1 ) * 4 * ADJUSTMENT_CONST_COVER1 * ADJUSTMENT_CONST_COVER2; // 両面カラー以外は4*0.7
      }
    }
    else if ( paperSize.value == 4 || paperSize.value == 5 ) { // B判の時
      if ( frontBack1.checked == true ) { //「表紙カラー」で「両面カラー」が選択されている時
        val3in = ( B_COLOR_PRINTING * 1 + copies.value * 1 ) * 4 * ADJUSTMENT_CONST_COVER1;
      }
      else { // 「両面カラー」以外が選択されている時
        val3in = ( B_COLOR_PRINTING * 1 + copies.value * 1 ) * 4 * ADJUSTMENT_CONST_COVER1 * ADJUSTMENT_CONST_COVER2;
      }
    }
    val3 = Math.round(val3in);
      // coverColorVali.innerHTML = "表紙"+ SPACE + val3.toLocaleString() + "&nbsp;円";

    printTotalFee += val3;
    // 本文印刷代の計算
    // let val4 = 0;

    if ( contentColor.value == 0 ) { //「本文カラー」が「選択」の時
      contentColorVali.innerHTML = "<span class=text-danger>※本文カラーを選択して下さい</span>";
      contentColorVali.style.display = 'block';
      calcResult.style.display = 'none';
      confirmOrderFalse();
        if ( binding.value == 0 ) {
          bindingVali.style.display = 'block';
          bindingVali.innerHTML = "<span class=text-danger>※製本を選択して下さい</span>";
        } 
        else { // 「本文カラー」が「選択」以外、且つ「製本」が「選択」以外の時
          bindingVali.style.display = 'none';
        }
    }
    else { //「本文カラー」が「選択」以外の時
      contentColorVali.style.display = 'none';
      bindingVali.style.display = 'none';
      let val =0;
        if ( binding.value == 0 ) {
          bindingVali.style.display = 'block';
          bindingVali.innerHTML = "<span class=text-danger>※製本を選択して下さい</span>";
        }
        // else if ( binding.value == 2 ) { // 無線綴じの場合
        // val = ( MONO_PRINTING + copies.value * 1 ) * pagesVal * ADJUSTMENT_CONST_2 + copies.value * 3;  // 無線綴じの場合の追加料金（1冊3円追加）
        // // * 1 をすることで数値型にできる 1200 + 1 = 12001 になってしまわないように。
        // }
      //   else {
      //   val = ( MONO_PRINTING + copies.value * 1 ) * pagesVal * ADJUSTMENT_CONST_2; // 本文印刷代
      //   }
      // val4 = Math.round(val);
      // contentColorVali.innerHTML =  "本文"+ SPACE + val4.toLocaleString() + "&nbsp;円";
    }

    // printTotalFee += val4;


    // 特殊加工のバリデーション
    let proccessOptionVali = document.getElementById('proccessOptionVali');

    if ( Processing.value == 0 ) {
      proccessOptionVali.style.display = 'block';
      proccessOptionVali.innerHTML = "<span class=text-danger>※特殊加工を選択して下さい</span>";
      calcResult.style.display = 'none';
      confirmOrderFalse();
    } else {
      proccessOptionVali.style.display = 'none';
    }

    if ( isHolds.checked == true ) {
      if ( numberHolds.value > 0 ) { // 穴数が選択時
        numberHoldsVali.style.display = "none";
        if ( numberHolds.value == 99 ) {
          numberHoldsVali.style.display = "block";
          numberHoldsVali.innerHTML = "<span class=text-danger>※その他を選択された場合は備考欄へご記入下さい</span>";
        }
      }
      else { // 穴数が未選択時
        calcResult.style.display = 'none';
        confirmOrderFalse();
        numberHoldsVali.style.display = "block";
        numberHoldsVali.innerHTML = "<span class=text-danger>※穴数を選択して下さい</span>";
      }
    }
    else {
      numberHoldsVali.style.display = "none";
    }


    let processTotalFee = 0;
    let val6 = 0;
    let val7 = 0;
    let val8 = 0;

 // 特殊加工大の計算
    if ( Processing.value == 2 || Processing.value == 4 ) { // 片面のPP、マットPPの時
      val6 = 5000 * 1 + 15 * copies.value;
    }
    // else if ( Processing.value == 3 || Processing.value == 5 ) { // 裏面有りの時
    //   val6 = 5000 * 1 + 15 * copies.value * 2;
    // }
     else { val6 = 0; } //「その他」の時

    if ( isKadomaru.checked ) { // 角丸有りの時
      val7 = 2 * copies.value;
    } else { val7 = 0; }

    if ( isHolds.checked ) { // 穴有りの時
      if ( numberHolds.value > 0 ) { // 穴数が0より大きい値の時
        val8 = 1000 * 1 + ( pages.value / 2 + 2 ) * 0.2 * numberHolds.value * copies.value;
      } else { val8 = 0; }
    } else { val8 = 0; }

    processTotalFee = Math.round(val6) + Math.round(val7) + Math.round(val8);

 // 校正のバリデーション
    if ( proofreading.value == 0 ) {
      proofreadingVali.style.display = 'block';
      proofreadingVali.innerHTML = "<span class=text-danger>※校正を選択して下さい</span>";
      calcResult.style.display = 'none';
      confirmOrderFalse();
    }
    else if (proofreading.value == 4 ) { //「本紙校正」を選択時
      proofreadingVali.style.display = 'none';
      
      if ( coverProof.checked == false && contentProof.checked == false ) {//「表紙」と「本文」が共に未選択時
        wholeOrPartVali.style.display = 'none';
        isProofcheckedVali.style.display = 'block';
        isProofcheckedVali.innerHTML = "<span class=text-danger>※「表紙」、本文」をチェックして下さい</span>";
        wholeOrPartVali.style.display = 'none';
        calcResult.style.display = 'none';
        confirmOrderFalse();
      }
      else if ( contentProof.checked == true ) { // 「本文」が選択時
        isProofcheckedVali.style.display = 'none';
        wholeOrPartVali.style.display = 'none';
        if ( isWhole.checked == false ) { //「全体」が未選択時
          if ( isPart.checked == false ) { // 且つ「部分」も未選択時
            wholeOrPartVali.style.display = 'block';
            wholeOrPartVali.innerHTML = "<span class=text-danger>" + SPACE + "※「部分」又は「全体」を選択して下さい</span>";
            calcResult.style.display = 'none';
            confirmOrderFalse();
          }
          else { //「全体」は未選択時で「部分」のみが選択時
            if (numberParts.value == 0 ) { //「部分」のページ分が0の時
              calcResult.style.display = 'none';
              confirmOrderFalse();
              wholeOrPartVali.style.display = 'block';
              wholeOrPartVali.innerHTML = "<span class=text-danger>" + SPACE + "※何ページ分の校正かを選択して下さい</span>";
            }
            else {
              wholeOrPartVali.style.display = 'none';
            }
          }
        }
        else { //「全体」が選択時
          wholeOrPartVali.style.display = 'none';
        }
      }
      else { //「表紙」が選択時
        wholeOrPartVali.style.display = 'block';
        isProofcheckedVali.style.display = 'none';
      }
    }
    else { //「本紙校正」以外を選択時
      proofreadingVali.style.display = 'none';
      isProofcheckedVali.style.display = 'none';
      coverProof.checked = false;
      contentProof.checked = false;
      isPart.checked = false;
      isWhole.checked = false;
    }



// 印刷代を表示-------------------------------------------
    let coverDesignChar = '';
    let contentDesignChar = '';
    let paperSizeChar = "";
    let bindingChar = "";
    let paperType1Char = "";
    let coverWeightInputChar = "";
    let coverColorChar = "";
    let frontBacksChar = '';
    let paperType2Char = "";
    let contentWeightInputChar = "";
    let contentColorChar = "";
    let showTotalFee = Math.round(printTotalFee);

    if ( isCoverExisting.checked ) { // 既存の表紙デザインから選択時
      if ( coverSelect1.checked ) { coverDesignChar = "スタンダード1"; }
      else if ( coverSelect2.checked ) { coverDesignChar = "スタンダード2"; }
      else if ( coverSelect3.checked ) { coverDesignChar = "趣味"; }
      else if ( coverSelect4.checked ) { coverDesignChar = "学習塾ノート1"; }
      else if ( coverSelect5.checked ) { coverDesignChar = "学習塾ノート2"; }
      else if ( coverSelect6.checked ) { coverDesignChar = "スポーツ"; }
    }
    else {
      coverDesignChar = 'originalCover'; // 表紙でオリジナルファイルをアップロードした時
    }
    coverDesignInput.value = coverDesignChar;

    if ( isContentExisting.checked ) { // 既存の本文デザインから選択時
      if ( contentSelect1.checked ) { contentDesignChar = "罫線"; }
      else if ( contentSelect2.checked ) { contentDesignChar = "罫線＋区切り線"; }
      else if ( contentSelect3.checked ) { contentDesignChar = "マス目"; }
      else if ( contentSelect4.checked ) { contentDesignChar = "罫線＋メモ欄"; }
      else if ( contentSelect5.checked ) { contentDesignChar = "マス目＋メモ欄"; }
      else if ( contentSelect6.checked ) { contentDesignChar = "ドット"; }
      else if ( isCoverMuji.checked ) { contentDesignChar = "無地"; }
    }
    else {
      contentDesignChar = 'originalContent'; // 本文でオリジナルファイルをアップロードした時
    }
    contentDesignInput.value = contentDesignChar;

    switch ( paperSize.value ) {
      case "1": paperSizeChar = "A4"; break;
      case "2": paperSizeChar = "A5"; break;
      case "4": paperSizeChar = "B5"; break;
      case "5": paperSizeChar = "B6"; break;
      case "99": paperSizeChar = "その他"; break;
    }
    paperSizeInput.value = paperSizeChar;

    switch ( binding.value ) {
      case "1": bindingChar = "なし"; break;
      case "2": bindingChar = "無線"; break;
      case "3": bindingChar = "中綴じ"; break;
    }
    bindingInput.value = bindingChar;
    printingFeeArea5.innerHTML = "&nbsp;製本：" + bindingChar;

    if ( showTotalFee == 0 || showTotalFee < 0 || paperSize.value == 99 || paperType1.value == 99 || paperType2.value == 99 ) {
      printingAmount.value = "ー";
      printingFeeArea1.innerHTML = "&nbsp;&nbsp;" + paperSizeChar + "&nbsp;&nbsp;" + "オリジナルノート、" + copies.value * 1 + "冊、" + pagesVal * 1 + "ページ";
    }
    else {
        // pagesValは「厚さが「選択」(「その他」）以外の時」↑を参照
        printingAmount.value = printTotalFee.toLocaleString();
        printingFeeArea1.innerHTML = "&nbsp;&nbsp;" + paperSizeChar + "&nbsp;&nbsp;" + "オリジナルノート、" + copies.value * 1 + "冊、" + pagesVal * 1 + "ページ";
    }

    switch ( paperType1.value ) { // 表紙紙質
      case "5": paperType1Char = "上質"; break;
      case "6": paperType1Char = "マットコート"; break;
      case "7": paperType1Char = "マットポスト"; break;
      case "8": paperType1Char = "コート"; break;
      case "99": paperType1Char = "その他"; break;
    }
    paperType1Input.value = paperType1Char;

    switch ( paperWeight1.value ) { // 表紙紙質
      case "0": coverWeightInputChar = "ー"; break;
      // 菊判（A判）
      case "31": coverWeightInputChar = "31（28.5）"; break; // 上質
      case "38": coverWeightInputChar = "38（35）"; break; // 上質
      case "48.5": coverWeightInputChar = "48.5（44.5）"; break; // 上質、マットポスト、コート
      case "62.5": coverWeightInputChar = "62.5（57.5）"; break; // 上質、マットポスト、コート
      case "76.5": coverWeightInputChar = "76.5（70.5）"; break; // 上質、マットポスト、コート
      case "93.5": coverWeightInputChar = "93.5（86.5）"; break; // 上質、マットポスト、コート
      case "125": coverWeightInputChar = "125（ー）"; break; // 上質、マットポスト、コート
      case "104": coverWeightInputChar = "104（ー）"; break; // マットポスト
      case "153": coverWeightInputChar = "153（ー）"; break; // マットポスト
      case "47": coverWeightInputChar = "47（43.5）"; break; // コート
      case "50.5": coverWeightInputChar = "50.5（46.5）"; break; // コート
      // 46判（B判）
      case "45": coverWeightInputChar = "45（43.5）"; break; // 上質`
      case "55": coverWeightInputChar = "55（53）"; break; // 上質
      case "70": coverWeightInputChar = "70（67.5）"; break; // 上質
      case "90": coverWeightInputChar = "90（ー）"; break; // 上質、マットコート、コート
      case "110": coverWeightInputChar = "110（ー）"; break; // 上質、マットコート、コート
      case "135": coverWeightInputChar = "135（ー）"; break; // 上質、マットコート、コート
      case "180": coverWeightInputChar = "180（ー）"; break; // 上質、マットポスト、コート
      case "70": coverWeightInputChar = "70（ー）"; break; // マットコート
      case "150": coverWeightInputChar = "150（ー）"; break; // マットポスト
      case "220": coverWeightInputChar = "220（ー）"; break; // マットポスト
      case "68": coverWeightInputChar = "68（ー）"; break; // コート
      case "73": coverWeightInputChar = "73（70.5）"; break; // コート
    }
    coverWeightInput.value = coverWeightInputChar;

    switch ( paperWeight2.value ) { // 本文紙質
      case "0": contentWeightInputChar = "ー"; break;
      // 菊判（A判）
      case "31": contentWeightInputChar = "31（28.5）"; break; // 上質
      case "38": contentWeightInputChar = "38（35）"; break; // 上質
      case "48.5": contentWeightInputChar = "48.5（44.5）"; break; // 上質、マットポスト、コート
      case "62.5": contentWeightInputChar = "62.5（57.5）"; break; // 上質、マットポスト、コート
      case "76.5": contentWeightInputChar = "76.5（70.5）"; break; // 上質、マットポスト、コート
      case "93.5": contentWeightInputChar = "93.5（86.5）"; break; // 上質、マットポスト、コート
      case "125": contentWeightInputChar = "125（ー）"; break; // 上質、マットポスト、コート
      // 46判（B判）
      case "45": contentWeightInputChar = "45（43.5）"; break; // 上質
      case "55": contentWeightInputChar = "55（53）"; break; // 上質
      case "70": contentWeightInputChar = "70（67.5）"; break; // 上質
      case "90": contentWeightInputChar = "90（ー）"; break; // 上質、マットコート、コート
      case "110": contentWeightInputChar = "110（ー）"; break; // 上質、マットコート、コート
      case "135": contentWeightInputChar = "135（ー）"; break; // 上質、マットコート、コート
      case "180": contentWeightInputChar = "180（ー）"; break; // 上質、マットポスト、コート
    }
    contentWeightInput.value = contentWeightInputChar;
    
    // 表紙カラー
    if ( frontBack1.checked ) { coverColorChar = "両面カラー";}
    if ( frontBack2.checked ) { coverColorChar = "片面カラー";}
    if ( frontBack3.checked ) { coverColorChar = "カラー裏モノクロ";}
    if ( frontBack4.checked ) { coverColorChar = "両面モノクロ";}
    if ( frontBack5.checked ) { coverColorChar = "片面モノクロ";}
    if ( !frontBack1.checked && !frontBack2.checked && !frontBack3.checked && !frontBack4.checked && !frontBack5.checked)
      {coverColorChar = "0";}
    coverColorInput.value = coverColorChar;

    // switch ( frontBacks.value ) { // 表紙カラー表・裏
    //   case ("1"): frontBacksChar = "両面カラー"; break;
    //   case ("2"): frontBacksChar = "片面カラー"; break;
    //   case ("3"): frontBacksChar = "カラー裏モノクロ"; break;
    //   case ("4"): frontBacksChar = "両面モノクロ"; break;
    //   case ("5"): frontBacksChar = "片面モノクロ"; break;
    // }
    // frontBacksInput.value = frontBacksChar;

    switch ( paperType2.value ) { // 本文紙質
      case ("5"): paperType2Char = "上質"; break;
      case ("99"): paperType2Char = "その他"; break;
    }
    paperType2Input.value = paperType2Char;

    switch ( contentColor.value ) { // 本文カラー
      case ("12"): contentColorChar = "単色黒"; break;
      case ("13"): contentColorChar = "単色シアン"; break;
      case ("14"): contentColorChar = "単色マゼンタ"; break;
      case ("15"): contentColorChar = "単色黄"; break;
      case ("0"): contentColorChar = "0"; break;
    }
    contentColorInput.value = contentColorChar;

    // printingFeeArea2.innerHTML = SPACE + "&nbsp;表紙：" + paperType1Char + "、厚さ&nbsp;" + paperWeight1.value + "、" + coverColorChar + "、" + frontBacksChar + "&nbsp;";
    printingFeeArea3.innerHTML = "&nbsp;表紙：" + paperType1Char + "、厚さ&nbsp;" + coverWeightInputChar + "、" + coverColorChar + "&nbsp;";
    printingFeeArea4.innerHTML = "&nbsp;本文：" + paperType2Char + "、厚さ&nbsp;" + contentWeightInputChar + "、" + contentColorChar + "&nbsp;";
  
    let proccessChar = '';
    let kadomaruChar = '';
    let holdsChar = '';
    let numberHoldsChar = '';
    let proofreadingChar = '';
    let coverOrContentChar = '';
    let partOrWholeChar = '';


    // 特殊加工代を表示
    switch ( Processing.value ) {
      case ("0"): proccessChar = "0"; break;
      case ("1"): proccessChar = "表紙特殊加工なし"; break;
      case ("2"): proccessChar = "PP加工"; break;
      // case ("3"): proccessChar = "PP加工（両面）"; break;
      case ("4"): proccessChar = "マットPP加工"; break;
      // case ("5"): proccessChar = "マットPP加工（両面）"; break;
      case ("99"): proccessChar = "その他"; break;
      }
    proccessInput.value = proccessChar;

    switch ( isKadomaru.checked ) {
      case (true): kadomaruChar = "角丸あり"; break;
      case (false): kadomaruChar = "角丸なし"; break;
    }
    isKadomaruInput.value = kadomaruChar;

    switch ( isHolds.checked ) {
      case (true): holdsChar = "穴あり"; break;
      case (false): holdsChar = "穴なし"; break;
    }
    isHoldsInput.value = holdsChar;

    if ( numberHolds.value > 0 ) {
      if ( numberHolds.value == 99 ) {
        numberHoldsChar = "その他"; 
      } 
      else { 
        numberHoldsChar = numberHolds.value * 1 + "個";
      }
    } else {
      numberHoldsChar = ""; 
    }
    numberHoldsInput.value = numberHoldsChar;

    let processFeeVal = 0;
    if ( Processing.value == 0 || Processing.value == 99 || numberHolds.value == 99 ) { // 表紙特殊加工が「選択して下さい」又は「その他」又は穴数が「その他」の時
      processFeeVal = "(未計算)";
    }
    else { // 表紙特殊加工が「PP加工」「マットPP加工」(両面含む）が選択されている時
      processFeeVal = processTotalFee;
    }
    processFee.value = processFeeVal.toLocaleString();
    processFeeArea2.innerHTML = "(&nbsp;" + processFeeVal.toLocaleString() + "&nbsp;円&nbsp;)";

    if ( isHolds.checked ) {
      processFeeArea1.innerHTML = "&nbsp;" + proccessChar + "、" + kadomaruChar + "、" + holdsChar + "（穴数 = " + numberHoldsChar + "）";
    }
    else {
      processFeeArea1.innerHTML = "&nbsp;" + proccessChar + "、" + kadomaruChar + "、" + holdsChar + "&nbsp;";
    }

    // 本紙校正の本文部分のページ数のバリデーション
    if ( contentProof.checked ) {
      if ( isPart.checked ) {
        if ( numberParts.value > 0 ) {
          if ( Number(pages.value) < Number(numberParts.value) ) { // 本文部分選択時に「本文ページ数」より大きいページ数を選択時
            wholeOrPartVali.style.display = 'block';
            wholeOrPartVali.innerHTML = "<span class=text-danger>" + SPACE + "※本文ページ数以下を選択して下さい。</span>";
            selectPageMessage.style.display = 'none';
            calcResult.style.display = 'none';
            confirmOrderFalse();
          }
          else {
            wholeOrPartVali.style.display = 'none';
            selectPageMessage.style.display = 'block';
          }
        }
        else {
          wholeOrPartVali.style.display = 'block';
          wholeOrPartVali.innerHTML = "<span class=text-danger>" + SPACE + "※何ページ分の校正かを選択して下さい</span>";
        }
      }
    }
    else {
      wholeOrPartVali.style.display = 'none';
    }

    // 校正の金額計算、表示
    switch ( proofreading.value ) { // 校正
      case ("1"): proofreadingChar = "なし"; break;
      case ("2"): proofreadingChar = "メール校正"; break;
      case ("3"): proofreadingChar = "紙校正"; break;
      case ("4"): proofreadingChar = "本紙校正"; break;
    }
    proofreadingInput.value = proofreadingChar;

    if ( proofreading.value == 4 ) { // 校正で「本紙校正」選択時
      if ( coverProof.checked == true ) { // 本紙校正で「表紙」のみをチェック時
        if ( contentProof.checked == false ) {
          coverOrContentChar = "表紙";
          partOrWholeChar = "";
          proofreadingFeeInt = 10000;
          proofreadingFeeArea1.innerHTML = "&nbsp;本紙校正&nbsp;:&nbsp;" + coverOrContentChar;
        }
        else if ( contentProof.checked == true ) { // 本紙校正で「表紙」と「本文」両方をチェック時
          coverOrContentChar = "表紙、本文";
          if ( isWhole.checked ) {
            partOrWholeChar = "全体";
            proofreadingFeeInt = 10000 + 10000 * Math.ceil( pages.value / 4 ); // 本文ページ数を4で割って繰り上げ
            proofreadingFeeArea1.innerHTML = "&nbsp;本紙校正&nbsp;:&nbsp;" + coverOrContentChar + partOrWholeChar + "（" + pages.value + "ページ分）";
          } else {
            partOrWholeChar = "部分";
            proofreadingFeeInt = 10000 + 10000 * numberParts.value / 4;
            proofreadingFeeArea1.innerHTML = "&nbsp;本紙校正&nbsp;:&nbsp;" + coverOrContentChar + partOrWholeChar + "（" + numberParts.value + "ページ分）";
          }
        }
      }
      else if ( coverProof.checked == false ) { // 本紙校正で「本文」のみをチェック時
        if ( contentProof.checked == true ) {
          coverOrContentChar = "本文";
          if ( isWhole.checked ) {
            partOrWholeChar = "全体";
            proofreadingFeeInt = 10000 * Math.ceil( pages.value / 4 ); // 本文ページ数を4で割って繰り上げ; // 本文ページ数を4で割って繰り上げ
            proofreadingFeeArea1.innerHTML = "&nbsp;本紙校正&nbsp;:&nbsp;" + coverOrContentChar + partOrWholeChar + "（" + pages.value + "ページ分）";
          }
          else {
            partOrWholeChar = "部分";
            proofreadingFeeInt = 10000 * numberParts.value / 4;
            proofreadingFeeArea1.innerHTML = "&nbsp;本紙校正&nbsp;:&nbsp;" + coverOrContentChar + partOrWholeChar + "（" + numberParts.value + "ページ分）";
          }
        }
      }
      let coverOrContentInput = document.getElementById('coverOrContentInput');
      coverOrContentInput.value = coverOrContentChar;
      partOrWholeInput.value = partOrWholeChar;

    } // ここまで「校正」で「本紙校正」選択時
    else { // 校正で「本紙校正」以外選択時
      proofreadingFeeInt = 0
      proofreadingFeeArea1.innerHTML = "&nbsp;" + proofreadingChar + "&nbsp;";
    }
    proofreadingFee.value = proofreadingFeeInt.toLocaleString();
    proofreadingFeeArea2.innerHTML = "(&nbsp;" +  proofreadingFee.value + "&nbsp;円&nbsp;)";

    // 送料を表示
    let paperArea = 0;
    let paperWeightAB = 0;
    let val5 = 0;
    let postageWeight = 0;
    let floorPostageBox = 0;
    let advancePostageBox = 0;
    let postageFeeVal = 0;

    switch ( paperSize.value ) {
      case "1": paperArea = A4_AREA; break;
      case "2": paperArea = A5_AREA; break;
      case "4": paperArea = B5_AREA; break;
      case "5": paperArea = B6_AREA; break;
    }
    switch ( paperWeight2.value ) {
      case "31": paperWeightAB = A_31; break;
      case "38": paperWeightAB = A_38; break;
      case "48.5": paperWeightAB = A_48_5; break;
      // case "50.5": paperWeightAB = A_48_5; break;
      case "62.5": paperWeightAB = A_62_5; break;
      case "76.5": paperWeightAB = A_76_5; break;
      case "93.5": paperWeightAB = A_93_5; break;
      case "125": paperWeightAB = A_125; break;
      case "45": paperWeightAB = B_45; break;
      case "55": paperWeightAB = B_55; break;
      case "70": paperWeightAB = B_70; break;
      case "90": paperWeightAB = B_90; break;
      case "110": paperWeightAB = B_110; break;
      case "135": paperWeightAB = B_135; break;
      case "180": paperWeightAB = B_180; break;
    }

    val5 = paperArea * paperWeightAB * ( 4 + pagesVal * 1 ) / 2 // 1冊分の厚さ(g)
    val5 = val5 * copies.value; // 冊数分の厚さ(g)
    postageWeight = Math.floor(( val5 / 1000) * 10 ) / 10; // 厚さをkgへ変換
    floorPostageBox = Math.floor(( postageWeight / 24.5 ) * 10 ) / 10; // 段ボール箱数（小数点あり）24.5kg/1箱

    if ( floorPostageBox != Number.isInteger(floorPostageBox)) { // 整数ではない時
      advancePostageBox = Math.ceil(floorPostageBox); // 整数へ繰り上げ
    }
    else {
      advancePostageBox = floorPostageBox;
    }

    if ( val5 > 0 && advancePostageBox < 1 ) { // 1冊分の厚さ(g)が0より大きく且つ段ボール箱数が1箱未満の時
      advancePostageBox = 1; // 1箱としてカウントする
    }

    if ( showTotalFee == 0 || showTotalFee < 0 || paperSize.value == 99 || paperType1.value == 99 || paperType2.value == 99 || Processing.value == 99 || numberHolds.value == 99 || NumberOfDelivery.value == 99 ) {
      advancePostageBox = "(未計算)";
      postageFeeVal = "(未計算)"; //「その他」がどこかで選択されている場合

    }
    else {
      postageFeeVal = CARDBOARD_BOX * ( advancePostageBox * 1 + NumberOfDelivery.value * 1 ); // （納品箇所数-1）個を加える（例）2ヶ所の時はプラス1箱
    }
    postageFee.value = postageFeeVal.toLocaleString();
    // postageFeeArea1.innerHTML = "&nbsp;段ボール&nbsp;" + advancePostageBox.toLocaleString() + "&nbsp;個口";
    postageFeeArea2.innerHTML = postageFeeVal.toLocaleString() + "&nbsp;円";
    // else {
    //   postageFee = CARDBOARD_BOX * advancePostageBox;
    //   postageFeeArea1.innerHTML = SPACE + SPACE + "&nbsp;&nbsp;&nbsp;&nbsp;" + postageFee.toLocaleString() + "&nbsp;円" + SPACE + 
    //       "（&nbsp;" + advancePostageBox.toLocaleString() + "&nbsp;箱&nbsp;&nbsp;=&nbsp;&nbsp;" + postageWeight.toLocaleString() + "&nbsp;kg" + 
    //           "（商品の厚さ）÷&nbsp;&nbsp;25&nbsp;kg（段ボール1箱分））";
    // }

    // 単価を計算
    let unitPriceFee = 0;
    let unitPriceFee1 = 0;
    let unitPriceFee2 = 0;
    if ( showTotalFee == 0 || showTotalFee < 0 || paperSize.value == 99 || paperType1.value == 99 || paperType2.value == 99 || Processing.value == 99 || numberHolds.value == 99 ) {
      unitPriceInput.value = "(未計算)";
    }
    else {
      unitPriceFee1 = (printTotalFee + processTotalFee + proofreadingFeeInt) / copies.value;
      unitPriceFee2 = Math.round(unitPriceFee1); // 小数点第2位で四捨五入
      unitPriceFee = unitPriceFee2.toLocaleString();
      unitPriceInput.value = unitPriceFee;
    }

    // 商品代 = 印刷代 + 特殊加工代 + 校正代
    let productPrice = 0;
    if ( showTotalFee == 0 || showTotalFee < 0 || paperSize.value == 99 || paperType1.value == 99 || paperType2.value == 99 || Processing.value == 99 || numberHolds.value == 99 ) {
      productPrice = "(未計算)";
    }
    else {
      // productPrice = ( printTotalFee + processTotalFee + proofreadingFeeInt );
      productPrice = unitPriceFee2 * copies.value; // 商品代 = 単価 * 部数
    }
    productPriceInput.value = productPrice.toLocaleString();
    printingFeeArea2.innerHTML = "&nbsp;&nbsp;" + productPriceInput.value + "&nbsp;円"; 

    // 小計を表示
    let subtotalFee = 0;
    if ( showTotalFee == 0 || showTotalFee < 0 || paperSize.value == 99 || paperType1.value == 99 || paperType2.value == 99 || Processing.value == 99 || numberHolds.value == 99 || NumberOfDelivery.value == 99 ) {
      subtotalFee = "(未計算)";
    }
    else {
      subtotalFee = productPrice + Number(postageFeeVal);
    }
    subtotal.value = subtotalFee.toLocaleString();
    subtotalArea.innerHTML = subtotal.value + "&nbsp;円";

    // 消費税を表示
    let consumptionTaxInt = 0;
    if ( showTotalFee == 0 || showTotalFee < 0 || paperSize.value == 99 || paperType1.value == 99 || paperType2.value == 99 || Processing.value == 99 || numberHolds.value == 99 || NumberOfDelivery.value == 99 ) {
      consumptionTaxInt = "(未計算)";
    }
    else {
      consumptionTaxInt = Math.round(subtotalFee * 0.1);
    }
    consumptionTax.value = consumptionTaxInt.toLocaleString();
    consumptionTaxArea.innerHTML = consumptionTax.value + "&nbsp;円";

    // 合計金額を表示
    let totalAmountInt = 0;
    if ( showTotalFee == 0 || showTotalFee < 0 || paperSize.value == 99 || paperType1.value == 99 || paperType2.value == 99 || Processing.value == 99 || numberHolds.value == 99 || NumberOfDelivery.value == 99 ) {
      totalAmountInt = "(未計算)"
    } 
    else {
      totalAmountInt =  subtotalFee + consumptionTaxInt;
    }
    totalAmountFee.value = totalAmountInt.toLocaleString();
    totalAmountFeeArea.innerHTML = totalAmountFee.value + "&nbsp;円";
    showtotalFee.innerHTML = "<h2>合計見積金額&nbsp;&nbsp;&nbsp;" + totalAmountFee.value + "&nbsp;円</h2>";

    // 表紙デザインのファイルが未選択時
    if ( isCoverOriginal.checked == true && !originalCoverFile.value ) {
      calcResult.style.display = 'none';
      confirmOrderFalse();
      coverVali.style.display = "inline"; // バリデーションを表示
      coverVali.innerHTML = "<span class=text-danger>" + SPACE + SPACE + "※表紙ファイルを選択して下さい</span>";
    }
    else {
      coverVali.style.display = "none";
    }

    // 本文デザインのファイルが未選択時
    if ( isContentOriginal.checked == true && !originalContentFile.value ) {
      calcResult.style.display = 'none';
      confirmOrderFalse();
      contentVali.style.display = "inline"; // バリデーションを表示
      contentVali.innerHTML = "<span class=text-danger>" + SPACE + SPACE + "※本文ファイルを選択して下さい</span>";
    }
    else {
      contentVali.style.display = "none";
    }
  } // 用紙サイズが選択されていたら--終了タグ
}); // 「計算する」ボタンがクリックされた時、終了


  // 「確認画面へ」ボタンを活性
  function confirmOrderTrue() {
    confirmBtn.disabled = false;
    confirmBtn.classList.remove('btn-secondary');
    confirmBtn.classList.add('btn-danger');
  }

  // 「確認画面へボタン」を非活性
  function confirmOrderFalse() {
    confirmBtn.disabled = true;
    confirmBtn.classList.remove('btn-danger');
    confirmBtn.classList.add('btn-secondary');
  }




// change function() -----------------------------------------------------------------
// 表紙デザインを既存かオリジナルか
isCoverExisting.addEventListener('change', function() {
  if ( isCoverExisting.checked ) { //「既存のデザイン」をチェック時
    coverVali.style.display = "none"; // バリデーションを非表示
    coverContainer.style.opacity = 1; // 表紙のデザインを活性
    coverSelect1.disabled = false;
    coverSelect2.disabled = false;
    coverSelect3.disabled = false;
    coverSelect4.disabled = false;
    coverSelect5.disabled = false;
    coverSelect6.disabled = false;
    coverSelect1.checked = true;
    originalCoverFile.value = '';
    originalCoverFile.style.display = "none"; // ファイル選択ボタン非表示
  }
});

isCoverOriginal.addEventListener('change', function() {
  if ( isCoverOriginal.checked ) { //「表紙デザインをアップロードする」をチェック時
    coverContainer.style.opacity = 0.5; // 既存デザインを非活性で選択不可に
    coverSelect1.disabled = true;
    coverSelect2.disabled = true;
    coverSelect3.disabled = true;
    coverSelect4.disabled = true;
    coverSelect5.disabled = true;
    coverSelect6.disabled = true;
    coverSelect1.checked = false;
    coverSelect2.checked = false;
    coverSelect3.checked = false;
    coverSelect4.checked = false;
    coverSelect5.checked = false;
    coverSelect6.checked = false;
    originalCoverFile.style.display = "block"; // ファイル選択ボタン表示
  }
});

// 本文デザインを既存かオリジナルか
isContentExisting.addEventListener('change', function() {
  if ( isContentExisting.checked ) { //「既存のデザイン」をチェック時
    contentVali.style.display = "none"; // バリデーションを非表示
    contentContainer.style.opacity = 1; // 本文のデザインを活性
    contentSelect1.disabled = false;
    contentSelect2.disabled = false;
    contentSelect3.disabled = false;
    contentSelect4.disabled = false;
    contentSelect5.disabled = false;
    contentSelect6.disabled = false;
    contentSelect1.checked = true;
    originalContentFile.value = '';
    originalContentFile.style.display = "none"; // ファイル選択ボタン非表示
  }
});

isContentOriginal.addEventListener('change', function() {
  if ( isContentOriginal.checked ) { //「本文デザインをアップロードする」をチェック時
    contentContainer.style.opacity = 0.5; // 本文のデザインを非活性
    contentSelect1.disabled = true;
    contentSelect2.disabled = true;
    contentSelect3.disabled = true;
    contentSelect4.disabled = true;
    contentSelect5.disabled = true;
    contentSelect6.disabled = true;
    contentSelect1.checked = false;
    contentSelect2.checked = false;
    contentSelect3.checked = false;
    contentSelect4.checked = false;
    contentSelect5.checked = false;
    contentSelect6.checked = false;
    originalContentFile.style.display = "block";
  }
});

// 表紙ファイルを選択時、未選択時の変化でバリデーション表示、非表示
originalCoverFile.addEventListener('change', function() {
  if ( isCoverOriginal.checked == true && originalCoverFile.value ) {// ファイルが選択された時
    coverVali.style.display = "none"; // バリデーションを非表示
  }
  else if ( isCoverOriginal.checked == true && !originalCoverFile.value ) {
    coverVali.style.display = "inline"; // バリデーションを表示
    coverVali.innerHTML = "<span class=text-danger>" + SPACE + SPACE + "※表紙ファイルを選択して下さい</span>";
  }
});

// 本文ファイルを選択時、未選択時の変化でバリデーション表示、非表示
originalContentFile.addEventListener('change', function() {
  if ( isContentOriginal.checked == true && originalContentFile.value ) {// ファイルが選択された時
    contentVali.style.display = "none"; // バリデーションを非表示
  }
  else if ( isContentOriginal.checked == true && !originalContentFile.value ) {
    contentVali.style.display = "inline"; // バリデーションを表示
    contentVali.innerHTML = "<span class=text-danger>" + SPACE + SPACE + "※表紙ファイルを選択して下さい</span>";
  }
});

// 「用紙サイズ」を変更時
paperSize.addEventListener('change', function() {
    calcResult.style.display = 'none';
    confirmOrderFalse();
    paperSizeAlert.style.display = "none"; //「用紙サイズ」で「選択」以外を選択時にバリデーションメッセージを消す
    coverPaper.style.opacity = 1;
    contentPaper.style.opacity = 1;
   
    if ( paperSize.value == 99 ) { // 用紙サイズで「その他」を選択時
      paperWeight1Area.style.opacity = 0.4;
      paperWeight2Area.style.opacity = 0.4;
      if ( paperType1.value != 0 ) {
       coverPaperVali.style.display = 'none';
      }
      if ( paperType2.value != 0 ) {
        contentPaperVali.style.display = 'none';
       }      
    }
    else { // 用紙サイズで「その他」以外を選択時で
      if ( paperType1.value == 0 || paperType1.value == 99 ) { // 表紙の紙質で「その他」を選択時
        paperWeight1Area.style.opacity = 0.4;
        paperWeight2Area.style.opacity = 0.4;
      }
      else {
        paperWeight1Area.style.opacity = 1;
        paperWeight2Area.style.opacity = 1;
      }
    }
    
});

// 部数を変更時
copies.addEventListener('change', function() {

  calcResult.style.display = 'none';
  confirmOrderFalse();
  if ( copies.value != 0 ) {
    copiesAlert.style.display = 'none';
  } else { copiesAlert.style.display = 'block'; }
});

// 本文ページ数を変更時
pages.addEventListener('change', function() {

  calcResult.style.display = 'none';
  confirmOrderFalse();
  if ( pages.value == 0 ) { // 本文ページ数が0又は未入力の時
    pagesAlert.style.display = 'block';
    pagesAlert.innerHTML = "<span class=text-danger>※本文のページ数を入力して下さい。</span>";
  } else {
    pagesAlert.style.display = 'none';
      if ( pages.value % 2 != 0 ) { // 偶数でない時
        pagesVali1.style.color ='#b22222'; //「※偶数でご入力ください」を強調表示
        pagesVali1.style.fontSize = '1.0rem';
        }
      else { // 偶数の時
        pagesVali1.style.color = '#2f4f4f'; //「※偶数でご入力ください」を通常表示
        pagesVali1.style.fontSize = '0.9rem';
        // 製本で「中綴じ」が選択されたかどうか
        if ( binding.value == 3 ) { // 製本で「中綴じ」が選択されている時
          if ( pages.value % 4 != 0 ) { // ページ数が4の倍数でない時
            pagesVali2.style.color ='#b22222'; //「「製本」欄が「中綴じ」の場合は次の4の倍数に繰り上げて計算され、仕上がりも4の倍数になります。」を強調表示
            pagesVali2.style.fontSize = '1.0rem';
            }
          else { // ページ数が4の倍数の時
            pagesVali2.style.color ='#2f4f4f';
            pagesVali2.style.fontSize = '0.9rem';
          }
        }
        else { // 製本で「中綴じ」以外が選択されている時
            pagesVali2.style.color ='#2f4f4f';
            pagesVali2.style.fontSize = '0.9rem';
          }
      }
  }
});

// 「表紙の紙質」でその他を選択時に紙の厚さを半透明にする
paperType1.addEventListener('change', function() {

  calcResult.style.display = 'none';
  confirmOrderFalse();
  if ( paperSize.value == 99 ) { // 用紙サイズが「その他」の時
    paperWeight1Area.style.opacity = 0.4;
    coverPaperVali.style.display = "none";
  }
  else { // 用紙サイズが「その他」以外の時
    if (paperType1.value == 99 ) { //「表紙の紙質」で「その他」を選択時
      paperWeight1Area.style.opacity = 0.4;
      coverPaperVali.style.display = "none";
    }
    else { 
      paperWeight1Area.style.opacity = 1;
    }
  }
});

//「表紙の紙質」と「紙の厚さ」で「選択」以外を選択時にバリデーションメッセージを消す
paperWeight1.addEventListener('change', function() {
  
  calcResult.style.display = 'none';
  confirmOrderFalse();
  if ( paperType1.value != 0 && paperWeight1.value != 0 ) {
    coverPaperVali.style.display = "none";
  }
  else { coverPaperVali.style.display = "block"; }
});

// 「本文の紙質」と「紙の厚さ」で「選択」以外を選択時にバリデーションメッセージを消す
// 「本文の紙質」でその他を選択時に紙の厚さを半透明にする

paperType2.addEventListener('change', function() {

  calcResult.style.display = 'none';
  confirmOrderFalse();
  if ( paperSize.value == 99 ) { // 用紙サイズが「その他」の時
    paperWeight2Area.style.opacity = 0.4;
    contentPaperVali.style.display = "none";
  }
  else { // 用紙サイズが「その他」以外の時
    if (paperType2.value == 99 ) { //「本文の紙質」で「その他」を選択時
      paperWeight2Area.style.opacity = 0.4;
      coverPaperVali.style.display = "none";
    }
    else { //「本文の紙質」で「その他」以外を選択時
      paperWeight2Area.style.opacity = 1;
    }
  }
});

paperWeight2.addEventListener('change', function() {

  calcResult.style.display = 'none';
  confirmOrderFalse();
  if ( paperType2.value != 0 && paperWeight2.value != 0 ) {
    contentPaperVali.style.display = "none";
  }
  else { contentPaperVali.style.display = "block"; }
});

// 「表紙カラー」で「選択」以外を選択時にバリデーションメッセージを消す
// 表紙カラーの図を選択時に表の表紙のカラー値が連動}
function closeCoverColorVali () {
  calcResult.style.display = 'none';
  confirmOrderFalse();
  coverColorVali.style.display = "none";
  if ( frontBack1.checked ) { frontBack.value = "両面カラー";}
  if ( frontBack2.checked ) { frontBack.value = "片面カラー";}
  if ( frontBack3.checked ) { frontBack.value = "カラー裏モノクロ";}
  if ( frontBack4.checked ) { frontBack.value = "両面モノクロ";}
  if ( frontBack5.checked ) { frontBack.value = "片面モノクロ";}
} 

// 「表紙カラー」と「表・裏」で「選択」以外を選択時にバリデーションメッセージを消す
// frontBacks.addEventListener('change', function() {

//   calcResult.style.display = 'none';
//   confirmOrderFalse();
//   if ( coverColor.value != 0 && frontBacks.value != 0 ) {
//     coverColorVali.style.display = "none";
//   }
//   else { coverColorVali.style.display = "block"; }
// });

// 「本文カラー」で「選択」以外を選択時にバリデーションメッセージを消す
contentColor.addEventListener('change', function() {

  calcResult.style.display = 'none';
  confirmOrderFalse();
  if ( contentColor.value != 0 ) {
    contentColorVali.style.display = "none";
  }
});

// 「製本」で「選択」以外を選択時にバリデーションメッセージを消す
binding.addEventListener('change', function() {

  calcResult.style.display = 'none';
  confirmOrderFalse();
  
  if ( binding.value != 0 ) {
    bindingVali.style.display = "none";
    if ( binding.value != 3 ) {
      pagesVali2.style.color ='#2f4f4f';
      pagesVali2.style.fontSize = '0.9rem';
    } 
    else { // 「製本」で「中綴じ」を選択時
      if ( pages.value % 4 != 0 ) { //「本文ページ数」が4の倍数以外の時
        pagesVali2.style.color ='#b22222';
        pagesVali2.style.fontSize = '1.0rem';
      }
      else { //「本文ページ数」が4の倍数の時
        pagesVali2.style.color ='#2f4f4f';
        pagesVali2.style.fontSize = '0.9rem';
      }
    }
  }
});

// 「特殊加工」で「選択」以外を選択時にバリデーションメッセージを消す
Processing.addEventListener('change', function() {

  calcResult.style.display = 'none';
  confirmOrderFalse();

  if ( Processing.value != 2 ) {
    proccessOptionVali.style.display = "none"; // 「※特殊加工を選択して下さい」を非表示
    SpecialPPFee.style.display = "none"; // 「※PPのオプションを選択して下さい」を非表示
    // optionProccess.style.opacity = 0.4;
  } else { // 「特殊加工」で「PP」を選択時
    proccessOptionVali.style.display = "none"; // 「※特殊加工を選択して下さい」を非表示
    SpecialPPFee.style.display = "block"; // 「※PPのオプションを選択して下さい」を表示
    // optionProccess.style.opacity = 1;
  }
});

// frontBackArea.addEventListener('change', function() {
//     optionPP.style.opacity = 1;
// });

// 7→9連動
// coverColor.addEventListener('change', function() {
//   if ( coverColor.value == 1 && frontBacks > 0 ) {
//     optionPP.style.opacity = 1;
//   } 
//   else if ( coverColor.value > 1 ) {
//     optionPP.style.opacity = 0.4;
//     // Processing.disabled = true;
//   }
// });

isKadomaru.addEventListener('change', function() {
  calcResult.style.display = 'none';
  confirmOrderFalse();
});

isHolds.addEventListener('change', function() {
  calcResult.style.display = 'none';
  confirmOrderFalse();
  if ( isHolds.checked == false ) {
    numberHolds.value = "0";
  }

  if ( isHolds.checked == true ) {
    numberHoldsArea.style.opacity = 1;
    numberHolds.disabled = false;
  } 
  else {
    numberHoldsArea.style.opacity = 0.4;
    numberHolds.disabled = true;
    numberHoldsVali.style.display = "none";
  }
});

numberHolds.addEventListener('change', function() {
  calcResult.style.display = 'none';
  confirmOrderFalse();
  numberHoldsVali.style.display = 'none'
});

function sliceMaxLength(elem, maxLength) {
  elem.value = elem.value.slice(0, maxLength);  
} 

proofreading.addEventListener('change', function() {
  calcResult.style.display = 'none';
  confirmOrderFalse();
  proofreadingVali.style.display = 'none';
  if ( proofreading.value != 4 ) { // 「本紙校正」以外を選択時
    isProofcheckedVali.style.display = 'none';
    coverProof.checked = false;
    contentProof.checked = false;
    isPart.checked = false;
    isWhole.checked = false;
    numberParts.value = "0";
    coverProofArea.style.display = 'none';
  }
  else { // 「本紙校正」を選択時
    coverProofArea.style.display = 'block';
  }

});

function coverOrContentVali() { // 本紙校正時の「表紙」「本文」チェックボタン押下時
  calcResult.style.display = 'none';
  confirmOrderFalse();
  isProofcheckedVali.style.display = 'none';
  if ( contentProof.checked ) {
    isWhole.disabled = false;
    isPart.disabled = false;
  }
  else if ( contentProof.checked == false ) {
    isWhole.checked = false;
    isPart.checked = false;
    isWhole.disabled = true;
    isPart.disabled = true;
    numberParts.disabled = true;
    numberPartsArea.style.opacity = 0.4;
    numberParts.value = 0;    
    selectPageMessage.style.display = 'none';
    wholeOrPartVali.style.display = 'none';
  }
  else if ( isWhole.checked ) {
    isProofcheckedVali.style.display = 'none';
  }
}

function isPartStyle() { //「部分」をチェック時
  if ( isPart.checked ) {
    wholeOrPartVali.style.display = 'none';
    numberPartsArea.style.opacity = 1.0;
    numberParts.disabled = false;
  }
  else { //「全体」をチェック時
    wholeOrPartVali.style.display = 'none';
    numberPartsArea.style.opacity = 0.4;
    numberParts.disabled = true;
    numberParts.value = 0;
    selectPageMessage.style.display = 'none';
  }
};

numberParts.addEventListener('change', function() {
  calcResult.style.display = 'none';
  confirmOrderFalse();
  wholeOrPartVali.style.display = 'none';

  if ( numberParts.value > 0 ) {
    if ( Number(pages.value) < Number(numberParts.value) ) { // 本文部分選択時に「本文ページ数」より大きいページ数を選択時
      wholeOrPartVali.style.display = 'block';
      wholeOrPartVali.innerHTML = "<span class=text-danger>" + SPACE + "※本文ページ数以下を選択して下さい。</span>";
      selectPageMessage.style.display = 'none';
    }
    else {
      wholeOrPartVali.style.display = 'none';
      selectPageMessage.style.display = 'block';
      selectPageMessage.innerHTML = "<label>※&nbsp;" + numberParts.value + "頁の絵柄をご指定し備考欄にお書き下さい。</label>";
    }
  }
  else { wholeOrPartVali.style.display = 'block'; }
  
});

NumberOfDelivery.addEventListener('change', function() {
  calcResult.style.display = 'none';
  confirmOrderFalse();
});