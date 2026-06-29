<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>فرم ثبت نام مینیمال</title>
    <!-- فونت وزیرمتن از Google Fonts -->
    <!-- <link rel="preconnect" href="https://fonts.googleapis.com"> -->
    <!-- <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> -->
    <!-- <link href="https://fonts.googleapis.com/css2?family=Vazirmatn:wght@300;400;500&display=swap" rel="stylesheet"> -->

    <style>
        /* -- متغیرهای رنگی و فونت -- */
        :root {
            --primary-font: 'Vazirmatn', sans-serif;
            --background-color: #f8f9fa; /* رنگ پس‌زمینه بسیار روشن */
            --card-background: #ffffff; /* رنگ پس‌زمینه کارت فرم */
            --text-color-primary: #343a40; /* متن اصلی تیره */
            --text-color-secondary: #6c757d; /* متن ثانویه خاکستری */
            --border-color: #dee2e6; /* رنگ حاشیه‌های ظریف */
            --button-bg: #007bff; /* رنگ اصلی دکمه */
            --button-hover-bg: #0056b3; /* رنگ هاور دکمه */
            --input-border-focus: #80bdff; /* رنگ حاشیه فیلد در فوکوس */
            --placeholder-color: #adb5bd; /* رنگ متن placeholder */
        }

        /* -- تنظیمات کلی صفحه -- */
        body {
            font-family: var(--primary-font);
            background-color: var(--background-color);
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
            padding: 20px;
            box-sizing: border-box;
        }

        /* -- کانتینر اصلی فرم -- */
        .container {
            width: 100%;
            max-width: 450px; /* حداکثر عرض برای فرم */
            background-color: var(--card-background);
            padding: 40px 30px;
            border-radius: 12px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.08); /* سایه ملایم */
            text-align: center;
        }

        /* -- عنوان و توضیحات -- */
        h1 {
            color: var(--text-color-primary);
            margin-bottom: 10px;
            font-weight: 500;
            font-size: 28px;
        }

        p {
            color: var(--text-color-secondary);
            margin-bottom: 30px;
            font-size: 15px;
            line-height: 1.6;
        }

        /* -- استایل فرم -- */
        .form-group {
            margin-bottom: 25px;
            text-align: right; /* برای راست‌چین شدن برچسب‌ها */
        }

        .form-group label {
            display: block;
            margin-bottom: 8px;
            color: var(--text-color-primary);
            font-weight: 400;
            font-size: 14px;
            padding-right: 5px; /* کمی فاصله از لبه */
        }

        /* -- استایل فیلدهای ورودی -- */
        .form-group input[type="text"],
        .form-group input[type="email"],
        .form-group input[type="password"] {
            width: 100%;
            padding: 12px 15px;
            border: 1px solid var(--border-color);
            border-radius: 8px;
            font-family: var(--primary-font);
            font-size: 15px;
            color: var(--text-color-primary);
            box-sizing: border-box; /* محاسبه padding و border در عرض */
            transition: border-color 0.3s ease, box-shadow 0.3s ease; /* انیمیشن ظریف */
        }

        /* -- استایل placeholder -- */
        .form-group input::placeholder {
            color: var(--placeholder-color);
            font-size: 14px;
        }

        /* -- استایل فیلد در حالت فوکوس -- */
        .form-group input:focus {
            outline: none;
            border-color: var(--input-border-focus);
            box-shadow: 0 0 0 3px rgba(0, 123, 255, 0.15); /* سایه ملایم هنگام فوکوس */
        }

        /* -- دکمه ثبت نام -- */
        .submit-button {
            width: 100%;
            padding: 14px 20px;
            background-color: var(--button-bg);
            color: white;
            border: none;
            border-radius: 8px;
            font-family: var(--primary-font);
            font-size: 16px;
            font-weight: 500;
            cursor: pointer;
            transition: background-color 0.3s ease;
            margin-top: 10px; /* فاصله از فیلد قبلی */
        }

        .submit-button:hover {
            background-color: var(--button-hover-bg);
        }

        /* -- تنظیمات برای نمایش بهتر در صفحه‌های کوچک (Responsive) -- */
        @media (max-width: 480px) {
            .container {
                padding: 30px 20px;
                margin: 10px; /* کمی فاصله از لبه‌ها در موبایل */
            }
            h1 {
                font-size: 24px;
            }
            p {
                font-size: 14px;
            }
            .form-group input, .submit-button {
                padding: 10px 12px;
                font-size: 14px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="form-container">
            <h1>ایجاد حساب کاربری</h1>
            <p>لطفا اطلاعات خود را وارد کنید.</p>
            <form id="signup-form">
                <div class="form-group">
                    <label for="name">نام و نام خانوادگی</label>
                    <input type="text" id="name" name="name" placeholder="نام خود را وارد کنید" required>
                </div>

                <div class="form-group">
                    <label for="email">آدرس ایمیل</label>
                    <input type="email" id="email" name="email" placeholder="example@domain.com" required>
                </div>

                <div class="form-group">
                    <label for="password">رمز عبور</label>
                    <input type="password" id="password" name="password" placeholder="حداقل ۸ کاراکتر" required>
                </div>

                <div class="form-group">
                    <label for="confirm-password">تکرار رمز عبور</label>
                    <input type="password" id="confirm-password" name="confirm-password" placeholder="تکرار رمز عبور" required>
                </div>

                <button type="submit" class="submit-button">ایجاد حساب کاربری</button>
            </form>
        </div>
    </div>
</body>
</html>
