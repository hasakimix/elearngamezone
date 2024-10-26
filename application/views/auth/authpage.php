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
            font-size: 100px; /* Make the placeholder text bigger */
            color: #000; /* You can change the color of the placeholder if needed */
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
        <p class="auth-text">Check your email to verify</p>
        <input type="text" placeholder="" class="input-box">
        <button class="submit-btn">Submit</button>
        
</div>