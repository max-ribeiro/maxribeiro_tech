<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <title>Max Ribeiro - Desenvolvedor Fullstack</title>
    <style>
	@import url('https://fonts.googleapis.com/css2?family=Cinzel:wght@700&display=swap');


* {
  margin: 0px;
  padding: 0px;
}

body {
  font-family: 'Cinzel', serif;
}

.context {
  width: 100%;
  position: absolute;
  top: 30vh;
  z-index: 9999;
}

.context h1 {
  text-align: center;
  color: #fff;
  font-size: 50px;
}

.area {
background-color: #000000;
opacity: 1;
background-size: 80px 80px;
background-image:  repeating-linear-gradient(to right, #060606, #060606 4px, #000000 4px, #000000);
width: 100%;
  height: 100vh;
}
         .social-links {
            list-style: none;
            padding: 0;
            display: flex;
            justify-content: center;
        }
        .social-links li {
            margin: 0 10px;
	   transition: 0.1s ease-in-out;
        }
	.social-links li:hover {
		transform: scale(1.2);
	}
	.social-links li:active {
		transform: scale(0.8);
	}
        .social-icon {
            font-size: 24px;
            color: #007bff;
        }
	.img-container {
		display: flex;
		flex-direction: row;
		align-items: center;
		justify-content: center;
		margin-bottom: 16px;
	}
	img {
		width: 100px;
		height: 100px;
		border-radius: 50%;
	}

    </style>
</head>
<body>
    <div class="context">
	<div class='img-container'>
		<img src="https://avatars.githubusercontent.com/u/28072329?s=400&u=53c5addba06123d9bbafe4be5ed1ddbb70bd3ce6&v=4"/>
	</div>
 	<h1>Max Ribeiro</h1>
    	<ul class="social-links">
        	<li><a href="https://linkedin.com/in/max-ribeiro" target="_blank"><i class="social-icon fab fa-linkedin"></i></a></li>
        	<li><a href="https://github.com/max-ribeiro" target="_blank"><i class="social-icon fab fa-github"></i></a></li>
		<li><a href="mailto:devmaxribeiro@gmail.com" target="_blank"><i class="social-icon far fa-envelope"></i></a>
    	</ul>
    </div>
    <div class="area" >
            <ul class="circles">
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
            </ul>
    </div >
</body>
</html>
<!-- Site "Lorem Ipsum" enquanto construo a versao final ;) -->
