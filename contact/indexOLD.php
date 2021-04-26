<style>

#frmEnquiry {
	border-top: #fff 2px solid;
	background: #fff;
	padding: 15px 30px;
}

.demoInputBox {
	padding: 10px;
	border: #F0F0F0 1px solid;
	border-radius: 4px;
	background-color: #FFF;
	width: 100%;
}

.demoInputBox:focus {
    outline:none;
}

.error {
	background-color: #FF6600;
	border: #AA4502 1px solid;
	padding: 5px 10px;
	color: #FFFFFF;
	border-radius: 4px;
}

.success {
	background-color: #9fd2a1;
	border: #91bf93 1px solid;
	padding: 5px 10px;
	color: #3d503d;
	border-radius: 4px;
    cursor: pointer;
    font-size: 0.9em;
}

.info {
	font-size: .8em;
	color: #FF6600;
	letter-spacing: 2px;
	padding-left: 5px;
}

.btnAction {
	background-color: #263327;
	border: 0;
	padding: 10px 40px;
	color: #FFF;
	border: #F0F0F0 1px solid;
	border-radius: 4px;
    cursor:pointer;
}
.btnAction:focus {
    outline:none;
}
.invalid {
    background: #fbf2f2;
    border: #e8e0e0 1px solid;
}

.rotate {
  animation: rotation 2s;
}
@keyframes rotation {
  from {
    transform: rotate(0deg);
  }
  to {
    transform: rotate(359deg);
  }
}
.linear {
  animation-timing-function: linear;
}
.infinite {
  animation-iteration-count: infinite;
}


</style>
<script src="jquery-3.2.1.min.js" type="text/javascript"></script>
<script type="text/javascript">
$(document).ready(function (e){
$("#frmEnquiry").on('submit',(function(e){
	e.preventDefault();
	$('#loader-icon').show();
	var valid;	
	valid = validateContact();
	if(valid) {
		$.ajax({
		url: "mail-send.php",
		type: "POST",
		data:  new FormData(this),
		contentType: false,
		cache: false,
		processData:false,
		success: function(data){
		$("#mail-status").html(data);
		$('#loader-icon').hide();
		},
		error: function(){} 	        
		
		});
	}
}));

function validateContact() {
            var valid = true;	
            $(".demoInputBox").css('background-color','');
            $(".info").html('');
            $("#userName").removeClass("invalid");
            $("#userEmail").removeClass("invalid");
            $("#subject").removeClass("invalid");
            $("#content").removeClass("invalid");
            
            if(!$("#userName").val()) {
                $("#userName").addClass("invalid");
                $("#userName").attr("title","Required");
                valid = false;
            }
            if(!$("#userEmail").val()) {
                $("#userEmail").addClass("invalid");
                $("#userEmail").attr("title","Required");
                valid = false;
            }
            if(!$("#userEmail").val().match(/^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/)) {
                $("#userEmail").addClass("invalid");
                $("#userEmail").attr("title","Invalid Email");
                valid = false;
            }
            
            if(!$("#content").val()) {
                $("#content").addClass("invalid");
                $("#content").attr("title","Required");
                valid = false;
            }
            if(!$("#phoneNumber").val()) {
                $("#phoneNumber").addClass("invalid");
                $("#phoneNumber").attr("title","Required");
                valid = false;
            }
            if(!$("#userNameFurigana").val()) {
                $("#userNameFurigana").addClass("invalid");
                $("#userNameFurigana").attr("title","Required");
                valid = false;
            }
            
            
            return valid;
        }
        
        });
        </script>

<h2>お問い合わせフォーム</h2>
<p>必要事項をご記入の上、下記確認ボタンを押して下さい。</p>

        <form id="frmEnquiry" action="" method="post" enctype='multipart/form-data'>
            <div id="mail-status"></div>
            <div><label for="userName">ご用件</label><br>
        <label class="radio"><input type="radio" name="whatdo" value="お見積り・加工のご相談"> お見積り・加工のご相談</label>
        <label class="radio"><input type="radio" name="whatdo" value="採用について"> 採用について</label>
        <label class="radio"><input type="radio" name="whatdo" value="その他"> その他</label>
        </div>
        
        <div>
            <label for="content">お問い合わせの内容 (必須)</label>
                <textarea name="content" id="content" class="demoInputBox"
                    cols="60" rows="10" placeholder="Content"></textarea>
            </div>
            <div>
                <label for="companyName">御社名</label>
                    <input type="text" name="companyName" id="companyName"
                        class="demoInputBox" placeholder="">
                </div>
            <div>
            <label for="userName">お名前 (必須)</label>
                <input
                    type="text" name="userName" id="userName"
                    class="demoInputBox" placeholder="">
            </div>
            <div>
                <label for="userNameFurigana">ふりがな (必須)</label>
                    <input type="text" name="userNameFurigana" id="userNameFurigana"
                        class="demoInputBox" placeholder="">
                </div>

            <div>
            <label for="userEmail">メールアドレス (必須)</label>
                <input type="text" name="userEmail" id="userEmail"
                    class="demoInputBox" placeholder="">
            </div>
            
        
        
            <div>
            <label for="phoneNumber">電話番号 (必須)</label>
        
                <input type="text" name="phoneNumber" id="phoneNumber"
                    class="demoInputBox" placeholder="">
            </div>
        
            <div>
            <label for="faxNumber">FAX番号</label>
                <input type="text" name="faxNumber" id="faxNumber"
                    class="demoInputBox" placeholder="">
            </div>
        
            <div>
            <label for="zipCode">郵便番号</label>
                <input type="text" name="zipCode" id="zipCode"
                    class="demoInputBox" placeholder="">
            </div>
        
           
        
            <div>
            <label for="address">住所</label>
                <input type="text" name="address" id="address"
                    class="demoInputBox" placeholder="">
            </div>
        
            <div>
                <label>添付ファイル</label><br /> <input type="file"
                    name="attachment[]" class="demoInputBox" multiple="multiple">
            </div>
            <div>
                <input type="submit" value="Send" class="btnAction" />
            </div>
        </form>
        <div id="loader-icon" style="display: block;" >
            <img class="rotate linear infinite" src="./doughnut_chart.png" />　確認と送信中です。
        </div>
   