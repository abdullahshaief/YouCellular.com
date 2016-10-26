        var password = document.getElementById("pss");
        var reTypePassword = document.getElementById("repss");

        function validatePassword() {

            if (password.value == reTypePassword.value) {
                reTypePassword.setCustomValidity('');
            }
            else {
                reTypePassword.setCustomValidity("Password didn't match ");
            }
        }

        password.onchange = validatePassword;
        reTypePassword.onkeyup = validatePassword;