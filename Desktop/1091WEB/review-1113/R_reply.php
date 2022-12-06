<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>回覆意見</title>
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
<body>
<div class="upload_container">
        <div style="width:95%; margin-left:2.5%;">
            <div class="table-responsive" style="margin-top:2%;">
            <h5 style="text-align:center; color:white; font-size:20px; letter-spacing:10px; text-indent:10px;">回覆意見</h5>
            <hr width=100% size=30 color=tan style="filter:alpha(opacity=100,finishopacity=0,style=2)">
                <table class="table table-hover ">
                    <thead style="background-color:tan;">
                      <tr>
                        <th scope="col">配稿日期</th>
                        <th scope="col">文件</th>
                        <th scope="col">領域</th>
                        <th style="text-align:center;"scope="col">回覆稿件</th>
                    
                      </tr>
                    </thead>
                    <tbody style="background-color:white;">
                      <tr>
                        <td>2020/05/15</td>
                          <td>社群媒體在服務型社會企業之應用</td>                       
                          <td>國際企業</td>
                          <td>
                            <div class="modal" tabindex="-1" role="dialog" id="modal2">
                              <div class="modal-dialog" role="document"> 
                                 <div class="modal-content">
                                     <div class="modal-header">
                                         <h5 class="modal-title">回覆意見檔</h5>
                                         <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button> 
                                     </div>
                                     <div class="modal-body">                          
                                    <p>
                                      <form>
                                          <div class="form-group">
                                           <input type="file" class="form-control-file" id="exampleFormControlFile1">
                                          <p>審稿決定:&nbsp;&nbsp;
                                            <input type ="radio" name ="reply" value ="reply1">接受&nbsp;&nbsp;
                                           <input type ="radio" name ="reply" value ="reply2">大幅修正&nbsp;&nbsp;
                                           <input type ="radio" name ="reply" value ="reply3">小幅修正&nbsp;&nbsp;
                                           <input type ="radio" name ="reply" value ="reply4">拒絕
                                          </div>
                                       </form>
                                  </p> 
                                  <p><font size='3'>審稿者意見&nbsp;&nbsp;<font color='red'>&nbsp;&nbsp;*(至多100字)</font></font><br>
                                    <textarea name = "content" cols="45" rows="4" maxlength="100"></textarea>
                                     </div>
                                     <div class="modal-footer">
                                         <button type="button" class="btn btn-secondary" data-dismiss="modal">取消</button>
                                         <button type="button" class="btn btn-primary" onclick="confirm('新增成功')">送出</button>
                                     </div>
                                </div>
                            </div>
                         </div>
                             <div class="iconcenter">
                                 <i class="fas fa-reply"  onclick="showModal2()"></i>
                             </div>
                                 
                         <script>
                             function showModal2() {
                                  $('#modal2').modal('show'); 
                             }
                         </script>
                          </td>
                      </tr>
                      <tr>
                        <td>2020/05/30</td>
                          <td>弱勢族群的微型創業</td>
                          <td>國際企業</td>
                          <td>
                            <div class="modal" tabindex="-1" role="dialog" id="modal2">
                              <div class="modal-dialog" role="document"> 
                                 <div class="modal-content">
                                     <div class="modal-header">
                                         <h5 class="modal-title">回覆意見檔</h5>
                                         <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button> 
                                     </div>
                                     <div class="modal-body">                          
                                    <p>
                                      <form>
                                          <div class="form-group">
                                           <input type="file" class="form-control-file" id="exampleFormControlFile1">
                                          <p>審稿決定:&nbsp;&nbsp;
                                            <input type ="radio" name ="reply" value ="reply1">接受&nbsp;&nbsp;
                                           <input type ="radio" name ="reply" value ="reply2">大幅修正&nbsp;&nbsp;
                                           <input type ="radio" name ="reply" value ="reply3">小幅修正&nbsp;&nbsp;
                                           <input type ="radio" name ="reply" value ="reply4">拒絕
                                          </div>
                                       </form>
                                  </p> 
                                  <p><font size='3'>審稿者意見&nbsp;&nbsp;<font color='red'>&nbsp;&nbsp;*(至多100字)</font></font><br>
                                    <textarea name = "content" cols="45" rows="4" maxlength="100"></textarea>
                                     </div>
                                     <div class="modal-footer">
                                         <button type="button" class="btn btn-secondary" data-dismiss="modal">取消</button>
                                         <button type="button" class="btn btn-primary" onclick="confirm('新增成功')">送出</button>
                                     </div>
                                </div>
                            </div>
                         </div>
                             <div class="iconcenter">
                                 <i class="fas fa-reply"  onclick="showModal2()"></i>
                             </div>
                                 
                         <script>
                             function showModal2() {
                                  $('#modal2').modal('show'); 
                             }
                         </script>
                          </td>
                      </tr>
                      <tr>
                        <td>2020/06/03</td>
                          <td>社會企業應用社群媒體之三階段模式</td>
                          <td>國際企業</td>
                          <td>
                            <div class="modal" tabindex="-1" role="dialog" id="modal2">
                              <div class="modal-dialog" role="document"> 
                                 <div class="modal-content">
                                     <div class="modal-header">
                                         <h5 class="modal-title">回覆意見檔</h5>
                                         <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button> 
                                     </div>
                                     <div class="modal-body">                          
                                    <p>
                                      <form>
                                          <div class="form-group">
                                           <input type="file" class="form-control-file" id="exampleFormControlFile1">
                                          <p>審稿決定:&nbsp;&nbsp;
                                            <input type ="radio" name ="reply" value ="reply1">接受&nbsp;&nbsp;
                                           <input type ="radio" name ="reply" value ="reply2">大幅修正&nbsp;&nbsp;
                                           <input type ="radio" name ="reply" value ="reply3">小幅修正&nbsp;&nbsp;
                                           <input type ="radio" name ="reply" value ="reply4">拒絕
                                          </div>
                                       </form>
                                  </p> 
                                  <p><font size='3'>審稿者意見&nbsp;&nbsp;<font color='red'>&nbsp;&nbsp;*(至多100字)</font></font><br>
                                    <textarea name = "content" cols="45" rows="4" maxlength="100"></textarea>
                                     </div>
                                     <div class="modal-footer">
                                         <button type="button" class="btn btn-secondary" data-dismiss="modal">取消</button>
                                         <button type="button" class="btn btn-primary" onclick="confirm('新增成功')">送出</button>
                                     </div>
                                </div>
                            </div>
                         </div>
                             <div class="iconcenter">
                                 <i class="fas fa-reply"  onclick="showModal2()"></i>
                             </div>
                                 
                         <script>
                             function showModal2() {
                                  $('#modal2').modal('show'); 
                             }
                         </script>
                          </td>
                      </tr>
                      <tr>
                        <td>2020/06/05</td>
                          <td>創新思想對工作發展的影響</td>
                          <td>國際貿易</td>
                          <td>
                            <div class="modal" tabindex="-1" role="dialog" id="modal2">
                              <div class="modal-dialog" role="document"> 
                                 <div class="modal-content">
                                     <div class="modal-header">
                                         <h5 class="modal-title">回覆意見檔</h5>
                                         <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button> 
                                     </div>
                                     <div class="modal-body">                          
                                    <p>
                                      <form>
                                          <div class="form-group">
                                           <input type="file" class="form-control-file" id="exampleFormControlFile1">
                                          <p>審稿決定:&nbsp;&nbsp;
                                            <input type ="radio" name ="reply" value ="reply1">接受&nbsp;&nbsp;
                                           <input type ="radio" name ="reply" value ="reply2">大幅修正&nbsp;&nbsp;
                                           <input type ="radio" name ="reply" value ="reply3">小幅修正&nbsp;&nbsp;
                                           <input type ="radio" name ="reply" value ="reply4">拒絕
                                          </div>
                                       </form>
                                  </p> 
                                  <p><font size='3'>審稿者意見&nbsp;&nbsp;<font color='red'>&nbsp;&nbsp;*(至多100字)</font></font><br>
                                    <textarea name = "content" cols="45" rows="4" maxlength="100"></textarea>
                                     </div>
                                     <div class="modal-footer">
                                         <button type="button" class="btn btn-secondary" data-dismiss="modal">取消</button>
                                         <button type="button" class="btn btn-primary" onclick="confirm('新增成功')">送出</button>
                                     </div>
                                </div>
                            </div>
                         </div>
                             <div class="iconcenter">
                                 <i class="fas fa-reply"  onclick="showModal2()"></i>
                             </div>
                                 
                         <script>
                             function showModal2() {
                                  $('#modal2').modal('show'); 
                             }
                         </script>
                          </td>
                      </tr>
                    </tbody>
                </table>
           </div>
          </div>
    </div>
</body>
</html>