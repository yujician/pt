<x-page-base>
<x-slot name="title">アルバム閲覧</x-slot>

<x-slot name="slot">
@csrf
<div id="u_id" class="hidden">{{ $show_user_id }}</div>
    <div class="container">
        <div class="row mt-5">
            <div class="col-12">
                <h1 class="text-center">{{ $user_name }} さんのアルバム</h1>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-12" id="message"></div>
            <div id="list_area"></div>
        </div>

    <!-- Button trigger modal -->
	<button type="button" id="modal_bt" class="btn btn-primary"
		data-bs-toggle="modal" data-bs-target="#exampleModal"
		style="display: none;">Launch demo modal</button>

	<!-- Modal -->
	<div class="modal fade" id="exampleModal" tabindex="-1"
		aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-xl">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">タイトル <span id="pic_title"></span></h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal"
						aria-label="Close"></button>
				</div>
				<div class="modal-body">
					<p id="fname"></p>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary"
						data-bs-dismiss="modal">閉じる</button>
				</div>
			</div>
		</div>
	</div>
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
    
    var page_num = 0;
    //最初の読み込み処理
    changeContents(0);

    function changeContents(num){
      page_num = num;
      //データ送信
      document.body.style.cursor = 'wait';
      let code = document.getElementsByName("_token").item(0).value;
      let user_id = $('#u_id').html();
      // FormData オブジェクトを用意
      var fd = new FormData();
      fd.append("_token", code);
      fd.append("page", num);
      fd.append("u_id", user_id);

      // XHR で送信
      $.ajax({
      	url: "./show_pics",
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
      $('#list_area').html(res);

      });
    }

  //ファイル選択モーダル呼び出し
    var change_id = 0;
    $(document).on("click", ".show_modal_bt", function(e){
      console.log("thumb click");
      //message = "";
      //$('#message').html(message);
      change_id = $(this).attr('value');
      getMasterImage(change_id);

    });

    //マスター画像データ取得
    function getMasterImage(id){

    	//データ送信
    	document.body.style.cursor = 'wait';
      let code = document.getElementsByName("_token").item(0).value;
      let user_id = $('#u_id').html();
    	// FormData オブジェクトを用意
    	var fd = new FormData();
      fd.append("_token", code);
      fd.append("img_id", id);
      fd.append("u_id", user_id);

    	// XHR で送信
    	$.ajax({
    		url: "./pic_up",
    		type: "POST",
    		data: fd,
    		mode: 'multiple',
    		processData: false,
    		contentType: false,
    		async: false,
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
        $('#set_title').val($(res).attr('title'));
        $('#pic_title').html($(res).attr('title'));
        $('#fname').html(res);
        $('#modal_bt').trigger('click');

    	});
    }

  //ページ切り替え
    $(document).on('click','.page_bt',function(e){
      console.log($(this).val());
      changeContents($(this).val());
    });
    </script>
</x-slot>

</x-page-base>
