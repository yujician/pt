<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Profile;
use App\Models\OrderNumber;
use App\Models\OrderData;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Mail\OrderNoteMail;
use Illuminate\Support\Facades\File;
use PDF;

class NoteController extends Controller
{
    //
    public function showOrderNote(Request $request)
    {
         return view('contents.order_note');
    }

    public function showOrderNoteAuth(Request $request)
    {

        $user = Auth::user();
        $u_id = $user->id;

        $master_data = User::find($u_id);
        //dd($master_data->all());
        $sub_data = Profile::where('u_id', $u_id)->get();
        // dd($u_id);
        // $profile = Profile::where('u_id', $user->id)->first();
        // $inquiry = Inquiry::where('id', )->latest()->first();
        // dd($inquiry);
        return view('contents.order_note', ['user' => $user,'master_data' => $master_data, 'sub_data' => $sub_data ]);
    }

    public function showOrderNoteConfirm(Request $request)  // オリジナルノート見積り確認ページ表示
    {
        $inputs = $request->all();

        if ( $request->ExistingOrOriginal == "original" ) {
        $coverFilePath = $request->file('originalCoverFile')->store('public/uploadfiles'); // オリジナル表紙ファイルをアップロード
        $uploadedCoverFile = basename($coverFilePath);
        }
        else 
        $uploadedCoverFile = "ー";

        if ( $request->isContentOriginal == "original" ) {
        $contentFilePath = $request->file('originalContentFile')->store('public/uploadfiles'); // オリジナル本文ファイルをアップロード
        $uploadedContentFile = basename($contentFilePath);
        }
        else 
        $uploadedContentFile = "ー";

        $coverDesign = $request->coverDesignInput;
        $originalCoverFile = $request->originalCoverFileInput; //表紙ファイル名
        $contentDesign = $request->contentDesignInput;
        $originalContentFile = $request->originalContentFileInput; //本文ファイル名
        $paperSize = $request->paperSizeInput;
        $copies = $request->copies;
        $binding = $request->bindingInput;
        $pages = $request->pages;
        $paperType1 = $request->paperType1Input;
        $coverWeight = $request->coverWeightInput;
        $coverColor = $request->coverColorInput;
        // $frontBacks = $request->frontBacksInput;
        $paperType2 = $request->paperType2Input;
        $contentWeight = $request->contentWeightInput;
        $contentColor = $request->contentColorInput;
        $proccess = $request->proccessInput;
        $isKadomaru = $request->isKadomaruInput;
        $isHolds = $request->isHoldsInput;
        $numberHolds = $request->numberHoldsInput;
        $proofreading = $request->proofreadingInput;
        $coverOrContent = $request->coverOrContentInput;
        $partOrWhole = $request->partOrWholeInput;
        $numberParts = $request->numberPartsInput;
        $printingFee = $request->printingFee;
        $processFee = $request->processFee;
        $proofreadingFee = $request->proofreadingFee;
        $postageFee = $request->postageFee;
        $unitPrice = $request->unitPriceInput;
        $productPrice = $request->productPrice;
        $subtotal = $request->subtotal;
        $consumptionTax = $request->consumptionTax;
        $totalAmountFee = $request->totalAmountFee;
        $o_remarks = $request->o_remarks;
        

        // $pdf = \PDF::loadView('pdf_output');
        // $pdf->setPaper('A4');
        // return $pdf->stream();


        $u_id = $request->u_id;
        $master_data = User::find($request->u_id);
        //dd($master_data->all());
        $sub_data = Profile::where('u_id', $request->u_id)->get();
 
        return view('contents.order_note_confirm', 
        compact('uploadedCoverFile','uploadedContentFile','coverDesign','originalCoverFile','contentDesign','originalContentFile',
        'paperSize','copies','binding','pages','paperType1','coverWeight','coverColor','paperType2','contentWeight',
        'contentColor','proccess','isKadomaru','isHolds','numberHolds','proofreading','coverOrContent','partOrWhole','numberParts',
        'printingFee','processFee','proofreadingFee','postageFee','productPrice','unitPrice','subtotal','consumptionTax',
        'totalAmountFee','o_remarks','master_data','sub_data'));
    }

