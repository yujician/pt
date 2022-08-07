<x-admin>
<x-slot name="title">管理者管理</x-slot>

<x-slot name="header">
    <div class="container">
			<div class="row">
    			<div class="col-12 p-3">
        			<h2 class="text-secondary">管理者管理</h2>
    			</div>
			</div>
		</div>
    </x-slot>

<x-slot name="slot">
    <div class="container">

    <form method="post" action="./admin_add" class="row">
    @csrf
      <div class="col-sm-3 mb-3">
          <label for="name" class="form-label">名前</label>
          <input type="text" class="form-control" id="name" name="name" required>
      </div>
      <div class="col-sm-3 mb-3">
          <label for="password" class="form-label">パスワード</label>
          <input type="text" class="form-control" id="password" name="password" placeholder="8文字以上" required>
      </div>
      <div class="col-sm-3 mb-3">
          <label for="email" class="form-label">メールアドレス</label>
          <input type="text" class="form-control" id="email" name="email" required>
      </div>
      <div class="col-sm-3 mb-3 p-4">
          <button class="btn btn-primary mt-2" type="submit">新規登録</button>
      </div>
    </form>

        <div class="row mt-5">
            <div class="col-12">
            @csrf
            <table class="table  table-striped">
            <tr>
            <th>ID</th>
            <th>名前</th>
            <th>メールアドレス</th>
            <th>登録日</th>
            <th>管理</th>
            </tr>
            @foreach($admin_list as $list)
            <tr>
            <td>{{ $list->id }}</td>
            <td id="name_{{ $list->id }}">{{ $list->name }}</td>
            <td id="mail_{{ $list->id }}">{{ $list->email }}</td>
            <td>{{ $list->created_at }}</td>
            <td>
            <button type="button" class="btn btn-secondary btn-sm change_bt" value="{{ $list->id }}">編集</button>
            @if($list->id > 1)
            <button type="button" class="btn btn-danger btn-sm delete_bt" value="{{ $list->id }}">削除</button>
            @endif
            </td>
            </tr>
            @endforeach
            </table>

            </div>
        </div>
        <div id="message"></div>
    </div>

    <div id="delete_dialog" title="削除の確認">
      <p id="d_name"></p>
      <p id="d_mail"></p>
      <p>上記のデータを削除しますか?</p>
    </div>
    <div id="change_dialog" title="名前の編集">
      <div class="form-group">
        <label for="c_name">名前</label>
        <input type="text" class="form-control" id="c_name" name="c_name">
      </div>
      <div class="form-group pt-3">
        <label for="c_pass">パスワード</label>
        <input type="text" class="form-control" id="c_pass" name="c_pass" placeholder="8文字以上 変更なしは未入力">
      </div>
      <p id="c_mail" class="pt-3"></p>
      <p>上記のデータを変更しますか?</p>
    </div>
</x-slot>

<x-slot name="script">
    <script>
    //ブラウザ戻る無効
     history.pushState(null, null, null);
     $(window).on("popstate", function(){
         history.pushState(null, null, null);
         alert('ブラウザの戻るボタンは使えません。');
     });
    var change_id = 0;
    var delete_id = 0;
    //編集ボタン
    $('.change_bt').on('click',function(e){
      change_id = $(this).attr('value');
      let change_name = $('#name_' + change_id).html();
      let change_mail = $('#mail_' + change_id).html();
      console.log(change_id);
      $('#c_name').attr('value',change_name);
      $('#c_mail').html(change_mail);
      $( "#change_dialog" ).dialog('open')

    });
    //削除ボタン
    $('.delete_bt').on('click',function(e){
      delete_id = $(this).attr('value');
      let del_name = $('#name_' + delete_id).html();
      let del_mail = $('#mail_' + delete_id).html();
      console.log(delete_id);
      $('#d_name').html(del_name);
      $('#d_mail').html(del_mail);
      $( "#delete_dialog" ).dialog('open')
    });
    //削除確認ダイアログ
    $( "#delete_dialog" ).dialog({
      autoOpen: false,
      resizable: false,
      height: "auto",
      width:"auto",
      fluid: true,
      modal: true,
      buttons: {
        "削除する": function() {
          $( this ).dialog( "close" );
          deleteData();
        },
        "キャンセル": function() {
          $( this ).dialog( "close" );
        }
      }
    });
    //変更ダイアログ
    $( "#change_dialog" ).dialog({
      autoOpen: false,
      resizable: false,
      height: "auto",
      width:"auto",
      fluid: true,
      modal: true,
      buttons: {
        "変更する": function() {
          $( this ).dialog( "close" );
          changeData();
        },
        "キャンセル": function() {
          $( this ).dialog( "close" );
        }
      }
    });
    //データ削除
    function deleteData(){
    //データ送信
    document.body.style.cursor = 'wait';
    let code = document.getElementsByName("_token").item(0).value;
    // FormData オブジェクトを用意
    var fd = new FormData();
    fd.append("_token", code);
    fd.append("delete_id",delete_id);

    // XHR で送信
    $.ajax({
      url: "./admin_delete",
      type: "POST",
      data: fd,
      mode: 'multiple',
      processData: false,
      contentType: false,
      timeout: 10000,  // 単位はミリ秒
      error: function(XMLHttpRequest, textStatus, errorThrown){
        err=XMLHttpRequest.status+"\n"+XMLHttpRequest.statusText;
        alert(err);
        document.body.style.cursor = 'auto';
      },
      beforeSend: function(xhr){

      }
    })
    .done(function( res ) {
      document.body.style.cursor = 'auto';
      //console.log(res);
      //$('#message').html(res);
      location.reload();
    });
    }

    //データ変更
    function changeData(){
    //データ送信
    document.body.style.cursor = 'wait';
    let code = document.getElementsByName("_token").item(0).value;
    // FormData オブジェクトを用意
    var fd = new FormData();
    fd.append("_token", code);
    fd.append("change_id",change_id);
    fd.append("name",$('#c_name').val());
    fd.append("password",$('#c_pass').val());

    // XHR で送信
    $.ajax({
      url: "./admin_change",
      type: "POST",
      data: fd,
      mode: 'multiple',
      processData: false,
      contentType: false,
      timeout: 10000,  // 単位はミリ秒
      error: function(XMLHttpRequest, textStatus, errorThrown){
        err=XMLHttpRequest.status+"\n"+XMLHttpRequest.statusText;
        alert(err);
        document.body.style.cursor = 'auto';
      },
      beforeSend: function(xhr){

      }
    })
    .done(function( res ) {
      document.body.style.cursor = 'auto';
      //console.log(res);
      //$('#message').html(res);
      location.reload();
    });
    }
    </script>
</x-slot>

</x-admin>
