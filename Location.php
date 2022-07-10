<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Location of Company </title>
    <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
    <style>
        *{
            padding: 0;
            margin: 0;
            text-decoration: none;
            list-style: none;
            box-sizing: border-box;
        }
        body{
            background-color: #E7FBBE;
            font-family: montserrat;
        }
        nav{
            background: #FC28FB;
            height: 80px;
            width: 100%;
        }
        .logo{
            color: white;
            font-size: 25px;
            line-height: 80px;
            padding: 0 30px;
            font-weight: bold;
          
        }
        nav ul{
            float: right;
            margin-right: 20px;
        }
        nav ul li{
            display: inline-block;
            line-height: 80px;
            margin: 0 5px;
        }
        nav ul li a {
            color: white;
            padding: 7px 13px;
            border-radius: 5px;
            font-size: 14px;
            text-transform: uppercase;
        }
        a.active,a:hover{
            background: purple;
            transition: 1s;
        }
        .checkbtn{
            font-size: 30px;
            color: white;
            float: right;
            line-height: 80px;
            margin-right: 40px;
            cursor: pointer;
            display: none;
        }
        #check{
            display: none;
        }
        @media (max-width: 952px){
            label.logo{
                font-size: 30px;
                padding-left: 50px;
            }
            nav ul li a{
                font-size: 13px;
            }
        }
        @media (max-width: 858px){
            .checkbtn{
                display: block;
            }
            ul{
                position: fixed;
                width: 100%;
                height: 100vh;
                background: #2c3e50;
                top: 80px;
                left: -100%;
                text-align: center;
                transition: all .5s;
            }
            nav ul li{
                display: block;
                margin: 50px 0;
                line-height: 30px;
            }
            nav ul li a{
                font-size: 20px;
            }
            a:hover,a.active{
                background: none;
                color: #0082e6;
            }
            #check:check  ul{
                left: 0;
            }
        }
        /* section{
            background: url(dfs.jpg) no-repeat;
            background-size: cover;
            height: calc(100vh - 80px);
        } */
        
        footer{
            margin: 0;
            padding: 0;
            height: 40px;
        }
        .ft ul{
            padding: 10px;
            background-color: #B4FF9F;
            display: flex;
            text-align: center;
            height: 80px;
        }
        .ft ul li{
            list-style: none;
        }
        .ft ul li a {
            display: block;
            align-items: center;
            text-decoration: none;
            width: 190px;
            margin-top: 20px;
            color: wihte;
        }
    </style>
</head>
<body>
    <nav>
        <input type="checkbox" id="check">
        <label for="check" class="checkbtn">
            <i class="fas fa-bars"></i>
        </label>
        <label class="logo">Company Business Computer (CBC) </label>
        <ul>
            <li><a class="active" href="#">Home</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Service</a></li>
            <li><a href="#">Contact</a></li>
            <li><a href="#">Website</a></li>
            <li><a href="#">Facebook</a></li>
            <li><a href="#">Instagram</a></li>
        </ul>
    </nav>
    <!-- <section></section> -->
    <br>
       <!-- my maps company -->
        <h2>This is location Company us</h2>
        <br>
        <div class="map-wrap">
        <div style="width: 100%"><iframe width="100%" height="600" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=Dongpaleb+(My%20Business%20Name)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"><a href="https://www.gps.ie/wearable-gps/">wearable trackers</a></iframe></div>
        </div>

           <!-- This is footer -->
    <footer>
        <div class="ft">
            <ul>
                <li><a href="#">Contact us</a></li>
                <li><a href="#">About company</a></li>
                <li><a href="#">Team work</a></li>
                <li><a href="https://www.facebook.com/profile">Facebook</a></li>
                <li><a href="https://www.google.com/">Installgram</a></li>
                <li><a href="#">Tiktok</a></li>
                <li><a href="https://www.etllao.com/?page_id=2177&lang=en#">Website</a></li>
            </ul>
        </div>
    </footer>
</body>
</html>