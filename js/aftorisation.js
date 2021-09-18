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
            var post = {
                name: name1,
                password: password
            }
            console.log(JSON.stringify(post))
            fetch(url, {
                    method: 'POST',
                    headers: headers,
                    body: JSON.stringify(post),
                }).then(response => response.json())
                .then((data) =>  console.log(data))
            
            
            
        }
    
}