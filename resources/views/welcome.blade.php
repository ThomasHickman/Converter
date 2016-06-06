<html>
    <head>
        <title>Meams.jpg</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <script src="{{ asset('index.js') }}"></script>

        <link rel="stylesheet" href="index.css"/>
    </head>
    <body>
        <div id="loadingElements" style="display: none">
            <div id="loadingTrollFaceScreen">
                <div>Loading ...</div>
                <img src="{{ asset('img/coloured.png') }}" />
            </div>
            <div id="loadingBackground">
            </div>
        </div>

            <header>
            <h1>
                <marquee>Meme Generator</marquee>
                </h1>
            </header>

        <section id="main">
            <blink class="desc">Chose the contense of you're mEme</blink>
            <img src="{{ asset('img/troll.png') }}" alt="IcanHazCheesburger"
            width ="100" height="100" />
            <form action="javascript: postForm()">
                <input id="inputBox" type="text" class="input_box"/>
            </form>
            <div id="downloadedImageCont">
                <img src="{{ asset('img/burger.jpg') }}" alt="IcanHazCheesburger"
                width ="100" height="100" />
                <img src="{{ asset('img/sparta.jpg') }}" alt="IcanHazCheesburger"
                width ="300" height="100" />
                <img src="{{ asset('img/wars.jpg') }}" alt="IcanHazCheesburger"
                width ="100" height="150" />
            </div>
        </section>

        <footer id="images">
            <img src="{{ asset('img/cheezburger.jpg') }}" alt="IcanHazCheesburger"
            width ="100" height="100" />
            <img src="i{{ asset('img/sparta.jpg') }}" alt="IcanHazCheesburger"
            width ="300" height="100" />
            <img src="{{ asset('img/wars.jpg') }}" alt="IcanHazCheesburger"
            width ="100" height="150" />
            <div style="display:inline">
                © Mike freeman
            </div>
        </footer>
    </body>
</html>
