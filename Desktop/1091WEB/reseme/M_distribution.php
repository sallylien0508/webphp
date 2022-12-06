<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>分配稿件</title>
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Crimson+Text:400,400i" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
      
    <link rel="stylesheet" href="style.css">
    <meta name = "format-detection" content = "telephone=no" />
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <style type="text/css">
.pagination a {
  color: black;
  float: left;
  padding: 8px 16px;
  text-decoration: none;
  transition: background-color .3s;
}

/* Style the active/current link */
.pagination a.active {
  background-color: #c7b198;
  color: white;
}

/* Add a grey background color on mouse-over */
.pagination a:hover:not(.active) {
    background-color: #ddd;
}
#table1{
    font-family: "微軟正黑體";
    color:black;
    font-size: 18px;
}

.search{
    padding:5px 15px; 
    background:#c7b198 ; 
    border:0 none;
    cursor:pointer;
    -webkit-border-radius: 5px;
    border-radius: 5px; 
    color: white;    
}
.iconcenter{
    color: black; 
    font-size: 18px; 
    display:grid; 
    place-items:center;
}
.thead-light{
    background-color:burlywood;
}
    </style>
</head>
<body style="display: flex; justify-content: center; align-items:center;">
<div class="upload_container">
        <div style="width:95%; margin-left:5vw;">
            <div class="table-responsive" style="margin-top:2%;">
            <h5 style="text-align:center; color:white; font-size:30px; letter-spacing:10px; text-indent:10px;">待分配稿件清單</h5>
            <hr width=100% size=30 color=tan style="filter:alpha(opacity=100,finishopacity=0,style=2)">
                <table class="table table-hover ">
                    <thead style="background-color:tan;">
                      <tr>
                        <th scope="col">稿件標題</th>
                        <th scope="col">初次投稿日期</th>
                        <th scope="col">審稿者1</th>
                        <th scope="col">審稿者2</th>
                        <th scope="col"></th>
                      </tr>
                    </thead>
                    <tbody style="background-color:white;">
                      <tr>
                        <td><a href="#">人工智慧發展</a></td>
                        <td>2020/03/25</td>
                        <td>
                            <!--下拉表單-->
                            <select onChange="renew(this.selectedIndex);" style="margin-left: 10px;">
                                <option disabled=disabled selected=selected>請選擇領域
                                <option>管理與政策
                                <option>國際企業
                                <option>行銷管理
                                <option>國際貿易
                                <option>生產與作業管理
                                <option>統計
                                <option>人力資源管理
                                <option>數量方法
                                <option>資訊管理
                                <option>會計
                                <option>財務管理
                                <option>審計
                            </select>

                            <select id="member">
                                <option value="0" disabled=disabled selected=selected>先選擇領域
                            </select>
                            <!--表單聯動-->
                            <script>
                                CharacterVoice=new Array();
                                //管理與政策
                                CharacterVoice[1]=["盧小勳"];
                                //國際企業
                                CharacterVoice[2]=["戴娟娟", "許箱箱"];
                                //行銷管理
                                CharacterVoice[3]=["--目前無此領域之審稿者--"];
                                //國際貿易
                                CharacterVoice[4]=["戴娟娟"];
                                //生產與作業管理
                                CharacterVoice[5]=["郭大微"];
                                //統計
                                CharacterVoice[6]=["翁粼粼"];
                                //人力資源管理
                                CharacterVoice[7]=["--目前無此領域之審稿者--"];
                                //數量方法
                                CharacterVoice[8]=["--目前無此領域之審稿者--"];
                                //資訊管理
                                CharacterVoice[9]=["陳曉均", "陳小瑜"];
                                //會計
                                CharacterVoice[10]=["朱大宏"];
                                //財務管理
                                CharacterVoice[11]=["--目前無此領域之審稿者--"];
                                //審計
                                CharacterVoice[12]=["--目前無此領域之審稿者--"];



                                // //另用一個陣列記取上方CharacterVoice對應的value
                                // CharacterWiki=new Array();
                                // //Printemps
                                // CharacterWiki[1]=["article/25-1 table.html", 
                                // "article/25-2 table.html", 
                                // "article/25-3 table.html"];
                                // //BiBi
                                // CharacterWiki[2]=["article/26-1 table.html", 
                                // "article/26-2 table.html", 
                                // "article/26-3 table.html"];
                                // //lily white
                                // CharacterWiki[3]=["article/27 table.html"];

                                function renew(index){
                                    for(var i=0;i<CharacterVoice[index].length;i++)
                                        //新增select的選項
                                        member.options[i]=new Option(CharacterVoice[index][i], CharacterWiki[index][i]);
                                    /*參考網站中筆者表示下面這行是為了「刪除多餘的選項」
                                    然而我將之註解掉也可以正常執行，所以有沒有加這行的必要，個人還在理解中...*/
                                    member.length=CharacterVoice[index].length;
                                }
                                function TheWikiIntro(){
                                    if(member.options[member.selectedIndex].value=="0"){
                                    }else{
                                        window.open(member.options[member.selectedIndex].value);
                                    }
                                }
                            </script>
                          </td>
                          <td>
                            <!--下拉表單-->
                            <select onChange="renew(this.selectedIndex);" style="margin-left: 10px;">
                                <option disabled=disabled selected=selected>請選擇領域
                                <option>管理與政策
                                <option>國際企業
                                <option>行銷管理
                                <option>國際貿易
                                <option>生產與作業管理
                                <option>統計
                                <option>人力資源管理
                                <option>數量方法
                                <option>資訊管理
                                <option>會計
                                <option>財務管理
                                <option>審計
                            </select>

                            <select id="member">
                                <option value="0" disabled=disabled selected=selected>先選擇領域
                            </select>
                            <!--表單聯動-->
                            <script>
                                CharacterVoice=new Array();
                                //管理與政策
                                CharacterVoice[1]=["盧小勳"];
                                //國際企業
                                CharacterVoice[2]=["戴娟娟", "許箱箱"];
                                //行銷管理
                                CharacterVoice[3]=["--目前無此領域之審稿者--"];
                                //國際貿易
                                CharacterVoice[4]=["戴娟娟"];
                                //生產與作業管理
                                CharacterVoice[5]=["郭大微"];
                                //統計
                                CharacterVoice[6]=["翁粼粼"];
                                //人力資源管理
                                CharacterVoice[7]=["--目前無此領域之審稿者--"];
                                //數量方法
                                CharacterVoice[8]=["--目前無此領域之審稿者--"];
                                //資訊管理
                                CharacterVoice[9]=["陳曉均", "陳小瑜"];
                                //會計
                                CharacterVoice[10]=["朱大宏"];
                                //財務管理
                                CharacterVoice[11]=["--目前無此領域之審稿者--"];
                                //審計
                                CharacterVoice[12]=["--目前無此領域之審稿者--"];



                                // //另用一個陣列記取上方CharacterVoice對應的value
                                // CharacterWiki=new Array();
                                // //Printemps
                                // CharacterWiki[1]=["article/25-1 table.html", 
                                // "article/25-2 table.html", 
                                // "article/25-3 table.html"];
                                // //BiBi
                                // CharacterWiki[2]=["article/26-1 table.html", 
                                // "article/26-2 table.html", 
                                // "article/26-3 table.html"];
                                // //lily white
                                // CharacterWiki[3]=["article/27 table.html"];

                                function renew(index){
                                    for(var i=0;i<CharacterVoice[index].length;i++)
                                        //新增select的選項
                                        member.options[i]=new Option(CharacterVoice[index][i], CharacterWiki[index][i]);
                                    /*參考網站中筆者表示下面這行是為了「刪除多餘的選項」
                                    然而我將之註解掉也可以正常執行，所以有沒有加這行的必要，個人還在理解中...*/
                                    member.length=CharacterVoice[index].length;
                                }
                                function TheWikiIntro(){
                                    if(member.options[member.selectedIndex].value=="0"){
                                    }else{
                                        window.open(member.options[member.selectedIndex].value);
                                    }
                                }
                            </script>
                          </td>
                          <td><input type="button" value="確定配稿" onclick="TheWikiIntro()" style="margin-left: 10px;" class="btn btn-primary"></td>
                      </tr>

                      <tr>
                          <td>社群網絡關係</td>
                          <td>2020/05/06</td>
                          <td>待回覆</td>
                          <td>0次</td>
                      </tr>
                      <tr>
                          <td>創新思想對工作發展的影響</td>
                          <td>2020/06/01</td>
                          <td>待審核</td>
                          <td>0次</td>
                      </tr>
                      <tr>
                          <td>新型行銷手法</td>
                          <td>2020/04/21</td>
                          <td>待回覆</td>
                          <td>1次</td>
                      </tr>
                    </tbody>
                </table>
           </div>
          </div>
    </div>
</body>
</html>