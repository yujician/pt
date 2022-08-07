<x-app-layout>
	<x-slot name="title">写真アップロード</x-slot>
	<x-slot	name="header">
	<div class="container">
		<div class="row">
			<div class="col-12 p-3">
				<h2 class="text-secondary">写真アップロード</h2>
			</div>
		</div>
	</div>
	</x-slot>
	
	<x-slot name="slot">
	@csrf
	<div id="u_id" class="hidden">{{ Auth::user()->name }}</div>
	<div class="container">
		<div class="row ">
			<div class="col-12">
				<h3 class="text-center">写真アップロード</h3>
			</div>
		</div>
		<div class="row mt-5 pb-3">
			<div class="col-md-4">&nbsp;</div>
	
			<div class="col-md-4 d-grid">
				<button class="btn btn-primary" id='file_up_bt'>ファイルアップロード</button>
				<input type="file" id="select_file" style="display: none" multiple> <input
					type="file" id="change_file" style="display: none">
			</div>
	
			<div class="col-md-4">&nbsp;</div>
	
		</div>
	
		<hr>
		<div class="row mt-3">
			<div class="col-12">ファイルリスト</div>
			<div class="col-12" id="message"></div>
		</div>
		<div id="list_area"></div>
	
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
						<h5 class="modal-title" id="exampleModalLabel">ファイル選択</h5>
						<button type="button" class="btn-close" data-bs-dismiss="modal"
							aria-label="Close"></button>
					</div>
					<div class="modal-body">
						<p id="fname"></p>
						<p id="pic_title">&nbsp;</p>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary"
							data-bs-dismiss="modal">キャンセル</button>
						<button type="button" class="btn btn-info" data-bs-dismiss="modal"
							id="set_title_bt">タイトル設定</button>
						<button type="button" class="btn btn-danger"
							data-bs-dismiss="modal" id="delete_bt">削除</button>
					</div>
				</div>
			</div>
		</div>
	
	
	</div>
	<div id="delete_dialog" title="削除の確認">
		<p class="text-center">ファイルを削除してもよろしいですか？</p>
	</div>
	<div id="upload_dialog" title="アップロード中">
		<p class="d-flex justify-content-center p-3">
			<img src="{{ asset('images/loading.gif')}}" class="">
		</p>
		<p class="text-center">ファイルをアップロードしています。</p>
	</div>
	<div id="dialog-form" title="タイトル設定">
		<div class="mb-3">
			<label for="set_title" class="form-label">タイトルを入力</label> <input
				type="text" class="form-control" id="set_title">
		</div>
	</div>
	</x-slot>
	
	<x-slot name="script">
	<script>
		var page_num = 0;
		//最初の読み込み処理
		changeContents(0);
	
		function changeContents(num){
			page_num = num;
			//データ送信
			document.body.style.cursor = 'wait';
			let code = document.getElementsByName("_token").item(0).value;
			let user_id = document.getElementsByName("u_id").item(0).value;
			// FormData オブジェクトを用意
			var fd = new FormData();
			fd.append("_token", code);
			fd.append("page", num);
			fd.append("u_id", user_id);
	
			// XHR で送信
			$.ajax({
				url: "./user_pics",
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
			//ファイルアップロードボタン
			$('#file_up_bt').on('click',function(e){
				$('#select_file').trigger('click');
		});
	
			//ファイル参照
			$('#select_file').on('change',function(e){
			$( "#upload_dialog" ).dialog('open');
			for (var i = 0; i < e.target.files.length; i++) {
					var file = e.target.files[i];
					console.log(file.name);
					uploadData(file,file.name);
			}
			changeContents(0);
			$( "#upload_dialog" ).dialog('close');
		});
	
		//ファイルアップロード
		function uploadData(file,name){
	
			//データ送信
			document.body.style.cursor = 'wait';
			let code = document.getElementsByName("_token").item(0).value;
			let user_id = document.getElementsByName("u_id").item(0).value;
			// FormData オブジェクトを用意
			var fd = new FormData();
			fd.append("_token", code);
			fd.append("name", name);
			fd.append("upFile", file);
			fd.append("u_id", user_id);
	
			// XHR で送信
			$.ajax({
				url: "./save_pics",
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
				//message = message + " " + res;
				//$('#message').html(message);
			});
		}
		//削除ボタン
		$('#delete_bt').on('click',function(e){
			console.log(change_id);
			$( "#delete_dialog" ).dialog("open");
		});
		//タイトル設定ボタン
		$('#set_title_bt').on('click',function(e){
			console.log(change_id);
			$( "#dialog-form" ).dialog("open");
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
				deleteFile();
			 },
			"キャンセル": function() {
				$( this ).dialog( "close" );
			 }
			}
		});
	
		//アップロードダイアログ
		$( "#upload_dialog" ).dialog({
			autoOpen: false,
			resizable: false,
			height: "auto",
			width:"auto",
			fluid: true,
			modal: true,
	
		});
		//タイトル設定ダイアログ
		$( "#dialog-form" ).dialog({
			autoOpen: false,
			height: "auto",
			width:  "auto",
			modal: true,
			buttons: {
				"保存": function() {
					$( this ).dialog( "close" );
					saveTitle();
				},
				"キャンセル": function() {
					$( this ).dialog( "close" );
				}
			}
		});
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
			let user_id = document.getElementsByName("u_id").item(0).value;
			// FormData オブジェクトを用意
			var fd = new FormData();
			fd.append("_token", code);
			fd.append("img_id", id);
			fd.append("u_id", user_id);
	
			// XHR で送信
			$.ajax({
				url: "./get_master",
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
		//ファイル削除
		 function deleteFile(){
			 console.log('delete');
			 //データ送信
			 document.body.style.cursor = 'wait';
			let code = document.getElementsByName("_token").item(0).value;
			let user_id = document.getElementsByName("u_id").item(0).value;
			 // FormData オブジェクトを用意
			 var fd = new FormData();
			fd.append("_token", code);
			fd.append("delete_id",change_id);
			fd.append("u_id", user_id);
	
			 // XHR で送信
			 $.ajax({
				 url: "./delete_pic",
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
				 //message = message + " " + res;
				//$('#message').html(message);
				 changeContents(page_num);
	
			 });
		 }
		 //タイトル保存
			function saveTitle(){
				console.log('delete');
				//データ送信
				document.body.style.cursor = 'wait';
				 let code = document.getElementsByName("_token").item(0).value;
				 let user_id = document.getElementsByName("u_id").item(0).value;
				// FormData オブジェクトを用意
				var fd = new FormData();
				fd.append("_token", code);
				fd.append("save_id",change_id);
				fd.append("title", $('#set_title').val());
				fd.append("u_id", user_id);
	
				// XHR で送信
				$.ajax({
					url: "./save_title",
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
					console.log(res);
	
				});
			}
	
			//ページ切り替え
			$(document).on('click','.page_bt',function(e){
				console.log($(this).val());
				changeContents($(this).val());
			});
	</script>
	</x-slot>
	</x-app-layout>
	