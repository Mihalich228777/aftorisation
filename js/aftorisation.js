



var button_sub = document.getElementsByClassName('btn_sub_1')[0];
var alert_text_name = document.getElementsByClassName('alert_text_name')[0];
var alert_text_pass = document.getElementsByClassName('alert_text_pass')[0];



button_sub.onclick = function (){
    var name1 = document.getElementsByName("name")[0].value;
    var password = document.getElementsByName("password")[0].value;
    var count = 0;
    console.log(name1, password);

    if(name1 !== ""){
        alert_text_name.classList.remove("active");
        count += 1;
    }else{
        alert_text_name.classList.add("active");
    }

    if(password !== ""){
        alert_text_pass.classList.remove("active");
        count += 1;
    }else{
        alert_text_pass.classList.add("active");
    }

        if(count == 2){
            var url = "core/sign_in.php"
            var headers = {
                'Content-type': 'application/json'
            }
            var method = 'POST'
            var body = {
                name: name1, 
                password: password
            }
                sendRequest(url, method, headers, body)

        }
   

}

function sendRequest(url, method, headers, body){
    fetch(url, {
                    method:  method,
                    headers: headers,
                    body: JSON.stringify(body),
                }) 
                .then(function(response) {
                    // response.text() возвращает новый промис,
                    // который выполняется и возвращает полный ответ сервера,
                    // когда он загрузится
                    return response.text();
                })
                .then(function(text) {
                    // ...и здесь содержимое полученного файла
                    // {"name": "iliakan", isAdmin: true}
                    console.log(text, "- responce")
                    if(text == "Ok"){
                        window.location.replace("")                                            // переадресация
                    }else{

                    }
                })
}









//                                          ПОПАП


function Popup(options){
    this.modal_content = document.querySelector(options.modal_content);
    this.modal = document.querySelector(options.modal);
    
    var popup = this;
    
    this.open = function(content){
        popup.modal_content.innerHTML = content;
        popup.modal.classList.add('open');
        popup.modal_content.classList.add('open');
    }
    
    this.close = function(){
        popup.modal.classList.remove('open');
        popup.modal_content.classList.remove('open');
    }
    
    this.modal.onclick = popup.close;
}


    var popup = new Popup({
        modal_content: '.modal_content',
        modal: '.modal'
    });
    document.querySelector('.write1').onclick = function(){
        p.open('<p>форма отправки сообщения</p>');
    };
