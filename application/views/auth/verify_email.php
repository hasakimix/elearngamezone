<style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body, html {
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
        }
        .container {
            width: 500px;
            height: 500px;
            padding: 30px;
            background-color: white;
            box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.1);
            display: flex;
            flex-direction: column;
            align-items: center; /* Centers content horizontally */
            justify-content: center; /* Centers content vertically */
            border-radius: 10px;
        }
        .padlock {
            width: 50px;
            height: 50px;
            background-image: url('https://cdn-icons-png.flaticon.com/512/3064/3064197.png');
            background-size: cover;
            margin-bottom: 40px;
        }
        .auth-text {
            font-size: 20px;
            font-weight: bold; /* Makes the text bold */
            color: #333;
            margin-bottom: 15px;
            text-align: center;
        }
        .input-box {
            width: 100%;
            padding: 15px;
            margin-bottom: 25px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 20px;
            text-align: center; /* Centers the input text */
        }
        .input-box::placeholder {
            font-size: 19px;
            text-align: center;
            color: #999;
            transition: color 0.3s ease; /* Smooth transition for placeholder */
        }
        .input-box:focus::placeholder {
            color: transparent; /* Make the placeholder invisible on focus */
        }
        .submit-btn {
            width: 70%;
            padding: 15px;
            background-color: #7091E6;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 20px;
        }
        .submit-btn:hover {
            background-color: #aaa;
        }
    </style>

<div class="container">
    <div class="padlock"></div>
    <p class="auth-text">Please check your email inbox.</p>
    <p class="mb-0">We've sent you a link that will verify your email address.</p>
</div>