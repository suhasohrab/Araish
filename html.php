<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script>
        function speak() {
            const speaks = [
                {
                    "name": "Alex",
                    "lang": "en-US"
                },
            ];

            const msg = new SpeechSynthesisUtterance();
            msg.volume = 1;
            msg.rate = 1;
            msg.pitch = 1.5;
            msg.text = "Welcome to Araaish. An online makeup store where you can find the best makeup products all at a single place. We have lipsticks, blush, foundations and skin care products";

            const voice = speaks[0];
            console.log(`Voice: ${voice.name} and Lang: ${voice.lang}`);
            msg.voiceURI = voice.name;
            msg.lang = voice.lang;

            if (typeof speechSynthesis !== 'undefined' && speechSynthesis.speak) {
                speechSynthesis.speak(msg);
            } else {
                console.log("Your browser does not support the Speech Synthesis API");
            }
        }
    </script>
</head>

<body>
    <button onclick="speak()">Click me to hear the message</button>
</body>

</html>