<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>我要投稿</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <style>
        p{
            color: black;
        }
    </style>
</head>
<body style="display: flex; justify-content: center; align-items: center;">
<div class="modal-body">
    <div style="width:55%; margin-left:17vw; background: white;padding: 4em 3em">
        <div class="table-responsive" style="margin-top:2%;">
            <h5 style="text-align:center; color:black; font-size:30px; letter-spacing:10px; text-indent:10px;">新增稿件</h5>
            <hr width=100% size=30 color=tan style="filter:alpha(opacity=100,finishopacity=0,style=2)">
    <form>
        <p>標&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;題&nbsp;&nbsp;:&nbsp;&nbsp;<input type = "text" name = "title" size="35"></p>
        <p>內容摘要&nbsp;&nbsp;:<font color='red'>&nbsp;&nbsp;*(至多100字)</font><br>
        <textarea name = "content" cols="45" rows="4" ></textarea>
        </p> 
        <div class="form-group">
            <input type="file" class="form-control-file" id="exampleFormControlFile1">
            <p><font size='1'>&nbsp;&nbsp;檔案格式&nbsp;&nbsp;:&nbsp;&nbsp;[&nbsp;&nbsp;pdf&nbsp;/&nbsp;pdx&nbsp;&nbsp;]</font></p>
        </div>
    </form>
    <button type="button" class="btn btn-secondary" data-dismiss="modal">取消</button>
    <button type="button" class="btn btn-primary" onclick="confirm('新增成功')">新增</button>
        </div>
    </div>
</div>
</body>
</html>