<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="css/template.css">
</head>

<body>
    <div class="container">
        <div class="header">

            <div class="logo">
                <a href={{Route('index')}}>
                    <svg viewBox="0 0 140 37" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M6.10338 3.12061V8.39551H10.369V10.2617H6.10338V23.9917C6.10338 25.1343 6.3065 25.9849 6.71275 26.5435C7.1317 27.1021 7.82359 27.3813 8.78844 27.3813C9.1693 27.3813 9.78502 27.3179 10.6356 27.1909L10.7308 29.0571C10.1341 29.2729 9.32164 29.3809 8.29332 29.3809C6.7318 29.3809 5.59557 28.9302 4.88463 28.0288C4.17369 27.1147 3.81822 25.7754 3.81822 24.0107V10.2617H0.0286713V8.39551H3.81822V3.12061H6.10338ZM27.4096 26.3911C26.0385 28.3843 23.8485 29.3809 20.8397 29.3809C18.6435 29.3809 16.974 28.7461 15.8314 27.4766C14.6889 26.1943 14.1049 24.3027 14.0795 21.8018V8.39551H16.3456V21.5161C16.3456 25.439 17.9325 27.4004 21.1063 27.4004C24.4071 27.4004 26.4955 26.0356 27.3715 23.3062V8.39551H29.6566V29H27.4477L27.4096 26.3911ZM38.204 3.12061V8.39551H42.4697V10.2617H38.204V23.9917C38.204 25.1343 38.4072 25.9849 38.8134 26.5435C39.2324 27.1021 39.9242 27.3813 40.8891 27.3813C41.27 27.3813 41.8857 27.3179 42.7363 27.1909L42.8315 29.0571C42.2348 29.2729 41.4223 29.3809 40.394 29.3809C38.8325 29.3809 37.6962 28.9302 36.9853 28.0288C36.2743 27.1147 35.9189 25.7754 35.9189 24.0107V10.2617H32.1293V8.39551H35.9189V3.12061H38.204ZM59.5102 26.3911C58.1391 28.3843 55.9492 29.3809 52.9404 29.3809C50.7441 29.3809 49.0747 28.7461 47.9321 27.4766C46.7895 26.1943 46.2055 24.3027 46.1801 21.8018V8.39551H48.4463V21.5161C48.4463 25.439 50.0332 27.4004 53.207 27.4004C56.5078 27.4004 58.5962 26.0356 59.4721 23.3062V8.39551H61.7573V29H59.5483L59.5102 26.3911ZM84.2061 18.9072C84.2061 22.0938 83.4824 24.6392 82.0352 26.5435C80.5879 28.4351 78.6455 29.3809 76.208 29.3809C73.9482 29.3809 72.1392 28.6382 70.7808 27.1528V36.9219H66.1533V8.39551H70.4189L70.6094 10.4902C71.9678 8.83984 73.8149 8.01465 76.1509 8.01465C78.6646 8.01465 80.6323 8.9541 82.0542 10.833C83.4888 12.6992 84.2061 15.2954 84.2061 18.6216V18.9072ZM79.5977 18.5073C79.5977 16.4507 79.1851 14.8193 78.3599 13.6133C77.5474 12.4072 76.3794 11.8042 74.856 11.8042C72.9644 11.8042 71.606 12.585 70.7808 14.1465V23.2871C71.6187 24.8867 72.9897 25.6865 74.894 25.6865C76.3667 25.6865 77.5156 25.0962 78.3408 23.9155C79.1787 22.7222 79.5977 20.9194 79.5977 18.5073ZM97.9903 12.623C97.3809 12.5215 96.7525 12.4707 96.105 12.4707C93.9849 12.4707 92.5567 13.2832 91.8204 14.9082V29H87.1929V8.39551H91.6109L91.7251 10.6997C92.8423 8.90967 94.3912 8.01465 96.3716 8.01465C97.0318 8.01465 97.5777 8.10352 98.0093 8.28125L97.9903 12.623ZM104.9 29H100.273V8.39551H104.9V29ZM99.9869 3.04443C99.9869 2.3335 100.209 1.74316 100.653 1.27344C101.11 0.803711 101.758 0.568848 102.596 0.568848C103.434 0.568848 104.081 0.803711 104.538 1.27344C104.995 1.74316 105.224 2.3335 105.224 3.04443C105.224 3.74268 104.995 4.32666 104.538 4.79639C104.081 5.25342 103.434 5.48193 102.596 5.48193C101.758 5.48193 101.11 5.25342 100.653 4.79639C100.209 4.32666 99.9869 3.74268 99.9869 3.04443ZM113.314 8.39551L113.447 10.7759C114.971 8.93506 116.97 8.01465 119.446 8.01465C123.737 8.01465 125.921 10.4712 125.997 15.3843V29H121.369V15.6509C121.369 14.3433 121.084 13.3784 120.512 12.7563C119.954 12.1216 119.033 11.8042 117.751 11.8042C115.885 11.8042 114.495 12.6484 113.581 14.3369V29H108.953V8.39551H113.314ZM135.591 3.38721V8.39551H139.229V11.8232H135.591V23.3252C135.591 24.1123 135.744 24.6836 136.048 25.0391C136.366 25.3818 136.924 25.5532 137.724 25.5532C138.257 25.5532 138.797 25.4897 139.343 25.3628V28.9429C138.289 29.2349 137.274 29.3809 136.296 29.3809C132.741 29.3809 130.964 27.4194 130.964 23.4966V11.8232H127.574V8.39551H130.964V3.38721H135.591Z"
                            fill="#656564" />
                    </svg>
                </a>
                <h1>Фотопечать с доставкой</h1>
            </div>
            <div class="basket">
                <svg viewBox="0 0 39 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M2.81453 13C2.33624 12.9995 1.87714 13.187 1.53728 13.5215C1.19741 13.8561 1.00433 14.3106 1.00011 14.7861C0.998169 14.9509 1.02218 15.115 1.07126 15.2724L5.66957 31.3916C5.88269 32.1445 6.33816 32.8073 6.96625 33.2784C7.59433 33.7494 8.36041 34.0029 9.1472 34H29.8529C30.6412 34.0007 31.4084 33.7466 32.0389 33.2762C32.6693 32.8057 33.1289 32.1443 33.3483 31.3916L37.9466 15.2724L38 14.7861C37.9958 14.3106 37.8027 13.8561 37.4628 13.5215C37.123 13.187 36.6639 12.9995 36.1856 13H2.81453ZM20.0088 27.1535C19.2696 27.1499 18.548 26.9286 17.9351 26.5176C17.3222 26.1067 16.8455 25.5244 16.5652 24.8444C16.2848 24.1644 16.2134 23.417 16.3599 22.6966C16.5064 21.9763 16.8642 21.3152 17.3882 20.7968C17.9123 20.2785 18.579 19.926 19.3043 19.784C20.0297 19.6419 20.781 19.7167 21.4637 19.9988C22.1463 20.2809 22.7296 20.7576 23.1399 21.369C23.5503 21.9803 23.7693 22.6987 23.7693 23.4337C23.7646 24.422 23.3663 25.3683 22.6615 26.0654C21.9568 26.7625 21.003 27.1538 20.0088 27.1535V27.1535Z"
                        stroke="#CCCCCC" stroke-width="2" stroke-linejoin="round" />
                    <path d="M11 13L19.5 1L28 13" stroke="#CCCCCC" stroke-width="2" stroke-linejoin="round" />
                </svg>
            </div>
        </div>
        @yield('content')


        <div class="back">
            @yield('back')
        </div>

    </div>
</body>

</html>