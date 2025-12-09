<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài tập 3.1 - Form Đăng Nhập</title>
</head>
<body>
    <div class="container">
        <h1>ĐĂNG NHẬP HỆ THỐNG</h1>
        
        <form id="loginForm">
            <div class="form-group">
                <label for="username">Tên đăng nhập:</label>
                <input type="text" id="username" placeholder="Nhập tên đăng nhập">
                <br><br>
                <label for="password">Mật khẩu:</label>
                <input type="password" id="password" placeholder="Nhập mật khẩu">
            </div>
            
            <button type="submit" class="btn">Đăng nhập</button>
        </form>
        
        <div id="message" class="message">
        </div>
        
    </div>

    <script>
            // Lấy các phần tử DOM cần thiết
    const loginForm = document.getElementById('loginForm');
    const usernameInput = document.getElementById('username');
    const passwordInput = document.getElementById('password');
    const messageDiv = document.getElementById('message');

    function showMessage(message, isSuccess) {
        messageDiv.textContent = message;
        messageDiv.className = 'message'; 
        
        if (isSuccess) {
            messageDiv.classList.add('success');
        } else {
            messageDiv.classList.add('error');
        }
        
        messageDiv.style.display = 'block';
    }

    function handleSubmit(event) {
        event.preventDefault(); // Ngăn chặn việc gửi form mặc định
        const username = usernameInput.value.trim();
        const password = passwordInput.value.trim();
        
        if (!username && !password) {
            showMessage('Vui lòng nhập tên đăng nhập và mật khẩu!', false);
        } else if (!username) {
            showMessage('Vui lòng nhập tên đăng nhập!', false);
        } else if (!password) {
            showMessage('Vui lòng nhập mật khẩu!', false);
        } else {
            showMessage('Xác thực thành công! Đang chuyển hướng...', true);
            
            // Reset form sau 2 giây
            setTimeout(() => {
                loginForm.reset();
                messageDiv.style.display = 'none';
            }, 2000);
        }
    }

    // Gắn sự kiện submit cho form
    loginForm.addEventListener('submit', handleSubmit);
    </script>

    <style>
                * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            background-color: #f5f5f5;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            padding: 20px;
        }

        .container {
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
            padding: 30px;
        }

        h1 {
            color: #333;
            text-align: center;
            margin-bottom: 10px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 8px;
            color: #555;
            font-weight: 500;
        }

        input {
            width: 100%;
            padding: 12px 15px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 16px;
            transition: border-color 0.3s;
        }

        input:focus {
            outline: none;
            border-color: #4a90e2;
        }

        .btn {
            background-color: #4a90e2;
            color: white;
            border: none;
            border-radius: 5px;
            padding: 12px 20px;
            font-size: 16px;
            font-weight: 500;
            cursor: pointer;
            width: 100%;
            transition: background-color 0.3s;
        }

        .btn:hover {
            background-color: #3a7bc8;
        }

        .message {
            margin-top: 20px;
            padding: 15px;
            border-radius: 5px;
            text-align: center;
            font-weight: 500;
            display: none;
        }

        .error {
            background-color: #ffebee;
            color: #c62828;
            border: 1px solid #ffcdd2;
        }

        .success {
            background-color: #e8f5e9;
            color: #2e7d32;
            border: 1px solid #c8e6c9;
        }
    </style>
</body>
</html>