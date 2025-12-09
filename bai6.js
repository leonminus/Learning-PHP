function changeText() {
    const title = document.getElementById('title');
    title.textContent = 'Nội dung đã thay đổi:';
    title.style.color = "blue";
    title.style.fontWeight = "bold";

    const button = document.querySelector('button');
    button.textContent = 'Đã thay đổi!';

    

    const descriptions = document.querySelectorAll('.description');
    descriptions.forEach(desc => {
        desc.classList.add('highlight')

    });

    }
