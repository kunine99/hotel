<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="shortcut icon" href="#">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

</head>

<body>

    <div class="container">
        <h2 class="text-center">Cors Table</h2>
        <p class="text-center mb-3">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Officia debitis sequi
            molestiae optio ipsum molestias architecto maxime.</p>
        <!-- 搜尋新北市政府open data 選ubike的json,複製request url -->
        <form action="https://data.ntpc.gov.tw/api/datasets/71CD1490-A2DF-4198-BEF1-318479775E8A/json?page=0&size=100" method="post" id="myForm">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>name</th>
                        <th>ch</th>
                        <th>en</th>
                        <th>math</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th><input type="text" name="name" id="name"></th>
                        <td><input type="text" name="ch" id="ch"></td>
                        <td><input type="text" name="en" id="en"></td>
                        <td><input type="text" name="math" id="math"></td>
                    </tr>
                    <tr>
                        <td colspan="4">
                            <button type="submit" class="btn btn-warning btn-sm btn-block">submit</button>
                        </td>
                    </tr>

                </tbody>
            </table>
        </form>
    </div>


    <!-- jq CDNJS搜尋JQ-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- jq CDNJS搜尋JQ END -->

    <!-- bts Separate -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <!-- bts Separate END-->

    <script>
        $(document).ready(function() {
            $('#myBtn').click(function(e) {
                e.preventDefault();

                var form = $(this);
                var url = 'https://data.ntpc.gov.tw/api/datasets/71CD1490-A2DF-4198-BEF1-318479775E8A/json?page=0&size=100';
                $.ajax({  
                    type: "get",
                    url: url,
                    // data: form.serialize(),  自己公司的話這邊會放什麼hidden 來加密
                    dataType: 'json',
                    success: function(data) {
                        console.log(typeof(data));
                        console.log(data)
                    }

                })

            })
        });

    </script>






</body>

</html>