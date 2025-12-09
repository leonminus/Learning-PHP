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

;