
document.getElementById("myForm")                           //truy vấn tới form bằng ID
                .addEventListener("submit", function (event) {          //cài event cho nút submit
                    
                    event.preventDefault(); // chặn submit mặc định để kiểm tra trước
                    
                    // let name = document.getElementById("name").value;   
                    // let email = document.getElementById("email").value;   
                    // let city = document.getElementById("city").value;   
                    // let note = document.getElementById("note").value;   
                    
                    

                    const name = document.getElementById("name").value.trim();
                    const email = document.getElementById("email").value.trim();
                    const city = document.getElementById("city").value.trim();
                    const note = document.getElementById("note").value.trim();


                    if (name == ""){
                        alert("Vui lòng nhập tên!!!");
                        // event.preventDefault();
                        return;
                    }
                    if (email == ""){
                        alert("Vui lòng nhập email!!!");
                        // event.preventDefault();
                        return;
                    }
                    if (city == ""){
                        alert("Vui lòng nhập tỉnh/thành phố!!!");
                        // event.preventDefault();
                        return;
                    }
                    if (note == ""){
                        alert("Vui lòng nhập ghi chú!!!");
                        // event.preventDefault();
                        return;
                    }
                    // else {
                    //     console.log("Tên: " + name + 
                    //                 ", Email: " + email + 
                    //                 ", Thành phố: " + city + 
                    //                 ", Ghi chú: " + note);
                    // }

                    console.log(`Tên: ${name}, Email: ${email}, Thành phố: ${city}, Ghi chú: ${note}`);
                });