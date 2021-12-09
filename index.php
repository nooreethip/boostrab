<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Hello, world!</title>
    <script src="https://code.jquery.com/jquery-3.6.0.js"
        integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

    <style>
        .block-1 {
            max-width: 100%;
            margin: 20px;
            height: auto;
            display: flex;
            align-items: center;
            justify-content: center;

        }

        .detail {
            align-self: center;
            background-color: rgb(163, 195, 255);
        }

        .picture {
            align-items: center;
        }
    </style>
</head>

<body>
    <div class="container">

        <div class="block-1"><img
                src="https://p0.pikist.com/photos/537/217/sky-clouds-relief-sunny-cumulus-background-banner-landscape-format-sunbeam.jpg">
        </div>
        <div class="row">

            <div class="col-6" height: auto>
                <h1>ว่าด้วยเรื่องท้องฟ้า</h1>
                <img src="https://i.pinimg.com/736x/26/08/e6/2608e66e2829c9788cf00e1514322640.jpg" class="img-fluid" />



            </div>

            <div class="col-3">
                <img src="https://i.pinimg.com/564x/a3/8b/bc/a38bbcc6e2f0f1088bc60d751e6baff4.jpg" class="img-fluid" />
                <p>รู้ใช่ปะว่าในแต่ละวันท้องฟ้าจะไม่เหมือนกันเลย

                    วันนี้มีสีฟ้าสบายตา ไม่มีเมฆมาปกคลุมให้ดูรกสมอง
                    เมื่อวานอาจดูหม่นหมอง เพราะมืดครึ้มคล้ายฝนจะตก
                    และพรุ่งนี้อาจจะดูสดใส เนื่องจากมีแสงอาทิตย์มาเป็นจิตรกรระบายสีส้มอ่อนๆให้ดูสวยพอเป็นพิธี

                    แต่เราว่าความสวยหรือไม่สวยของท้องฟ้าในแต่ละวัน มันขึ้นอยู่กับอารมณ์ ความรู้สึกของคนเรามากกว่า

                    ถ้าเรามีความสุข ท้องฟ้าวันนั้นก็จะสวยเป็นพิเศษ แม้ว่าจะมืดฝนพายุจะถล่มก็ตาม

                </p>
            </div>
            <div class="col-3">
                <img src="https://i.pinimg.com/564x/e1/bd/24/e1bd24b31177ea49f42a7ba53da1e0af.jpg" class="img-fluid" />
                <p>แต่..

                    ถ้าวันไหนมีความทุกข์ ท้องฟ้าก็จะกลายเป็นสีดำไปทันที
                    ต่อให้วันนัั้นมันมีสีพาสเทลระบายอยู่ทั่วท้องฟ้าไปหมด

                    ดังนั้น

                    หากใครกำลังมีความทุกข์ พบเจอปัญหาโลกแตกที่ยังหาทางแก้ไม่ได้
                    มองทางไหนก็ไม่เห็นทางออก(อาจจะเห็นแต่ทางเข้า)

                    เราอยากให้คุณลองพักสายตา(รวมถึงสมอง) ไปนั่งมองท้องฟ้าดูสักพักนะ ลองจ้องมันดูดีๆ
                    ปล่อยสมองให้ว่างเปล่า ไล่ความคิดให้ไหลผ่านไปเรื่อยๆเหมือนที่เมฆเคลื่อนผ่านภูเขาอย่างเอื่อยช้า</p>
            </div>
            <div class="col-6" style="margin-top: 10%;">
            </div>
            <div class="col-6" style="margin-bottom: 30%;">
                <button id="btnBack"> back </button>
                <div id="main">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Title</th>
                                <th>Author</th>
                            </tr>
                        </thead>
                        <tbody id="tblPost">
                        </tbody>
                    </table>
                </div>
                <div id="detail">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Title</th>
                                <th>UserID</th>
                            </tr>
                        </thead>
                        <tbody id="tblDetails">
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="detail">
            <div class="row" style="text-align:center">
                <div class="col-12 ">
                    <p>63105464 Nooree Thipyorlaeh</p>

                </div>
            </div>
        </div>
    </div>


</body>
<script>
    function showDetails(id) {
        $("#main").hide();
        $("#detail").show();
        var url = "https://jsonplaceholder.typicode.com/posts/" + id
        $.getJSON(url)
            .done((data) => {
                console.log(data);
                var line = "<tr id='detailROW'";
                line += "><td>" + data.id + "</td>"
                line += "<td><b>" + data.title + "</b><br/>"
                line += data.body + "</td>"
                line += "<td>" + data.userId + "</td>"
                line += "</tr>";
                $("#tblDetails").append(line);
            })
            .fail((xhr, err, status) => {
            })
    }
    function LoadPosts() {
        var url = "https://jsonplaceholder.typicode.com/posts"
        var i = 0;
        $.getJSON(url)
            .done((data) => {
                $.each(data, (k, item) => {
                    i++;
                    var line = "<tr>";
                    line += "<td>" + item.id + "</td>"
                    line += "<td><b>" + item.title + "</b><br/>"
                    line += item.body + "</td>"
                    line += "<td><button onClick='showDetails(" + item.id + ");'>Link</button></td>"
                    line += "</tr>";
                    $("#tblPost").append(line);
                    if (i == 10) {
                        loadPost().stop();
                    };
                });
                $("#main").show();
            })
            .fail((xhr, err, status) => {
            })
    }
    $(() => {
        LoadPosts();
        $("#detail").hide();
        $("#btnBack").click(() => {
            $("#main").show();
            $("#detail").hide();
            $("#detailROW").remove();
        });
    })
</script>



</html>
