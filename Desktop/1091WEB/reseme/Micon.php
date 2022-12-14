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
        /* background: khaki; */
        margin: auto;
        display: grid;
        place-items: center;
        margin-left: 8em;
    }
    .choose{
        width: 90%;
        height: 80%;
        display: flex;
        justify-content: space-evenly;
        align-items: center;
        /* background: tan; */
        margin-top: -14em;
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
    hr{
        width: 50vw;
        margin-top: -1.25em;
    }
    a:hover{
        text-decoration: none;
    }
    </style>
</head>
<body>
    <div class="main">
    <div style="font-size:30px; color:white;">帳號管理</div>
    <hr width=65% size=30 color=tan style="filter:alpha(opacity=100,finishopacity=0,style=2); margin-top:-12em;">
        <div class="choose">
            <div class="icon">
                <a href="MANAGER.php?page=set">
                <img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZlcnNpb249IjEuMSIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHhtbG5zOnN2Z2pzPSJodHRwOi8vc3ZnanMuY29tL3N2Z2pzIiB3aWR0aD0iNTEyIiBoZWlnaHQ9IjUxMiIgeD0iMCIgeT0iMCIgdmlld0JveD0iMCAwIDUxMiA1MTIiIHN0eWxlPSJlbmFibGUtYmFja2dyb3VuZDpuZXcgMCAwIDUxMiA1MTIiIHhtbDpzcGFjZT0icHJlc2VydmUiPjxnIHRyYW5zZm9ybT0ibWF0cml4KDAuNSwwLDAsMC41LDEyOC4wMDAwMDM4MTQ2OTcyNywxMjguMDAwMDAzODE0Njk3MjcpIj48cGF0aCB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIGQ9Im0yNzIuMDY2IDUxMmgtMzIuMTMzYy0yNS45ODkgMC00Ny4xMzQtMjEuMTQ0LTQ3LjEzNC00Ny4xMzN2LTEwLjg3MWMtMTEuMDQ5LTMuNTMtMjEuNzg0LTcuOTg2LTMyLjA5Ny0xMy4zMjNsLTcuNzA0IDcuNzA0Yy0xOC42NTkgMTguNjgyLTQ4LjU0OCAxOC4xMzQtNjYuNjY1LS4wMDdsLTIyLjcxMS0yMi43MWMtMTguMTQ5LTE4LjEyOS0xOC42NzEtNDguMDA4LjAwNi02Ni42NjVsNy42OTgtNy42OThjLTUuMzM3LTEwLjMxMy05Ljc5Mi0yMS4wNDYtMTMuMzIzLTMyLjA5N2gtMTAuODdjLTI1Ljk4OCAwLTQ3LjEzMy0yMS4xNDQtNDcuMTMzLTQ3LjEzM3YtMzIuMTM0YzAtMjUuOTg5IDIxLjE0NS00Ny4xMzMgNDcuMTM0LTQ3LjEzM2gxMC44N2MzLjUzMS0xMS4wNSA3Ljk4Ni0yMS43ODQgMTMuMzIzLTMyLjA5N2wtNy43MDQtNy43MDNjLTE4LjY2Ni0xOC42NDYtMTguMTUxLTQ4LjUyOC4wMDYtNjYuNjY1bDIyLjcxMy0yMi43MTJjMTguMTU5LTE4LjE4NCA0OC4wNDEtMTguNjM4IDY2LjY2NC4wMDZsNy42OTcgNy42OTdjMTAuMzEzLTUuMzM2IDIxLjA0OC05Ljc5MiAzMi4wOTctMTMuMzIzdi0xMC44N2MwLTI1Ljk4OSAyMS4xNDQtNDcuMTMzIDQ3LjEzNC00Ny4xMzNoMzIuMTMzYzI1Ljk4OSAwIDQ3LjEzMyAyMS4xNDQgNDcuMTMzIDQ3LjEzM3YxMC44NzFjMTEuMDQ5IDMuNTMgMjEuNzg0IDcuOTg2IDMyLjA5NyAxMy4zMjNsNy43MDQtNy43MDRjMTguNjU5LTE4LjY4MiA0OC41NDgtMTguMTM0IDY2LjY2NS4wMDdsMjIuNzExIDIyLjcxYzE4LjE0OSAxOC4xMjkgMTguNjcxIDQ4LjAwOC0uMDA2IDY2LjY2NWwtNy42OTggNy42OThjNS4zMzcgMTAuMzEzIDkuNzkyIDIxLjA0NiAxMy4zMjMgMzIuMDk3aDEwLjg3YzI1Ljk4OSAwIDQ3LjEzNCAyMS4xNDQgNDcuMTM0IDQ3LjEzM3YzMi4xMzRjMCAyNS45ODktMjEuMTQ1IDQ3LjEzMy00Ny4xMzQgNDcuMTMzaC0xMC44N2MtMy41MzEgMTEuMDUtNy45ODYgMjEuNzg0LTEzLjMyMyAzMi4wOTdsNy43MDQgNy43MDRjMTguNjY2IDE4LjY0NiAxOC4xNTEgNDguNTI4LS4wMDYgNjYuNjY1bC0yMi43MTMgMjIuNzEyYy0xOC4xNTkgMTguMTg0LTQ4LjA0MSAxOC42MzgtNjYuNjY0LS4wMDZsLTcuNjk3LTcuNjk3Yy0xMC4zMTMgNS4zMzYtMjEuMDQ4IDkuNzkyLTMyLjA5NyAxMy4zMjN2MTAuODcxYzAgMjUuOTg3LTIxLjE0NCA0Ny4xMzEtNDcuMTM0IDQ3LjEzMXptLTEwNi4zNDktMTAyLjgzYzE0LjMyNyA4LjQ3MyAyOS43NDcgMTQuODc0IDQ1LjgzMSAxOS4wMjUgNi42MjQgMS43MDkgMTEuMjUyIDcuNjgzIDExLjI1MiAxNC41MjR2MjIuMTQ4YzAgOS40NDcgNy42ODcgMTcuMTMzIDE3LjEzNCAxNy4xMzNoMzIuMTMzYzkuNDQ3IDAgMTcuMTM0LTcuNjg2IDE3LjEzNC0xNy4xMzN2LTIyLjE0OGMwLTYuODQxIDQuNjI4LTEyLjgxNSAxMS4yNTItMTQuNTI0IDE2LjA4NC00LjE1MSAzMS41MDQtMTAuNTUyIDQ1LjgzMS0xOS4wMjUgNS44OTUtMy40ODYgMTMuNC0yLjUzOCAxOC4yNDMgMi4zMDVsMTUuNjg4IDE1LjY4OWM2Ljc2NCA2Ljc3MiAxNy42MjYgNi42MTUgMjQuMjI0LjAwN2wyMi43MjctMjIuNzI2YzYuNTgyLTYuNTc0IDYuODAyLTE3LjQzOC4wMDYtMjQuMjI1bC0xNS42OTUtMTUuNjk1Yy00Ljg0Mi00Ljg0Mi01Ljc5LTEyLjM0OC0yLjMwNS0xOC4yNDIgOC40NzMtMTQuMzI2IDE0Ljg3My0yOS43NDYgMTkuMDI0LTQ1LjgzMSAxLjcxLTYuNjI0IDcuNjg0LTExLjI1MSAxNC41MjQtMTEuMjUxaDIyLjE0N2M5LjQ0NyAwIDE3LjEzNC03LjY4NiAxNy4xMzQtMTcuMTMzdi0zMi4xMzRjMC05LjQ0Ny03LjY4Ny0xNy4xMzMtMTcuMTM0LTE3LjEzM2gtMjIuMTQ3Yy02Ljg0MSAwLTEyLjgxNC00LjYyOC0xNC41MjQtMTEuMjUxLTQuMTUxLTE2LjA4NS0xMC41NTItMzEuNTA1LTE5LjAyNC00NS44MzEtMy40ODUtNS44OTQtMi41MzctMTMuNCAyLjMwNS0xOC4yNDJsMTUuNjg5LTE1LjY4OWM2Ljc4Mi02Ljc3NCA2LjYwNS0xNy42MzQuMDA2LTI0LjIyNWwtMjIuNzI1LTIyLjcyNWMtNi41ODctNi41OTYtMTcuNDUxLTYuNzg5LTI0LjIyNS0uMDA2bC0xNS42OTQgMTUuNjk1Yy00Ljg0MiA0Ljg0My0xMi4zNSA1Ljc5MS0xOC4yNDMgMi4zMDUtMTQuMzI3LTguNDczLTI5Ljc0Ny0xNC44NzQtNDUuODMxLTE5LjAyNS02LjYyNC0xLjcwOS0xMS4yNTItNy42ODMtMTEuMjUyLTE0LjUyNHYtMjIuMTVjMC05LjQ0Ny03LjY4Ny0xNy4xMzMtMTcuMTM0LTE3LjEzM2gtMzIuMTMzYy05LjQ0NyAwLTE3LjEzNCA3LjY4Ni0xNy4xMzQgMTcuMTMzdjIyLjE0OGMwIDYuODQxLTQuNjI4IDEyLjgxNS0xMS4yNTIgMTQuNTI0LTE2LjA4NCA0LjE1MS0zMS41MDQgMTAuNTUyLTQ1LjgzMSAxOS4wMjUtNS44OTYgMy40ODUtMTMuNDAxIDIuNTM3LTE4LjI0My0yLjMwNWwtMTUuNjg4LTE1LjY4OWMtNi43NjQtNi43NzItMTcuNjI3LTYuNjE1LTI0LjIyNC0uMDA3bC0yMi43MjcgMjIuNzI2Yy02LjU4MiA2LjU3NC02LjgwMiAxNy40MzctLjAwNiAyNC4yMjVsMTUuNjk1IDE1LjY5NWM0Ljg0MiA0Ljg0MiA1Ljc5IDEyLjM0OCAyLjMwNSAxOC4yNDItOC40NzMgMTQuMzI2LTE0Ljg3MyAyOS43NDYtMTkuMDI0IDQ1LjgzMS0xLjcxIDYuNjI0LTcuNjg0IDExLjI1MS0xNC41MjQgMTEuMjUxaC0yMi4xNDhjLTkuNDQ3LjAwMS0xNy4xMzQgNy42ODctMTcuMTM0IDE3LjEzNHYzMi4xMzRjMCA5LjQ0NyA3LjY4NyAxNy4xMzMgMTcuMTM0IDE3LjEzM2gyMi4xNDdjNi44NDEgMCAxMi44MTQgNC42MjggMTQuNTI0IDExLjI1MSA0LjE1MSAxNi4wODUgMTAuNTUyIDMxLjUwNSAxOS4wMjQgNDUuODMxIDMuNDg1IDUuODk0IDIuNTM3IDEzLjQtMi4zMDUgMTguMjQybC0xNS42ODkgMTUuNjg5Yy02Ljc4MiA2Ljc3NC02LjYwNSAxNy42MzQtLjAwNiAyNC4yMjVsMjIuNzI1IDIyLjcyNWM2LjU4NyA2LjU5NiAxNy40NTEgNi43ODkgMjQuMjI1LjAwNmwxNS42OTQtMTUuNjk1YzMuNTY4LTMuNTY3IDEwLjk5MS02LjU5NCAxOC4yNDQtMi4zMDR6IiBmaWxsPSIjZmZmZmZmIiBkYXRhLW9yaWdpbmFsPSIjMDAwMDAwIiBzdHlsZT0iIj48L3BhdGg+PHBhdGggeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiBkPSJtMjU2IDM2Ny40Yy02MS40MjcgMC0xMTEuNC00OS45NzQtMTExLjQtMTExLjRzNDkuOTczLTExMS40IDExMS40LTExMS40IDExMS40IDQ5Ljk3NCAxMTEuNCAxMTEuNC00OS45NzMgMTExLjQtMTExLjQgMTExLjR6bTAtMTkyLjhjLTQ0Ljg4NSAwLTgxLjQgMzYuNTE2LTgxLjQgODEuNHMzNi41MTYgODEuNCA4MS40IDgxLjQgODEuNC0zNi41MTYgODEuNC04MS40LTM2LjUxNS04MS40LTgxLjQtODEuNHoiIGZpbGw9IiNmZmZmZmYiIGRhdGEtb3JpZ2luYWw9IiMwMDAwMDAiIHN0eWxlPSIiPjwvcGF0aD48L2c+PC9zdmc+" />
                    <p>權限設定</p>
                </a>
            </div>
            <div class="icon">
                <a href="MANAGER.php?page=list">
                    <img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZlcnNpb249IjEuMSIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHhtbG5zOnN2Z2pzPSJodHRwOi8vc3ZnanMuY29tL3N2Z2pzIiB3aWR0aD0iNTEyIiBoZWlnaHQ9IjUxMiIgeD0iMCIgeT0iMCIgdmlld0JveD0iMCAwIDUxMi4wMDUgNTEyLjAwNSIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgNTEyIDUxMiIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSI+PGcgdHJhbnNmb3JtPSJtYXRyaXgoMC41LDAsMCwwLjUsMTI4LjAwMTQwMzgwODU5Mzc1LDEyOC4wMDE0OTUzNjEzMjgxMikiPgo8ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgoJPGc+CgkJPHBhdGggZD0iTTUwNS43NDksNDc1LjU4N2wtMTQ1LjYtMTQ1LjZjMjguMjAzLTM0LjgzNyw0NS4xODQtNzkuMTA0LDQ1LjE4NC0xMjcuMzE3YzAtMTExLjc0NC05MC45MjMtMjAyLjY2Ny0yMDIuNjY3LTIwMi42NjcgICAgUzAsOTAuOTI1LDAsMjAyLjY2OXM5MC45MjMsMjAyLjY2NywyMDIuNjY3LDIwMi42NjdjNDguMjEzLDAsOTIuNDgtMTYuOTgxLDEyNy4zMTctNDUuMTg0bDE0NS42LDE0NS42ICAgIGM0LjE2LDQuMTYsOS42MjEsNi4yNTEsMTUuMDgzLDYuMjUxczEwLjkyMy0yLjA5MSwxNS4wODMtNi4yNTFDNTE0LjA5MSw0OTcuNDExLDUxNC4wOTEsNDgzLjkyOCw1MDUuNzQ5LDQ3NS41ODd6ICAgICBNMjAyLjY2NywzNjIuNjY5Yy04OC4yMzUsMC0xNjAtNzEuNzY1LTE2MC0xNjBzNzEuNzY1LTE2MCwxNjAtMTYwczE2MCw3MS43NjUsMTYwLDE2MFMyOTAuOTAxLDM2Mi42NjksMjAyLjY2NywzNjIuNjY5eiIgZmlsbD0iI2ZmZmZmZiIgZGF0YS1vcmlnaW5hbD0iIzAwMDAwMCIgc3R5bGU9IiI+PC9wYXRoPgoJPC9nPgo8L2c+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjwvZz4KPGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPC9nPgo8ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8L2c+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjwvZz4KPGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPC9nPgo8ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8L2c+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjwvZz4KPGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPC9nPgo8ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8L2c+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjwvZz4KPGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPC9nPgo8ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8L2c+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjwvZz4KPGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPC9nPgo8ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8L2c+CjwvZz48L3N2Zz4=" />
                    <p>瀏覽名單</p>
                </a>
            </div>
        </div>
    <div style="font-size:30px; color:white;margin-top: -2em;">稿件管理</div>
    <hr width=65% size=30 color=tan style="filter:alpha(opacity=100,finishopacity=0,style=2); margin-top:-12em;">
        <div class="choose">
            <div class="icon">
                <a href="MANAGER.php?page=distribution">
                <img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZlcnNpb249IjEuMSIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHhtbG5zOnN2Z2pzPSJodHRwOi8vc3ZnanMuY29tL3N2Z2pzIiB3aWR0aD0iNTEyIiBoZWlnaHQ9IjUxMiIgeD0iMCIgeT0iMCIgdmlld0JveD0iMCAwIDUxMi4wMDA4NyA1MTIuMDAwODciIHN0eWxlPSJlbmFibGUtYmFja2dyb3VuZDpuZXcgMCAwIDUxMiA1MTIiIHhtbDpzcGFjZT0icHJlc2VydmUiIGNsYXNzPSIiPjxnIHRyYW5zZm9ybT0ibWF0cml4KDAuNSwwLDAsMC41LDEyOC4wMDAwMDM1NzYyNzg3LDEyOC4wMDAwMDM1NzYyNzg3KSI+PHBhdGggeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiBkPSJtMTUzLjk4NDM3NSAxMzkuOTgwNDY5aDIwNC4wMzUxNTZjOC4yODUxNTcgMCAxNSA2LjcxODc1IDE1IDE1LjAwMzkwNnYyMDIuMDM1MTU2YzAgOC4yODUxNTctNi43MTQ4NDMgMTUuMDAzOTA3LTE1IDE1LjAwMzkwN2gtMjA0LjAzNTE1NmMtOC4yODkwNjMgMC0xNS4wMDM5MDYtNi43MTg3NS0xNS4wMDM5MDYtMTUuMDAzOTA3di0yMDIuMDM1MTU2YzAtOC4yODUxNTYgNi43MTQ4NDMtMTUuMDAzOTA2IDE1LjAwMzkwNi0xNS4wMDM5MDZ6bS0xNDkuNTc0MjE5IDEyNi42NTYyNWMtNS44NTkzNzUtNS44MjQyMTktNS44ODI4MTItMTUuMjk2ODc1LS4wNTg1OTQtMjEuMTUyMzQ0bDM0LjQxMDE1Ny0zNC40NzI2NTZjMTMuOTE3OTY5LTEzLjk2ODc1IDM1LjA5NzY1NiA3LjE2NDA2MiAyMS4yMTQ4NDMgMjEuMDk3NjU2bC04Ljg3NSA4Ljg4NjcxOWg0My44NjcxODhjMTkuNzUzOTA2IDAgMTkuNzUzOTA2IDMwLjAwNzgxMiAwIDMwLjAwNzgxMmgtNDMuODMyMDMxbDguODQzNzUgOC44MjgxMjVjMTMuOTcyNjU2IDEzLjkxNzk2OS03LjE2MDE1NyAzNS4xMDE1NjMtMjEuMDk3NjU3IDIxLjIxNDg0NHptNDU2LjQ4ODI4MiA0LjM2NzE4N2gtNDMuODY3MTg4Yy0xOS43NTM5MDYgMC0xOS43NTM5MDYtMzAuMDA3ODEyIDAtMzAuMDA3ODEyaDQzLjgzMjAzMWwtOC44NDM3NS04LjgyODEyNWMtMTMuOTY4NzUtMTMuOTE3OTY5IDcuMTYwMTU3LTM1LjEwMTU2MyAyMS4wOTc2NTctMjEuMjE0ODQ0bDM0LjQ3MjY1NiAzNC40MTAxNTZjNS44NTkzNzUgNS44MjQyMTkgNS44ODI4MTIgMTUuMjk2ODc1LjA1ODU5NCAyMS4xNTIzNDRsLTM0LjQxMDE1NyAzNC40NzI2NTZjLTEzLjkxNzk2OSAxMy45Njg3NS0zNS4wOTc2NTYtNy4xNjQwNjItMjEuMjEwOTM3LTIxLjA5NzY1NnptLTIxOS45MDIzNDQgMTg5Ljg5NDUzMnYtNDMuODY3MTg4YzAtMTkuNzUzOTA2IDMwLjAwNzgxMi0xOS43NTM5MDYgMzAuMDA3ODEyIDB2NDMuODMyMDMxbDguODI4MTI1LTguODQzNzVjMTMuOTE3OTY5LTEzLjk2ODc1IDM1LjEwMTU2MyA3LjE2MDE1NyAyMS4yMTQ4NDQgMjEuMDk3NjU3bC0zNC40MTAxNTYgMzQuNDcyNjU2Yy01LjgyNDIxOSA1Ljg1OTM3NS0xNS4yOTY4NzUgNS44ODI4MTItMjEuMTUyMzQ0LjA1ODU5NGwtMzQuNDcyNjU2LTM0LjQxMDE1N2MtMTMuOTY4NzUtMTMuOTE3OTY5IDcuMTY0MDYyLTM1LjA5NzY1NiAyMS4wOTc2NTYtMjEuMjEwOTM3em0zMC4wMDc4MTItNDA5Ljc5Njg3NnY0My44NjcxODhjMCAxOS43NTM5MDYtMzAuMDA3ODEyIDE5Ljc1MzkwNi0zMC4wMDc4MTIgMHYtNDMuODMyMDMxbC04LjgyODEyNSA4Ljg0Mzc1Yy0xMy45MTc5NjkgMTMuOTcyNjU2LTM1LjA5NzY1Ny03LjE2MDE1Ny0yMS4yMTQ4NDQtMjEuMDk3NjU3bDM0LjQxMDE1Ni0zNC40NzI2NTZjNS44MjQyMTktNS44NTkzNzUgMTUuMjk2ODc1LTUuODgyODEyIDIxLjE1MjM0NC0uMDU4NTk0bDM0LjQ3MjY1NiAzNC40MTAxNTdjMTMuOTY4NzUgMTMuOTE3OTY5LTcuMTY0MDYyIDM1LjA5NzY1Ni0yMS4wOTc2NTYgMjEuMjE0ODQzem0zNC4wMDM5MDYgMTE4Ljg4NjcxOXY1My45NTcwMzFjMCAxMC42MDU0NjktMTEuMzIwMzEyIDE5LjI2OTUzMi0yMi45NTMxMjQgMTIuNzIyNjU3bC0yNi4wNTQ2ODgtMTMuMDkzNzUtMjcuMzI4MTI1IDEzLjczNDM3NWMtMTAuMDQyOTY5IDUuMDM1MTU2LTIxLjYyODkwNi0yLjQ5MjE4OC0yMS42MjEwOTQtMTMuMzYzMjgybC0uMDU4NTkzLTUzLjk1NzAzMWgtMzguMDA3ODEzdjE3Mi4wMjczNDRoMTc0LjAzMTI1di0xNzIuMDI3MzQ0em0tMzAuMDAzOTA2IDBoLTM4LjAwNzgxMnYyOS42OTkyMTljMjAuNzg1MTU2LTEwLjQ0NTMxMiAxNy4wODk4NDQtMTAuNTE1NjI1IDM4LjAwNzgxMiAwem0wIDAiIGZpbGwtcnVsZT0iZXZlbm9kZCIgZmlsbD0iI2ZmZmZmZiIgZGF0YS1vcmlnaW5hbD0iIzAwMDAwMCIgc3R5bGU9IiIgY2xhc3M9IiI+PC9wYXRoPjwvZz48L3N2Zz4=" />
                    <p>稿件分配</p>
                </a>
            </div>
            <div class="icon">
                <a href="MANAGER.php?page=delete">
                    <img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZlcnNpb249IjEuMSIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHhtbG5zOnN2Z2pzPSJodHRwOi8vc3ZnanMuY29tL3N2Z2pzIiB3aWR0aD0iNTEyIiBoZWlnaHQ9IjUxMiIgeD0iMCIgeT0iMCIgdmlld0JveD0iMCAwIDUxMiA1MTIiIHN0eWxlPSJlbmFibGUtYmFja2dyb3VuZDpuZXcgMCAwIDUxMiA1MTIiIHhtbDpzcGFjZT0icHJlc2VydmUiIGNsYXNzPSIiPjxnIHRyYW5zZm9ybT0ibWF0cml4KDAuNSwwLDAsMC41LDE0NC41NDI5NjgzOTIzNzIxMywxMjgpIj48cGF0aCB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIGQ9Im00MTYuODc1IDExNC40NDE0MDYtMTEuMzA0Njg4LTMzLjg4NjcxOGMtNC4zMDQ2ODctMTIuOTA2MjUtMTYuMzM5ODQzLTIxLjU3ODEyNi0yOS45NDE0MDYtMjEuNTc4MTI2aC05NS4wMTE3MTh2LTMwLjkzMzU5M2MwLTE1LjQ2MDkzOC0xMi41NzAzMTMtMjguMDQyOTY5LTI4LjAyNzM0NC0yOC4wNDI5NjloLTg3LjAwNzgxM2MtMTUuNDUzMTI1IDAtMjguMDI3MzQzIDEyLjU4MjAzMS0yOC4wMjczNDMgMjguMDQyOTY5djMwLjkzMzU5M2gtOTUuMDA3ODEzYy0xMy42MDU0NjkgMC0yNS42NDA2MjUgOC42NzE4NzYtMjkuOTQ1MzEzIDIxLjU3ODEyNmwtMTEuMzA0Njg3IDMzLjg4NjcxOGMtMi41NzQyMTkgNy43MTQ4NDQtMS4yNjk1MzEyIDE2LjI1NzgxMyAzLjQ4NDM3NSAyMi44NTU0NjkgNC43NTM5MDYgNi41OTc2NTYgMTIuNDQ1MzEyIDEwLjUzOTA2MyAyMC41NzgxMjUgMTAuNTM5MDYzaDExLjgxNjQwNmwyNi4wMDc4MTMgMzIxLjYwNTQ2OGMxLjkzMzU5NCAyMy44NjMyODIgMjIuMTgzNTk0IDQyLjU1ODU5NCA0Ni4xMDkzNzUgNDIuNTU4NTk0aDIwNC44NjMyODFjMjMuOTIxODc1IDAgNDQuMTc1NzgxLTE4LjY5NTMxMiA0Ni4xMDU0NjktNDIuNTYyNWwyNi4wMDc4MTItMzIxLjYwMTU2Mmg2LjU0Mjk2OWM4LjEzMjgxMiAwIDE1LjgyNDIxOS0zLjk0MTQwNyAyMC41NzgxMjUtMTAuNTM1MTU3IDQuNzUzOTA2LTYuNTk3NjU2IDYuMDU4NTk0LTE1LjE0NDUzMSAzLjQ4NDM3NS0yMi44NTkzNzV6bS0yNDkuMzIwMzEyLTg0LjQ0MTQwNmg4My4wNjI1djI4Ljk3NjU2MmgtODMuMDYyNXptMTYyLjgwNDY4NyA0MzcuMDE5NTMxYy0uNjc5Njg3IDguNDAyMzQ0LTcuNzk2ODc1IDE0Ljk4MDQ2OS0xNi4yMDMxMjUgMTQuOTgwNDY5aC0yMDQuODYzMjgxYy04LjQwNjI1IDAtMTUuNTIzNDM4LTYuNTc4MTI1LTE2LjIwMzEyNS0xNC45ODA0NjlsLTI1LjgxNjQwNi0zMTkuMTgzNTkzaDI4OC44OTg0Mzd6bS0yOTguNTY2NDA2LTM0OS4xODM1OTMgOS4yNjk1MzEtMjcuNzg5MDYzYy4yMTA5MzgtLjY0MDYyNS44MDg1OTQtMS4wNzAzMTMgMS40ODQzNzUtMS4wNzAzMTNoMzMzLjA4MjAzMWMuNjc1NzgyIDAgMS4yNjk1MzIuNDI5Njg4IDEuNDg0Mzc1IDEuMDcwMzEzbDkuMjY5NTMxIDI3Ljc4OTA2M3ptMCAwIiBmaWxsPSIjZmZmZmZmIiBkYXRhLW9yaWdpbmFsPSIjMDAwMDAwIiBzdHlsZT0iIiBjbGFzcz0iIj48L3BhdGg+PHBhdGggeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiBkPSJtMjgyLjUxNTYyNSA0NjUuOTU3MDMxYy4yNjU2MjUuMDE1NjI1LjUyNzM0NC4wMTk1MzEuNzkyOTY5LjAxOTUzMSA3LjkyNTc4MSAwIDE0LjU1MDc4MS02LjIxMDkzNyAxNC45NjQ4NDQtMTQuMjE4NzVsMTQuMDg1OTM3LTI3MC4zOTg0MzdjLjQyOTY4Ny04LjI3MzQzNy01LjkyOTY4Ny0xNS4zMzIwMzEtMTQuMTk5MjE5LTE1Ljc2MTcxOS04LjI5Mjk2OC0uNDQxNDA2LTE1LjMyODEyNSA1LjkyNTc4Mi0xNS43NjE3MTggMTQuMTk5MjE5bC0xNC4wODIwMzIgMjcwLjM5ODQzN2MtLjQyOTY4NyA4LjI3MzQzOCA1LjkyNTc4MiAxNS4zMzIwMzIgMTQuMTk5MjE5IDE1Ljc2MTcxOXptMCAwIiBmaWxsPSIjZmZmZmZmIiBkYXRhLW9yaWdpbmFsPSIjMDAwMDAwIiBzdHlsZT0iIiBjbGFzcz0iIj48L3BhdGg+PHBhdGggeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiBkPSJtMTIwLjU2NjQwNiA0NTEuNzkyOTY5Yy40Mzc1IDcuOTk2MDkzIDcuMDU0Njg4IDE0LjE4MzU5MyAxNC45NjQ4NDQgMTQuMTgzNTkzLjI3MzQzOCAwIC41NTQ2ODgtLjAwNzgxMi44MzIwMzEtLjAyMzQzNyA4LjI2OTUzMS0uNDQ5MjE5IDE0LjYwOTM3NS03LjUxOTUzMSAxNC4xNjAxNTctMTUuNzkyOTY5bC0xNC43NTM5MDctMjcwLjM5ODQzN2MtLjQ0OTIxOS04LjI3MzQzOC03LjUxOTUzMS0xNC42MTMyODEtMTUuNzkyOTY5LTE0LjE2MDE1Ny04LjI2OTUzMS40NDkyMTktMTQuNjA5Mzc0IDcuNTE5NTMyLTE0LjE2MDE1NiAxNS43OTI5Njl6bTAgMCIgZmlsbD0iI2ZmZmZmZiIgZGF0YS1vcmlnaW5hbD0iIzAwMDAwMCIgc3R5bGU9IiIgY2xhc3M9IiI+PC9wYXRoPjxwYXRoIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgZD0ibTIwOS4yNTM5MDYgNDY1Ljk3NjU2MmM4LjI4NTE1NiAwIDE1LTYuNzE0ODQzIDE1LTE1di0yNzAuMzk4NDM3YzAtOC4yODUxNTYtNi43MTQ4NDQtMTUtMTUtMTVzLTE1IDYuNzE0ODQ0LTE1IDE1djI3MC4zOTg0MzdjMCA4LjI4NTE1NyA2LjcxNDg0NCAxNSAxNSAxNXptMCAwIiBmaWxsPSIjZmZmZmZmIiBkYXRhLW9yaWdpbmFsPSIjMDAwMDAwIiBzdHlsZT0iIiBjbGFzcz0iIj48L3BhdGg+PC9nPjwvc3ZnPg==" />
                    <p>刪除稿件</p>
                </a>
            </div>
            <div class="icon">
                <a href="MANAGER.php?page=reply">
                    <img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZlcnNpb249IjEuMSIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHhtbG5zOnN2Z2pzPSJodHRwOi8vc3ZnanMuY29tL3N2Z2pzIiB3aWR0aD0iNTEyIiBoZWlnaHQ9IjUxMiIgeD0iMCIgeT0iMCIgdmlld0JveD0iMCAwIDI0IDI0IiBzdHlsZT0iZW5hYmxlLWJhY2tncm91bmQ6bmV3IDAgMCA1MTIgNTEyIiB4bWw6c3BhY2U9InByZXNlcnZlIiBjbGFzcz0iIj48ZyB0cmFuc2Zvcm09Im1hdHJpeCgwLjUsMCwwLDAuNSw2LDYpIj48cGF0aCB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIGQ9Im0yMy41IDI0Yy0uMTY5IDAtLjMzMS0uMDg2LS40MjQtLjIzNS0xLjQ3My0yLjM1OC00LjAxMy0zLjc2NS02Ljc5Mi0zLjc2NWgtLjI4NHYyLjVjMCAuMjAyLS4xMjIuMzg1LS4zMDkuNDYycy0uNDAxLjAzNS0uNTQ1LS4xMDhsLTUtNWMtLjE5NS0uMTk1LS4xOTUtLjUxMiAwLS43MDdsNS01Yy4xNDMtLjE0NC4zNTgtLjE4Ni41NDUtLjEwOHMuMzA5LjI1OS4zMDkuNDYxdjIuNTE1YzQuNDU1LjI2IDggMy45NjcgOCA4LjQ4NSAwIC4yMjMtLjE0OC40MTktLjM2Mi40OC0uMDQ2LjAxNC0uMDkyLjAyLS4xMzguMDJ6bS04LTVoLjc4NGMyLjUwNiAwIDQuODM4IDEuMDE3IDYuNTE5IDIuNzg2LS43NzgtMy4zMTItMy43NTctNS43ODYtNy4zMDMtNS43ODYtLjI3NiAwLS41LS4yMjQtLjUtLjV2LTEuNzkzbC0zLjc5MyAzLjc5MyAzLjc5MyAzLjc5M3YtMS43OTNjMC0uMjc2LjIyNC0uNS41LS41eiIgZmlsbD0iI2ZmZmZmZiIgZGF0YS1vcmlnaW5hbD0iIzAwMDAwMCIgc3R5bGU9IiIgY2xhc3M9IiI+PC9wYXRoPjxwYXRoIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgZD0ibTkuNSAyMWgtN2MtMS4zNzggMC0yLjUtMS4xMjEtMi41LTIuNXYtMTNjMC0xLjM3OSAxLjEyMi0yLjUgMi41LTIuNWgyYy4yNzYgMCAuNS4yMjQuNS41cy0uMjI0LjUtLjUuNWgtMmMtLjgyNyAwLTEuNS42NzMtMS41IDEuNXYxM2MwIC44MjcuNjczIDEuNSAxLjUgMS41aDdjLjI3NiAwIC41LjIyNC41LjVzLS4yMjQuNS0uNS41eiIgZmlsbD0iI2ZmZmZmZiIgZGF0YS1vcmlnaW5hbD0iIzAwMDAwMCIgc3R5bGU9IiIgY2xhc3M9IiI+PC9wYXRoPjxwYXRoIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgZD0ibTExLjUgNmgtNmMtLjgyNyAwLTEuNS0uNjczLTEuNS0xLjV2LTJjMC0uMjc2LjIyNC0uNS41LS41aDEuNTVjLjIzMy0xLjE0IDEuMjQyLTIgMi40NS0yczIuMjE3Ljg2IDIuNDUgMmgxLjU1Yy4yNzYgMCAuNS4yMjQuNS41djJjMCAuODI3LS42NzMgMS41LTEuNSAxLjV6bS02LjUtM3YxLjVjMCAuMjc1LjIyNC41LjUuNWg2Yy4yNzYgMCAuNS0uMjI1LjUtLjV2LTEuNWgtMS41Yy0uMjc2IDAtLjUtLjIyNC0uNS0uNSAwLS44MjctLjY3My0xLjUtMS41LTEuNXMtMS41LjY3My0xLjUgMS41YzAgLjI3Ni0uMjI0LjUtLjUuNXoiIGZpbGw9IiNmZmZmZmYiIGRhdGEtb3JpZ2luYWw9IiMwMDAwMDAiIHN0eWxlPSIiIGNsYXNzPSIiPjwvcGF0aD48cGF0aCB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIGQ9Im0xMy41IDloLTEwYy0uMjc2IDAtLjUtLjIyNC0uNS0uNXMuMjI0LS41LjUtLjVoMTBjLjI3NiAwIC41LjIyNC41LjVzLS4yMjQuNS0uNS41eiIgZmlsbD0iI2ZmZmZmZiIgZGF0YS1vcmlnaW5hbD0iIzAwMDAwMCIgc3R5bGU9IiIgY2xhc3M9IiI+PC9wYXRoPjxwYXRoIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgZD0ibTEyLjUgMTJoLTljLS4yNzYgMC0uNS0uMjI0LS41LS41cy4yMjQtLjUuNS0uNWg5Yy4yNzYgMCAuNS4yMjQuNS41cy0uMjI0LjUtLjUuNXoiIGZpbGw9IiNmZmZmZmYiIGRhdGEtb3JpZ2luYWw9IiMwMDAwMDAiIHN0eWxlPSIiIGNsYXNzPSIiPjwvcGF0aD48cGF0aCB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIGQ9Im05LjUgMTVoLTZjLS4yNzYgMC0uNS0uMjI0LS41LS41cy4yMjQtLjUuNS0uNWg2Yy4yNzYgMCAuNS4yMjQuNS41cy0uMjI0LjUtLjUuNXoiIGZpbGw9IiNmZmZmZmYiIGRhdGEtb3JpZ2luYWw9IiMwMDAwMDAiIHN0eWxlPSIiIGNsYXNzPSIiPjwvcGF0aD48cGF0aCB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIGQ9Im0xNi41IDEwYy0uMjc2IDAtLjUtLjIyNC0uNS0uNXYtNGMwLS44MjctLjY3My0xLjUtMS41LTEuNWgtMmMtLjI3NiAwLS41LS4yMjQtLjUtLjVzLjIyNC0uNS41LS41aDJjMS4zNzggMCAyLjUgMS4xMjEgMi41IDIuNXY0YzAgLjI3Ni0uMjI0LjUtLjUuNXoiIGZpbGw9IiNmZmZmZmYiIGRhdGEtb3JpZ2luYWw9IiMwMDAwMDAiIHN0eWxlPSIiIGNsYXNzPSIiPjwvcGF0aD48L2c+PC9zdmc+" />
                    <p>回覆稿件</p>
                </a>
            </div>
        </div>
    </div>
</body>
</html>