    public function sendOrderNote(Request $request)
    {

        // $quotationPath = $request->file('quotationPdf')->store('public/uploadPDF'); // 見積書をPDFファイルとしてアップロード
        // $quotationFile = basename($quotationPath);
        
        if ( $request->ExistingOrOriginal == "original" ) {
        $coverFileFullPath = $request->file('originalCoverFile')->store('public/uploadfiles'); // オリジナル表紙ファイルをアップロード
        $coverFilePath = basename($coverFileFullPath);
        }
        else 
        $coverFilePath = "ー";

        if ( $request->isContentOriginal == "original" ) {
        $contentFileFullPath = $request->file('originalContentFile')->store('public/uploadfiles'); // オリジナル本文ファイルをアップロード
        $contentFilePath = basename($contentFileFullPath);
        }
        else 
        $contentFilePath = "ー";

        // 見積番号用テーブル作成
        $order_number = new OrderNumber;
        $order_number->save();

        // $inputs = $request->all();
        $orderNote = new OrderData;
        $orderNote->order_number = $order_number->id;
        $orderNote->cover_name = $request->coverDesign; // 既存表紙デザイン
        $orderNote->cover_file = $request->originalCoverFile; // アップロードした表紙ファイル名
        $orderNote->cover_file_path = $coverFilePath; // アップロードした表紙ファイルパス
        $orderNote->content_name = $request->contentDesign; // 既存本文デザイン
        $orderNote->content_file = $request->originalContentFile; // アップロードした本文ファイル名
        $orderNote->content_file_path = $contentFilePath; // アップロードした本文ファイルパス
        $orderNote->paper_size = $request->paperSize; // 紙サイズ（A判かB判）
        $orderNote->copies = $request->copies; // 部数
        $orderNote->binding = $request->binding; // 綴じ方
        $orderNote->pages = $request->pages; // 本文ページ数
        $orderNote->paper_type1 = $request->paperType1; // 表紙紙質
        $orderNote->paper_weight1 = $request->coverWeightInput; // 表紙厚さ
        $orderNote->cover_color = $request->coverColor; // 表紙カラー
        $orderNote->paper_type2 = $request->paperType2; // 本文紙質
        $orderNote->paper_weight2 = $request->contentWeightInput; // 本文厚さ
        $orderNote->contents_color = $request->contentColor; // 本文カラー
        $orderNote->proccess = $request->proccess; // 表紙特殊加工
        $orderNote->is_kadomaru = $request->isKadomaru; // 角丸有無
        $orderNote->is_holds = $request->isHolds; // 穴有無
        $orderNote->number_holds = $request->numberHolds; // 穴数
        $orderNote->proofreading = $request->proofreading; // 校正
        $orderNote->cover_or_content = $request->coverOrContent; // 本紙校正→表紙／本文
        $orderNote->part_or_whole = $request->partOrWhole; // 全体／部分
        $orderNote->number_parts = $request->numberParts; // 部分の時のページ数
        $orderNote->printing_fee = $request->printingFee; // 印刷代
        $orderNote->process_fee = $request->processFee; // 特殊加工代
        $orderNote->proofreading_fee = $request->proofreadingFee; // 校正代
        $orderNote->postage_fee = $request->postageFee; // 送料
        $orderNote->product_price = $request->productPrice; // 商品代（印刷代+特殊加工代+校正代）
        $orderNote->unit_price = $request->unitPriceInput; // 単価（印刷代+特殊加工代+校正代）÷ 部数
        $orderNote->subtotal = $request->subtotal; // 小計
        $orderNote->consumption_tax = $request->consumptionTax; // 消費税
        $orderNote->total_fee = $request->totalAmountFee; // 合計金額
        $orderNote->o_remarks = $request->o_remarks; // 備考欄
        $orderNote->customer_code = $request->o_id; // ユーザーID
        $orderNote->o_company = $request->o_company; // 会社名
        $orderNote->o_name = $request->o_name; // お名前
        $orderNote->o_mail = $request->o_mail; // メールアドレス
        $orderNote->o_tel = $request->o_tel; // 電話番号
        $orderNote->o_fax = $request->o_fax; // Fax番号
        $orderNote->o_yubin = $request->o_yubin; // 郵便番号
        $orderNote->o_addr1 = $request->o_addr1; // 都道府県
        $orderNote->o_addr2 = $request->o_addr2; // 市区町村・番地
        $orderNote->o_addr3 = $request->o_addr3; // 建物名
        $orderNote->write_userinfo = $request->writeUserInfo; // お客様情報を新規登録又は上書きするか
        $orderNote->save();

        // dd($orderNote);

        // 郵便番号
        $zipcode = $request->o_yubin;
        $zip1 = substr( $zipcode ,0,3 );
        // 4文字目から最後まで取得する
        $zip2 = substr( $zipcode ,3 );
        // ハイフンで結合する
        $zipcode = $zip1 . "-" . $zip2;

        // PDFファイル名をユニークで生成
        $fileName = uniqid() . ".pdf";
        $pdf = \PDF::loadView('pdf.order_pdf', [
                'orderNote' => $orderNote,
                'zipcode' => $zipcode,
                'order_number' => $order_number->id
                ]);
        $pdf->setPaper('A4');
        // ファイルをstorage配下に一時保存
        \File::append(public_path('order_pdf/' . $fileName), $pdf->output());

        $quotationFile= public_path('order_pdf/' . $fileName);
        $params['$quotationPath'] = basename($quotationFile);
        $params['$orderNumber'] = $order_number->id;
        $params['$zipcode'] = $zipcode;
        $params['$coverFilePath'] = $orderNote->cover_file_path;
        $params['$contentFilePath'] = $orderNote->content_file_path;
        
        Mail::send(new OrderNoteMail($request, $params));
        return view('contents.thanks-ordernote');
        // return $pdf->setOption('encoding', 'utf-8')->inline();

        $pdf = \PDF::loadView('pdf.order_pdf', [
                'orderNote' => $orderNote,
                'zipcode' => $zipcode,
                'order_number' => $order_number->id
                ]);
        $pdf->setPaper('A4');
        return $pdf->stream();
    }

    
}
