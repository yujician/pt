{{ $request->g_name }} 様

この度はお問い合わせいただきありがとうございます。
のちほど担当者よりご連絡いたします。
しばらくお待ちください。

--------------- お問い合わせ内容 ---------------
送信日時 : <?php print date("Y-m-d H:i:s");?>           
お問い合わせ番号 : {{ $request->inquiry_id }}               
ユーザーid : {{ $request->g_id }}                        
お名前 : {{ $request->g_name }}
メールアドレス : {{ $request->g_mail }}          
電話番号 : {{ $request->g_tel }}
{{-- 郵便番号 : {{ $request->u_yubin }}
住所 : {{ $request->u_jusho1 . $request->u_jusho2 . $request->u_jusho3 }} --}}
件名 : {{ $request->g_subject }}
内容 :
{{ $request->g_contents }}

----------------------------------------------
ジャスミン舎　株式会社

URL: https://pt.oto2ki.com
Mail: yujician.sumi@gmail.com
