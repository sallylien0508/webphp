<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css2?family=Rajdhani&family=Unica+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <style type="text/css">
    .main{
        width: 100%;
        height: 98vh;
        /* background: crimson; */
        margin: auto;
        display: grid;
        place-items: center;
    }
    .choose{
        width: 74%;
        height: 30%;
        display: flex;
        justify-content: space-evenly;
        align-items: center;
        /* background: black; */
        margin-left: 8em;
    }
    img{
        width: 200px;
        height: 200px;
        /* margin: 0 50px; */
        /* background: chocolate; */
    }
    .icon p{
        color: white;
        text-align: center;
        font-size: 1.75rem;
        letter-spacing: 9px;
        text-indent: 9px;
        /* background: crimson; */
        margin-top: -1.25em;
        font-weight: 500;
    }
    .icon{
        cursor: pointer;
        /* background: crimson; */
    }
    .icon:hover p{
        color: tan;
    }
    a:hover{
        text-decoration: none;
    }
    </style>
</head>
<body>
    <div class="main">
        <div class="choose">
            <div class="icon">
                <a href="R_downloadhomepage.php">
                <img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZlcnNpb249IjEuMSIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHhtbG5zOnN2Z2pzPSJodHRwOi8vc3ZnanMuY29tL3N2Z2pzIiB3aWR0aD0iNTEyIiBoZWlnaHQ9IjUxMiIgeD0iMCIgeT0iMCIgdmlld0JveD0iMCAwIDUyMCA1MjAiIHN0eWxlPSJlbmFibGUtYmFja2dyb3VuZDpuZXcgMCAwIDUxMiA1MTIiIHhtbDpzcGFjZT0icHJlc2VydmUiPjxnIHRyYW5zZm9ybT0ibWF0cml4KDAuNDUsMCwwLDAuNDUsMTQzLDE0MykiPjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PHBhdGggZD0ibTQ3NSAxMjUuMDE2di0zNS4wMTZjMC0yNC44MTMtMjAuMTg3LTQ1LTQ1LTQ1aC0yMTAuNTk4bC03Ljg2LTEyLjgzNGMtMi43MjctNC40NTItNy41NzEtNy4xNjYtMTIuNzkyLTcuMTY2aC0xNTMuNzVjLTI0LjgxMyAwLTQ1IDIwLjE4Ny00NSA0NXYzODBjMCAyNC44MTMgMjAuMTg3IDQ1IDQ1IDQ1aDQzMGMyNC44MTMgMCA0NS0yMC4xODcgNDUtNDV2LTI3OS45ODRjMC0yNC44MTQtMjAuMTg3LTQ1LTQ1LTQ1em0tNDUtNTAuMDE2YzguMjcxIDAgMTUgNi43MjkgMTUgMTV2MzVoLTE3Ni42MDZsLTMwLjYyLTUwem02MCAzNzVjMCA4LjI3MS02LjcyOSAxNS0xNSAxNWgtNDMwYy04LjI3MSAwLTE1LTYuNzI5LTE1LTE1di0zODBjMC04LjI3MSA2LjcyOS0xNSAxNS0xNWgxNDUuMzQ3bDcuODU3IDEyLjgzYy4wMDEuMDAxLjAwMi4wMDMuMDAyLjAwNGw0OC45OTIgODBjLjAwMS4wMDEuMDAyLjAwMy4wMDMuMDA0bC4wMDcuMDExYzIuNzI3IDQuNDUyIDcuNTcxIDcuMTY2IDEyLjc5MiA3LjE2NmgyMTVjOC4yNzEgMCAxNSA2LjcyOSAxNSAxNXoiIGZpbGw9IiNmZmZmZmYiIGRhdGEtb3JpZ2luYWw9IiMwMDAwMDAiIHN0eWxlPSIiPjwvcGF0aD48cGF0aCBkPSJtMzIwIDMyNC43MThoLTE1di03NWMwLTguMjg0LTYuNzE2LTE1LTE1LTE1aC02MGMtOC4yODQgMC0xNSA2LjcxNi0xNSAxNXY3NWgtMTVjLTguMjg0IDAtMTUgNi43MTYtMTUgMTV2NDBjMCA1LjAxNiAyLjUwNiA5LjY5OSA2LjY4IDEyLjQ4bDYwIDQwYzIuNTE5IDEuNjggNS40MiAyLjUyIDguMzIgMi41MnM1LjgwMS0uODQgOC4zMi0yLjUybDYwLTQwYzQuMTczLTIuNzgxIDYuNjgtNy40NjUgNi42OC0xMi40OHYtNDBjMC04LjI4NC02LjcxNi0xNS0xNS0xNXptLTE1IDQ2Ljk3Mi00NSAzMC00NS0zMHYtMTYuOTczaDE1YzguMjg0IDAgMTUtNi43MTYgMTUtMTV2LTc1aDMwdjc1YzAgOC4yODQgNi43MTYgMTUgMTUgMTVoMTV6IiBmaWxsPSIjZmZmZmZmIiBkYXRhLW9yaWdpbmFsPSIjMDAwMDAwIiBzdHlsZT0iIj48L3BhdGg+PC9nPjwvZz48L3N2Zz4=" />
                    <p>稿件下載</p>
                </a>
            </div>
            <div class="icon">
                <a href="R_reply.php">
                    <img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZlcnNpb249IjEuMSIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHhtbG5zOnN2Z2pzPSJodHRwOi8vc3ZnanMuY29tL3N2Z2pzIiB3aWR0aD0iNTEyIiBoZWlnaHQ9IjUxMiIgeD0iMCIgeT0iMCIgdmlld0JveD0iMCAwIDI0IDI0IiBzdHlsZT0iZW5hYmxlLWJhY2tncm91bmQ6bmV3IDAgMCA1MTIgNTEyIiB4bWw6c3BhY2U9InByZXNlcnZlIiBjbGFzcz0iIj48ZyB0cmFuc2Zvcm09Im1hdHJpeCgwLjUsMCwwLDAuNSw2LDYpIj48cGF0aCB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIGQ9Im0yMy41IDI0Yy0uMTY5IDAtLjMzMS0uMDg2LS40MjQtLjIzNS0xLjQ3My0yLjM1OC00LjAxMy0zLjc2NS02Ljc5Mi0zLjc2NWgtLjI4NHYyLjVjMCAuMjAyLS4xMjIuMzg1LS4zMDkuNDYycy0uNDAxLjAzNS0uNTQ1LS4xMDhsLTUtNWMtLjE5NS0uMTk1LS4xOTUtLjUxMiAwLS43MDdsNS01Yy4xNDMtLjE0NC4zNTgtLjE4Ni41NDUtLjEwOHMuMzA5LjI1OS4zMDkuNDYxdjIuNTE1YzQuNDU1LjI2IDggMy45NjcgOCA4LjQ4NSAwIC4yMjMtLjE0OC40MTktLjM2Mi40OC0uMDQ2LjAxNC0uMDkyLjAyLS4xMzguMDJ6bS04LTVoLjc4NGMyLjUwNiAwIDQuODM4IDEuMDE3IDYuNTE5IDIuNzg2LS43NzgtMy4zMTItMy43NTctNS43ODYtNy4zMDMtNS43ODYtLjI3NiAwLS41LS4yMjQtLjUtLjV2LTEuNzkzbC0zLjc5MyAzLjc5MyAzLjc5MyAzLjc5M3YtMS43OTNjMC0uMjc2LjIyNC0uNS41LS41eiIgZmlsbD0iI2ZmZmZmZiIgZGF0YS1vcmlnaW5hbD0iIzAwMDAwMCIgc3R5bGU9IiIgY2xhc3M9IiI+PC9wYXRoPjxwYXRoIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgZD0ibTkuNSAyMWgtN2MtMS4zNzggMC0yLjUtMS4xMjEtMi41LTIuNXYtMTNjMC0xLjM3OSAxLjEyMi0yLjUgMi41LTIuNWgyYy4yNzYgMCAuNS4yMjQuNS41cy0uMjI0LjUtLjUuNWgtMmMtLjgyNyAwLTEuNS42NzMtMS41IDEuNXYxM2MwIC44MjcuNjczIDEuNSAxLjUgMS41aDdjLjI3NiAwIC41LjIyNC41LjVzLS4yMjQuNS0uNS41eiIgZmlsbD0iI2ZmZmZmZiIgZGF0YS1vcmlnaW5hbD0iIzAwMDAwMCIgc3R5bGU9IiIgY2xhc3M9IiI+PC9wYXRoPjxwYXRoIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgZD0ibTExLjUgNmgtNmMtLjgyNyAwLTEuNS0uNjczLTEuNS0xLjV2LTJjMC0uMjc2LjIyNC0uNS41LS41aDEuNTVjLjIzMy0xLjE0IDEuMjQyLTIgMi40NS0yczIuMjE3Ljg2IDIuNDUgMmgxLjU1Yy4yNzYgMCAuNS4yMjQuNS41djJjMCAuODI3LS42NzMgMS41LTEuNSAxLjV6bS02LjUtM3YxLjVjMCAuMjc1LjIyNC41LjUuNWg2Yy4yNzYgMCAuNS0uMjI1LjUtLjV2LTEuNWgtMS41Yy0uMjc2IDAtLjUtLjIyNC0uNS0uNSAwLS44MjctLjY3My0xLjUtMS41LTEuNXMtMS41LjY3My0xLjUgMS41YzAgLjI3Ni0uMjI0LjUtLjUuNXoiIGZpbGw9IiNmZmZmZmYiIGRhdGEtb3JpZ2luYWw9IiMwMDAwMDAiIHN0eWxlPSIiIGNsYXNzPSIiPjwvcGF0aD48cGF0aCB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIGQ9Im0xMy41IDloLTEwYy0uMjc2IDAtLjUtLjIyNC0uNS0uNXMuMjI0LS41LjUtLjVoMTBjLjI3NiAwIC41LjIyNC41LjVzLS4yMjQuNS0uNS41eiIgZmlsbD0iI2ZmZmZmZiIgZGF0YS1vcmlnaW5hbD0iIzAwMDAwMCIgc3R5bGU9IiIgY2xhc3M9IiI+PC9wYXRoPjxwYXRoIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgZD0ibTEyLjUgMTJoLTljLS4yNzYgMC0uNS0uMjI0LS41LS41cy4yMjQtLjUuNS0uNWg5Yy4yNzYgMCAuNS4yMjQuNS41cy0uMjI0LjUtLjUuNXoiIGZpbGw9IiNmZmZmZmYiIGRhdGEtb3JpZ2luYWw9IiMwMDAwMDAiIHN0eWxlPSIiIGNsYXNzPSIiPjwvcGF0aD48cGF0aCB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIGQ9Im05LjUgMTVoLTZjLS4yNzYgMC0uNS0uMjI0LS41LS41cy4yMjQtLjUuNS0uNWg2Yy4yNzYgMCAuNS4yMjQuNS41cy0uMjI0LjUtLjUuNXoiIGZpbGw9IiNmZmZmZmYiIGRhdGEtb3JpZ2luYWw9IiMwMDAwMDAiIHN0eWxlPSIiIGNsYXNzPSIiPjwvcGF0aD48cGF0aCB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIGQ9Im0xNi41IDEwYy0uMjc2IDAtLjUtLjIyNC0uNS0uNXYtNGMwLS44MjctLjY3My0xLjUtMS41LTEuNWgtMmMtLjI3NiAwLS41LS4yMjQtLjUtLjVzLjIyNC0uNS41LS41aDJjMS4zNzggMCAyLjUgMS4xMjEgMi41IDIuNXY0YzAgLjI3Ni0uMjI0LjUtLjUuNXoiIGZpbGw9IiNmZmZmZmYiIGRhdGEtb3JpZ2luYWw9IiMwMDAwMDAiIHN0eWxlPSIiIGNsYXNzPSIiPjwvcGF0aD48L2c+PC9zdmc+" />
                    <p>回覆意見</p>
                </a>
            </div>
        </div>
    </div>
</body>
</html>