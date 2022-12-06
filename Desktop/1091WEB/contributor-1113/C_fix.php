<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>修改稿件</title>
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
<div style="width:95%; margin-left:2.5%;">
        <div class="table-responsive" style="margin-top:2%;">
            <h5 style="text-align:center; color:white; font-size:20px; letter-spacing:10px; text-indent:10px;">修改稿件</h5>
            <hr width=100% size=30 color=tan style="filter:alpha(opacity=100,finishopacity=0,style=2)">
    <table class="table table-hover">
        <thead style="background-color:tan;">
            <tr style="text-align:center;">
                <th scope="col">稿件編號</th>
                <th style="text-align:left;"scope="col">稿件名稱</th>
                <th scope="col">修改稿件</th>
                <th scope="col">回覆稿件</th>
                <th scope="col">刪除稿件</th>
                <th scope="col">目前狀態</th>
                <th scope="col">最終回覆</th>
            </tr>
        </thead>
        <tbody style="background-color:white;">
            <tr style="valign:center;">
                <th style="text-align:center;" scope="row">1</th>
                <td>人工智慧發展</td>
                <td>
              <div class="modal" tabindex="-1" role="dialog" id="modal1">
                <div class="modal-dialog" role="document"> 
                   <div class="modal-content">
                       <div class="modal-header">
                           <h5 class="modal-title">檔案修改</h5>
                           <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button> 
                       </div>
                       <div class="modal-body">
                       <p>
                           <form>
                               <div class="form-group">
                                 <input type="file" class="form-control-file" id="exampleFormControlFile1">
                               </div>
                            </form>
                       </p> 
                      
                       </div>
                       <div class="modal-footer">
                           <button type="button" class="btn btn-secondary" data-dismiss="modal">取消</button>
                           <button type="button" class="btn btn-primary" onclick="confirm('新增成功')">送出</button>
                       </div>
                  </div>
              </div>
           </div>
               <div class="iconcenter">
                   <i class="fas fa-user-edit" style="color: black; font-size: 18px" onclick="showModal1()"></i>
               </div>
           <script>
               function showModal1() {
                    $('#modal1').modal('show'); 
               }
           </script>
            </td>
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
                            <p>審稿者回覆檔:&nbsp;&nbsp;&nbsp;<a href='./%E8%A1%8C%E9%8A%B7%E7%BE%8E%E5%AD%B8%E8%A6%81%E7%B4%A0%E4%B9%8B%E5%88%9D%E6%8E%A2.pdf'><i class="fas fa-download"></i></a></p>
                            <p>回覆投稿:</p>
                            <div class="accordion" id="accordionExample">
                              <div class="card">
                                <div class="card-header" id="headingOne">
                                  <h2 class="mb-0">
                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                      第一次回覆:
                                    </button>
                                  </h2>
                                </div>
                            
                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                  <div class="card-body">
                                    <a href='./%E8%A1%8C%E9%8A%B7%E7%BE%8E%E5%AD%B8%E8%A6%81%E7%B4%A0%E4%B9%8B%E5%88%9D%E6%8E%A2.pdf'><i class="fas fa-file-download"></i></a><u>(點選查看)</u>
                                  </div>
                                </div>
                              </div>
                              <div class="card">
                                <div class="card-header" id="headingTwo">
                                  <h2 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                      第二次回覆:
                                    </button>
                                  </h2>
                                </div>
                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                  <div class="card-body">
                                    <a href='./%E8%A1%8C%E9%8A%B7%E7%BE%8E%E5%AD%B8%E8%A6%81%E7%B4%A0%E4%B9%8B%E5%88%9D%E6%8E%A2.pdf'><i class="fas fa-file-download"></i></a><u>(點選查看)</u>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <p>___________________________________________________________</p>
                            <p>第三次回覆:</p>
                            <p><font size='3'>標&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;題&nbsp;&nbsp;:&nbsp;&nbsp;<input type = "text" name = "title" size="35"></font></p>
                            <p><font size='3'>內容摘要&nbsp;&nbsp;:<font color='red'>&nbsp;&nbsp;*(至多100字)</font></font><br>
                            <textarea name = "content" cols="50" rows="4" maxlength="100"></textarea>
                            </p> 
                            <div class="form-group">
                              <input type="file" class="form-control-file" id="exampleFormControlFile1">
                              <p><font size='3'><font size='1'>&nbsp;&nbsp;檔案格式&nbsp;&nbsp;:&nbsp;&nbsp;[&nbsp;&nbsp;pdf&nbsp;/&nbsp;pdx&nbsp;&nbsp;]</font></font></p>
                            </div>
                            </form>
                       </p> 
                      
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
            <td class="iconcenter"><button type="button" class="btn btn-primary" onclick="confirm('確定要刪除檔案嗎?')"><i class="fas fa-trash-alt"></i>刪除</button></td>
            <td style="text-align:center;" ><font color='green'>已完成</font></td>
            <td><p style='border:dotted 3px cornflowerblue; text-align:center;'>接&nbsp;&nbsp;&nbsp;受</p></td>
          </tr>
          <tr>
                <th style="text-align:center;" scope="row">2</th>
                <td>社群網絡關係</td>
                <td>
              <div class="modal" tabindex="-1" role="dialog" id="modal1">
                <div class="modal-dialog" role="document"> 
                   <div class="modal-content">
                       <div class="modal-header">
                           <h5 class="modal-title">檔案修改</h5>
                           <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button> 
                       </div>
                       <div class="modal-body">
                       <p>
                           <form>
                               <div class="form-group">
                                 <input type="file" class="form-control-file" id="exampleFormControlFile1">
                               </div>
                            </form>
                       </p> 
                      
                       </div>
                       <div class="modal-footer">
                           <button type="button" class="btn btn-secondary" data-dismiss="modal">取消</button>
                           <button type="button" class="btn btn-primary" onclick="confirm('新增成功')">送出</button>
                       </div>
                  </div>
              </div>
           </div>
               <div class="iconcenter">
                   <i class="fas fa-user-edit" style="color: black; font-size: 18px" onclick="showModal1()"></i>
               </div>
           <script>
               function showModal1() {
                    $('#modal1').modal('show'); 
               }
           </script>
            </td>
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
                            <p>審稿者回覆檔:&nbsp;&nbsp;&nbsp;<a href='./%E8%A1%8C%E9%8A%B7%E7%BE%8E%E5%AD%B8%E8%A6%81%E7%B4%A0%E4%B9%8B%E5%88%9D%E6%8E%A2.pdf'><i class="fas fa-download"></i></a></p>
                            <p>回覆投稿:</p>
                            <div class="accordion" id="accordionExample">
                              <div class="card">
                                <div class="card-header" id="headingOne">
                                  <h2 class="mb-0">
                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                      第一次回覆:
                                    </button>
                                  </h2>
                                </div>
                            
                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                  <div class="card-body">
                                    <a href='./%E8%A1%8C%E9%8A%B7%E7%BE%8E%E5%AD%B8%E8%A6%81%E7%B4%A0%E4%B9%8B%E5%88%9D%E6%8E%A2.pdf'><i class="fas fa-file-download"></i></a><u>(點選查看)</u>
                                  </div>
                                </div>
                              </div>
                              <div class="card">
                                <div class="card-header" id="headingTwo">
                                  <h2 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                      第二次回覆:
                                    </button>
                                  </h2>
                                </div>
                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                  <div class="card-body">
                                    <a href='./%E8%A1%8C%E9%8A%B7%E7%BE%8E%E5%AD%B8%E8%A6%81%E7%B4%A0%E4%B9%8B%E5%88%9D%E6%8E%A2.pdf'><i class="fas fa-file-download"></i></a><u>(點選查看)</u>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <p>___________________________________________________________</p>
                            <p>第三次回覆:</p>
                            <p><font size='3'>標&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;題&nbsp;&nbsp;:&nbsp;&nbsp;<input type = "text" name = "title" size="35"></font></p>
                            <p><font size='3'>內容摘要&nbsp;&nbsp;:<font color='red'>&nbsp;&nbsp;*(至多100字)</font></font><br>
                            <textarea name = "content" cols="50" rows="4" maxlength="100"></textarea>
                            </p> 
                            <div class="form-group">
                              <input type="file" class="form-control-file" id="exampleFormControlFile1">
                              <p><font size='3'><font size='1'>&nbsp;&nbsp;檔案格式&nbsp;&nbsp;:&nbsp;&nbsp;[&nbsp;&nbsp;pdf&nbsp;/&nbsp;pdx&nbsp;&nbsp;]</font></font></p>
                            </div>
                            </form>
                       </p> 
                      
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
            <td class="iconcenter"><button type="button" class="btn btn-primary" onclick="confirm('確定要刪除檔案嗎?')"><i class="fas fa-trash-alt"></i>刪除</button></td>
            <td style="text-align:center;" ><font color='green'>已完成</font></td>
            <td><p style='border:dotted 3px cornflowerblue; text-align:center;'>接&nbsp;&nbsp;&nbsp;受</p></td>
          </tr>
          <tr>
                <th style="text-align:center;" scope="row">3</th>
                <td>創新思想對工作發展的影響</td>
                <td>
              <div class="modal" tabindex="-1" role="dialog" id="modal1">
                <div class="modal-dialog" role="document"> 
                   <div class="modal-content">
                       <div class="modal-header">
                           <h5 class="modal-title">檔案修改</h5>
                           <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button> 
                       </div>
                       <div class="modal-body">
                       <p>
                           <form>
                               <div class="form-group">
                                 <input type="file" class="form-control-file" id="exampleFormControlFile1">
                               </div>
                            </form>
                       </p> 
                      
                       </div>
                       <div class="modal-footer">
                           <button type="button" class="btn btn-secondary" data-dismiss="modal">取消</button>
                           <button type="button" class="btn btn-primary" onclick="confirm('新增成功')">送出</button>
                       </div>
                  </div>
              </div>
           </div>
               <div class="iconcenter">
                   <i class="fas fa-user-edit" style="color: black; font-size: 18px" onclick="showModal1()"></i>
               </div>
           <script>
               function showModal1() {
                    $('#modal1').modal('show'); 
               }
           </script>
            </td>
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
                            <p>審稿者回覆檔:&nbsp;&nbsp;&nbsp;<a href='./%E8%A1%8C%E9%8A%B7%E7%BE%8E%E5%AD%B8%E8%A6%81%E7%B4%A0%E4%B9%8B%E5%88%9D%E6%8E%A2.pdf'><i class="fas fa-download"></i></a></p>
                            <p>回覆投稿:</p>
                            <div class="accordion" id="accordionExample">
                              <div class="card">
                                <div class="card-header" id="headingOne">
                                  <h2 class="mb-0">
                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                      第一次回覆:
                                    </button>
                                  </h2>
                                </div>
                            
                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                  <div class="card-body">
                                    <a href='./%E8%A1%8C%E9%8A%B7%E7%BE%8E%E5%AD%B8%E8%A6%81%E7%B4%A0%E4%B9%8B%E5%88%9D%E6%8E%A2.pdf'><i class="fas fa-file-download"></i></a><u>(點選查看)</u>
                                  </div>
                                </div>
                              </div>
                              <div class="card">
                                <div class="card-header" id="headingTwo">
                                  <h2 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                      第二次回覆:
                                    </button>
                                  </h2>
                                </div>
                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                  <div class="card-body">
                                    <a href='./%E8%A1%8C%E9%8A%B7%E7%BE%8E%E5%AD%B8%E8%A6%81%E7%B4%A0%E4%B9%8B%E5%88%9D%E6%8E%A2.pdf'><i class="fas fa-file-download"></i></a><u>(點選查看)</u>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <p>___________________________________________________________</p>
                            <p>第三次回覆:</p>
                            <p><font size='3'>標&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;題&nbsp;&nbsp;:&nbsp;&nbsp;<input type = "text" name = "title" size="35"></font></p>
                            <p><font size='3'>內容摘要&nbsp;&nbsp;:<font color='red'>&nbsp;&nbsp;*(至多100字)</font></font><br>
                            <textarea name = "content" cols="50" rows="4" maxlength="100"></textarea>
                            </p> 
                            <div class="form-group">
                              <input type="file" class="form-control-file" id="exampleFormControlFile1">
                              <p><font size='3'><font size='1'>&nbsp;&nbsp;檔案格式&nbsp;&nbsp;:&nbsp;&nbsp;[&nbsp;&nbsp;pdf&nbsp;/&nbsp;pdx&nbsp;&nbsp;]</font></font></p>
                            </div>
                            </form>
                       </p> 
                      
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
            <td class="iconcenter"><button type="button" class="btn btn-primary" onclick="confirm('確定要刪除檔案嗎?')"><i class="fas fa-trash-alt"></i>刪除</button></td>
            <td style="text-align:center;" ><font color='green'>已完成</font></td>
            <td><p style='border:dotted 3px cornflowerblue; text-align:center;'>接&nbsp;&nbsp;&nbsp;受</p></td>
          </tr>
          <tr>
                <th style="text-align:center;" scope="row">4</th>
                <td>新型行銷手法</td>
                <td>
              <div class="modal" tabindex="-1" role="dialog" id="modal1">
                <div class="modal-dialog" role="document"> 
                   <div class="modal-content">
                       <div class="modal-header">
                           <h5 class="modal-title">檔案修改</h5>
                           <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button> 
                       </div>
                       <div class="modal-body">
                       <p>
                           <form>
                               <div class="form-group">
                                 <input type="file" class="form-control-file" id="exampleFormControlFile1">
                               </div>
                            </form>
                       </p> 
                      
                       </div>
                       <div class="modal-footer">
                           <button type="button" class="btn btn-secondary" data-dismiss="modal">取消</button>
                           <button type="button" class="btn btn-primary" onclick="confirm('新增成功')">送出</button>
                       </div>
                  </div>
              </div>
           </div>
               <div class="iconcenter">
                   <i class="fas fa-user-edit" style="color: black; font-size: 18px" onclick="showModal1()"></i>
               </div>
           <script>
               function showModal1() {
                    $('#modal1').modal('show'); 
               }
           </script>
            </td>
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
                            <p>審稿者回覆檔:&nbsp;&nbsp;&nbsp;<a href='./%E8%A1%8C%E9%8A%B7%E7%BE%8E%E5%AD%B8%E8%A6%81%E7%B4%A0%E4%B9%8B%E5%88%9D%E6%8E%A2.pdf'><i class="fas fa-download"></i></a></p>
                            <p>回覆投稿:</p>
                            <div class="accordion" id="accordionExample">
                              <div class="card">
                                <div class="card-header" id="headingOne">
                                  <h2 class="mb-0">
                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                      第一次回覆:
                                    </button>
                                  </h2>
                                </div>
                            
                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                  <div class="card-body">
                                    <a href='./%E8%A1%8C%E9%8A%B7%E7%BE%8E%E5%AD%B8%E8%A6%81%E7%B4%A0%E4%B9%8B%E5%88%9D%E6%8E%A2.pdf'><i class="fas fa-file-download"></i></a><u>(點選查看)</u>
                                  </div>
                                </div>
                              </div>
                              <div class="card">
                                <div class="card-header" id="headingTwo">
                                  <h2 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                      第二次回覆:
                                    </button>
                                  </h2>
                                </div>
                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                  <div class="card-body">
                                    <a href='./%E8%A1%8C%E9%8A%B7%E7%BE%8E%E5%AD%B8%E8%A6%81%E7%B4%A0%E4%B9%8B%E5%88%9D%E6%8E%A2.pdf'><i class="fas fa-file-download"></i></a><u>(點選查看)</u>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <p>___________________________________________________________</p>
                            <p>第三次回覆:</p>
                            <p><font size='3'>標&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;題&nbsp;&nbsp;:&nbsp;&nbsp;<input type = "text" name = "title" size="35"></font></p>
                            <p><font size='3'>內容摘要&nbsp;&nbsp;:<font color='red'>&nbsp;&nbsp;*(至多100字)</font></font><br>
                            <textarea name = "content" cols="50" rows="4" maxlength="100"></textarea>
                            </p> 
                            <div class="form-group">
                              <input type="file" class="form-control-file" id="exampleFormControlFile1">
                              <p><font size='3'><font size='1'>&nbsp;&nbsp;檔案格式&nbsp;&nbsp;:&nbsp;&nbsp;[&nbsp;&nbsp;pdf&nbsp;/&nbsp;pdx&nbsp;&nbsp;]</font></font></p>
                            </div>
                            </form>
                       </p> 
                      
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
            <td class="iconcenter"><button type="button" class="btn btn-primary" onclick="confirm('確定要刪除檔案嗎?')"><i class="fas fa-trash-alt"></i>刪除</button></td>
            <td style="text-align:center;" ><font color='green'>已完成</font></td>
            <td><p style='border:dotted 3px cornflowerblue; text-align:center;'>接&nbsp;&nbsp;&nbsp;受</p></td>
          </tr>
              </div>
            </div>
        </tbody>
    </table>
</body>
</html>