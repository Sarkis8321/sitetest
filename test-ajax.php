<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test Ajax</title>
    <style>
        #click-ajax {
            cursor: pointer;
            display: inline-block;
            padding: 10px 20px;
            border: 1px solid #f00;
            color: #f00;
        }
        .result {
            display: block;
            min-width: 300px;
            min-height: 300px;
            border: 1px solid #f00;
            padding: 10px 20px;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="result" id="result">
    
    </div>
    <div id="click-ajax">
        запросить данные
    </div>
    

    <script>
        let clickAjax = document.querySelector('#click-ajax');
        let result = document.querySelector('#result');


        clickAjax.addEventListener('click',function(event){
          
            fetch('/res.php?text=привет')
            .then(response => response.json())
            .then(resp => {
                console.log(resp);
                result.textContent = "";
                for(key in resp){
                    result.textContent += resp[key] + " ";
                }
                
            })



           /* {
                let resp = response.json();
                result.textContent = resp;
                console.log(resp); 
            }*/

        })


    </script>
</body>
</html>